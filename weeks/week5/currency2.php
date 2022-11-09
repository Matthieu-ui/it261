<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 2 form with drop down</title>
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

<label>Choose your banking institution</label>
<select name="bank">
<option value="NULL">Select One</option>
<!-- list bank options -->
<option value="Bank of America">Bank of America</option>
<option value="Chase Bank">Chase Bank</option>
<option value="Wells Fargo">Wells Fargo</option>
<option value="Citi Bank">Citi Bank</option>
<option value="US Bank">US Bank</option>




</select>
<!-- submit -->
<input type="submit" value="Convert">
<!-- reset -->

<button type="reset">Reset</button>
        </fieldset>
    
        <?php 
        //SERVER REQUEST METHOD
        //ASK IF FIELD IS EMPTY
        //IF EMPTY, DISPLAY ERROR MESSAGE
        //IF NOT EMPTY, DISPLAY CONVERSION
  
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(empty($_POST['name'])) {
                echo '<p class="error">Please enter your name</p>';
            } 
            if(empty($_POST['email'])) {
                echo '<p class="error">Please enter your email</p>';
            }
            if(empty($_POST['amount'])) {
                echo '<p class="error">Please enter an amount</p>';
            }
            if(empty($_POST['currency'])) {
                echo '<p class="error">Please select a currency</p>';
            }
            if(empty($_POST['bank'])) {
                echo '<p class="error">Please select a bank</p>';
            }
            

        
            } if (isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'], $_POST['bank'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $amount = $_POST['amount'];
                $currency = $_POST['currency'];
                $bank = $_POST['bank'];
                //conversion to 2 decimal places
                $conversion = number_format($amount * $currency, 2);
          
                echo '
                <div class="box">
                <p>Hi <b>' . $name . '</b>,<br/><br/> Your currency conversion is <b>$' . $conversion . '</b> American dollars and we will be emailing you at <b>'.$email.'</b> with more information regarding this conversion, as well as depositing your funds at <b>'.$bank.'.</b><br/><br/>Thank you!</p>
                </div>';
            }
        
        
        ?>
    </form>
    <?php include '../components/footer.php'; ?>
</body>
</html>