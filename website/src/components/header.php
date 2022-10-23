<?php 

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
//IF STATEMENT
switch(THIS_PAGE){
    case 'index.php':
        $title = 'Home Page';
        $logo = 'fa-home';
        $PageID = 'Welcome';
        $body = 'home';
    break;
    case 'about.php':
        $title = 'About Page';
        $logo = 'fa-user-circle';
        $PageID = 'About Me';
        $body = 'about inner';

    break;
    case 'contact.php':
        $title = 'Contact Page';
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Me';
        $body = 'contact inner';
    break;
    case 'daily.php':
        $title = 'Daily Page';
        $logo = 'fa-pencil-square-o';
        $PageID = 'Daily';
        $body = 'daily inner';

    break;
    case 'database.php':
        $title = 'Database Page';
        $logo = 'fa-pencil-square-o';
        $PageID = 'Database';
        $body = 'database inner';
    break;
    case 'gallery.php':
        $title = 'Gallery Page';
        $logo = 'fa-pencil-square-o';
        $PageID = 'Gallery';
        $body = 'gallery inner';
    break;
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
        $body = 'home';
}

$nav = [
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
];



foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
        $nav[$key] = '<a href="' . $key . '" class="active">' . $value . '</a>';
    } else {
        $nav[$key] = '<a href="' . $key . '">' . $value . '</a>';
    }
}






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles/skeleton.css">
    <link rel="stylesheet" href="./src/styles/normalize.css">
    <title>Matthieu Felker | <?php echo $title; ?></title>
    <script src="../../scripts/darkMode.js"></script>
</head>

<body style="<?php echo $background ?>">

<div class="container">
    <div class="row">
        <div class="full column">
            <div class="header">
                <pre>
╔═╗╦ ╦╔═╗  ╦ ╦╔═╗╔╗ ╔═╗╦╔╦╗╔═╗
╠═╝╠═╣╠═╝  ║║║║╣ ╠╩╗╚═╗║ ║ ║╣ 
╩  ╩ ╩╩    ╚╩╝╚═╝╚═╝╚═╝╩ ╩ ╚═╝
<small>All things PHP</small>
            </pre>
            </div>

        </div>
    </div>
</div>

