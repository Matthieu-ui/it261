<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../src/styles/skeleton.css" rel="stylesheet">
    <title>Form 3</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="twelve columns">
            <h1>Form3.php</h1>
            <form action="" method="post">
        <fieldset>
            <label for="name">Name:</label>
            <input type="text" name="first_name" id="name">
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="comments">Comments:</label>
            <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
            <input type="submit" value="Submit">
            <button><a href="form3.php">reset</a></button>
        </fieldset>
            </div>
        </div>
 

        <?php
        //logic: if first name, last name, email, and comments are set, good.
        //if empty, echo please fill out all fields

        if (isset(
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['email'],
            $_POST['comments']
        )) {

            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $comments = $_POST['comments'];

            //nested if statement: if fields are blank, echo please fill out all fields
            if (empty($first_name) || empty($last_name) || empty($email) || empty($comments)) {
                echo '<b style="color: red">Please fill out all fields :-)</b>';
            } else {

                echo '
                    <div class="container">
                    <div class="row">
                    <div class="twelve columns">
                    <h2>Hello ' . $first_name . '</h2>
                    <p>Thank you for your submission</p>
                    <p>Here is the information you submitted:</p>
                    <ul>
                    <li>Name: ' . $first_name . ' ' . $last_name . '</li>
                    <li>Email: ' . $email . '</li>
                    <li>Comments: ' . $comments . '</li>
                    </ul>
                    </div>
                    </div>
                    
                    </div>';
            };
        };


        ?>
</body>

</html>