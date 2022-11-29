<?php
include('config.php');
include 'includes/header.php';
?>

<div id="wrapper">
    <main>

        <?php
        $sql = "SELECT * FROM people";

        $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

        $result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

        // ask if more than 0 rows found

        if (mysqli_num_rows($result) > 0) { //show records

            while ($row = mysqli_fetch_assoc($result)) {

                echo '<h2>Information about: ' . $row['FirstName'] . '</h2>
<ul>
<li><b>First Name:</b> ' . $row['FirstName'] . '</li>
<li><b>Last Name:</b> ' . $row['LastName'] . '</li>
<li><b>Email:</b> ' . $row['Email'] . '</li>
</ul>

<p>For more information about ' . $row['FirstName'] . ', <a href="people-view.php?id=' . $row['PeopleID'] . '">click here</a></p>

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

    </main>
</div>

<?php
include('./includes/footer.php');
?>





?>