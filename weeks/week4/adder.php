<?php     //adder-wrong.php

if (isset($_POST['num1'])){
$num1 = $_POST['num1'];
// num2 was spelled wrong
$num2 = $_POST['num2'];
// -= to = is the fix   
$myTotal = $num1 + $num2;

//  typographical errors
// num 2 was spelled wrong
// "" to '' is the fix''
echo '<h2>You added '.$num1.' and '.$num2.'';
echo ' <p> and the answer is </p> <p style="color: red"> '.$myTotal.'</p>';

// add adder.php for reset button
echo'<p><a href="adder.php">Reset page</a>';
}

?>
<html>
<head>
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body>
<h1>Adder.php</h1> 
<!-- add method -->
<form action="" method="post">  
    <!-- add fieldset -->
    <fieldset>
Enter the first number:</label><input type="text" name="num1"><br>
</label>Enter the second number:<input type="text" name="num2"><br>
<input type="submit" value="Add Em!!">
</fieldset>
</form>

 


</body>
</html>