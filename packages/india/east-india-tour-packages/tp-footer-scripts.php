<?php
// East India Tour Packages - ATW Travels
// This file contains the East India Tour Packages footer scripts
?>

<script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = true;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <script>
        (function() {
            function maybePrefixUrlField() {
                const value = this.value.trim()
                if (value !== '' && value.indexOf('http') !== 0) {
                    this.value = 'http://' + value
                }
            }

            const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
            for (let j = 0; j < urlFields.length; j++) {
                urlFields[j].addEventListener('blur', maybePrefixUrlField)
            }
        })();
    </script>
    <script>
        jQuery(document).ready(function() {
            jQuery(".phone_wpform input.wpforms-smart-phone-field").each(function() {
                jQuery(this).on("countrychange", function() {
                    var country = jQuery(this).intlTelInput("getSelectedCountryData").iso2;
                    if (country !== "in") {
                        jQuery("#wpforms-28929-field_16-container").removeClass("hidden_wa");
                        jQuery("#wpforms-28929-field_16").prop("required", true);
                        jQuery("#wpforms-28929-field_16").intlTelInput("setCountry", country);
                    } else {
                        jQuery("#wpforms-28929-field_16-container").addClass("hidden_wa");
                        jQuery("#wpforms-28929-field_16").prop("required", false);
                        var phoneNumber = jQuery(this).intlTelInput("getNumber");
                        var cleanPhoneNumber = phoneNumber.replace("+91", "");
                        jQuery("#wpforms-28929-field_4").val(cleanPhoneNumber);
                    }
                });
            });
            jQuery("form.wpforms-form").attr("autocomplete", "new-password");
            jQuery(".phone_wpform input.wpforms-smart-phone-field").attr("autocomplete", "new-password");
            jQuery(".whatsApp_number_gt input.wpforms-smart-phone-field").attr("autocomplete", "new-password");
            jQuery(".phone_wpform input.wpforms-smart-phone-field").each(function() {
                jQuery(this).on("change", function() {
                    var country = jQuery(this).intlTelInput("getSelectedCountryData").iso2;
                    if (country == "in") {
                        var phoneNumber = jQuery(this).intlTelInput("getNumber");
                        var cleanPhoneNumber = phoneNumber.replace("+91", "");

                        jQuery(this).val(cleanPhoneNumber);
                        //jQuery('input[name="wpforms[fields][4]"]').val(cleanPhoneNumber);
                        jQuery(this).addClass("removeprefinu");
                        jQuery(this).val().replace("+91", "");
                    }
                });
            });

            jQuery(".whatsApp_number_gt input.wpforms-smart-phone-field").each(function() {
                jQuery(this).on("change", function() {
                    var country = jQuery(this).intlTelInput("getSelectedCountryData").iso2;
                    if (country == "in") {
                        var phoneNumber = jQuery(this).intlTelInput("getNumber");
                        var cleanPhoneNumber = phoneNumber.replace("+91", "");

                        jQuery(this).val(cleanPhoneNumber);
                        //jQuery('input[name="wpforms[fields][4]"]').val(cleanPhoneNumber);
                        jQuery(this).addClass("removeprefinu");
                        jQuery(this).val().replace("+91", "");
                    }
                });
            });
        });
    </script>


    <script>
        jQuery(document).ready(function($) {
            $('#wpforms-submit-28929').submit(function(e) {
                // Prevent form submission until validation is complete
                e.preventDefault();
                jQuery('input[name="wpforms[fields][4]"]').val().replace("+91", "");
                var f = jQuery('input[name="wpforms[fields][4]"]').val().replace("+91", "");
                alert(f);
                // If validation passes, submit the form
                $(this).unbind('submit').submit();
            });
        });
    </script>

    <!--google lead code-->
    <script>
        jQuery(document).ready(function($) {
            //const url = '/bangalore/?gclid=CjwKCAjw0ZiiBhBKEiwA4PT9zxV10fcufxR3Z8iQInpWAi0dkWU7mZ7DrbfOTBFKJcxoAMDV8EpctxoCF-0QAvD_BwE';
            const url = window.location.href;
            const url_path = new URL(url.html);
            url_path.search = '';
            const gt_url_path = url_path.toString();
            if (window.location.href.indexOf("gclid") > -1) {
                $('.gt_source input').val("Google");
                $('.gt_page_url input').val(gt_url_path);
            } else {
                $('.gt_source input').val("Website");
                $('.gt_page_url input').val(gt_url_path);
            }
        });
    </script>

    <script src="../../https://cdn.jsdelivr.net/npm/intl-tel-input%4017.0.3/build/js/intlTelInput.js"></script>
    <div class=""><a href="tel:+919693339999"><span class="gt-click-call fas fa-phone-alt"></span></a></div>

    <div id="Modalpopup" class="gt-popup-form">
        <div class="gt-popup-content">
            <div class="gt-popup-header">
                <span class="close">&times;</span>
                <p>Enquire Now</p>
            </div>
            <div class="gt-popup-body">
                <div class="wpforms-container wpforms-container-full" id="wpforms-28929">
                    <form id="wpforms-form-28929" class="wpforms-validate wpforms-form wpforms-ajax-form" data-formid="28929" method="post" enctype="multipart/form-data" action="https://www.atwtravels.com/packages/india/east-india-tour-packages/" data-token="d873e387c137d5231cfb9920ec563e1f"><noscript class="wpforms-error-noscript">Please enable JavaScript in your browser to complete this form.</noscript>
                        <div class="wpforms-field-container">
                            <div id="wpforms-28929-field_1-container" class="wpforms-field wpforms-field-text" data-field-id="1"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-28929-field_1">Name <span class="wpforms-required-label">*</span></label><input type="text" id="wpforms-28929-field_1" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][1]" placeholder="Name" required></div>
                            <div id="wpforms-28929-field_2-container" class="wpforms-field wpforms-field-text" data-field-id="2"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-28929-field_2">City of Residence <span class="wpforms-required-label">*</span></label><input type="text" id="wpforms-28929-field_2" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][2]" placeholder="City of Residence" required></div>
                            <div id="wpforms-28929-field_3-container" class="wpforms-field wpforms-field-email" data-field-id="3"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-28929-field_3">Email <span class="wpforms-required-label">*</span></label><input type="email" id="wpforms-28929-field_3" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][3]" placeholder="Email" spellcheck="false" required></div>
                            <div id="wpforms-28929-field_4-container" class="wpforms-field wpforms-field-phone phone_wpform" data-field-id="4"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-28929-field_4">Phone Number <span class="wpforms-required-label">*</span></label><input type="tel" id="wpforms-28929-field_4" class="wpforms-field-large wpforms-field-required wpforms-smart-phone-field" data-rule-smart-phone-field="true" name="wpforms[fields][4]" placeholder="Phone Number" required></div>
                            <div id="wpforms-28929-field_16-container" class="wpforms-field wpforms-field-phone" data-field-id="16"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-28929-field_16">WhatsApp</label><input type="tel" id="wpforms-28929-field_16" class="wpforms-field-large wpforms-smart-phone-field" data-rule-smart-phone-field="true" name="wpforms[fields][16]" placeholder="WhatsApp"></div>
                            <div id="wpforms-28929-field_6-container" class="wpforms-field wpforms-field-text" data-field-id="6"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-28929-field_6">Travel Destination <span class="wpforms-required-label">*</span></label><input type="text" id="wpforms-28929-field_6" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][6]" placeholder="Travel Destination" required></div>
                            <div id="wpforms-28929-field_7-container" class="wpforms-field wpforms-field-date-time" data-field-id="7"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-28929-field_7">Date of Travel <span class="wpforms-required-label">*</span></label>
                                <div class="wpforms-datepicker-wrap"><input type="text" id="wpforms-28929-field_7" class="wpforms-field-date-time-date wpforms-datepicker wpforms-field-required wpforms-field-large" data-date-format="d/m/Y" data-disable-past-dates="1" data-input="true" name="wpforms[fields][7][date]" placeholder="Date of Travel" required><a title="Clear Date" data-clear class="wpforms-datepicker-clear" style="display:none;"></a></div>
                            </div>
                            <div id="wpforms-28929-field_8-container" class="wpforms-field wpforms-field-number wpf-num-limit" data-field-id="8"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-28929-field_8">No of People <span class="wpforms-required-label">*</span></label><input type="number" pattern="\d*" id="wpforms-28929-field_8" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][8]" placeholder="No. of People" required></div>
                            <div id="wpforms-28929-field_9-container" class="wpforms-field wpforms-field-select wpforms-field-select-style-classic" data-field-id="9"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-28929-field_9">Vacation Type <span class="wpforms-required-label">*</span></label><select id="wpforms-28929-field_9" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][9]" required="required">
                                    <option value="" class="placeholder" disabled selected='selected'>Vacation Type</option>
                                    <option value="Honeymoon">Honeymoon</option>
                                    <option value="Friends Trip">Friends Trip</option>
                                    <option value="Family Trip">Family Trip</option>
                                    <option value="Corporate">Corporate</option>
                                </select></div>
                            <div id="wpforms-28929-field_13-container" class="wpforms-field wpforms-field-hidden gt_source" data-field-id="13"><input type="hidden" id="wpforms-28929-field_13" name="wpforms[fields][13]"></div>
                            <div id="wpforms-28929-field_14-container" class="wpforms-field wpforms-field-hidden gt_page_url" data-field-id="14"><input type="hidden" id="wpforms-28929-field_14" name="wpforms[fields][14]"></div>
                        </div><!-- .wpforms-field-container -->
                        <div class="wpforms-submit-container"><input type="hidden" name="wpforms[id]" value="28929"><input type="hidden" name="wpforms[author]" value="1"><input type="hidden" name="wpforms[post_id]" value="8436"><button type="submit" name="wpforms[submit]" id="wpforms-submit-28929" class="wpforms-submit gt_package_btn" data-alt-text="Sending..." data-submit-text="Submit" aria-live="assertive" value="wpforms-submit">Submit</button><img src="../../../wp-content/plugins/wpforms/assets/images/submit-spin.svg" class="wpforms-submit-spinner" style="display: none;" width="26" height="26" alt="Loading"></div>
                    </form>
                </div> <!-- .wpforms-container -->
            </div>
        </div>
    </div>

    <script>
        var modal = document.getElementById("Modalpopup");
        var btn = document.getElementById("enquire");
        var span = document.getElementsByClassName("close")[0];
        btn.onclick = function() {
            modal.style.display = "block";
        }
        span.onclick = function() {
            modal.style.display = "none";
            document.body.classList.remove("modal-open");
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                document.body.classList.remove("modal-open");
            }
        }
        window.onload = function() {
            setTimeout(function() {
                document.getElementById('Modalpopup').style.display = 'block';
            }, 10000);
        }
    </script>

    <style>
        .st_1708052892 {
            background-image: url(../../../wp-content/uploads/2021/02/East-India.jpg) !important;
        }
    </style>
    <script type="text/html" id="wpb-modifications"></script>
    <link rel='stylesheet' id='js_composer_front-css' href='../../../wp-content/plugins/js_composer/assets/css/js_composer.minbdeb.css?ver=6.7.0' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='../../../wp-content/plugins/revslider/public/assets/css/rs6b52a.css?ver=6.6.15' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <link rel='stylesheet' id='wpforms-smart-phone-field-css' href='../../../wp-content/plugins/wpforms/assets/pro/css/fields/phone/intl-tel-input.min667d.css?ver=18.2.1' type='text/css' media='all' />
    <link rel='stylesheet' id='wpforms-classic-full-css' href='../../../wp-content/plugins/wpforms/assets/css/frontend/classic/wpforms-full.min3704.css?ver=1.8.5.3' type='text/css' media='all' />
    <link rel='stylesheet' id='wpforms-jquery-timepicker-css' href='../../../wp-content/plugins/wpforms/assets/lib/jquery.timepicker/jquery.timepicker.min34e4.css?ver=1.11.5' type='text/css' media='all' />
    <link rel='stylesheet' id='wpforms-flatpickr-css' href='../../../wp-content/plugins/wpforms/assets/lib/flatpickr/flatpickr.mina02c.css?ver=4.6.9' type='text/css' media='all' />
    <script type="text/javascript" src="../../../wp-content/themes/traveler-childtheme/js/custom_script62ea.js?ver=1706167449" id="custom-script-js"></script>
    <script type="text/javascript" src="../../../wp-content/plugins/revslider/public/assets/js/rbtools.minb52a.js?ver=6.6.15" defer async id="tp-tools-js"></script>
    <script type="text/javascript" src="../../../wp-content/plugins/revslider/public/assets/js/rs6.minb52a.js?ver=6.6.15" defer async id="revmin-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/mapbox-custom.js" id="mapbox-custom-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/bootstrap.min.js" id="bootstrap-js-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/jquery.matchHeight.js" id="match-height-js-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/fotorama/fotorama.js" id="fotorama-js-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/ion.rangeSlider/js/ion-rangeSlider/ion.rangeSlider.js" id="ion-rangeslider-js-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/moment.min.js" id="moment-js-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/daterangepicker/daterangepicker.js" id="daterangepicker-js-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/jquery.nicescroll.min.js" id="nicescroll-js-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/sweetalert2.min.js" id="sweetalert2.min-js-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/markerclusterer.js" id="markerclusterer-js-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/select2.full.min.js" id="select2.full.min-js-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/mapbox/custom.js" id="custom-mapboxjs-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/send-message-owner.js" id="send-message-owner-js-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/flickity.pkgd.min.js" id="flickity.pkgd.min-js-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/owlcarousel/owl.carousel.min.js" id="owlcarousel-js-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/jquery.mb.YTPlayer.min.js" id="mb-YTPlayer-js"></script>
    <script type="text/javascript" src="../../../../cdn.jsdelivr.net/jquery.mcustomscrollbar/3.1.3/jquery.mCustomScrollbar.concat.min.js" id="mCustomScrollbar-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/car-tranfer.js" id="car-tranfer-js-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/custom.js" id="custom-js-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/sin-tour.js" id="sin-tour-js-js"></script>
    <script type="text/javascript" src="../../../wp-content/plugins/js_composer/assets/js/dist/js_composer_front.minbdeb.js?ver=6.7.0" id="wpb_composer_front_js-js"></script>
    <script type="text/javascript" src="../../../wp-content/themes/traveler/v2/js/mapbox/filter-tours-mapbox.js" id="filter-tour-js-js"></script>
    <script type="text/javascript" defer src="../../../wp-content/plugins/mailchimp-for-wp/assets/js/forms8e83.js?ver=4.9.10" id="mc4wp-forms-api-js"></script>
    <script type="text/javascript" src="../../../wp-content/plugins/wpforms/assets/pro/lib/intl-tel-input/jquery.intl-tel-input.min667d.js?ver=18.2.1" id="wpforms-smart-phone-field-js"></script>
    <script type="text/javascript" src="../../../wp-content/plugins/wpforms/assets/lib/jquery.validate.min7e9d.js?ver=1.19.5" id="wpforms-validation-js"></script>
    <script type="text/javascript" src="../../../wp-content/plugins/wpforms/assets/lib/jquery.inputmask.minb4c5.js?ver=5.0.7-beta.29" id="wpforms-maskedinput-js"></script>
    <script type="text/javascript" src="../../../wp-content/plugins/wpforms/assets/lib/mailcheck.mincfa9.js?ver=1.1.2" id="wpforms-mailcheck-js"></script>
    <script type="text/javascript" src="../../../wp-content/plugins/wpforms/assets/lib/punycode.min8a54.js?ver=1.0.0" id="wpforms-punycode-js"></script>
    <script type="text/javascript" src="../../../wp-content/plugins/wpforms/assets/js/utils.min3704.js?ver=1.8.5.3" id="wpforms-generic-utils-js"></script>
    <script type="text/javascript" src="../../../wp-content/plugins/wpforms/assets/js/wpforms.min3704.js?ver=1.8.5.3" id="wpforms-js"></script>
    <script type="text/javascript" src="../../../wp-content/plugins/wpforms/assets/lib/flatpickr/flatpickr.mina02c.js?ver=4.6.9" id="wpforms-flatpickr-js"></script>
    <script type="text/javascript" src="../../../wp-content/plugins/wpforms/assets/lib/jquery.timepicker/jquery.timepicker.min34e4.js?ver=1.11.5" id="wpforms-jquery-timepicker-js"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpforms_settings = {
            "val_required": "This field is required.",
            "val_email": "Please enter a valid email address.",
            "val_email_suggestion": "Did you mean {suggestion}?",
            "val_email_suggestion_title": "Click to accept this suggestion.",
            "val_email_restricted": "This email address is not allowed.",
            "val_number": "Please enter a valid number.",
            "val_number_positive": "Please enter a valid positive number.",
            "val_confirm": "Field values do not match.",
            "val_checklimit": "You have exceeded the number of allowed selections: {#}.",
            "val_limit_characters": "{count} of {limit} max characters.",
            "val_limit_words": "{count} of {limit} max words.",
            "val_recaptcha_fail_msg": "Google reCAPTCHA verification failed, please try again later.",
            "val_turnstile_fail_msg": "Cloudflare Turnstile verification failed, please try again later.",
            "val_inputmask_incomplete": "Please fill out the field in required format.",
            "uuid_cookie": "1",
            "locale": "en",
            "wpforms_plugin_url": "https:\/\/www.atwtravels.com\/wp-content\/plugins\/wpforms\/",
            "gdpr": "",
            "ajaxurl": "https:\/\/www.atwtravels.com\/wp-admin\/admin-ajax.php",
            "mailcheck_enabled": "1",
            "mailcheck_domains": [],
            "mailcheck_toplevel_domains": ["dev"],
            "is_ssl": "1",
            "page_title": "East India Tour Packages",
            "page_id": "8436",
            "currency_code": "USD",
            "currency_thousands": ",",
            "currency_decimals": "2",
            "currency_decimal": ".",
            "currency_symbol": "$",
            "currency_symbol_pos": "left",
            "val_requiredpayment": "Payment is required.",
            "val_creditcard": "Please enter a valid credit card number.",
            "val_post_max_size": "The total size of the selected files {totalSize} MB exceeds the allowed limit {maxSize} MB.",
            "val_time12h": "Please enter time in 12-hour AM\/PM format (eg 8:45 AM).",
            "val_time24h": "Please enter time in 24-hour format (eg 22:45).",
            "val_time_limit": "Please enter time between {minTime} and {maxTime}.",
            "val_url": "Please enter a valid URL.",
            "val_fileextension": "File type is not allowed.",
            "val_filesize": "File exceeds max size allowed. File was not uploaded.",
            "post_max_size": "8388608",
            "val_password_strength": "A stronger password is required. Consider using upper and lower case letters, numbers, and symbols.",
            "val_phone": "Please enter a valid phone number.",
            "richtext_add_media_button": "",
            "entry_preview_iframe_styles": ["https:\/\/www.atwtravels.com\/wp-includes\/js\/tinymce\/skins\/lightgray\/content.min.css?ver=6.4.1", "index.html\/\/www.atwtravels.com\/wp-includes\/css\/dashicons.min.css?ver=6.4.1", "index.html\/\/www.atwtravels.com\/wp-includes\/js\/tinymce\/skins\/wordpress\/wp-content.css?ver=6.4.1", "https:\/\/www.atwtravels.com\/wp-content\/plugins\/wpforms\/assets\/pro\/css\/fields\/richtext\/editor-content.min.css"]
        }
        /* ]]> */
    </script>
    <script type="text/javascript">
        jQuery(function() {

            jQuery('.wpf-num-limit input').attr({
                'min': 1,
                'max': 100
            }); // Define number limits
        });
    </script>
    <script>
        jQuery('#subscribe_popup').submit(function() {
            sessionStorage.setItem("showpop", "no");
            //$.cookie("showpop", "no",{ expires: 1 });
        });
        jQuery('.close').click(function() {
            jQuery('#popup1').addClass('hide');
            sessionStorage.setItem("showpop", "no");
            //$.cookie("showpop", "no",{ expires: 1 });
        });
        jQuery(document).ready(function() {
            if (sessionStorage.getItem('showpop') == "yes" || sessionStorage.getItem('showpop') == null) {
                jQuery('#popup1').addClass('show');
            } else {
                jQuery('#popup1').addClass('hide');
            }
        });
    </script>
    <script>
        document.addEventListener('wpcf7mailsent', function(event) {
            jQuery('#popup1').addClass('hide').removeClass('show');
            sessionStorage.setItem("showpop", "no");
            // $.cookie("showpop", "no",{ expires: 1 });
        }, false);
    </script>
    <script>
        jQuery(document).ready(function($) {
            jQuery("#awards-images .popup-gallery-image").attr("target", "_blank");
            jQuery("#owl-carousal-new").owlCarousel({
                autoplay: true,
                autoplayTimeout: 4000,
                // nav:true,
                pagination: true,
                loop: true,
                autoplayHoverPause: true,
                items: 4,
                itemsDesktop: [1200, 3],
                itemsDesktopSmall: [900, 3],
                itemsTablet: [680, 2],
                itemsMobile: [520, 1]
            });
            jQuery('.st-program-list .item ').click(function() {
                jQuery('.st-program-list .item ').removeClass('active');
                jQuery(this).addClass('active');
            });

        });
    </script>
