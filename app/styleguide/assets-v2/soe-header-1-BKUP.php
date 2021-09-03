<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>School of Education - University of Michigan</title>
        <meta name="description" content="The University of Michigan School of Education focuses on the study and improvement of teaching and learning, as well as the interactions, sense-making, and dynamics that shape teaching and learning.">
        <meta name="Keywords" content="teacher education, preferred admit, education, teacher, teaching, teacher certification, teaching certificate, administrator certification, become a teacher">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->

        <link rel="stylesheet" href="/styleguide/assets-v2/css/bootstrap.min.css">
        <link rel="stylesheet" href="/styleguide/assets-v2/css/main.css">
        <?php
        // INJECT LOCAL SITE CSS IF NECESSARY
        $localCSS = $_SERVER["DOCUMENT_ROOT"].$HTML->siteDirectory.'css/local.css';

        if (is_file($localCSS)) {
            echo '<link rel="stylesheet" href="'.$HTML->siteDirectory.'css/local.css'.'">';
        }
        ?>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,600,700,700i,900" rel="stylesheet">
    </head>
    <body>
    <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/?locale=en">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- hide on screens smaller than lg -->
    <div class="d-none d-lg-block">
    <ul class="nav justify-content-center audience-nav">
    <!-- <li class="nav-item"> <a class="nav-link active" href="#">Active</a> </li> -->
    <li class="nav-item"><a class="nav-link" href="http://soe.umich.edu/information_for/prospective_students/">Prospective Students</a></li>
    <li class="nav-item"><a class="nav-link" href="http://soe.umich.edu/information_for/current_soe_students/">Current Students</a></li>
    <!-- <li class="nav-item"><a class="nav-link" href="http://soe.umich.edu/information_for/faculty_staff/">Faculty & Staff</a></li> -->
    <li class="nav-item"><a class="nav-link" href="http://soe.umich.edu/information_for/alumni_friends/">Alumni</a></li>
    <li class="nav-item"><a class="nav-link" href="https://leadersandbest.umich.edu/find/#!/scu/soe">Giving</a></li>
    <li class="nav-item"><a class="nav-link" href="http://soe.umich.edu/information_for/prospective_students/">Apply</a></li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Quicklinks</a>
        <div class="dropdown-menu audience-nav-dropdown">
          <a class="dropdown-item" href="http://soe.umich.edu/departments_services/services/">Service Request</a>
          <a class="dropdown-item" href="http://soe.umich.edu/departments_services/career_services/edworks/">EdWorks Login</a>
          <a class="dropdown-item" href="http://soe.umich.edu/magazine/">Michigan Education Magazine</a>

          <a class="dropdown-item" href="https://apps.soe.umich.edu/forms/room-reservation/">Room Reservations</a>
          <a class="dropdown-item" href="http://soe.umich.edu/rooms/">Room Descriptions</a>

          <a class="dropdown-item" href="https://education.mivideo.it.umich.edu/">Video Collection</a>
          <a class="dropdown-item" href="http://soe.umich.edu/about/floor_plans/">Floor Plans</a>
          <a class="dropdown-item" href="http://soe.umich.edu/faqs/">FAQs</a>

          <a class="dropdown-item" href="https://wolverineaccess.umich.edu/">Wolverine Access</a>
          <a class="dropdown-item" href="https://mcommunity.umich.edu/">MCommunity</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://apps.soe.umich.edu/">Intranet</a>
        </div>
      </li>
    </ul>
    </div>

    <header class="soedu-main-header">
        <a class="soedu-logo soe-logo-m-soe" href="http://soe.umich.edu/"></a>

        <ul class="soedu-header-buttons">
            <li><a class="soedu-search-trigger" href="#soedu-search">Search<span></span></a></li>
            <li><a class="soedu-nav-trigger" href="#soedu-primary-nav">Menu<span></span></a></li>
        </ul> <!-- soedu-header-buttons -->
    </header>


    <div class="soedu-overlay"></div>

    <nav class="soedu-nav">
        <ul id="soedu-primary-nav" class="soedu-primary-nav is-fixed">
            <li class="has-children">
                <a href="http://soe.umich.edu/">About Us</a>

                <ul class="soedu-secondary-nav is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li class="see-all d-md-none"><a href="">About Us</a></li>
                    <li><a href="http://soe.umich.edu/news_events/"><i class="material-icons md-32 align-text-top">event_note</i> News & Events</a>
                        <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="http://soe.umich.edu/news_events/news/">News</a></li>
                                <li><a href="http://soe.umich.edu/news_events/events/">Events</a></li>
                                <li><a href="http://soe.link/soe-news">Submit News</a></li>
                                <li><a href="http://soe.link/soe-events">Submit an Event</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="http://soe.umich.edu/"><i class="material-icons md-32 align-text-top">language</i> Ranking & Demographics</a>
                        <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="http://soe.umich.edu/information_for/prospective_students/">Apply Now</a></li>
                                <li><a href="http://soe.umich.edu/departments_services/academic_departments/center_for_the_study_of_higher_and_postsecondary_education/">#1 Ranked Higher Ed </a></li>
                                <li><a href="http://soe.umich.edu/academics/teacher-administrator-certification/">#2 Ranked Teacher Certification</a></li>
                                <li><a href="http://soe.umich.edu/teacher-education-preferred-admit/">Teacher Education Preferred Admission</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="http://soe.umich.edu/about/maps_and_directions/"><i class="material-icons md-32 align-text-top">map</i> Floor Plans, Maps, Parking</a>
                        <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="http://soe.umich.edu/about/floor_plans/">Floor Plans</a></li>
                                <li><a href="http://soe.umich.edu/meeting_classroom_reservations/">Room Reservations</a></li>
                                <li><a href="http://soe.umich.edu/rooms/">Room Descriptions</a></li>
                                <li><a href="https://maps.studentlife.umich.edu/">Central Campus Map</a></li>
                                <li><a href="https://ltp.umich.edu/parking/">Parking Overview</a></li>
                                <li><a href="https://maps.studentlife.umich.edu/parking">Parking Map</a></li>
                                <li><a href="http://soe.umich.edu/departments_services/offices/facilities/">Facilities Office</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="http://soe.umich.edu/departments_services/services/"><i class="material-icons md-32 align-text-top">perm_phone_msg</i> Service Requests</a>
                        <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="http://soe.umich.edu/departments_services/services/computing_and_network_help_request/">Computing & Network Help Request</a></li>
                                <li><a href="http://soe.umich.edu/meeting_classroom_reservations/">Room Reservations</a></li>
                                <li><a href="mailto:soe.communications@umich.edu">Design, Writing, Editing, and Photography Requests</a></li>
                                <li><a href="mailto:soe.communications@umich.edu">Website & Digital Sign Requests</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="http://soe.umich.edu/diversity/"> <i class="material-icons md-32 align-text-top">bubble_chart</i> Diversity at SOE</a>
                        <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="http://soe.umich.edu/diversity/SOE-Diversity-Statement-And-Plan.pdf">Strategic Plan</a></li>
                                <li><a href="http://soe.umich.edu/diversity/tell-us-how-things-are-going/">Tell Us How Things Are Going</a></li>
                                <li><a href="https://diversity.umich.edu/">Diversity, Equity & Inclusion at U-M</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>

            <li class="has-children">
                <a href="http://soe.umich.edu/">Who We Are</a>

                <ul class="soedu-secondary-nav is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li class="see-all d-md-none"><a href="">Who Are We</a></li>
                    <li><a href="http://soe.umich.edu/information_for/current_soe_students/"><i class="material-icons md-32 align-text-top">group</i> Students</a></li>
                    <li><a href="http://soe.umich.edu/people/staff/"><i class="material-icons md-32 align-text-top">supervisor_account</i> Staff</a></li>
                    <li><a href="http://soe.umich.edu/people/faculty/"><i class="material-icons md-32 align-text-top">school</i> Faculty</a></li>
                    <li><a href="http://soe.umich.edu/people/directory/"><i class="material-icons md-32 align-text-top">portrait</i> Directory</a></li>
                    <li><a href="http://soe.umich.edu/about/leadership/"><i class="material-icons md-32 align-text-top">account_balance</i> Leadership</a>
                        <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="http://soe.umich.edu/files/school-organizational-chart.pdf">School Organizational Chart</a></li>
                                <li><a href="http://soe.umich.edu/departments_services/committees/program_chairs_and_associate_deans/">Program Chairs and Associate Deans</a></li>
                                <li><a href="http://soe.umich.edu/departments_services/committees/executive_committee/">Executive Committee</a></li>
                                <li><a href="http://soe.umich.edu/departments_services/committees/directors_cabinet/">Directors Cabinet</a></li>
                                <li><a href="http://soe.umich.edu/contact_dean_anonymously/">Contact SOE Dean Anonymously</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="http://soe.umich.edu/departments_services/"><i class="material-icons md-32 align-text-top">dashboard</i> Offices & Departments</a>
                        <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="http://soe.umich.edu/departments_services/academic_departments/">Academic Departments</a></li>
                                <li><a href="http://soe.umich.edu/departments_services/offices/">Offices</a></li>
                                <li><a href="http://soe.umich.edu/departments_services/forms_guidelines/">Forms & Guidelines</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="http://soe.umich.edu/departments_services/committees/"><i class="material-icons md-32 align-text-top">group_work</i> Committees</a>
                        <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="http://soe.umich.edu/departments_services/committees/promotion_and_tenure_committee/">Promotion & Tenure</a></li>
                                <li><a href="http://soe.umich.edu/departments_services/committees/graduate_affairs_committee/">Graduate Affairs</a></li>
                                <!-- <li><a href="http://soe.umich.edu/departments_services/committees/online_learning_committee/">Online Learning Committee</a></li> -->
                                <li><a href="http://soe.umich.edu/departments_services/committees/research_staff_administrators_group/">Research Advisory</a></li>
                                <!-- <li><a href="http://soe.umich.edu/departments_services/committees/technology_advisory_committee/">Technology and Facilities Advisory Committee</a></li> -->
                                <li><a href="http://soe.umich.edu/departments_services/committees/capital_projects_committee/">Capital Projects</a></li>
                                <!-- <li><a href="http://soe.umich.edu/departments_services/committees/teacher_education_cabinet/">Teacher Education Cabinet</a></li> -->
                                <li><a href="http://soe.umich.edu/departments_services/committees/diversity_advisory_committee/">Education Diversity Advisory</a></li>
                                <!-- <li><a href="http://soe.umich.edu/departments_services/committees/student_advisory_board/">Student Advisory Board</a></li> -->
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>

            <li class="has-children">
                <a href="http://soe.umich.edu/">Academics</a>

                <ul class="soedu-secondary-nav is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li class="see-all d-md-none"><a href="">Academics</a></li>
                    <li><a href="http://soe.umich.edu/departments_services/academic_departments/"><i class="material-icons md-32 align-text-top">store</i> Departments</a>
                        <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="http://soe.umich.edu/departments_services/academic_departments/center_for_the_study_of_higher_and_postsecondary_education/">CSHPE</a><p>Center for the Study of Higher and Postsecondary Education</p></li>
                                <li><a href="http://soe.umich.edu/departments_services/academic_departments/combined_program_in_education_and_psychology/">CPEP</a><p>Combined Program in Education and Psychology</p></li>
                                <li><a href="http://soe.umich.edu/departments_services/academic_departments/educational_studies/">ES</a><p>Educational Studies</p></li>
                                <li><a href="http://soe.umich.edu/departments_services/academic_departments/joint_program_in_english_and_education/">JPEE</a><p>Joint Program in English and Education</p></li>
                                <li><a href="http://soe.umich.edu/departments_services/academic_departments/teacher_education/">TE</a><p>Teacher Education</p></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="http://soe.umich.edu/academics/bachelors_degree_programs/"><i class="material-icons md-32 align-text-top">school</i> Bachelor's</a>
                        <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="http://soe.umich.edu/academics/bachelors/elementary-teacher-education/">Elementary Teacher Education</a></li>
                                <li><a href="http://soe.umich.edu/academics/bachelors/secondary-teacher-education/">Secondary Teacher Education</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="http://soe.umich.edu/academics/masters_programs/"><i class="material-icons md-32 align-text-top">school</i> Master's</a>
                        <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="http://soe.umich.edu/academics/masters_programs/elmac/">MA in Educational Studies</a></li>
                                <!-- <h5>MA in Educational Studies</h5>
                                    <li><a href="" class="small-text">Elementary Teacher Education (ELMAC)</a></li>
                                    <li><a href="" class="small-text">Secondary Teacher Education (Secondary MAC)</a></li>
                                    <li><a href="" class="small-text">New Media and New Literacies</a></li>
                                    <li><a href="" class="small-text">Educational Leadership and Policy</a></li>
                                    <li><a href="" class="small-text">Teaching and Learning</a></li>
                                    <li><a href="" class="small-text">Urban Pedagogy</a></li>
                                    <li><a href="" class="small-text">Educational Studies and MBA (Dual Degree)</a></li>
                                    <li><a href="" class="small-text">Program Evaluation and Improvement Research</a></li> -->

                                <li><a href="http://soe.umich.edu/academics/masters_programs/psse/">MS Educational Studies</a></li>
                                <!-- <h5>MS Educational Studies</h5>
                                    <li><a href="" class="small-text">Post-Secondary Science Education</a></li>
                                    <li><a href="" class="small-text">Blended Master of Arts in Educational Studies</a></li> -->

                                <li><a href="http://soe.umich.edu/academics/masters_programs/he/">MA in Higher Education</a></li>
                                <!-- <h5>MA in Higher Education</h5>
                                    <li><a href="" class="small-text">Higher Education</a></li>
                                    <li><a href="" class="small-text">Diversity and Social Justice in Higher Education</a></li>
                                    <li><a href="" class="small-text">Higher Education and Master of Public Policy (Dual Degree)</a></li>
                                    <li><a href="" class="small-text">Higher Education and MBA (Dual Degree)</a></li>
                                    <li><a href="" class="small-text">Higher Education Institutional Research</a></li>
                                    <li><a href="" class="small-text">Higher Education Management and Organizations</a></li>
                                    <li><a href="" class="small-text">Higher Education Public Policy</a></li>
                                    <li><a href="" class="small-text">Higher Education Student Access and Success</a></li> -->
                            </ul>
                        </div>
                    </li>
                    <li><a href="http://soe.umich.edu/academics/doctoral_programs/"><i class="material-icons md-32 align-text-top">school</i> Doctoral</a>
                        <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="http://soe.umich.edu/academics/doctoral_programs/eap/">PhD in Educational Studies</a></li>
                                <!-- <h5>PhD in Educational Studies</h5>
                                    <li><a href="" class="small-text">Education and Statistics (Dual Degree)</a></li>
                                    <li><a href="" class="small-text">Educational Policy, Leadership, and Innovation</a></li>
                                    <li><a href="" class="small-text">Educational Foundations and Policy</a></li>
                                    <li><a href="" class="small-text">Learning Technologies</a></li>
                                    <li><a href="" class="small-text">Literacy, Language, and Culture</a></li>
                                    <li><a href="" class="small-text">Mathematics Education</a></li>
                                    <li><a href="" class="small-text">Science Education</a></li>
                                    <li><a href="" class="small-text">Teaching and Teacher Education</a></li>
                                    <li><a href="" class="small-text">Cross-Specialization Concentration (ES)</a></li> -->

                                <li><a href="https://jpee.lsa.umich.edu/">PhD in English & Education</a></li>
                                <!-- <h5>PhD in English & Education</h5>
                                    <li><a href="" class="small-text">English and Education</a></li> -->

                                <li><a href="http://soe.umich.edu/academics/doctoral_programs/ep/">PhD in Education & Psychology</a></li>
                                <!-- <h5>PhD in Education & Psychology</h5>
                                    <li><a href="" class="small-text">Education and Psychology</a></li> -->

                                <li><a href="http://soe.umich.edu/academics/doctoral_programs/aadsd/">PhD in Higher Education</a></li>
                                <!-- <h5>PhD in Higher Education</h5>
                                    <li><a href="" class="small-text">Academic Affairs and Student Development</a></li>
                                    <li><a href="" class="small-text">Organizational Behavior and Management</a></li>
                                    <li><a href="" class="small-text">Public Policy in Postsecondary Education</a></li>
                                    <li><a href="" class="small-text">Research, Evaluation, and Assessment</a></li>
                                    <li><a href="" class="small-text">Individually Designed Concentration (CSHPE)</a></li> -->
                            </ul>
                        </div>
                    </li>
                    <li><a href="http://soe.umich.edu/academics/teacher-administrator-certification/"><i class="material-icons md-32 align-text-top">work</i> Certification</a>
                        <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="http://soe.umich.edu/academics/teacher-administrator-certification/undergraduate/">Undergraduate</a></li>
                                <li><a href="http://soe.umich.edu/academics/teacher-administrator-certification/masters/">Graduate</a></li>
                                <li><a href="http://soe.umich.edu/academics/teacher-administrator-certification/administrator-certification/">Administrator Cert.</a></li>

                            </ul>
                        </div>
                    </li>




                    <li><a href="http://soe.umich.edu/micromasters/"><i class="material-icons md-32 align-text-top">schedule</i> MicroMasters</a>
                        <!-- <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="">link</a></li>
                                <li><a href="">link</a></li>
                                <li><a href="">link</a></li>
                            </ul>
                        </div> -->
                    </li>
                    <li><a href="http://soe.umich.edu/academics/non-degree/"><i class="material-icons md-32 align-text-top">local_library</i> Non-Degree</a>
                        <!-- <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="">link</a></li>
                                <li><a href="">link</a></li>
                                <li><a href="">link</a></li>
                            </ul>
                        </div> -->
                    </li>
                    <li><a href="http://soe.umich.edu/academics/courses/"><i class="material-icons md-32 align-text-top">class</i> Courses & Syllabi</a>
                        <!-- <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="">link</a></li>
                                <li><a href="">link</a></li>
                                <li><a href="">link</a></li>
                            </ul>
                        </div> -->
                    </li>
                    <!-- <li><a href="http://soe.umich.edu/"><i class="material-icons md-32 align-text-top">collections_bookmark</i> Program Finder</a>
                        <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="">link</a></li>
                                <li><a href="">link</a></li>
                                <li><a href="">link</a></li>
                            </ul>
                        </div>
                    </li> -->
                </ul>
            </li>

            <li class="has-children">
                <a href="http://soe.umich.edu/">Research</a>

                <ul class="soedu-secondary-nav is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <!-- hide on screens wider than md -->
                    <li class="see-all d-md-none"><a href="">Research</a></li>
                    <li><a href="http://soe.umich.edu/research/office/"><i class="material-icons md-32 align-text-top">blur_on</i> Office of Research</a>
                        <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="http://soe.umich.edu/research/office/faculty-support/">Faculty Support</a></li>
                                <li><a href="http://soe.umich.edu/research/office/consultation-services/">Consultation Services</a></li>
                                <li><a href="http://soe.umich.edu/research/office/find-an-expert/">Find an Expert</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="http://ceder.soe.umich.edu/"><i class="material-icons md-32 align-text-top">timeline</i> CEDER</a>
                        <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="http://ceder.soe.umich.edu/about/services/">Design Services</a></li>
                                <li><a href="http://ceder.soe.umich.edu/about/services/">Evaluation Services</a></li>
                                <li><a href="http://ceder.soe.umich.edu/research-consulting/">Research Consulting</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="http://soe.umich.edu/research/office/current-awards/"><i class="material-icons md-32 align-text-top">grade</i> Current Awards</a>
                        <!-- <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="">link</a></li>
                                <li><a href="">link</a></li>
                                <li><a href="">link</a></li>
                            </ul>
                        </div> -->
                    </li>
                    <li><a href="http://soe.umich.edu/research/office/faculty-support/"><i class="material-icons md-32 align-text-top">developer_board</i> Research Proposal Submission</a>
                        <!-- <div class="d-none d-md-block d-lg-block">
                            <ul class="list-unstyled">
                                <li><a href="">link</a></li>
                                <li><a href="">link</a></li>
                                <li><a href="">link</a></li>
                            </ul>
                        </div> -->
                    </li>
                </ul>
            </li>
            <!-- hide on screens wider than md -->
            <li class="has-children d-md-none">
                <a href="http://soe.umich.edu/">Information For</a>

                <ul class="soedu-secondary-nav is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li class="see-all d-md-none"><a href="">Information For</a></li>
                    <li><a href="http://soe.umich.edu/information_for/prospective_students/"><i class="material-icons md-32 align-text-top">people_outline</i> Prospective Students</a></li>
                    <li><a href="http://soe.umich.edu/information_for/current_soe_students/"><i class="material-icons md-32 align-text-top">people_outline</i> Current Students</a></li>
                    <li><a href="http://soe.umich.edu/information_for/alumni_friends/"><i class="material-icons md-32 align-text-top">people_outline</i> Alumni</a></li>
                    <li><a href="https://leadersandbest.umich.edu/find/#!/scu/soe"><i class="material-icons md-32 align-text-top">favorite_border</i> Giving</a></li>
                    <li><a href="http://soe.umich.edu/information_for/prospective_students/"><i class="material-icons md-32 align-text-top">assignment_turned_in</i> Apply</a></li>
                </ul>
            </li>
            <!-- hide on screens wider than md -->
            <li class="has-children d-md-none">
                <a href="http://soe.umich.edu/">Quicklinks</a>

                <ul class="soedu-secondary-nav is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li class="see-all d-md-none"><a href="">Quicklinks</a></li>
                    <li><a href="http://soe.umich.edu/departments_services/services/"><i class="material-icons md-32 align-text-top">bookmark_border</i> Service Request</a></li>
                    <li><a href="http://soe.umich.edu/departments_services/career_services/edworks/"><i class="material-icons md-32 align-text-top">bookmark_border</i> EdWorks Login</a></li>
                    <li><a href="http://soe.umich.edu/magazine/"><i class="material-icons md-32 align-text-top">bookmark_border</i> Michigan Education Magazine</a></li>
                    <li><a href="https://apps.soe.umich.edu/forms/room-reservation/"><i class="material-icons md-32 align-text-top">bookmark_border</i> Room Reservations</a></li>
                    <li><a href="http://soe.umich.edu/rooms/"><i class="material-icons md-32 align-text-top">bookmark_border</i> Room Descriptions</a></li>
                    <li><a href="https://education.mivideo.it.umich.edu/"><i class="material-icons md-32 align-text-top">bookmark_border</i> Video Collection</a></li>
                    <li><a href="http://soe.umich.edu/about/floor_plans/"><i class="material-icons md-32 align-text-top">bookmark_border</i> Floor Plans</a></li>
                    <li><a href="http://soe.umich.edu/faqs/"><i class="material-icons md-32 align-text-top">bookmark_border</i> FAQs</a></li>
                    <li><a href="https://wolverineaccess.umich.edu/"><i class="material-icons md-32 align-text-top">bookmark_border</i> Wolverine Access</a></li>
                    <li><a href="https://mcommunity.umich.edu/"><i class="material-icons md-32 align-text-top">bookmark_border</i> MCommunity</a></li>
                    <li><a href="https://apps.soe.umich.edu/"><i class="material-icons md-32 align-text-top">bookmark_border</i> Intranet</a></li>
                </ul>
            </li>

            <!-- <li class="has-children">
                <a href="http://soe.umich.edu/">Gallery</a>

                <ul class="soedu-nav-gallery is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li class="see-all"><a href="http://soe.umich.edu/">Browse Gallery</a></li>
                    <li>
                        <a class="soedu-nav-item" href="http://soe.umich.edu/">
                            <img src="img/img.jpg" alt="Heading Image">
                            <h3>Heading #1</h3>
                        </a>
                    </li>

                    <li>
                        <a class="soedu-nav-item" href="http://soe.umich.edu/">
                            <img src="img/img.jpg" alt="Heading Image">
                            <h3>Heading #2</h3>
                        </a>
                    </li>

                    <li>
                        <a class="soedu-nav-item" href="http://soe.umich.edu/">
                            <img src="img/img.jpg" alt="Heading Image">
                            <h3>Heading #3</h3>
                        </a>
                    </li>

                    <li>
                        <a class="soedu-nav-item" href="http://soe.umich.edu/">
                            <img src="img/img.jpg" alt="Heading Image">
                            <h3>Heading #4</h3>
                        </a>
                    </li>
                </ul>
            </li> -->

            <!-- <li class="has-children">
                <a href="http://soe.umich.edu/">Services</a>

                <ul class="soedu-nav-icons is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li class="see-all"><a href="http://soe.umich.edu/">Browse Services</a></li>
                    <li>
                        <a class="soedu-nav-item item-1" href="http://soe.umich.edu/">
                            <h3>Heading #1</h3>
                            <p>This is the item description</p>
                        </a>
                    </li>

                    <li>
                        <a class="soedu-nav-item item-2" href="http://soe.umich.edu/">
                            <h3>Heading #2</h3>
                            <p>This is the item description</p>
                        </a>
                    </li>

                    <li>
                        <a class="soedu-nav-item item-3" href="http://soe.umich.edu/">
                            <h3>Heading #3</h3>
                            <p>This is the item description</p>
                        </a>
                    </li>

                    <li>
                        <a class="soedu-nav-item item-4" href="http://soe.umich.edu/">
                            <h3>Heading #4</h3>
                            <p>This is the item description</p>
                        </a>
                    </li>

                    <li>
                        <a class="soedu-nav-item item-5" href="http://soe.umich.edu/">
                            <h3>Heading #5</h3>
                            <p>This is the item description</p>
                        </a>
                    </li>

                    <li>
                        <a class="soedu-nav-item item-6" href="http://soe.umich.edu/">
                            <h3>Heading #6</h3>
                            <p>This is the item description</p>
                        </a>
                    </li>

                    <li>
                        <a class="soedu-nav-item item-7" href="http://soe.umich.edu/">
                            <h3>Heading #7</h3>
                            <p>This is the item description</p>
                        </a>
                    </li>

                    <li>
                        <a class="soedu-nav-item item-8" href="http://soe.umich.edu/">
                            <h3>Heading #8</h3>
                            <p>This is the item description</p>
                        </a>
                    </li>
                </ul>
            </li> -->

            <!-- <li><a href="http://soe.umich.edu/">Standard</a></li> -->
        </ul> <!-- primary-nav -->
    </nav> <!-- soedu-nav -->

    <div id="soedu-search" class="soedu-search">
        <!-- <form>
            <input type="search" placeholder="Search...">
        </form> -->
<script>
  (function() {
    var cx = '009152558191798976851:3tcmoi3_rb8';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
    </div>