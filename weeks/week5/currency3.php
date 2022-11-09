<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 3 stick form</title>
    <link href="../styles/weekstyles.css" rel="stylesheet">
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset class="form-group">
            <!-- name, email, amount of money, choose currency, convert -->

            <h1>Currency Conversion Form</h1>

            <label>Name</label>
            <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>" id="name">
            <label>Email</label>
            <input type="text" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" id="email">
            <label>Amount of Money</label>
            <input type="number" name="amount" value="<?php if (isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']); ?>" id="amount">
            <!-- radio/ different currency -->
            <label>Choose Currency</label>
            <hr />
            <br />
            <ul>
                <li><input type="radio" name="currency" value="0.02" <?php if (isset($_POST['currency']) && $_POST['currency'] == 0.02) echo 'checked="checked"'; ?>>Rubles</li>
                <li><input type="radio" name="currency" value="0.73" <?php if (isset($_POST['currency']) && $_POST['currency'] == 0.73) echo 'checked="checked"'; ?>>Canadian Dollars</li>
                <li><input type="radio" name="currency" value="1.16" <?php if (isset($_POST['currency']) && $_POST['currency'] == 1.16) echo 'checked="checked"'; ?>>Pounds</li>
                <li><input type="radio" name="currency" value="1.00" <?php if (isset($_POST['currency']) && $_POST['currency'] == 1.00) echo 'checked="checked"'; ?>>Euros</li>
                <li><input type="radio" name="currency" value="0.0068" <?php if (isset($_POST['currency']) && $_POST['currency'] == 0.0068) echo 'checked="checked"'; ?>>Yen</li>
            </ul>

            <label>Choose your banking institution</label>
            <select name="bank">
                <option value="" NULL <?php if (isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected="unselected"' ?>>Select One</option>
                <!-- list bank options -->
                <option value="Bank of America" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'Bank of America') echo 'selected="selected"' ?>>Bank of America</option>
                <option value="Chase Bank" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'Chase Bank') echo 'selected="selected"' ?>>Chase Bank</option>
                <option value="Wells Fargo" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'Wells Fargo') echo 'selected="selected"' ?>>Wells Fargo</option>
                <option value="Citi Bank" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'Citi Bank') echo 'selected="selected"' ?>>Citi Bank</option>
                <option value="US Bank" <?php if (isset($_POST['bank']) && $_POST['bank'] == 'US Bank') echo 'selected="selected"' ?>>US Bank</option>




            </select>
            <!-- submit -->
            <input type="submit" value="Convert">
            <!-- reset -->

            <button><a href="currency2.php">reset</a></button>
        </fieldset>

        <?php
        //SERVER REQUEST METHOD
        //ASK IF FIELD IS EMPTY
        //IF EMPTY, DISPLAY ERROR MESSAGE
        //IF NOT EMPTY, DISPLAY CONVERSION

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['name'])) {
                echo '<p class="error">Please enter your name</p>';
            }
            if (empty($_POST['email'])) {
                echo '<p class="error">Please enter your email</p>';
            }
            if (empty($_POST['amount'])) {
                echo '<p class="error">Please enter an amount</p>';
            }
            if (empty($_POST['currency'])) {
                echo '<p class="error">Please select a currency</p>';
            }

            //if bank null, display error message
            if ($_POST['bank'] == NULL) {
                echo '<p class="error">Please select a bank</p>';
            }
        }
        if (isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'], $_POST['bank'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            // floatval() converts a string to a float
            // $amount = $_POST['amount'];
            $amount = floatval($_POST['amount']);
            $currency = $_POST['currency'];
            $bank = $_POST['bank'];
            //conversion to 2 decimal places
            $conversion = number_format($amount * $currency, 2);

            //don't display unless all fields are filled out

            if (!empty($name) && !empty($email) && !empty($amount) && !empty($currency) && !empty($bank))

                echo '
                <div class="box">
                <p>Hi <b>' . $name . '</b>,<br/><br/> Your currency conversion is <b>$' . $conversion . '</b> American dollars and we will be emailing you at <b>' . $email . '</b> with more information regarding this conversion, as well as depositing your funds at <b>' . $bank . '.</b><br/><br/>Thank you!</p>
                </div>';
        }


        ?>
    </form>
</body>

</html>