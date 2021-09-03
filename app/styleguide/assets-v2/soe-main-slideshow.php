    <main class="soedu-main-content">
        <div class="main-heading">
            <div class="main-heading-border">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="main-header">
                                <!-- SOE MAIN TITLE -->
                                <h1><?php echo $HTML->pageTitle; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-md-1 d-none d-none d-lg-block">
                    <div class="main-body-border soe-border-right align-self-stretch"></div>
                </div>

                <div class="col-12 col-md-10">
                    <div class="main-body clearfix">
                        <!-- SOE MAIN BODY -->
                        <?php include $HTML->pageBody; ?>
                    </div>
                </div>

                <div class="col-md-1 d-none d-none d-lg-block">
                    <div class="main-body-border soe-border-left align-self-stretch"></div>
                </div>

            </div>
        </div>
    </main>