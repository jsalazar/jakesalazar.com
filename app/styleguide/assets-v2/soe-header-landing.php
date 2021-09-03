<?php
// grab path for local file (css, js) references below
$projectBasePath = explode("/", $_SERVER["REQUEST_URI"]);
?>
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
        <link rel="stylesheet" href="/styleguide/assets-v2/css/main-landing.css">

        <link rel="stylesheet" href="<?php echo "/".$projectBasePath[1]."/"; ?>css/local.css">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,600,700,700i,900" rel="stylesheet">
    </head>
    <body>
    <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/?locale=en">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<?php
/*
    <!-- header code is now included in local site main.php files for complete control of navigation items -->
    <!--
    <header>

    </header>
     -->
*/
?>