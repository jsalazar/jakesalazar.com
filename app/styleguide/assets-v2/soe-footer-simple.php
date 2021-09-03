
    <footer class="footer-simple">
        <hr>
        <div class="footer-address footer-address-simple">
            UNIVERSITY OF MICHIGAN SCHOOL OF EDUCATION
            <address>
                610 E. University Ave. Ann Arbor, Michigan 48109 734.764.9470
                <br>&copy; <?php echo date("Y"); ?> Regents of The University of Michigan
            </address>
        </div>
    </footer>



    <script src="/styleguide/assets-v2/js/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>
    <script src="/styleguide/assets-v2/js/popper.min.js"></script>
    <script src="/styleguide/assets-v2/js/bootstrap.min.js"></script>

    <script src="/styleguide/assets-v2/js/main.js"></script>
    <!-- <script src="/styleguide/assets-v2/js/vendor/underscore-min.js"></script> -->
    <?php
        // INJECT LOCAL SITE JAVASCRIPT IF NECESSARY
        $localJS = $_SERVER["DOCUMENT_ROOT"].$HTML->siteDirectory.'js/local.js';

        if (is_file($localJS)) {
            echo '<script src="'.$HTML->siteDirectory.'js/local.js'.'"></script>';
        }
    ?>

    <!-- Google Analytics: -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-19128060-1');ga('send','pageview');
    </script>

</body>
</html>