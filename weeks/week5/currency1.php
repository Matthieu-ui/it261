<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 1 PHP</title>
    <link href="../styles/weekstyles.css" rel="stylesheet">
</head>
<body> 

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset class="form-group">
<!-- name, email, amount of money, choose currency, convert -->

<h1>Currency Conversion Form</h1>

<label>Name</label>
<input type="text" name="name" id="name">
<label>Email</label>
<input type="text" name="email" id="email">
<label>Amount of Money</label>
<input type="number" name="amount" id="amount">
<!-- radio/ different currency -->
<label>Choose Currency</label>
<hr/>
<br/>
<ul>
<li><input type="radio" name="currency" value="0.02">Rubles</li>
<li><input type="radio" name="currency" value="0.73">Canadian Dollars</li>
<li><input type="radio" name="currency" value="1.16">Pounds</li>
<li><input type="radio" name="currency" value="1.00">Euros</li>
<li><input type="radio" name="currency" value="0.0068">Yen</li>
</ul>
<!-- submit -->
<input type="submit" value="Convert">
<!-- reset refreshes page -->

<button type="reset">reset</button>

        </fieldset>
    
        <?php 
        //SERVER REQUEST METHOD
        //ASK IF FIELD IS EMPTY
        //IF EMPTY, DISPLAY ERROR MESSAGE
        //IF NOT EMPTY, DISPLAY CONVERSION
  
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['amount']) || empty($_POST['currency'])) {
                echo '<b style="color: red">Please fill out all fields :-)</b>';
            } elseif (isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $amount = $_POST['amount'];
                $currency = $_POST['currency'];
                //conversion to 2 decimal places
                $conversion = number_format($amount * $currency, 2);
          
                echo '
                <div class="box">
                <p>Hi <b>' . $name . '</b>,<br/><br/> Your currency conversion is <b>$' . $conversion . '</b> American dollars and we will be emailing you at <b>'.$email.'</b> with more information regarding this conversion.<br/><br/>Thank you!</p>
                </div>';
            }
        }
        
        ?>
    </form>
    <?php include '../components/footer.php'; ?>
</body>
</html>