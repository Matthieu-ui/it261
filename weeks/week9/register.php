<?php 
include 'server.php';
// <!-- // we will place header here.
// // include 'header.php';


// // err

// // define variables and set to empty values -->


?>






<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<fieldset>
<legend>Register</legend>
<p>Please fill in this form to create an account.</p>
<label for="name">Name:</label>
<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>" id="name" required>
<label for="email">Email:</label>
<input type="email" name="email" id="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" required>
<label for="username">Username:</label>
<input type="text" name="username" id="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>" required>
<label for="password">Password:</label>
<input type="password" name="password_1" id="password" value="<?php if(isset($_POST['password_1'])) echo htmlspecialchars($_POST['password']); ?>" required>
<label for="confirm_password">Confirm Password:</label>
<input type="password" name="confirm_password" id="confirm_password" required>
<button type="submit" name="reg_user" class="registerbtn">Register</button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'" class="cancelbtn">Cancel</button>
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
/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */

button {
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: red;
}

/* Center the image and position the close button */




</style>