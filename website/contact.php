<?php
// contact form php
//err handle

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    //reason

    if (empty($_POST['reason'])) {
        $reason_err = 'Please select a reason';
    } else {
        $reason = $_POST['reason'];
    }

    //how did you hear about us

    if (empty($_POST['how'])) {
        $how_err = 'Please select how you heard about us';
    } else {
        $how = $_POST['how'];
    }

    // comments

    if (empty($_POST['comments'])) {
        $comments_err = 'Please enter your comments';
    } else {
        $comments = $_POST['comments'];
    }

    // privacy

    if (empty($_POST['privacy'])) {
        $privacy_err = 'Please check the privacy box';
    } else {
        $privacy = $_POST['privacy'];
    }
}


//send email

if (isset(
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['reason'],
    $_POST['how'],
    $_POST['comments'],
    $_POST['privacy']
)) {

    $to = 'Mattfelker206@outlook.com';
    $subject = 'Email from ' . $first_name . ' ' . $last_name;
    $body = '' . $first_name . ' ' . $last_name . ' has filled out your form' . PHP_EOL . '';

    $body .= 'Email: ' . $email . '' . PHP_EOL . '';

    $body .= 'Reason: ' . $reason . '' . PHP_EOL . '';

    $body .= 'How did you hear about us: ' . $how . '' . PHP_EOL . '';

    $body .= 'Comments: ' . $comments . '' . PHP_EOL . '';

    $body .= 'Privacy: ' . $privacy . '' . PHP_EOL . '';

    $headers = array(
        'From' => 'mattfelker206@outlook.com',


    );

    if (!empty($first_name && $last_name && $email && $reason && $how && $comments && $privacy)) {
        mail($to, $subject, $body, $headers);

        header('Location: thx.php');

        exit;
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

<!-- form -->


<div class="container">
    <div class="row">
        <div class="full column">
            <div class="contact-form">
                <h2>Contact Matthieu</h2>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <!-- include span errors -->
                    <fieldset>

                        <legend>Please fill out this form</legend>

                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>" id="first_name" placeholder="First Name" required>
                        <!-- err -->

                        <span class="error" id="first_name_err"><?php if (isset($first_name_err)) echo $first_name_err; ?></span>

                        <label for="last_name">Last Name</label>

                        <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>" id="last_name" placeholder="Last Name" required>

                        <!-- err -->

                        <span class="error" id="last_name_err"><?php if (isset($last_name_err)) echo $last_name_err; ?></span>

                        <label for="email">Email</label>

                        <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" id="email" placeholder="Email" required>

                        <!-- err -->

                        <span class="error" id="email_err"><?php if (isset($email_err)) echo $email_err; ?></span>

                        <label for="reason">Reason for Contact</label>

                        <select name="reason" id="reason" required>

                            <option value="">Select a reason</option>

                            <option value="General Question" <?php if (isset($_POST['reason']) && $_POST['reason'] == 'General Question') echo 'selected="selected"'; ?>>General Question</option>

                            <option value="Website Issue" <?php if (isset($_POST['reason']) && $_POST['reason'] == 'Website Issue') echo 'selected="selected"'; ?>>Website Issue</option>

                            <option value="Other" <?php if (isset($_POST['reason']) && $_POST['reason'] == 'Other') echo 'selected="selected"'; ?>>Other</option>

                        </select>

                        <!-- err -->

                        <span class="error" id="reason_err"><?php if (isset($reason_err)) echo $reason_err; ?></span>

                        <label for="how">How did you hear about us?</label>

                        <select name="how" id="how" required>

                            <option value="">Select an option</option>

                            <option value="Google" <?php if (isset($_POST['how']) && $_POST['how'] == 'Google') echo 'selected="selected"'; ?>>Google</option>

                            <option value="Friend" <?php if (isset($_POST['how']) && $_POST['how'] == 'Friend') echo 'selected="selected"'; ?>>Friend</option>

                            <option value="Other" <?php if (isset($_POST['how']) && $_POST['how'] == 'Other') echo 'selected="selected"'; ?>>Other</option>

                        </select>

                        <!-- err -->

                        <span class="error" id="how_err"><?php if (isset($how_err)) echo $how_err; ?></span>

                        <label for="comments">Comments</label>

                        <textarea name="comments" id="comments" placeholder="Comments" required><?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>

                        <!-- err -->

                        <span class="error" id="comments_err"><?php if (isset($comments_err)) echo $comments_err; ?></span>




                        <hr />
                        <label id="privacy" for="privacy">I agree to the privacy policy <input value="yes" type="checkbox" name="privacy" id="privacy" required <?php if (isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked="checked"'; ?>></label>

                        <!-- err -->

                        <span class="error" id="privacy_err"><?php if (isset($privacy_err)) echo $privacy_err; ?></span>

                        <br />


                        <input id="send-form" type="submit" value="Send">

                        <input id="send-form" type="button" onClick="window.location.href='<?php echo $_SERVER['PHP_SELF'] ?>'" value="Reset">


                    </fieldset>

                </form>
            </div>

        </div>
    </div>

    <?php include './src/components/footer.php'; ?>