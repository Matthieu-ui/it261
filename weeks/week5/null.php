<?php

echo 'First example of "a", ergo, it is FALSE, NOT NULL <br>';
$a = 0;
echo "a is " . is_null($a) . "<br>";

echo 'Second example of "b", echoing "1" - what does that mean? 1 equals TRUE <br>';
$b = null;
echo "b is " . is_null($b) . "<br>";
echo 'Third example of "c", ergo, c IS NOT NULL <br>';
$c = "null";
echo "c is " . is_null($c) . "<br>";
echo 'Fourth example of "d", therefore, "d" is NULL<br>';
$d = NULL;
echo "d is " . is_null($d) . "<br>";
?>