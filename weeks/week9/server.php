<?php


//our session is a way to remember who we are

//if the user is not logged in, they cannot access this page

session_start();
include('config.php');

// include('header.php');

//server.php will communicate with the database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

//register the user (reg_user)

if (isset($_POST['reg_user'])) {

    // receive all input values from the form
    $name = mysqli_real_escape_string($iConn, $_POST['name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
    $confirm_password = mysqli_real_escape_string($iConn, $_POST['confirm_password']);

    // form validation: ensure that the form is correctly filled ...

    if (empty($name)) {
        array_push($errors, "Name is required");
    }
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $confirm_password) {
        array_push($errors, "Your passwords do not match");
    }

    // first check the database to make sure

    // a user does not already exist with the same username and/or email

    $user_check_query = "SELECT * FROM users WHERE name='$name' OR email='$email' LIMIT 1";

    $result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

    $rows = mysqli_fetch_assoc($result);

    if ($rows) { // if user exists

        if ($rows['username'] === $username) {

            array_push($errors, "Username already exists");
        }

        if ($rows['email'] === $email) {

            array_push($errors, "email already exists");
        }
    }

    // register user if there are no errors in the form


    if (count($errors) == 0) {

        $password = md5($password_1); //encrypt the password before saving in the database

        $query = "INSERT INTO users (name, email, username, password) VALUES('$name', '$email', '$username', '$password')";

        mysqli_query($iConn, $query);

        $_SESSION['username'] = $username;

        $_SESSION['success'] = "$success";

        //if the user is logged in, they can access this page

        header('location: login.php');
    }
}

// LOGIN USER

if (isset($_POST['login_user'])) {

    $username = mysqli_real_escape_string($iConn, $_POST['username']);

    $password = mysqli_real_escape_string($iConn, $_POST['password']);


    if (empty($username)) {

        array_push($errors, "Username is required");
    }

    if (empty($password)) {

        array_push($errors, "Password is required");
    }

    // if there are no errors, try to login


    if (count($errors) == 0) {

        $password = md5($password);

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        $results = mysqli_query($iConn, $query);

        if (mysqli_num_rows($results) == 1) {

            $_SESSION['username'] = $username;

            $_SESSION['success'] = "$success";

            header('location: index.php');
        } else {

            array_push($errors, "Wrong username/password combination");
        }
    }
}

// not logging in user! not taking us to index.php!!


