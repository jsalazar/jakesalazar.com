    <main class="soedu-main-content">
        <!-- hide on screens smaller than md -->
        <div id="main-intro-photo" class="d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="main-intro-header">

                            <!-- SOE MAIN TITLE -->
                            <!-- <h1><?php echo $HTML->pageTitle; ?></h1> -->

<?php
// INJECT LOCAL SITE JAVASCRIPT IF NECESSARY
$localBGJS = $_SERVER["DOCUMENT_ROOT"].$HTML->siteDirectory.'js/local-bg-photos.js';

if (is_file($localBGJS)) {
    echo '<script src="'.$HTML->siteDirectory.'js/local-bg-photos.js'.'"></script>';
}
?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-heading">
            <div class="main-heading-border">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="main-header">

                                <!-- SOE MAIN TITLE display on mobile only -->
                                <h1 class=""><?php echo $HTML->pageTitle; ?></h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                    // BREADCRUMBS
                    include $_SERVER["DOCUMENT_ROOT"].'/styleguide/assets-v2/bread-crumbs-general.php';
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <!-- SOE MAIN NAVIGATION -->
                    <?php include $HTML->pageNavigation; ?>
                </div>
                <div class="col-md-1 d-none d-lg-block">
                    <div class="main-body-border soe-border-right align-self-stretch"></div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="main-body clearfix">
                        <!-- SOE MAIN BODY -->
                        <?php include $HTML->pageBody; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>