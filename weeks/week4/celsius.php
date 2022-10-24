<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Document</title>
    <link href="../../src/styles/skeleton.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <h1>Celsius Form Converter</h1>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <fieldset>
                        <label for="celsius">Celsius:</label>
                        <input type="text" name="celsius" id="celsius">
                        <input type="submit" value="Convert">
                        <button type="reset"><a href="celsius.php">Reset</a></button>
                    </fieldset>
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['celsius'])) {
        $celsius = $_POST['celsius'];
        // make sure values are intergers
        $celsius_int = intval($celsius);
        $fahrenheit = ($celsius_int * 9/5) + 32;

// if user does not enter a value, display a message
if(empty($celsius)) {
    echo '<b style="color: red">Please enter a value</b>';
} elseif($fahrenheit <= 32) {
    echo '<p style="color: blue">' . $celsius_int . ' degrees Celsius is ' . $fahrenheit . ' degrees Fahrenheit and it is freezing outside!</p>';
} elseif($fahrenheit > 32 && $fahrenheit <= 50) {
    echo '<b style="color: green">' . $celsius_int . ' degrees Celsius is ' . $fahrenheit . ' degrees Fahrenheit and it is cold outside!</b>';
} elseif($fahrenheit > 50 && $fahrenheit <= 70) {
    echo '<p style="color: orange">' . $celsius_int . ' degrees Celsius is ' . $fahrenheit . ' degrees Fahrenheit and it is warm outside!</p>';
} elseif($fahrenheit > 70 && $fahrenheit <= 90) {
    echo '<p style="color: red">' . $celsius_int . ' degrees Celsius is ' . $fahrenheit . ' degrees Fahrenheit and it is hot outside! </p>';
} elseif($fahrenheit > 90) {
    echo '<p style="color: red">' . $celsius_int . ' degrees Celsius is ' . $fahrenheit . ' degrees Fahrenheit and it is boiling outside!</p>';
}
    }
}
?>

                </form>
            </div>
        </div>
    </div>
</body>
</html>