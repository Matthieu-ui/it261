<?php

session_start();
include 'config.php';

include './include/header.php';
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

<div class="success">

    <h3>

        <?php

        echo $_SESSION['success'];

        unset($_SESSION['success']);

        ?>



        <?php if (isset($_SESSION['username'])) : ?>

            <p>Welcome, <strong><?php echo $_SESSION['username']; ?></strong></p>

            <p><a href="index.php?logout='1'">Logout</a></p>

        <?php endif ?>

    </h3>

    <div id="wrapper">

    </div>


</div>

<?php include './include/footer.php'; ?>