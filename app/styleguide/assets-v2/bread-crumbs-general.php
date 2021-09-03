<?php
/*
  1. remove any potential query string urls "?" including anything after question mark
  2. remove slashes from each end;
  3. remove string "staging/" if it exist;
  4. create array from remaining slashes
  5. iterate thru elements to create breadcrumbs
     replace remaining hyphens and capitalize all words
  6. Add elipses for string longer than 50 chars
*/


$seedCrumb = $HTML->pageURL;

if (stripos($seedCrumb, '?') !== false) {

  $seedCrumb = substr($seedCrumb, 0, stripos($seedCrumb, '?'));

}

$breadcrumb = explode("/", str_replace("staging/", "", trim($seedCrumb, "/")));
$breadcrumbTotal = count($breadcrumb);

// for ($b = 0; $b <= $breadcrumbTotal; $b++) {
//     echo ucwords(str_replace("-", " ", $breadcrumb[$b]))."<br>";
// }

?>
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb soe-crumbs">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <!-- <li class="breadcrumb-item"><a href="/"><i class="material-icons">home</i></a></li> -->
    <!-- <li class="breadcrumb-item active" aria-current="page">Research</li> -->
    <?php
        if ($breadcrumbTotal == 1) {

            echo "<li class=\"breadcrumb-item active\" aria-current=\"page\">".ucwords(str_replace("-", " ", $breadcrumb[0]))."</li>";

        }
        if ($breadcrumbTotal == 2) {

            echo "<li class=\"breadcrumb-item\"><a href=\"/$breadcrumb[0]/\">".ucwords(str_replace("-", " ", $breadcrumb[0]))."</a></li>
                  <li class=\"breadcrumb-item active\" aria-current=\"page\">".ucwords(str_replace("-", " ", $breadcrumb[1]))."</li>";

        }
        if ($breadcrumbTotal == 3) {

            echo "<li class=\"breadcrumb-item\"><a href=\"/$breadcrumb[0]/\">".ucwords(str_replace("-", " ", $breadcrumb[0]))."</a></li>
                  <li class=\"breadcrumb-item\"><a href=\"/$breadcrumb[0]/$breadcrumb[1]/\">".ucwords(str_replace("-", " ", $breadcrumb[1]))."</a></li>
                  <li class=\"breadcrumb-item active\" aria-current=\"page\">".ucwords(str_replace("-", " ", $breadcrumb[2]))."</li>";

        }
        if ($breadcrumbTotal == 4) {

            echo "<li class=\"breadcrumb-item\"><a href=\"/$breadcrumb[0]/\">".ucwords(str_replace("-", " ", $breadcrumb[0]))."</a></li>
                  <li class=\"breadcrumb-item\"><a href=\"/$breadcrumb[0]/$breadcrumb[1]/\">".ucwords(str_replace("-", " ", $breadcrumb[1]))."</a></li>
                  <li class=\"breadcrumb-item\"><a href=\"/$breadcrumb[0]/$breadcrumb[1]/$breadcrumb[2]/\">".ucwords(str_replace("-", " ", $breadcrumb[2]))."</a></li>";
                  if (strlen($breadcrumb[3]) > 50) {
                    echo "<li class=\"breadcrumb-item active\" aria-current=\"page\">".ucwords(str_replace("-", " ", substr($breadcrumb[3], 0, 50)))."...</li>";
                  }
                  else {
                    echo "<li class=\"breadcrumb-item active\" aria-current=\"page\">".ucwords(str_replace("-", " ", $breadcrumb[3]))."</li>";
                  }

        }
    ?>
  </ol>
</nav>