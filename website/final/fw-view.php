<?php
include './includes/header.php';

if (isset($_GET['id'])) { //show data
    $id = (int)$_GET['id'];
} else { //redirect to safe page
    header('Location:frameworks.php');
}


//  sql

$sql = "SELECT * FROM frameworks WHERE fw_id = $id";

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

// ask if more than 0 rows found

if (mysqli_num_rows($result) > 0) { //show records

    while ($row = mysqli_fetch_assoc(
        $result

    )) {
        $fw_id = (int)$row['fw_id'];
        $Name = stripslashes($row['fw_name']);
        $Description = stripslashes($row['fw_description']);
        $Version = stripslashes($row['fw_version']);
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


<div class="container">
    <div class="row">
        <section>
            <div class="one-half column text-center">

                <!-- image -->


                <img src="./images/<?php echo $Name; ?>.svg" alt="<?php echo $Name; ?> logo" style="width: 100px; height: 100px;     width: 100px;
    margin: inherit;
  ">

            </div>
            <div class="row">
                <div class="one-half column">
                    <h1><?php echo $Name; ?></h1>


                    <small>
                        Version:

                        <?php echo $Version; ?>

                    </small>


                    <h2>What is <?php echo $Name; ?></h2>
                    <p><?php echo $Description; ?></p>
                </div>
            </div>
        </section>
    </div>
</div>



<div class=container>
    <div class=row>
        <div class="full column">

            <?php include './includes/footer.php' ?>