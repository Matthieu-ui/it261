<?php
include('config.php');

if (isset($_GET['id'])) { //show data
    $id = (int)$_GET['id'];
} else { //redirect to safe page
    header('Location:people.php');
}

$sql = "SELECT * FROM people WHERE people_id=$id";

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

// ask if more than 0 rows found

if (mysqli_num_rows($result) > 0) { //show records

    while ($row = mysqli_fetch_assoc(
        $result

    )) {

        $FirstName = stripslashes($row['first_name']);
        $LastName = stripslashes($row['last_name']);
        $Email = stripslashes($row['email']);
        $birthdate = stripslashes($row['birthdate']);
        $occupation = stripslashes($row['occupation']);
 
        $details = stripslashes($row['details']);
        $feedback = '';
    } // close while



} else { 

    $feedback = 'There was a problem, please try again later.';
}

include './includes/header.php'; ?>

<div id="wrapper">
    <main>
        <h1>Welcome to our People View Page!</h1>

        <h2> Introducing <?php echo $FirstName; ?> </h2>
        <h3> <?php echo $FirstName; ?>'s Details </h3>
        <ul>
            <li><b>First Name:</b> <?php echo $FirstName; ?></li>
            <li><b>Last Name:</b> <?php echo $LastName; ?></li>
            <li><b>Email:</b> <?php echo $Email; ?></li>
            <li><b>Birthdate:</b> <?php echo $birthdate; ?></li>
            <li><b>Occupation:</b> <?php echo $occupation; ?></li>
            <li><b>Details:</b> <?php echo $details; ?></li>
        </ul>

        <!-- return to people page -->

        <p><a href="people.php">Return to People</a></p>

    </main>
    <aside>
       <h3>This is my aside!</h3>
       <figure>
       <img src="./images/people<? echo $id; ?>.jpg" alt="<? echo $FirstName; ?>">
       <figcaption><? echo ''.$FirstName.''.$LastName.''.$occupation.''; ?></figcaption>
       </figure>
    </aside>

<?php @mysqli_free_result($result); //free resources

@mysqli_close($iConn); //close connection

?>
</div>