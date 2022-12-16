<?php

session_start();
include 'config.php';

//correct login

if (!isset($_SESSION['username'])) {

    //user must be logged in to see this page

    $_SESSION['msg'] = "You must log in first to view this page";

    header("location: login.php");
}


if (isset($_GET['logout'])) {

    session_destroy();

    unset($_SESSION['username']);

    header("location: login.php");
}

if (isset($_SESSION['success'])); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/style.css">
    <title><?php echo $title ?></title>
</head>

<body style="<?php echo $background ?>">

    <header>
        <div class="container">
            <div class="row">
                <div class="full column">

                    <?php

                    echo $_SESSION['success'];

                    unset($_SESSION['success']);

                    ?>
                </div>
            </div>


            <div class="row">
                <div class="full column userGreeting">
                    <?php if (isset($_SESSION['username'])) : ?>

                        <p>Welcome, <strong><?php echo $_SESSION['username']; ?></strong></p>
                        <!-- logout button -->
                        <p><a href="index.php?logout='1'">Logout</a></p>

                </div>
            </div>
        </div>


    <?php endif ?>

    </header>



    <div class="container nav-container">
        <div class="row">
            <div class="full column nav">
                <?php include './includes/nav.php' ?>
            </div>
        </div>
    </div>