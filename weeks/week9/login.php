<?php
// login.php!
include('server.php');

?>
<?php include('./include/header.php');?>
<h1>Login Page</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

<fieldset>

<legend class="text-center">Login</legend>

<label>Username</label>

<input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>" required>

<label>Password</label>

<input type="password" name="password" required>

<button type="submit" name="login_user" class="btn">Login</button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'" class="btn">Reset</button>

<p>Not a member? <a href="register.php">Sign up</a></p>


</fieldset>
<?php include('errors.php'); ?>

</form>

<?php include('./include/footer.php');?>




