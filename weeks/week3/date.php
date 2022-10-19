<?php
// date function
echo 'Year: '.date('Y').'<br/>';
echo 'Month: '.date('m').'<br/>';
echo ''.date('l, F d, Y').'<br/>';

date_default_timezone_set('america/los_angeles');
echo ''.date('l, F d, Y').'<br/>';
$name = 'Matt';
$our_time = date('H:i:A');
echo $our_time;

//if time is less than 11 it is morning
//if time is less than 17 it is afternoon
echo '<br/>';

if($our_time <= 11){
    echo '<h2 style="color: purple">Good Morning '.$name.' </h2> <img src="./images/amsun.png" alt="morning"> <p>It\'s time to get up!</p>';
} elseif($our_time <= 17){
    echo '<h2 style="color: red">Good Afternoon '.$name.' </h2> <img src="./images/afsun.png" alt="afternoon" <p>Enjoy the afternoon!</p>';}
    else{
        echo '<h2 style="color: blue">Good Evening '.$name.' </h2><img src="./images/night.png" alt="afternoon" <p>It\'s time for bed!</p>';
    }   
?>