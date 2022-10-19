<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My celsius table in PHP</title>
    <link href="../../src/styles/skeleton.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="one-half column">
                <h1 style="text-align: center;">My celcius / fahrenheit table</h1>
                <table style="width: 100%;">
                    <tr>

                        <th>Celsius</th>


                        <th>Fahrenheit</th>
                    </tr>
                    <?php
                    // for init counter; test counter; increment counter
                    // far = ($cel * 9/5) + 32
                    for($cel = 0; $cel <= 100; $cel += 5) {
                        $far = ($cel * 9 / 5) + 32;
                    

                    echo '<tr>';
                    echo '<td> '. $cel .'&#176; </td>';
                    echo '<td> '. $far .'&#176; </td>';
                    echo '</tr>';
                    }
                    ?>

                </table>
            </div>
            <div class="one-half column">
                <h1 style="text-align: center;">My Kilometer / Miles table</h1>
                <table style="width: 100%;">
                    <tr>

                        <th>Kilometer</th>
                        <th>Miles</th>
                        <?php 
                        for($km = 0; $km <= 100; $km += 5){
                            $miles = $km * 0.621371;
                            echo '<tr>';
                            echo '<td> '. $km .' km </td>';
                            echo '<td> '. $miles .' miles </td>';
                            echo '</tr>';
                        }
                        
                        ?>
        </div>
    </div>

</body>

</html>