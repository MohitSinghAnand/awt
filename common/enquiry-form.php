<?php
// Enquiry Form Component - ATW Travels
// This file contains all enquiry form elements
?>
 <style>
        .enquiry-buttons {
            position: fixed;
            top: 95%;
            /* Position from the top */
            right: 20px;
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

        .enq-button {
            padding: 12px;
            /* Padding for the buttons */
            border-radius: 5px;
            /* Rounded corners */
            color: #000;
            /* Text color */
            display: flex;
            /* Center icon and text */
            align-items: center;
            /* Center icon and text vertically */
            gap: 10px;
            /* Space between icon and text */
            transition: background-color 0.3s;
            /* Smooth background transition */
            font-size: 16px;
            /* Font size for text */
            text-decoration: none;
            /* Remove underline from links */
            background-color: yellow;
            /* Button background color */
        }

        .enq-button:hover {
            background-color: orange;
            /* Change background on hover */
        }
    </style>

    <div class="enquiry-buttons">
        <a href="#" class="enq-button" id="enquiryButton">
            <i class="fas fa-phone-alt"></i>
            <span class="button-text">Enquiry Now!</span>
        </a>
    </div>

    <!--! Modal structure -->
    <div id="Modalpopup" class="gt-popup-form" style="display:none; padding-top:30px; border-radius: 12px">
        <div class="gt-popup-content" style="border-radius: 12px">
            <div class="gt-popup-header" style="border-radius: 12px 12px 0px 0px">
                <span class="close">&times;</span>
                <p>Enquire Now</p>
            </div>
            <div class="gt-popup-body">
                <div class="wpforms-container wpforms-container-full" id="wpforms-28929">
                    <!-- !FORMSS -->
                    <form id="wpforms-form-28929" class="wpforms-validate wpforms-form" method="post"
                        action="contactForm.php">
                        <div class="wpforms-field-container">
                            <!-- Name Field with Icon -->
                            <div id="wpforms-28929-field_1-container" class="wpforms-field wpforms-field-text"
                                data-field-id="1">
                                <div class="input-icon">
                                    <i class="fas fa-user"></i>
                                    <input type="text" id="wpforms-28929-field_1"
                                        class="wpforms-field-large wpforms-field-required" name="name"
                                        placeholder="Name" required>
                                </div>
                            </div>
                            <!-- City Field with Icon -->
                            <div id="wpforms-28929-field_2-container" class="wpforms-field wpforms-field-text"
                                data-field-id="2">
                                <div class="input-icon">
                                    <i class="fas fa-city"></i>
                                    <input type="text" id="wpforms-28929-field_2"
                                        class="wpforms-field-large wpforms-field-required" name="city"
                                        placeholder="City of Residence" required>
                                </div>
                            </div>
                            <!-- Email Field with Icon -->
                            <div id="wpforms-28929-field_3-container" class="wpforms-field wpforms-field-email"
                                data-field-id="3">
                                <div class="input-icon">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" id="wpforms-28929-field_3"
                                        class="wpforms-field-large wpforms-field-required" name="email"
                                        placeholder="Email" required>
                                </div>
                            </div>
                            <!-- Phone Field with Icon -->
                            <div id="wpforms-28929-field_4-container" class="wpforms-field wpforms-field-phone"
                                data-field-id="4">
                                <div class="input-icon">
                                    <i class="fas fa-phone"></i>
                                    <input type="tel" id="wpforms-28929-field_4"
                                        class="wpforms-field-large wpforms-field-required wpforms-smart-phone-field"
                                        name="phone" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <!-- WhatsApp Field with Icon -->
                            <div id="wpforms-28929-field_16-container" class="wpforms-field wpforms-field-phone"
                                data-field-id="16">
                                <div class="input-icon">
                                    <i class="fab fa-whatsapp"></i>
                                    <input type="tel" id="wpforms-28929-field_16"
                                        class="wpforms-field-large wpforms-smart-phone-field" name="whatsapp"
                                        placeholder="WhatsApp">
                                </div>
                            </div>
                            <!-- Travel Destination Field with Icon -->
                            <div id="wpforms-28929-field_6-container" class="wpforms-field wpforms-field-text"
                                data-field-id="6">
                                <div class="input-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <input type="text" id="wpforms-28929-field_6"
                                        class="wpforms-field-large wpforms-field-required" name="travel"
                                        placeholder="Travel Destination" required>
                                </div>
                            </div>
                            <!-- Date of Travel Field with Icon -->
                            <div id="wpforms-28929-field_7-modal-container" class="wpforms-field wpforms-field-date-time"
                                data-field-id="7">
                                <div class="input-icon">
                                    <i class="fas fa-calendar-alt"></i>
                                    <input type="date" id="wpforms-28929-field_7-modal"
                                        class="wpforms-field-date-time-date wpforms-field-required wpforms-field-large"
                                        name="date" required>
                                </div>
                            </div>
                            <!-- No. of People Field with Icon -->
                            <div id="wpforms-28929-field_8-container"
                                class="wpforms-field wpforms-field-number wpf-num-limit" data-field-id="8">
                                <div class="input-icon">
                                    <i class="fas fa-users"></i>
                                    <input type="number" pattern="\d*" id="wpforms-28929-field_8"
                                        class="wpforms-field-large wpforms-field-required" name="people"
                                        placeholder="No. of People" required>
                                </div>
                            </div>
                            <!-- Vacation Type Field with Icon -->
                            <div id="wpforms-28929-field_9-container"
                                class="wpforms-field wpforms-field-select wpforms-field-select-style-classic"
                                data-field-id="9">
                                <div class="input-icon">
                                    <i class="fas fa-plane"></i>
                                    <select id="wpforms-28929-field_9"
                                        class="wpforms-field-large wpforms-field-required" name="vacation" required>
                                        <option value="" disabled selected>Vacation Type</option>
                                        <option value="Honeymoon">Honeymoon</option>
                                        <option value="Friends Trip">Friends Trip</option>
                                        <option value="Family Trip">Family Trip</option>
                                        <option value="Corporate">Corporate</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="wpforms-submit-container d-inline-block">
                            <button type="submit" id="wpforms-submit-28929" class="wpforms-submit gt_package_btn"
                                style="border-radius: 12px" name="submit-form">Submit</button>
                        </div>
                    </form>
                </div> <!-- .wpforms-container -->
            </div>
        </div>
    </div>

    <script>
        // Modal handling for Enquiry button
        var modal = document.getElementById("Modalpopup");
        var btn = document.getElementById("enquiryButton");
        var span = document.getElementsByClassName("close")[0];

        // Open modal on button click
        btn.onclick = function(event) {
            event.preventDefault(); // Prevent default link behavior
            modal.style.display = "block"; // Show the modal
        }

        // Close modal when close button is clicked
        span.onclick = function() {
            modal.style.display = "none"; // Hide the modal
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Show modal automatically 10 seconds after page load
        window.onload = function() {
            setTimeout(function() {
                modal.style.display = "block";
            }, 10000);
        }
    </script>
