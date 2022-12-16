<?php include './includes/header.php'

?>

<div class="container">
    <div class="row">
        <div class="Full column">

            <h1 class="text-center">Curious about PHP frameworks?</h1>
            <hr/>
            <?php
            $sql = "SELECT * FROM frameworks";

            $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

            $result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

            // ask if more than 0 rows found

            if (mysqli_num_rows($result) > 0) { //show records



                while ($row = mysqli_fetch_assoc($result)) {


                    echo '

                    <div class="one-third column text-center">

                        <h2>' . $row['fw_name'] . ' ' . $row['fw_version'] . '</h2>';

            

                        echo '<img src="./images/' . $row['fw_name'] . '.svg" alt="' . $row['fw_name'] . ' logo" style="width: 100px; height: 100px;">';

                        echo '<p><a href="fw-view.php?id=' . $row['fw_id'] . '">More info</a></p>
                        

                    </div>
                    

                    ';

                } // close while    

            } else { // what if no records

                echo 'Nobody home!';
            }

            // release web server resources

            mysqli_free_result($result);

            // close connection to mysql

            mysqli_close($iConn);
            ?>


        </div>

    </div>
</div>


<div class=container>
    <div class=row>
        <div class="full column">

            <?php include './includes/footer.php' ?>

