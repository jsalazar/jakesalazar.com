<?php
/**
* Temporary Class to similate soon-to-be cms database calls
* @author Jake Salazar <jakez@umich.edu>
* @copyright 2015 University of Michigan School of Education
* @license need to create one...share it with the world...
*
*/

class Illustration {

    // private $fw;

    public $pageTitle = "";
    public $pageBody = "";
    public $pageNavigation = "";
    public $pageURL = "";

    function __construct($siteConfig, $siteDirectory) {

        // get current url
        $this->pageURL = $_SERVER["REQUEST_URI"];
        // get site config urls from seed file
        $this->siteConfig = $siteConfig;
        $this->pageCount = count($this->siteConfig);
        $this->documentRoot = $_SERVER["DOCUMENT_ROOT"];
        $this->siteDirectory = $siteDirectory;

    }

    /**
    * The illustrate() method checks which page is being requested and sets values for use in template
    * @var string pageURL The current page being requested as determined by $_SERVER
    * @var string pageTitle The title for the page.
    * @var string pageBody The path location for the body of this html document.
    * @var string pageNavigation The path location for the navigation of this html document.
    * @param none
    * @return void
    */
    public function illustrate() {

        for ($page = 0; $page < $this->pageCount; $page++) {

            // if ($this->pageURL == $this->siteConfig[$page]["url"]) {
            // if (strpos($this->pageURL, $this->siteConfig[$page]["url"]) !== FALSE) {

            // first we check if one of our known URLs (listed in config.php) matches the beginning of the URL being requested
            // this updated code was made to support wildcard .htaccess requests for dynamic URLs like
            // http://soe.umich.edu/staging/research-dev/office/current-awards/ANY-TEXT-TITLE-FOR-THIS-URL
            // necessary for grants(current-awards pages, etc)
            // In general this code supports standard nav/url schemes and
            // is a most benefitial to pages/directories with .htaccess files using Rewrite rules
            if (substr($this->pageURL, 0, strlen($this->siteConfig[$page]["url"])) === $this->siteConfig[$page]["url"]) {

                $this->pageTitle = $this->siteConfig[$page]["title"];

                $this->pageBody = $this->documentRoot.$this->siteConfig[$page]["body"];
                // this approach did not allow parsing of php() code embedded within files
                // $this->pageBody = file_get_contents($pageBodyLocation);

                $this->pageNavigation = $this->documentRoot.$this->siteConfig[$page]["navigation"];
                // $this->pageNavigation = file_get_contents($pageNavigationLocation);

            }
            else {

                // set some sensible defaults

            }

        }

    }

}

/*
USAGE
// include illustrate() class
include $_SERVER["DOCUMENT_ROOT"].'/styleguide/assets-v1/classes/class.illustration.php';

// seed class with $siteConfig
include $_SERVER["DOCUMENT_ROOT"].'/staging/diversity/config.php';

$HTML = new Illustration($siteConfig);
$HTML->illustrate();

// provides access to (used in SOE global templates):
    // $HTML->pageTitle;
    // $HTML->pageBody;
    // $HTML->pageNavigation;

*/
?>