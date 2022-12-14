<?php 

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');


$success = "<h3 class='success'>You have successfully logged on!
 ᕕ( ՞ ᗜ ՞ )ᕗ</h3>";  // this variable shows a success message on the contact page

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

 

?>

