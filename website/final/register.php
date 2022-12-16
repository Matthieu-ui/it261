<?php
include('server.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/style.css">
    <title>Register</title>
</head>

<body style="<?php echo $background ?>">

    <header>
        <div class="container">
            <div class="row">
                <div class="full column" style="height: 3rem;">
                </div>
            </div>
        </div>
    </header>

    <div class="container" style="height: 100%;">
        <div class="row">
            <div class="full column">
                <h1>Register</h1>
                <section>
                    <div class="row">
                        <div class='one-half column'>
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                    <fieldset>

                                        <legend class="text-center">Register</legend>
                                        <label>First Name</label>
                                        <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
                                        <label>Username</label>
                                        <input type="text" name="username" value="<?php if (isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>">
                                        <label>Password</label>
                                        <input type="password" name="password_1">
                                        <label>Confirm Password</label>
                                        <input type="password" name="password_2">
                                        <button type="submit" name="reg_user" class="btn">Register</button>
                                        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'" class="btn">Reset</button>
                                        <p>Already a member? <a href="login.php">Sign in</a></p>


                                    </fieldset>



                                </form>

                        </div>

                        <div class='one-half column'>
                            <?php include('errors.php'); ?>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>

    <div class=container>
        <div class=row>
            <div class="full column">

                <?php include './includes/footer.php' ?>

