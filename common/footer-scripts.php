<?php
// Footer Scripts Component - ATW Travels
// This file contains all footer scripts
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
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input%4017.0.3/build/js/intlTelInput.js"></script>
    

    <script type="text/html" id="wpb-modifications"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:400%7CKristi:400%7CPlayfair+Display:500%2C700%7CCabin:400&amp;display=swap"
        rel="stylesheet" property="stylesheet" media="all" type="text/css">

    <script>
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");
                console.log("To fix this, you can:");
                console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");
                console.log("2. Find the double jQuery.js inclusion and remove it");
                return "Double Included jQuery Library";
            }
        }
    </script>
    <link rel='stylesheet' id='vc_font_awesome_5_shims-css'
        href='wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/v4-shims.minbdeb.css?ver=6.7.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='vc_font_awesome_5-css'
        href='wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/all.minbdeb.css?ver=6.7.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='wp-content/plugins/revslider/public/assets/css/rs6b52a.css?ver=6.6.15' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rev_slider_1_1_wrapper .wanderers.tp-bullets {}

        #rev_slider_1_1_wrapper .wanderers .tp-bullet {
            width: 8px;
            height: 8px;
            position: absolute;
            border-radius: 50%;
            cursor: pointer;
            background-color: rgb(#b7b7b7);
            box-sizing: border-box;
            -webkit-transition: background-color 175ms cubic-bezier(.18, .43, .58, 1), border 175ms cubic-bezier(.18, .43, .58, 1);
            -moz-transition: background-color 175ms cubic-bezier(.18, .43, .58, 1), border 175ms cubic-bezier(.18, .43, .58, 1);
            transition: background-color 175ms cubic-bezier(.18, .43, .58, 1), border 175ms cubic-bezier(.18, .43, .58, 1)
        }

        #rev_slider_1_1_wrapper .wanderers .tp-bullet.rs-touchhover,
        #rev_slider_1_1_wrapper .wanderers .tp-bullet.selected {
            background-color: rgb(#f99914)
        }
    </style>
    <link rel='stylesheet' id='wpforms-smart-phone-field-css'
        href='wp-content/plugins/wpforms/assets/pro/css/fields/phone/intl-tel-input.min667d.css?ver=18.2.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wpforms-jquery-timepicker-css'
        href='wp-content/plugins/wpforms/assets/lib/jquery.timepicker/jquery.timepicker.min34e4.css?ver=1.11.5'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wpforms-flatpickr-css'
        href='wp-content/plugins/wpforms/assets/lib/flatpickr/flatpickr.mina02c.css?ver=4.6.9' type='text/css'
        media='all' />
    <script type="text/javascript" src="wp-content/themes/traveler-childtheme/js/custom_script62ea.js?ver=1706167449"
        id="custom-script-js"></script>
    <script type="text/javascript" src="wp-content/plugins/revslider/public/assets/js/rbtools.minb52a.js?ver=6.6.15"
        defer async id="tp-tools-js"></script>
    <script type="text/javascript" src="wp-content/plugins/revslider/public/assets/js/rs6.minb52a.js?ver=6.6.15" defer
        async id="revmin-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/mapbox-custom.js"
        id="mapbox-custom-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/bootstrap.min.js"
        id="bootstrap-js-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/jquery.matchHeight.js"
        id="match-height-js-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/fotorama/fotorama.js"
        id="fotorama-js-js"></script>
    <script type="text/javascript"
        src="wp-content/themes/traveler/v2/js/ion.rangeSlider/js/ion-rangeSlider/ion.rangeSlider.js"
        id="ion-rangeslider-js-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/moment.min.js" id="moment-js-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/daterangepicker/daterangepicker.js"
        id="daterangepicker-js-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/jquery.nicescroll.min.js"
        id="nicescroll-js-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/sweetalert2.min.js"
        id="sweetalert2.min-js-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/markerclusterer.js"
        id="markerclusterer-js-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/select2.full.min.js"
        id="select2.full.min-js-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/mapbox/custom.js"
        id="custom-mapboxjs-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/send-message-owner.js"
        id="send-message-owner-js-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/flickity.pkgd.min.js"
        id="flickity.pkgd.min-js-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/owlcarousel/owl.carousel.min.js"
        id="owlcarousel-js-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/jquery.mb.YTPlayer.min.js"
        id="mb-YTPlayer-js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/jquery.mcustomscrollbar/3.1.3/jquery.mCustomScrollbar.concat.min.js"
        id="mCustomScrollbar-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/car-tranfer.js"
        id="car-tranfer-js-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/custom.js" id="custom-js-js"></script>
    <script type="text/javascript" src="wp-content/themes/traveler/v2/js/sin-tour.js" id="sin-tour-js-js"></script>
    <script type="text/javascript" src="wp-content/plugins/carousel-slider/assets/js/frontendac31.js?ver=2.2.4"
        id="carousel-slider-frontend-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/js_composer/assets/js/dist/js_composer_front.minbdeb.js?ver=6.7.0"
        id="wpb_composer_front_js-js"></script>
    <script type="text/javascript" defer src="wp-content/plugins/mailchimp-for-wp/assets/js/forms8e83.js?ver=4.9.10"
        id="mc4wp-forms-api-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/wpforms/assets/pro/lib/intl-tel-input/jquery.intl-tel-input.min667d.js?ver=18.2.1"
        id="wpforms-smart-phone-field-js"></script>
    <script type="text/javascript" src="wp-content/plugins/wpforms/assets/lib/jquery.validate.min7e9d.js?ver=1.19.5"
        id="wpforms-validation-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/wpforms/assets/lib/jquery.inputmask.minb4c5.js?ver=5.0.7-beta.29"
        id="wpforms-maskedinput-js"></script>
    <script type="text/javascript" src="wp-content/plugins/wpforms/assets/lib/mailcheck.mincfa9.js?ver=1.1.2"
        id="wpforms-mailcheck-js"></script>
    <script type="text/javascript" src="wp-content/plugins/wpforms/assets/lib/punycode.min8a54.js?ver=1.0.0"
        id="wpforms-punycode-js"></script>
    <script type="text/javascript" src="wp-content/plugins/wpforms/assets/js/utils.min3704.js?ver=1.8.5.3"
        id="wpforms-generic-utils-js"></script>
    <script type="text/javascript" src="wp-content/plugins/wpforms/assets/js/wpforms.min3704.js?ver=1.8.5.3"
        id="wpforms-js"></script>
    <script type="text/javascript" src="wp-content/plugins/wpforms/assets/lib/flatpickr/flatpickr.mina02c.js?ver=4.6.9"
        id="wpforms-flatpickr-js"></script>
    <script type="text/javascript"
        src="wp-content/plugins/wpforms/assets/lib/jquery.timepicker/jquery.timepicker.min34e4.js?ver=1.11.5"
        id="wpforms-jquery-timepicker-js"></script>
    <script id="rs-initialisation-scripts">
        var tpj = jQuery;

        var revapi1;

        if (window.RS_MODULES === undefined) window.RS_MODULES = {};
        if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
        RS_MODULES.modules["revslider11"] = {
            once: RS_MODULES.modules["revslider11"] !== undefined ? RS_MODULES.modules["revslider11"].once : undefined,
            init: function() {
                window.revapi1 = window.revapi1 === undefined || window.revapi1 === null || window.revapi1.length === 0 ? document.getElementById("rev_slider_1_1") : window.revapi1;
                if (window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length == 0) {
                    window.revapi1initTry = window.revapi1initTry === undefined ? 0 : window.revapi1initTry + 1;
                    if (window.revapi1initTry < 20) requestAnimationFrame(function() {
                        RS_MODULES.modules["revslider11"].init()
                    });
                    return;
                }
                window.revapi1 = jQuery(window.revapi1);
                if (window.revapi1.revolution == undefined) {
                    revslider_showDoubleJqueryError("rev_slider_1_1");
                    return;
                }
                revapi1.revolutionInit({
                    revapi: "revapi1",
                    DPR: "dpr",
                    sliderLayout: "fullwidth",
                    duration: 3500,
                    visibilityLevels: "1240,1024,778,480",
                    gridwidth: "1300,1150,600,300",
                    gridheight: "785,607,362,181",
                    lazyType: "smart",
                    perspective: 600,
                    perspectiveType: "local",
                    editorheight: "785,607,890,181",
                    responsiveLevels: "1240,1024,778,480",
                    progressBar: {
                        disableProgressBar: true
                    },
                    navigation: {
                        mouseScrollNavigation: false,
                        wheelCallDelay: 1000,
                        onHoverStop: false,
                        arrows: {
                            enable: true,
                            style: 1002,
                            hide_onmobile: true,
                            hide_under: 1051,
                            left: {
                                container: "layergrid",
                                h_offset: 40
                            },
                            right: {
                                container: "layergrid",
                                h_offset: 43
                            }
                        },
                        bullets: {
                            enable: true,
                            tmp: "",
                            style: "wanderers",
                            hide_onmobile: true,
                            hide_under: 600,
                            hide_over: 1050,
                            v_offset: 25
                        }
                    },
                    parallax: {
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                        type: "mouse"
                    },
                    fanim: {
                        in: {
                            "o": 0
                        },
                        out: {
                            "a": false
                        },
                        speed: 500
                    },
                    viewPort: {
                        global: true,
                        globalDist: "-200px",
                        enable: false,
                        visible_area: "20%"
                    },
                    fallbacks: {
                        allowHTML5AutoPlayOnAndroid: true
                    },
                });

            }
        } // End of RevInitScript

        if (window.RS_MODULES.checkMinimal !== undefined) {
            window.RS_MODULES.checkMinimal();
        };
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
    <script>
        jQuery(document).ready(function() {

            jQuery('.st-blog .wp-block-search__button').text('');

            jQuery('.mailchimp .media-object').attr('src', 'wp-content/uploads/2019/11/ico_email_subscribe.png');

            jQuery('.conicon').each(function() {
                jQuery(this).html('<i class="input-icon field-icon fa"><svg height="14px" width="14px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"><g fill="#1a2b48"><path d="M6.347,24.003c-0.601,0-1.182-0.183-1.68-0.529c-0.261-0.181-0.489-0.403-0.68-0.658L0.15,17.7c-0.12-0.16-0.171-0.358-0.143-0.556C0.036,16.946,0.14,16.77,0.3,16.65 c0.131-0.098,0.286-0.15,0.45-0.15 c0.235,0,0.459,0.112,0.6,0.3l3.839,5.118c0.094,0.127,0.207,0.236,0.335,0.325c0.245,0.17,0.53,0.26,0.826,0.26 c0.086,0,0.173-0.008,0.259-0.023c0.381-0.068,0.712-0.281,0.933-0.599L22.636,0.32C22.775,0.12,23.005,0,23.25,0 c0.154,0,0.303,0.047,0.429,0.135c0.165,0.115,0.274,0.287,0.309,0.484c0.035,0.197-0.009,0.396-0.124,0.561L8.772,22.739 c-0.449,0.645-1.124,1.078-1.9,1.217C6.699,23.987,6.522,24.003,6.347,24.003z"></path></g></svg></i>');
            });
            // Mobile dropdown toggle - only toggle when clicking parent, not child links
            jQuery('.menu-item-has-children').click(function(e) {
                if (jQuery(window).width() < 1200) {
                    var $this = jQuery(this);
                    var $target = jQuery(e.target);
                    
                    // If clicking on a child link, allow normal navigation
                    if ($target.closest('ul.sub-menu, ul.menu-dropdown').length) {
                        return; // Let the link navigate normally
                    }
                    
                    // If clicking on the parent link/text or the icon, toggle the menu
                    if ($target.is('a') || $target.closest('a').length || $target.is('i.fa')) {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        var $submenu = $this.find('> ul.sub-menu, > ul.menu-dropdown').first();
                        var $icon = $this.find('> i.fa, > a > i.fa').first();
                        
                        // Toggle current submenu
                        if ($submenu.is(':visible')) {
                            $submenu.css('display', 'none');
                            $icon.removeClass('fa-angle-up').addClass('fa-angle-down');
                        } else {
                            // Close sibling submenus at the same level
                            $this.siblings('.menu-item-has-children').find('> ul.sub-menu, > ul.menu-dropdown').css('display', 'none');
                            $this.siblings('.menu-item-has-children').find('> i.fa, > a > i.fa').removeClass('fa-angle-up').addClass('fa-angle-down');
                            
                            // Open current submenu
                            $submenu.css('display', 'block');
                            $icon.removeClass('fa-angle-down').addClass('fa-angle-up');
                        }
                    }
                }
            });

            // Mobile menu main toggle handler
            jQuery(document).on('click', '.toggle-menu', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                var $menu = jQuery('#st-main-menu');
                var isOpen = $menu.hasClass('open');
                
                if (isOpen) {
                    $menu.removeClass('open');
                    jQuery('body').css('overflow', '');
                } else {
                    $menu.addClass('open');
                    jQuery('body').css('overflow', 'hidden');
                }
            });
            
            // Back button to close mobile menu
            jQuery(document).on('click', '.back-menu', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                jQuery('#st-main-menu').removeClass('open');
                jQuery('body').css('overflow', '');
            });
            
            // Close menu when clicking outside
            jQuery(document).on('click', function(e) {
                if (jQuery('#st-main-menu').hasClass('open')) {
                    if (!jQuery(e.target).closest('#st-main-menu').length && !jQuery(e.target).closest('.toggle-menu').length) {
                        jQuery('#st-main-menu').removeClass('open');
                        jQuery('body').css('overflow', '');
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
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget369f.js?33695';
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
                "brandImg": "https://atwtravels.com/wp-content/uploads/2019/11/whatsapp_icon.jpg",
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
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <link href='https://group.atwtravels.com/wp-content/themes/wizi-child/style8a54.css?ver=1.0.0' rel='stylesheet'>
    <style>
        #main-footer {
            display: block !important;
        }

        /* Date input styling to match form design */
        input[type="date"] {
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            font-family: inherit;
            background-color: #fff;
            color: #333;
            transition: border-color 0.3s ease;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="date"]:focus {
            outline: none;
            border-color: #f99914;
            box-shadow: 0 0 0 2px rgba(249, 153, 20, 0.2);
        }

        input[type="date"]:hover {
            border-color: #f99914;
        }

        /* Ensure date input works well with input-icon styling */
        .input-icon input[type="date"] {
            padding-left: 40px;
        }

        /* Style the calendar picker indicator */
        input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;
            color: #f99914;
            font-size: 18px;
            background: transparent;
            border: none;
            padding: 4px;
        }

        input[type="date"]::-webkit-calendar-picker-indicator:hover {
            color: #1a2b48;
            background: rgba(249, 153, 20, 0.1);
            border-radius: 3px;
        }

        /* Ensure all parts of date input are clickable */
        input[type="date"]::-webkit-datetime-edit {
            cursor: pointer;
        }

        input[type="date"]::-webkit-datetime-edit-fields-wrapper {
            cursor: pointer;
        }

        input[type="date"]::-webkit-datetime-edit-text {
            cursor: pointer;
        }

        input[type="date"]::-webkit-datetime-edit-month-field,
        input[type="date"]::-webkit-datetime-edit-day-field,
        input[type="date"]::-webkit-datetime-edit-year-field {
            cursor: pointer;
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

            // Ensure date picker opens on click
            jQuery('input[type="date"]').on('click', function() {
                this.showPicker();
            });

            // Also trigger on focus for better accessibility
            jQuery('input[type="date"]').on('focus', function() {
                this.showPicker();
            });
        });
    </script>
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/www.atwtravels.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.1" } };
        /*! This file is auto-generated */
        !function (i, n) { var o, s, e; function c(e) { try { var t = { supportTests: e, timestamp: (new Date).valueOf() }; sessionStorage.setItem(o, JSON.stringify(t)) } catch (e) { } } function p(e, t, n) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data), r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)); return t.every(function (e, t) { return e === r[t] }) } function u(e, t, n) { switch (t) { case "flag": return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff") }return !1 } function f(e, t, n) { var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"), a = r.getContext("2d", { willReadFrequently: !0 }), o = (a.textBaseline = "top", a.font = "600 32px Arial", {}); return e.forEach(function (e) { o[e] = t(a, e, n) }), o } function t(e) { var t = i.createElement("script"); t.src = e, t.defer = !0, i.head.appendChild(t) } "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = { everything: !0, everythingExceptFlag: !0 }, e = new Promise(function (e) { i.addEventListener("DOMContentLoaded", e, { once: !0 }) }), new Promise(function (t) { var n = function () { try { var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() - e.timestamp < 604800 && "number" == typeof e.supportTests.length) return "i" === e.supportTests && "i" === s || "i" === e.supportTests && "i" === s || "i" === e.supportTests && "i" === s || s.every(function (t, n) { return e.supportTests[n] === t }) } catch (e) { } return !1 }(); if (!n) { var a = function () { try { var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() - e.timestamp < 604800 && "number" == typeof typeof e.supportTests && "flag" === e.supportTests) return !1 } catch (e) { } return !0 }(); a && (f(s, c, u), "loading" === i.readyState ? (i.addEventListener("DOMContentLoaded", n = function () { var n; for (n = 0; n < e.length; n++)e[n](); e = [] }, l = !1), e.push(n)) : Array.isArray(e) ? new Promise(function (e) { i.addEventListener("DOMContentLoaded", e, { once: !0 }) }).then(function () { var e, n; for (e = 0; e < s.length; e++)n = s[e], f([n], c, u) }) : new Promise(function (e) { i.addEventListener("DOMContentLoaded", e, { once: !0 }) }).then(function () { var e, n; for (e = 0; e < s.length; e++)n = s[e], f([n], c, u) })) } t() }), t.then(function (e) { n.supports = e, n.supports.everything ? (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag || !e.flag, s = new RegExp("(\\s| ^)wp - emoji(\\s|$)", "g"), a = i.querySelectorAll("img[alt='']"), a.forEach(function (e) { e.alt = e.alt || "", e.classList.remove("wp-emoji"), e.className = e.className.replace(s, " ") })) : n.supports.everythingExceptFlag && (s = new RegExp("(\\s|^)wp-emoji-flag(\\s|$)", "g"), a = i.querySelectorAll("img[alt='']"), a.forEach(function (e) { e.alt = e.alt || "", e.classList.remove("wp-emoji-flag"), e.className = e.className.replace(s, " ") })) })) }(window, document);
        /* ]]> */
    </script>
