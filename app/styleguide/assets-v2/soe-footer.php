
    <footer>
        <div class="footer-question">
            DO YOU HAVE WHAT IT TAKES TO
            <span>INSPIRE THE NEXT GENERATION OF INNOVATORS?</span>
        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="footer-links">
                        <strong>REQUEST INFORMATION</strong>
                            <ul>
                                <li><a href="https://umich.tfaforms.net/218011">Ask a question. Request info. Say hello.</a></li>
                                <li><a href="http://soe.umich.edu/faqs/">FAQs</a></li>
                            </ul>
                            <strong>CURIOUS ABOUT<br>TEACHER CERTIFICATION?</strong>
                            <ul>
                                <li><a href="http://booknow.so/umsoe">Make an Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="footer-links">
                            <strong><span style="color: #ffcb05">APPLY NOW</span><br>UNDERGRADUATE PROGRAMS</strong>
                            <ul>
                                <li><a href="http://www.soe.umich.edu/information_for/prospective_students/preferred_admissions/">What is Preferred Admissions?</a></li>
                                <li><a href="http://www.soe.umich.edu/academics/bachelors_degree_programs/uete/">Elementary Teacher Certification</a></li>
                                <li><a href="http://www.soe.umich.edu/academics/bachelors_degree_programs/uste/">Secondary Teacher Certification</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="footer-links">
                            <strong><span style="color: #ffcb05">APPLY NOW</span><br>GRADUATE PROGRAMS</strong>
                            <ul>
                                <li><a href="http://www.soe.umich.edu/academics/masters_programs/">Master’s in Educational Studies</a></li>
                                <li><a href="http://www.soe.umich.edu/academics/masters_programs/elmac/">MAC/Teacher Certification</a></li>
                                <li><a href="http://www.soe.umich.edu/academics/masters_programs/he/">Master’s in Higher Education</a></li>
                                <li><a href="http://www.soe.umich.edu/academics/doctoral_programs/">Doctoral Programs</a></li>
                                <li><a href="http://www.rackham.umich.edu/prospective-students/admissions/applying">Start Your Application</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-2">

                        <div class="social-container">
                            <div class="footer-logo">
                                <a href="http://soe.umich.edu" title="School of Education Homepage"><img src="/styleguide/assets-v2/img/footer-logo.png" alt="SOE Logo"></a>
                            </div>

                            <div class="social-circle social-maize">
                                <a href="http://www.facebook.com/UM.SOE">
                                    <span class="soe-icon-facebook"></span>
                                </a>
                            </div> &nbsp;
                            <div class="social-circle social-maize">
                                <a href="http://twitter.com/UM_EdSchool">
                                    <span class="soe-icon-twitter"></span>
                                </a>
                            </div> &nbsp;
                            <div class="social-circle social-maize">
                                <a href="https://www.youtube.com/channel/UCtmPTu9tVNHifTz7Sl9dlpg">
                                    <span class="soe-icon-youtube"></span>
                                </a>
                            </div> &nbsp;
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-challenge">
            CHALLENGE INEQUALITY
            <span>INSPIRE CREATIVITY</span>
            <span>DRIVE SOCIAL CHANGE</span>
        </div>
        <div class="footer-address">
            UNIVERSITY OF MICHIGAN SCHOOL OF EDUCATION
            <address>
                610 E. University Ave. Ann Arbor, Michigan 48109 734.764.9470
                <br> &#169; 2017 Regents of The University of Michigan
            </address>
        </div>
    </footer>



    <script src="/styleguide/assets-v2/js/jquery-3.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
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