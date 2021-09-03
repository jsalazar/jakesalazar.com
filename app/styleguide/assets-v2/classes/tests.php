<?php
// deBugg
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo $_SERVER["REQUEST_URI"];
echo "<br><br><br><br>";


$siteConfig = array(
    array( "url" =>"/staging/diversity/",
           "title" => "DIVERSITY, EQUITY, AND INCLUSION",
           "body" => "/staging/diversity/content/main.php",
           "navigation" => "/staging/diversity/navigation.php"
         ),
    array( "url" =>"/staging/diversity/comments/",
           "title" => "Comments",
           "body" => "/staging/diversity/content/share-your-thoughts.php",
           "navigation" => "/staging/diversity/navigation.php"
         ),
    array( "url" =>"/staging/diversity/resources/",
           "title" => "Resources",
           "body" => "/staging/diversity/content/main.php",
           "navigation" => "/staging/diversity/navigation.php"
         )
  );

$pageCount = count($siteConfig);

echo "count: ".$pageCount."<br><br><br>";

// TESTING
$PAGEURL = "/staging/diversity/comments/";

for ($page = 0; $page < $pageCount; $page++) {

    if ($PAGEURL == $siteConfig[$page]["url"]) {

            $pageTitle = $siteConfig[$page]["title"];

            $pageBodyLocation = $_SERVER["DOCUMENT_ROOT"].$siteConfig[$page]["body"];
            $pageBody = file_get_contents($pageBodyLocation);

            $pageNavigationLocation = $_SERVER["DOCUMENT_ROOT"].$siteConfig[$page]["navigation"];
            $pageNavigation = file_get_contents($pageNavigationLocation);


            // case '/staging/diversity/':

            //     $this->pageHeading = '';
            //     $this->pageBody = '';
            //     $this->pageNavigation = '';

            //     break;
    }
    else {

        // set some sensible defaults

    }

}

echo "
$pageTitle <br>
$pageBody <br><br>
$pageNavigation

";




?>