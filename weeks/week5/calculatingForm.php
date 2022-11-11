<?php 
     //SERVER REQUEST METHOD
        //ASK IF FIELD IS EMPTY
        //IF EMPTY, DISPLAY ERROR MESSAGE
        //IF NOT EMPTY, DISPLAY VALUE
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['name'])) {
                $name_err = 'Please enter your name.';
            } else {
                $name = $_POST['name'];
            }
            if (empty($_POST['total_miles'])) {
                $total_miles_err = 'Please enter the total miles you will be driving.';
            } else {
                $total_miles = $_POST['total_miles'];
            }
            if (empty($_POST['speed'])) {
                $speed_err = 'Please enter the speed of travel.';
            } else {
                $speed = $_POST['speed'];
            }
            if (empty($_POST['hours'])) {
                $hours_err = 'Please enter the hours per day you will be driving.';
            } else {
                $hours = $_POST['hours'];
            }
            if (empty($_POST['price'])) {
                $price_err = 'Please select the price of gas.';
            } else {
                $price = $_POST['price'];
            }
            if (empty($_POST['efficiency'])) {
                $efficiency_err = 'Please select the fuel efficiency.';
            } else {
                $efficiency = $_POST['efficiency'];
            }
        }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>travel calculator</title>
    <link href="../styles/weekstyles.css" rel="stylesheet">
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset class="form-group">

              <h1>Travel Calculator</h1>
                <label>Name</label>
                <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>" id="name">
                <!-- err -->
                <span class="error" id="name_err"><?php if (isset($name_err)) echo $name_err; ?></span>
                <label>Total Miles Driving</label>
                <input type="number" name="total_miles" value="<?php if (isset($_POST['total_miles'])) echo htmlspecialchars($_POST['total_miles']); ?>" id="total_miles">
                <!-- err -->
                <span class="error" id="total_miles_err"><?php if (isset($total_miles_err)) echo $total_miles_err; ?></span>
                <label>Speed of Travel</label>
                <input type="number" name="speed" value="<?php if (isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']); ?>" id="speed">
                <!-- err -->
                <span class="error" id="speed_err"><?php if (isset($speed_err)) echo $speed_err; ?></span>
                <label>Hours per Day Driven</label>
                <input type="number" name="hours" value="<?php if (isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']); ?>" id="hours">
                <!-- err -->
                <span class="error" id="hours_err"><?php if (isset($hours_err)) echo $hours_err; ?></span>

                <label>Price of Gas</label>
                <!-- radio -->
                <input type="radio" name="price" value="2.00" <?php if (isset($_POST['price']) && $_POST['price'] == '2.00') echo 'checked="checked"'; ?>>
                <label >$2.00</label>
                <input type="radio" name="price" value="2.50"<?php if (isset($_POST['price']) && $_POST['price'] == '2.50') echo 'checked="checked"'; ?>>
                <label >$2.50</label>
                <input type="radio" name="price" value="3.00" <?php if (isset($_POST['price']) && $_POST['price'] == '3.00') echo 'checked="checked"'; ?>>
                <label >$3.00</label>
                <!-- err -->
                <span class="error" id="price_err"><?php if (isset($price_err)) echo $price_err; ?></span>
                <label>Fuel Efficiency</label>
                <!-- select -->
                <select name="efficiency" id="efficiency">
                    <option value="10" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '10') echo 'selected="selected"'; ?>>10</option>
                    <option value="15" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '15') echo 'selected="selected"'; ?>>15</option>
                    <option value="20" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '20') echo 'selected="selected"'; ?>>20</option>
                    <option value="25" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '25') echo 'selected="selected"'; ?>>25</option>
                    <option value="30" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '30') echo 'selected="selected"'; ?>>30</option>
                </select>
                <!-- err -->
                <span class="error" id="efficiency_err"><?php if (isset($efficiency_err)) echo $efficiency_err; ?></span>
                <input type="submit" name="submit" value="Calculate">
                <a href="calculatingForm.php">Reset</a>
        </fieldset>

        <?php



        //IF NO ERRORS, DISPLAY RESULTS

        if (isset($name, $total_miles, $speed, $hours, $price, $efficiency)) {
            $total_time = $total_miles / $speed;
            $total_days = $total_time / $hours;
            $total_gas = $total_miles / $efficiency;
            $total_cost = $total_gas * $price;
            echo "<div class='box'>
            
            <h2>Results</h2>
            <p>$name, you will be driving $total_miles miles at $speed miles per hour for $hours hours per day. You will be burning $total_gas gallons of gas at $price per gallon. Your total cost will be $total_cost.</p>
            </div>";
        }

        ?>



    </form>
<!-- php include footer -->
<?php include '../components/footer.php'; ?>
</body>

</html>