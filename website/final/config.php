<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// create switch statement to determine which page is being viewed

switch (THIS_PAGE) {
    case 'index.php':
        $title = 'Home';
        $logo = 'fa-home';
        $pageID = 'Home';
        break;
    case 'about.php':
        $title = 'About';
        $logo = 'fa-home';
        $pageID = 'About';
        break;
    case 'contact.php':
        $title = 'Contact';
        $logo = 'fa-home';
        $pageID = 'Contact';
        break;
    case 'switch.php':
        $title = 'Switch';
        $logo = 'fa-home';
        $pageID = 'Switch';
        break;
    case 'world.php':
        $title = 'World';
        $logo = 'fa-home';
        $pageID = 'World';
        break;
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $pageID = 'Welcome';
}






//DB config
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');


$success = "<b class='success'>You have successfully logged on!
 ᕕ( ՞ ᗜ ՞ )ᕗ</b>";  // this variable shows a success message on the contact page

$errors = array();  // this variable will hold errors



function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}