</body>
<script>
    jQuery(document).ready(function() {

        jQuery('.st-blog .wp-block-search__button').text('');

        jQuery('.mailchimp .media-object').attr('src', '../../../wp-content/uploads/2019/11/ico_email_subscribe.png');

        jQuery('.conicon').each(function() {
            jQuery(this).html('<i class="input-icon field-icon fa"><svg height="14px" width="14px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><g fill="#1a2b48"><path d="M6.347,24.003c-0.601,0-1.182-0.183-1.68-0.529c-0.261-0.181-0.489-0.403-0.68-0.658L0.15,17.7c-0.12-0.16-0.171-0.358-0.143-0.556C0.036,16.946,0.14,16.77,0.3,16.65 c0.131-0.098,0.286-0.15,0.45-0.15 c0.235,0,0.459,0.112,0.6,0.3l3.839,5.118c0.094,0.127,0.207,0.236,0.335,0.325c0.245,0.17,0.53,0.26,0.826,0.26 c0.086,0,0.173-0.008,0.259-0.023c0.381-0.068,0.712-0.281,0.933-0.599L22.636,0.32C22.775,0.12,23.005,0,23.25,0 c0.154,0,0.303,0.047,0.429,0.135c0.165,0.115,0.274,0.287,0.309,0.484c0.035,0.197-0.009,0.396-0.124,0.561L8.772,22.739 c-0.449,0.645-1.124,1.078-1.9,1.217C6.699,23.987,6.522,24.003,6.347,24.003z"></path></g></svg></i>');
        });
        jQuery('.menu-item-has-children').click(function() {
            if (jQuery(window).width() < 1200) {
                jQuery('.menu-item-has-children ul').css('display', 'none');
                var s = jQuery(this).find('i').attr('class');
                if (s == 'fa fa-angle-up') {
                    jQuery(this).find('ul').css('display', 'block');
                }
            }
        });

        var gt_menu = jQuery('#header .header');
        var stickyDiv = "sticky";
        var gt_topbar = jQuery('#topbar').height();
        jQuery(window).scroll(function() {
            var winTop = jQuery(this).scrollTop();
            if (gt_topbar == null) {
                gt_menu.addClass(stickyDiv);
                jQuery("#header").addClass("mobileTop");
            } else {
                if (winTop > gt_topbar) {
                    gt_menu.addClass(stickyDiv);
                    jQuery("#header").addClass("mobileTop");
                } else {
                    gt_menu.removeClass(stickyDiv);
                    jQuery("#header").addClass("mobileTop");
                }
            }
        });
        var pack_contact = jQuery('#booking-request');
        var pack_contFix = "fixPackContact";
        //var pack_contTop = jQuery('#booking-request').offset().top;
        jQuery(window).scroll(function() {
            var wintoppag = jQuery(this).scrollTop();
            if (wintoppag) {
                //var hri = jQuery('.st-program').offset().top + jQuery('.st-program').height();
                var maing = jQuery(this).scrollTop() + jQuery('.fixed-on-mobile').height();
                if (maing) {
                    pack_contact.removeClass('fixpackt');
                    //var tou_botdiv = jQuery('.st-program').offset().top;
                    var tou_botheigh = jQuery('.st-program').height();
                    // var totpac = ( + tou_botheigh) - jQuery('#booking-request').height();
                    //var contdiv = totpac - (jQuery('.hidecontactdetails').height() - 100);
                    //pack_contact.css('top', (contdiv - 310) + 'px');
                    //pack_contact.css('position', 'relative');
                } else {
                    pack_contact.addClass('fixpackt').css('top', 'auto');
                }
            } else {
                pack_contact.removeClass('fixpackt').css('top', 'auto');
            }
        });
    });
