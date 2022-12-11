<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');


function myError($myFile, $myLine, $errorMsg)
{
    if (defined('DEBUG') && DEBUG) {
        echo 'Error in file: <b> ' . $myFile . ' </b> on line: <b> ' . $myLine . ' </b>';
        echo 'Error message: <b> ' . $errorMsg . '</b>';
        die();
    } else {
        echo ' Houston, we have a problem!';
        die();
    }
}

?>


<?php include './src/components/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="full-column">
            <?php include './src/components/nav.php' ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="full-column" style="text-align: center;">
            <h1>Gallery of Minerals</h1>
            <p>Learn more about these Minerals!</p>
        </div>

        <?php


        // sql connection

        $sql = "SELECT * FROM minerals";

        $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

        $result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

        // ask if more than 0 rows found

        if (mysqli_num_rows($result) > 0) { //show records

            while ($row = mysqli_fetch_assoc($result)) {

                echo '<div class="one-half column">

                <h2>' . $row['mineral_name'] . '</h2>

 
                
        <img class="mineral_img" src="../website/src/assets/gallery/mineral' . $row['mineral_id'] . '.jpg" alt="' . $row['mineral_name'] . '" />
         

                <p><a href="mineral-view.php?id=' . $row['mineral_id'] . '">Learn More</a></p>

           
                </div>';
            } // close while    

        } else { // what if no records

            echo 'Nobody home!';
        }


        ?>
    </div>
</div>


<?php include './src/components/footer.php'; ?>

<!-- create side by side grid for gallery-->