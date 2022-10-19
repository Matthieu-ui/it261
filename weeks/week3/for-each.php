<?php

//wine list array example

echo '<h2>Wine List</h2>';
$wines = array(
    'Merlot',
    'Cabernet',
    'Pinot Noir',
    'Chardonnay',
    'Pinot Grigio'
);

foreach($wines as $wine){
   echo '<li>'.$wine.'</li>';
}

echo '<h2>Movies and Shows List</h2>'; // key and value

$shows = array(
    'The Office' => 'Comedy',
    'The Walking Dead' => 'Horror',
    'The Big Bang Theory' => 'Comedy',
    'The Simpsons' => 'Comedy',
    'The Flash' => 'Action'
);

foreach($shows as $show => $genre){
    echo '<li>'.$show.' is a '.$genre.' show</li>';
}
echo '<br/>';
echo '<h2>Navigation key and value</h2>'; // key and value
$nav = array(
    'Home' => 'index.php',
    'About' => 'about.php',
    'Contact' => 'contact.php',
    'Gallery' => 'gallery.php'
);
foreach($nav as $key => $value){
    echo '<li><a href="'.$value.'">'.$key.'</a></li>';
}
echo '<br/>';
echo '<h2>Navigation displays colors</h2>';
echo '<ul>';
//learning constants
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
//IF STATEMENT
foreach($nav as $key => $value){
    if($value == THIS_PAGE){
        echo '<li><a style="color:red"; class="active" href="'.$value.'">'.$key.'</a></li>';
    } else {
        echo '<li><a style="color:green"; href="'.$value.'">'.$key.'</a></li>';
    }
}
if(THIS_PAGE == 'index.php'){
    $title = 'Home Page';
} elseif(THIS_PAGE == 'about.php'){
    $title = 'About Page';
} elseif(THIS_PAGE == 'contact.php'){
    $title = 'Contact Page';
} elseif(THIS_PAGE == 'gallery.php'){
    $title = 'Gallery Page';
} else {
    $title = THIS_PAGE;
}

echo '</ul>';
?>