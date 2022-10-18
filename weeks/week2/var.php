<?php 
$name='Matthieu';
// info in between single quotes is a string
echo $name;

echo '<br>'; //break tag

$name='Matt';
echo $name;

echo '<br>'; //break tag

echo "My first name is $name";
//use single quotes because we will be placing php inside our html values later on -- ex: <a href = "">

echo '<br>'; //break tag

echo 'My first name is '.$name.'     ';

echo '<br>'; //break tag
echo '<br>'; //break tag

$temp='45';
// data type - integer / number
echo 'Today the temperature was '.$temp.' degrees. ';

echo '<br>'; //break tag
echo '<br>'; //break tag

$bodyTemp = 98.6;
// data type - float - anything with a decimal.
echo 'The body temperature of the human body is '.$bodyTemp.' degrees. ';

echo '<br>'; //break tag
echo '<br>'; //break tag

$firstName = 'Matthieu';
$lastName = 'Felker';

echo 'My first name is '.$firstName.' ';
echo '<br>'; //break tag
echo 'My last name is '.$lastName.' ';
echo '<br>'; //break tag
echo 'My full name is '.$firstName.' '.$lastName.'';

?>