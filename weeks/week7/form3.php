<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //err handle
    if (empty($_POST['first_name'])) {
        $first_name_err = 'Please enter your first name';
    } else {
        $first_name = $_POST['first_name'];
    }
    if (empty($_POST['last_name'])) {
        $last_name_err = 'Please enter your last name';
    } else {
        $last_name = $_POST['last_name'];
    }
    if (empty($_POST['email'])) {
        $email_err = 'Please enter your email';
    } else {
        $email = $_POST['email'];
    }


    // if (empty($_POST['phone'])) {
    //     $phone_err = 'Please enter your phone number';
    // } else {
    //     $phone = $_POST['phone'];
    // }

//preg_match    
    if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_err = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone_err = 'Invalid format!';
        } else{
        $phone = $_POST['phone'];
        } // end else
        } // end main if

    // wines
    if (empty($_POST['wines'])) {
        $wines_err = 'Please select your favorite wines';
    } else {
        $wines = $_POST['wines'];
    }
    //region is select one or NULL
    if (empty($_POST['region'])) {
        $region_err = 'Please select your favorite region';
    } else {
        $region = $_POST['region'];
    }

    //season
    if (empty($_POST['season'])) {
        $season_err = 'Please select your favorite wine season';
    } else {
        $season = $_POST['season'];
    }
    //comments
    if (empty($_POST['comments'])) {
        $comments_err = 'Please enter your comments';
    } else {
        $comments = $_POST['comments'];
    }
    //privacy
    if (empty($_POST['privacy'])) {
        $privacy_err = 'Please agree to our privacy policy';
    } else {
        $privacy = $_POST['privacy'];
    }
};



// send to email PHP_EOL
if(isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_POST['wines'], $_POST['region'], $_POST['season'], $_POST['comments'], $_POST['privacy'])) {
    $to = 'mattfelker206@outlook.com';
    $subject = 'Test Email';
    $body = ''.$first_name.' '.$last_name.' has filled out your form'.PHP_EOL.'';
    $body .= 'Email: '.$email.''.PHP_EOL.'';
    $body .= 'Phone: '.$phone.''.PHP_EOL.'';
    $body .= 'Favorite Wines: '.$wines.''.PHP_EOL.'';
    $body .= 'Favorite Wine Region: '.$region.''.PHP_EOL.'';
    $body .= 'Favorite Wine Season: '.$season.''.PHP_EOL.'';
    $body .= 'Comments: '.$comments.''.PHP_EOL.'';
    $body .= 'Privacy: '.$privacy.''.PHP_EOL.'';
    
    
$headers = array(
    'From' => 'noreply@mystudentswa.com',
);
  
}

