<?php
// login.php!

include('server.php');
// include('./includes/header.php');

?>

<h1>Login Page</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

<fieldset>
    <div class="input-group">
        <label for="username">Username</label>
        <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>">
    </div>


    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    
    <div class="input-group">
        <button type="submit" name="login_user" class="btn">Login</button>
        <!-- reset -->
        <button type="reset" class="btn">Reset</button>
    </div>
    <p>
        Not yet a member? <a href="register.php">Sign up</a>
    </p>




</fieldset>

</form>


<style>

h1, p  {
    text-align: center;
}

legend{
    text-align: center;
}

form{
    width: 50%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
}


</style>


