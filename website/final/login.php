<?php
// login.php!
include('server.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/style.css">
    <title>Login</title>
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
                <h1>Login</h1>

                <section>
                
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                    <fieldset>

                        <legend>Login</legend>

                        <label>Username</label>

                        <input type="text" name="username" value="<?php if (isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>" required>

                        <label>Password</label>

                        <input type="password" name="password" required>

                        <button type="submit" name="login_user" class="btn">Login</button>

                        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'" class="btn">Reset</button>

                        <p>Not a member? <a href="register.php">Sign up</a></p>


                    </fieldset>
                    <?php include('errors.php'); ?>

                </form>
                </section>
            </div>
        </div>
    </div>

    <div class=container>
        <div class=row>
            <div class="full column">

                <?php include './includes/footer.php' ?>