if(!empty(
$first_name &&
$last_name &&
$email &&
$season &&
$wines &&
$phone &&
$region &&
$comments &&
$privacy) &&
$preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])){

    mail($to, $subject, $body, $headers);
    header('Location: thx.php');
    exit;

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3 Week 7</title>
    <link href="../styles/weekstyles.css" rel="stylesheet">
</head>

<body>
    <!-- Email contact form  -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset class="form-group">
            <h1>Form 3</h1>
            <label>First Name</label>
            <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>" id="first_name">
            <!-- err -->
            <span class="error" id="first_name_err"><?php if (isset($first_name_err)) echo $first_name_err; ?></span>
            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>" id="last_name">
            <!-- err -->
            <span class="error" id="last_name_err"><?php if (isset($last_name_err)) echo $last_name_err; ?></span>
            <label>Email</label>
            <input type="text" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" id="email">
            <!-- err -->
            <span class="error" id="email_err"><?php if (isset($email_err)) echo $email_err; ?></span>
            <label>Phone Number</label>
            <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>" id="phone">
            <!-- err -->
            <span class="error" id="phone_err"><?php if (isset($phone_err)) echo $phone_err; ?></span>

            <!-- checkbox -->
            <label>Favorite Wines</label>

<ul><li>
    <input type="checkbox" name="wines[]" value="Cabernet Sauvignon" id="cabernet" <?php if(isset($_POST['wines']) && in_array('Cabernet Sauvignon', $wines)) ;?>>Cabernet Sauvignon
</li>
<li>
    <input type="checkbox" name="wines[]" value="Chardonnay" id="chardonnay" <?php if(isset($_POST['wines']) && in_array('Chardonnay', $wines)) ;?>>Chardonnay
</li>
<li>
    <input type="checkbox" name="wines[]" value="Merlot" id="merlot" <?php if(isset($_POST['wines']) && in_array('Merlot', $wines)) ;?>>Merlot
</li>
<li>
    <input type="checkbox" name="wines[]" value="Pinot Noir" id="pinot" <?php if(isset($_POST['wines']) && in_array('Pinot Noir', $wines)) ;?>>Pinot Noir
</li>
<li>
    <input type="checkbox" name="wines[]" value="Sauvignon Blanc" id="sauvignon" <?php if(isset($_POST['wines']) && in_array('Sauvignon Blanc', $wines)) ;?>>Sauvignon Blanc
</li>
<li>
    <input type="checkbox" name="wines[]" value="Syrah" id="syrah" <?php if(isset($_POST['wines']) && in_array('Syrah', $wines)) ;?>>Syrah
</li>

</ul>
            <!-- err if not selected -->
            <span class="error" id="wines_err"><?php if (isset($wines_err)) echo $wines_err; ?></span>


            <!-- select region -->
            <label>Favorite Wine Region</label>
            <select name="region" id="region">
                <option value="" NULL <?php if (isset($_POST['region']) && $_POST['region'] == NULL) echo 'unselected="unselected"'; ?>>Select One</option>
                <option value="california" <?php if (isset($_POST['region']) && $_POST['region'] == 'california') echo 'selected="selected"'; ?>>California</option>
                <option value="oregon" <?php if (isset($_POST['region']) && $_POST['region'] == 'oregon') echo 'selected="selected"'; ?>>Oregon</option>
                <option value="washington" <?php if (isset($_POST['region']) && $_POST['region'] == 'washington') echo 'selected="selected"'; ?>>Washington</option>
                <option value="france" <?php if (isset($_POST['region']) && $_POST['region'] == 'france') echo 'selected="selected"'; ?>>France</option>
                <option value="italy" <?php if (isset($_POST['region']) && $_POST['region'] == 'italy') echo 'selected="selected"'; ?>>Italy</option>
                <option value="spain" <?php if (isset($_POST['region']) && $_POST['region'] == 'spain') echo 'selected="selected"'; ?>>Spain</option>


            </select>
            <!-- err if select one -->
            <span class="error" id="region_err"><?php if (isset($region_err)) echo $region_err; ?></span>


            <!-- radio buttons -->

            <label>Preferred Season</label>

            <ul>
                <li><input type="radio" name="season" value="spring" <?php if (isset($_POST['season']) && $_POST['season'] == 'spring') echo 'checked="checked"'; ?>>Spring</li>
                <li><input type="radio" name="season" value="summer" <?php if (isset($_POST['season']) && $_POST['season'] == 'summer') echo 'checked="checked"'; ?>>Summer</li>
                <li><input type="radio" name="season" value="fall" <?php if (isset($_POST['season']) && $_POST['season'] == 'fall') echo 'checked="checked"'; ?>>Fall</li>
                <li><input type="radio" name="season" value="winter" <?php if (isset($_POST['season']) && $_POST['season'] == 'winter') echo 'checked="checked"'; ?>>Winter</li>
            </ul>

            <span class="error" id="season_err"><?php if (isset($season_err)) echo $season_err; ?></span>

            <label>Comments</label>
            <textarea name="comments" id="comments"><?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
            <span class="error" id="comments_err"><?php if (isset($comments_err)) echo $comments_err; ?></span>

            <label>Privacy</label>
            <ul>
                <li><input type="radio" name="privacy" value="yes" <?php if (isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked="checked"'; ?>>Yes</li>
            </ul>
            <span class="error" id="privacy_err"><?php if (isset($privacy_err)) echo $privacy_err; ?></span>
            <!-- submit form -->
            <input type="submit" value="Send">
            <!-- reset form-->
            <input type="button" onClick="window.location.href='<?php echo $_SERVER['PHP_SELF'] ?>'" value="Reset">


        </fieldset>
    </form>
        <!-- footer -->
        <?php include '../components/footer.php'; ?>

</body>

</html>