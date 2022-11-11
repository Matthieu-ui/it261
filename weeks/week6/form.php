<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1 Week 6</title>
    <link href="../styles/weekstyles.css" rel="stylesheet">
</head>
<body>
    <!-- Email contact form  -->
   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
       <fieldset class="form-group">
           <h1>Form 1</h1>
          <label>First Name</label>
              <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>" id="first_name">
              <label>Last Name</label>
                <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>" id="last_name">
           <label>Email</label>
           <input type="text" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" id="email">
           <label>Phone Number</label>
              <input type="tel" name="phone" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>" id="phone">
            <!-- checkbox -->
            <label>Favorite Wines</label>
            <ul>
                <li><input type="checkbox" name="wines[]" value="red" <?php if (isset($_POST['wines']) && in_array('red', $_POST['wines'])) echo 'checked="checked"'; ?>>Red</li>
                <li><input type="checkbox" name="wines[]" value="white" <?php if (isset($_POST['wines']) && in_array('white', $_POST['wines'])) echo 'checked="checked"'; ?>>White</li>
                <li><input type="checkbox" name="wines[]" value="rose" <?php if (isset($_POST['wines']) && in_array('rose', $_POST['wines'])) echo 'checked="checked"'; ?>>Rose</li>
            </ul>

            <!-- select regions -->
            <label>Favorite Wine Region</label>
            <select name="region" id="region">
                <option value="" NULL <?php if(isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected="unselected"' ; ?>>Select One</option>
               <option value="california" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'california') echo 'selected="selected"' ; ?>>California</option>
                <option value="oregon" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'oregon') echo 'selected="selected"' ; ?>>Oregon</option>
                <option value="washington" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'washington') echo 'selected="selected"' ; ?>>Washington</option>
                <option value="france" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'france') echo 'selected="selected"' ; ?>>France</option>
                <option value="italy" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'italy') echo 'selected="selected"' ; ?>>Italy</option>
                <option value="spain" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'spain') echo 'selected="selected"' ; ?>>Spain</option>
                
            </select>
            <!-- radio buttons -->
        
            <label>Preferred Season</label>
          
            <ul>
                <li><input type="radio" name="season" value="spring" <?php if (isset($_POST['season']) && $_POST['season'] == 'spring') echo 'checked="checked"'; ?>>Spring</li>
                <li><input type="radio" name="season" value="summer" <?php if (isset($_POST['season']) && $_POST['season'] == 'summer') echo 'checked="checked"'; ?>>Summer</li>
                <li><input type="radio" name="season" value="fall" <?php if (isset($_POST['season']) && $_POST['season'] == 'fall') echo 'checked="checked"'; ?>>Fall</li>
                <li><input type="radio" name="season" value="winter" <?php if (isset($_POST['season']) && $_POST['season'] == 'winter') echo 'checked="checked"'; ?>>Winter</li>
            
              
     <label>Comments</label>
        <textarea name="comments" id="comments"><?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
        <label>Privacy</label>
        <ul>
            <li><input type="radio" name="privacy" value="yes" <?php if (isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked="checked"'; ?>>Yes</li>
        </ul>
              <!-- submit form -->
           <input type="submit" value="Send">
           <!-- reset form-->
           <a href="form.php">Reset</a>
       </fieldset>

<!-- footer -->
       <?php include '../components/footer.php'; ?>
       
</body>
</html>