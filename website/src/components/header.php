<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles/skeleton.css">
    <link rel="stylesheet" href="./src/styles/normalize.css">
    <title>Matthieu Felker | PHP Portal</title>
    <script src="../../scripts/darkMode.js" type="text/javascript"></script>
</head>
<body>

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

<?php 

$nav = [
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
];

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
switch('THIS_PAGE') {
    case 'index.php':
        $title = 'Home Page';
        $body = 'home';
        break;
    case 'about.php':
        $title = 'About Page';
        $body = 'about';
        break;
    case 'daily.php':
        $title = 'Daily Page';
        $body = 'daily';
        break;
    case 'contact.php':
        $title = 'Contact Page';
        $body = 'contact';
        break;
    case 'gallery.php':
        $title = 'Gallery Page';
        $body = 'gallery';
        break;
    default:
        $title = THIS_PAGE;
};



foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
        $nav[$key] = '<a href="' . $key . '" class="active">' . $value . '</a>';
    } else {
        $nav[$key] = '<a href="' . $key . '">' . $value . '</a>';
    }
}




?>