<?php 
//form logic: if the input field is blank, display a message

if(isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['comments'])) {
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    echo $firstname;
    echo '<br/>';
    echo $lastname;
    echo '<br/>';
    echo $email;
    echo '<br/>';
    echo $comments;

    // if fields are blank, echo please fill out all fields
    if(empty($firstname) || empty($lastname) || empty($email) || empty($comments)) {
        echo 'Please fill out all fields';
    } else {
        echo 'Thank you for your submission';
    } 
    
} else {
        echo '
        <form style="" action="" method="post">
    <label for="first_name">First Name:</label><br/>
    <input type="text" name="first_name" id="first_name"><br/>
    <label for="last_name">Last Name:</label><br/>
    <input type="text" name="last_name" id="last_name"><br/>
    <label for="email">Email:</label><br/>
    <input type="email" name="email" id="email"><br/>
    <label for="comments">Comments:</label><br/>
    <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
    <input type="submit" value="Submit">
    
        </form>
        <button><a href="form2.php">reset</a></button>
        ';

    }

?>