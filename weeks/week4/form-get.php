<?php
//form logic
//if the form has been submitted, process it
if (isset(
    $_GET['name'],
    $_GET['email']
)) {
    $name = $_GET['name'];
    $email = $_GET['email'];
} else {
    echo '
    <form action="form-get.php" method="get">
<label for="name">Name:</label>
<input type="text" name="name" id="name">
<label for="email">Email:</label>
<input type="email" name="email" id="email">
<input type="submit" value="Submit">

    </form>
    ';
}

?>
