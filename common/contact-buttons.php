<?php
// Contact Buttons Component - ATW Travels
// This file contains all contact buttons
?>

<style>
        @keyframes swing {
            0% {
                transform: rotate(0deg);
            }

            20% {
                transform: rotate(10deg);
                /* Move to the right */
            }

            40% {
                transform: rotate(-10deg);
                /* Move to the left */
            }

            60% {
                transform: rotate(5deg);
                /* Move back to the right */
            }

            80% {
                transform: rotate(-5deg);
                /* Move slightly to the left */
            }

            100% {
                transform: rotate(0deg);
                /* Return to center */
            }
        }

        .contact-buttons {
            position: fixed;
            top: 90%;
            /* Position from the top */
            left: 20px;
            /* Adjust horizontal position */
            transform: translateY(-50%);
            /* Center vertically */
            z-index: 1000;
            /* Keep above other content */
            display: flex;
            flex-direction: column;
            /* Stack buttons vertically */
            gap: 10px;
            /* Space between buttons */
        }

        .whatsapp-button,
        .call-button,
        .info-button,
        .support-button {
            padding: 12px;
            /* Padding for the buttons */
            border-radius: 5px;
            /* Rounded corners */
            color: #fff;
            /* Text color */
            display: flex;
            /* Center icon and text */
            align-items: center;
            /* Center icon and text vertically */
            gap: 10px;
            /* Space between icon and text */
            transition: background-color 0.3s, transform 0.3s;
            /* Smooth background transition and swing */
            font-size: 16px;
            /* Font size for text */
            text-decoration: none;
            /* Remove underline from links */
        }

        .whatsapp-button {
            background-color: #25D366;
            /* WhatsApp green */
        }

        .call-button {
            background-color: #007BFF;
            /* Bootstrap primary blue */
        }

        .whatsapp-button:hover {
            background-color: #1DA848;
            /* Darker green on hover */
            animation: swing 0.5s;
            /* Swing animation on hover */
        }

        .call-button:hover {
            background-color: #0056b3;
            /* Darker blue on hover */
            animation: swing 0.5s;
            /* Swing animation on hover */
        }
    </style>
    <div class="contact-buttons">
        <a href="https://wa.me/919693339999" class="whatsapp-button" target="_blank">
            <i class="fab fa-whatsapp"></i>
            <!--<span class="button-text">Whatsapp</span>-->
        </a>
        <a href="tel:+919693339999" class="call-button">
            <i class="fas fa-phone-alt"></i>
            <!--<span class="button-text">Call Now!</span>-->
        </a>
    </div>