</script>
<script>
    //Ligthbox Issue
    jQuery(document).ready(function() {
        jQuery(".gth_awards .award-divG").each(function() {
            var ligthBox = jQuery(this).find(' img').attr('src');
            jQuery(this).find('a').attr('href', ligthBox);
        });


    });
</script>
<script>
    var url = '../../../../wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget369f.js?33695';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
        "enabled": true,
        "chatButtonSetting": {
            "backgroundColor": "#4dc247",
            "ctaText": "",
            "borderRadius": "25",
            "marginLeft": "30",
            "marginBottom": "10",
            "marginRight": "50",
            "position": "left"
        },
        "brandSetting": {
            "brandName": "ATW Travels",
            "brandSubTitle": "Typically replies within a day",
            "brandImg": "https://www.atwtravels.com/wp-content/uploads/2019/11/whatsapp_icon.jpg",
            "welcomeText": "Hi there!\nHow can I help you?",
            "messageText": "Hello, I have a question about {{page_link}}",
            "backgroundColor": "#4dc247",
            "ctaText": "Start Chat",
            "borderRadius": "5",
            "autoShow": false,
            "phoneNumber": "919693339999"
        }
    };
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
<script>
    jQuery(document).ready(function() {
        var slideIndex = 0;
        var numSlides = jQuery('.slider-images img').length;

        jQuery('.prev-button').click(function() {
            slideIndex--;
            if (slideIndex < 0) {
                slideIndex = numSlides - 1;
            }
            updateSlider();
        });

        jQuery('.next-button').click(function() {
            slideIndex++;
            if (slideIndex >= numSlides) {
                slideIndex = 0;
            }
            updateSlider();
        });

        function updateSlider() {
            var translateX = -slideIndex * 25;
            jQuery('.slider-images').css('transform', 'translateX(' + translateX + '%)');
        }

    });
</script>
<script>
    jQuery(document).ready(function() {
        jQuery('.owl-carousel-offer').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: [
                "<i class='fa fa-arrow-left'></i>",
                "<i class='fa fa-arrow-right'></i>"
            ],
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    });
</script>
<script src="../../https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<link href='../../../../group.atwtravels.com/wp-content/themes/wizi-child/style8a54.css?ver=1.0.0' rel='stylesheet'>
<style>
    #main-footer {
        display: block !important;
    }
</style>
<script>
    jQuery(document).ready(function() {
        jQuery(".bxslider").bxSlider({
            auto: true,
            pager: false,
            responsive: true,
            breakpoints: {
                480: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                },
                768: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                },
                1024: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        });
    });
</script>
