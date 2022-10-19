<?php
// if
// if else
// if elseif


$temp = 65;
if($temp <= 60) {
    //insert code here
echo 'It is a warm day';
} else {
    //insert code here
    echo 'It may be getting warmer';
}

echo '<br/>';
$new_temp = 76;

if($new_temp <= 60) {
echo 'not a warm day';
} elseif($new_temp <=70 ) {
echo 'It\'s getting warmer';
} elseif($new_temp <=80 ){
    echo 'we might be going to the beach';
} else {
    echo'we will definitley go to the beach';
}

echo ' <br/> <h2>This excersice will be about a salary, a bonus and sales!</h2>';
// salary of 95000 - annual
// sales need to be above 100000 to start making bonuses
// 1000000 = 5%
// 120000 = 10%
// 140000 = 15%
// 150000 = 20%

$salary = 95000;
$sales = 148000;
// if sales is equal to or less than 99999, then there is no bonus
// if sales is equal to or less than 139999, then you will recieve 5% etc.
if($sales <= 99999){
echo 'sorry no bonus';
} elseif($sales <=19999) {
$salary *= 1.05;
    echo '$'.number_format($salary, 2).' dollars';
} elseif($sales <=139999){
    $salary *= 1.10;
    echo '$'.number_format($salary, 2).' dollars';
}elseif($sales <=149999){
    $salary *= 1.15;
    echo '$'.number_format($salary, 2).' dollars';
}else{
$salary *= 1.20;
echo '$'.number_format($salary, 2).' dollars';
}

?>