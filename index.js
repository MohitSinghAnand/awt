const express = require("express");
const axios = require("axios");
const sha256 = require("sha256");
const { v4 } = require("uuid");
require("dotenv").config();
const cors = require("cors");
const app = express();
app.use(cors());
const port = process.env.PORT || 8000;

// Middleware to parse JSON
app.use(express.json());

// Routes

app.get("/", (req, res) => {
  res.send("Server is running...");
});

app.post("/api/payment", async (req, res) => {
  const { amount } = req.body;
  console.log({ amount: amount });
  const merchantId = process.env.MERCHANT_ID;
  const baseUrl = process.env.BASE_URL;
  const redirectUrl = "http://127.0.0.1:5500/paymentSuccess.html";
  const callbackUrl = "http://127.0.0.1:5500/paymentError.html";
  const saltKey = process.env.SALT_KEY;
  const payEndPoint = "/pg/v1/pay";
  const saltIndex = 1;

  // Validation
  if (!amount) return res.status(400).json({ error: "Amount is required" });

  const userId = v4();

  // Generate a unique merchantTransactionId
  const timestamp = Date.now().toString();
  let merchantTransactionId = `MT${userId}${timestamp}`;

  // Remove any special characters except underscores and hyphens
  merchantTransactionId = merchantTransactionId.replace(/[^a-zA-Z0-9_-]/g, "");

  // Ensure the length is less than 35 characters
  if (merchantTransactionId.length > 34) {
    merchantTransactionId = merchantTransactionId.substring(0, 34);
  }

  // Create payload
  const payload = {
    merchantId,
    merchantTransactionId,
    merchantUserId: userId,
    amount: amount * 100, // Convert to smallest currency unit
    redirectUrl: `${redirectUrl}`,
    callbackUrl: `${callbackUrl}`,
    redirectMode: "REDIRECT",
    paymentInstrument: {
      type: "PAY_PAGE",
    },
  };

  console.log("payload: ", payload);

  // Encode payload to Base64
  const jsonString = JSON.stringify(payload);
  const base64EncodedPayload = Buffer.from(jsonString).toString("base64");

  // Generate checksum
  const checksum =
    sha256(base64EncodedPayload + payEndPoint + saltKey) + "###" + saltIndex;

  try {
    // Set request options for axios
    const options = {
      method: "POST",
      url: `${baseUrl}${payEndPoint}`,
      headers: {
        accept: "application/json",
        "Content-Type": "application/json",
        "X-VERIFY": checksum,
      },
      data: { request: base64EncodedPayload },
    };

    // Send request to PhonePe
    const response = await axios.request(options);

    // console.log("response data", response.data);

    return res.status(200).json(response.data);
  } catch (error) {
    console.error("Error during payment initiation:", error);
    return res.status(500).json({
      error: "Payment initiation failed",
      details: error.message,
    });
  }
});
app.get("/api/check/:MTID", async (req, res) => {
  const { MTID } = req.params;

  if (!MTID) {
    return res.status(400).json({ error: "Transaction is not found!" });
  }

  const { MERCHANT_ID, BASE_URL, SALT_KEY } = process.env;

  const saltIndex = 1;
  const checkEndPoint = "/pg/v1";

  // Generate checksum
  const checksum =
    sha256(`${checkEndPoint}/status/${MERCHANT_ID}/${MTID}` + SALT_KEY) +
    "###" +
    saltIndex;

  try {
    const options = {
      method: "GET",
      url: `${BASE_URL}${checkEndPoint}/status/${MERCHANT_ID}/${MTID}`,
      headers: {
        accept: "application/json",
        "Content-Type": "application/json",
        "X-VERIFY": checksum,
        "X-MERCHANT-ID": MERCHANT_ID,
      },
    };

    // Send request to PhonePe
    const response = await axios.request(options);

    return res.status(200).json(response.data);
  } catch (error) {
    console.error("Error during checking payment status:", error);
    return res.status(500).json({
      error: "Checking payment status failed",
      details: error.message,
    });
  }
});

app.listen(port, () => {
  console.log(`Server is running on http://localhost:${port}`);
});
