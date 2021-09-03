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
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-soe">
          <div class="container">
            <a class="navbar-brand soe-logo-m-soe" href="http://soe.umich.edu/"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navbar">
              <ul class="navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="nav-item hidden"><a href="#page-top"></a></li>
                    <li class="nav-item"><a class="nav-link soe-nav-link" href="http://soe.umich.edu/about/">About</a></li>
                    <li class="nav-item"><a class="nav-link soe-nav-link" href="http://soe.umich.edu/academics/">Academics</a></li>
                    <li class="nav-item"><a class="nav-link soe-nav-link" href="http://soe.umich.edu/funding/">Funding</a></li>
                    <li class="nav-item"><a class="nav-link soe-nav-link" href="http://soe.umich.edu/research/">Research</a></li>
                    <li class="nav-item"><a class="nav-link soe-nav-link" href="http://soe.umich.edu/people/">People</a></li>
                    <li class="nav-item"><a class="nav-link soe-nav-link" href="http://soe.umich.edu/departments_services/">Organization</a></li>
                    <li class="nav-item"><a class="nav-link soe-nav-link" href="http://soe.umich.edu/news_events/">News</a></li>
              </ul>
            </div>
          </div>
        </nav>
    </header>