<!--type = text
type = number
type = email
select-option
radio
submit -->

<!-- Miles
Price
Efficiency -->

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
            <legend>Travel Calculator</legend>
            <div class="input-group">
            <label for="miles">Total trip miles</label>
            <input type="number" name="miles" id="miles">
            </div>
            <div class="input-group">
            <label for="average-speed">Average speed</label>
            <input type="number" name="averageSpeed" id="averageSpeed">
            </div>
            <label for="average-drive-time">Time behind the wheel</label>
            <div class="input-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price">
            </div>
            <label for="efficiency">Fuel Efficiency</label>
            <select name="efficiency" id="efficiency">
 
                <option value="10">10 - bad</option>
                <option value="20">20 better</option>
                <option value="30">30</option>
                <option value="40">40</option>
                <option value="50">50</option>
            </select>
            <input type="submit" value="Calculate">
            <input type="reset" value="Reset">
        </fieldset>

    </form>
<!-- php include footer -->
<?php include '../components/footer.php'; ?>
</body>

</html>