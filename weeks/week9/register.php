<?php 
include('server.php');
include('header.php');
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<fieldset>

<legend class="text-center">Register</legend>
<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>" >
<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>" >
<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" >
<label>Username</label>
<input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>" >
<label>Password</label>
<input type="password" name="password_1" >
<label>Confirm Password</label>
<input type="password" name="password_2" >
<button type="submit" name="reg_user" class="btn">Register</button>
<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'" class="btn">Reset</button>
<p>Already a member? <a href="login.php">Sign in</a></p>
<?php include('errors.php'); ?>

</fieldset>

<?php include('errors.php');?>

</form>

<?php include('footer.php');?>

