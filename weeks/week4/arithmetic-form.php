<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form</title>
    <link href="../../src/styles/skeleton.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">
<div class="one-half column">
        <h1>Arithmetic Form</h1>
        <form action="" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name" id="name">
            <label>Phone</label>
            <input type="text" name="phone" id="phone">
            <label>Lattes</label>
            <input type="number" name="lattes" id="lattes">
            <label>Espressos</label>
            <input type="number" name="espressos" id="espressos">
            <label>Macchiatos</label>
            <input type="number" name="macchiatos" id="macchiatos">
            <label>Flat Whites</label>
            <input type="number" name="flat_whites" id="flat_whites">
            <label>Special Requests</label>
            <textarea name="special_requests" id="special_requests" cols="30" rows="10"></textarea>
            <input type="submit" value="Submit">
            <button><a href="arithmetic-form.php">reset</a></button>
        </fieldset>
    </form>
        </div>
        <div class="one-half column">
        <?php
    // name, phone, lattes, espressos, macchiatos, flat whites, special requests

    date_default_timezone_set('America/Los_Angeles');
    $our_date = date('H:i:s');

    if (isset($_POST['name'], $_POST['phone'], $_POST['lattes'], $_POST['espressos'], $_POST['macchiatos'], $_POST['flat_whites'], $_POST['special_requests'])) {

        if (empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['lattes']) || empty($_POST['espressos']) || empty($_POST['macchiatos']) || empty($_POST['flat_whites'])) {
            echo '<b style="color: red">Please fill out all fields :-)</b>';
        } else {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $lattes = $_POST['lattes'];
            $espressos = $_POST['espressos'];
            $macchiatos = $_POST['macchiatos'];
            $flat_whites = $_POST['flat_whites'];
            $special_requests = $_POST['special_requests'];
            $total = ($lattes * 4.50) + ($espressos * 3.50) + ($macchiatos * 4.00) + ($flat_whites * 4.75);


            if ($our_date >= '06:00:00' && $our_date <= '12:00:00') {
                echo '<h2>Good Morning ' . $name . '</h2>';
            } elseif ($our_date >= '12:00:01' && $our_date <= '17:00:00') {
                echo '<h2>Good Afternoon ' . $name . '</h2>';
            } elseif ($our_date >= '17:00:01' && $our_date <= '23:59:59') {
                echo '<h2>Good Evening ' . $name . '</h2>' . 
                '<b>We have texted your order to this number '.'' . $phone . '</b>';
            }

            echo '
         

                <h3>Order Summary</h3>
                <p>Lattes: ' . $lattes . ' ( $4.50 ) </p>
                <p>Espressos: ' . $espressos . ' ( $3.50 ) </p>
                <p>Macchiatos: ' . $macchiatos . ' ( $4.00 ) </p>
                <p>Flat Whites: ' . $flat_whites . ' ( $4.50 )</p>
                <p>Special Requests: ' . $special_requests . '</p>
                <p>Total: $' . $total . '</p>
            
     
             
            ';
        }
    }



    ?>
        </div>
   
 
   
</body>

</html>