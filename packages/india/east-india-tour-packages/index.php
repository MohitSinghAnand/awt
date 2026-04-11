<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>East India Tour Packages</title>
    <?php include 'tp-meta-tags.php'; ?>
    <?php include 'tp-other-scripts.php'; ?>

</head>

<body class="page-template page-template-template-tour-search page-template-template-tour-search-php page page-id-8436 page-parent page-child parent-pageid-10468  st-header-1 wide menu_style1 topbar_position_default search_enable_preload wpb-js-composer js-comp-ver-6.7.0 vc_responsive">
    <?php include '../../../common/navbar.php'; ?>

    <div id="st-content-wrapper" class="search-result-page st-tours">
    <?php include 'tp-banner.php'; ?>
        <div class="container">
            <div class="st-hotel-result tour-top-search test">

                <div id="modern-search-result" class="modern-search-result">
                    
                    <!-- START OF ROW WRAPPER DIV -->
                    <div class="row row-wrapper">
                        <!-- START OF TOUR CARD 1 -->
                        <?php
                        for ($i = 1; $i <= 20; $i++) {
                            include 'tp-card.php';
                        }
                        ?>
                        <!-- END OF TOUR CARD 1 -->
                        
                    </div>
                    <!-- END OF ROW WRAPPER DIV -->

                </div>

             
            </div>
          
        </div>
    </div>
    
    <?php include 'mailchimp.php'; ?>

    <?php include '../../../common/footer.php'; ?>
   
    <div class="container mobile-sticky-footer">
    </div>
    <?php include 'tp-footer-scripts.php'; ?>

</body>
</html>