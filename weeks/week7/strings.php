<?php   
//str_replace and substr_replace

$statement = "Presently, I am a student at Seattle Central College.";
echo $statement;
echo "<br>";
echo substr($statement, 0);
echo "<br>";
echo substr($statement, 1);
echo "<br>";
echo substr($statement, 10);
echo "<br>";
echo "<h2>now display I am a student</h2>";
echo substr($statement, 10, 15);
echo "<br>";
echo "<h2>now display Seattle Central</h2>";
echo substr($statement, -25, -9);
echo "<br>";
echo "<br>";
echo"<h2>str_replace function</h2>";
echo str_replace("Seattle Central College", "SCC", $statement);

?>
