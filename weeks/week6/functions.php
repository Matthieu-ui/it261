<?php 
//function page
echo '<h2>functions!</h2>';
function sayHello($name) {
    echo "Hello $name";
}

sayHello('John');


//arithmetic function
echo '<h2>arithmetic!</h2>';
function add($a, $b) {
    return $a + $b;
}

echo add(1, 2);

//width and height function
echo '<h2>width and height!</h2>';
function area($width, $height) {
    return $width * $height;
}

echo area(5, 10);

//celcius to fahrenheit function
echo '<h2>celcius to fahrenheit!</h2>';
function celsiusToFahrenheit($celsius) {
    return $celsius * 9 / 5 + 32;
}

echo celsiusToFahrenheit(30);

//fahrenheit to celcius function
echo '<h2>fahrenheit to celcius!</h2>';

function fahrenheitToCelsius($fahrenheit) {
    return ($fahrenheit - 32) * 5 / 9;
}

echo fahrenheitToCelsius(86);

//array function
echo '<h2>array!</h2>';

function printArray($array) {
    foreach ($array as $value) {
        echo $value . ' ';
    }
}

printArray([1, 2, 3, 4, 5]);

//list function

echo '<h2>list!</h2>';

function printList($array) {
    echo '<ul>';
    foreach ($array as $value) {
        echo "<li>$value</li>";
    }
    echo '</ul>';
}

printList([1, 2, 3, 4, 5]);

//naviagtion function

echo '<h2>navigation!</h2>';

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function make_links($nav) {
    $myReturn = '';
    foreach ($nav as $key => $value) {
        if ($key == THIS_PAGE) {
            $myReturn .= "<li><a class='active' href='$key'>$value</a></li>";
        } else {
            $myReturn .= "<li><a href='$key'>$value</a></li>";
        }
    }
    return $myReturn;
}

echo make_links($nav);

//implode function

echo '<h2>implode!</h2>';

$cars = array('Volvo', 'BMW', 'Toyota');

echo implode(', ', $cars);


//our wines function

echo '<h2>$myWines</h2><p>if post wines is not empty, take my post wines and implode them, and create a new variable named $myWines </p>'





?>