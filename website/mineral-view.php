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


if (isset($_GET['id'])) { //show data
    $id = (int)$_GET['id'];
} else { //redirect to safe page
    header('Location:database.php');
}


//  sql

$sql = "SELECT * FROM minerals WHERE mineral_id = $id";

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

// ask if more than 0 rows found

if (mysqli_num_rows($result) > 0) { //show records

    while ($row = mysqli_fetch_assoc(
        $result

    )) {

        $mineralName = stripslashes($row['mineral_name']);
        $mineralorigin = stripslashes($row['mineral_origin']);
        $mineralchar = stripslashes($row['mineral_char']);
        $mineral_id = (int)$row['mineral_id'];
    }

?>

<?php

} else { //inform there are no records

    echo '<div class="one-half column">

    <h2>There are no records</h2>

    </div>';
}

// release web server resources

@mysqli_free_result($result);

// close connection to mysql

@mysqli_close($iConn);

?>

<?php include './src/components/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="full-column">
            <?php include './src/components/nav.php' ?>
        </div>
    </div>

    <div class="row">
        <div class="full column" style="text-align: center;">
            <h1>About <?php echo $mineralName; ?></h1>

        </div>

        <div class="one-half column">

            <img class="mineral_img" src="../website/src/assets/gallery/mineral<?php echo $mineral_id; ?>.jpg" alt="<?php echo $mineralName; ?>">

        </div>
        <div class="one-half column">
            <h3>Origin</h3>
            <p><?php echo $mineralorigin; ?></p>
            <h3>Characteristics</h3>
            <p><?php echo $mineralchar; ?></p>
        </div>

        <!-- back to minerals -->

        <div class="one-half column">

            <a href="database.php">Back to Minerals</a>
        </div>

    </div>



</div>


<?php include './src/components/footer.php'; ?>