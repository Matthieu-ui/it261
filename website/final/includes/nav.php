<!-- nav menu -->

<ul>
    <?php define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
    $nav = array(
        'Home' => 'index.php',
        'About' => 'about.php',
        'Contact' => 'contact.php',
        'Switch' => 'switch.php',
        'Frameworks' => 'frameworks.php',

    );

    foreach ($nav as $key => $value) {
        if ($value == THIS_PAGE) {
            echo '<li><a class="active"
                    style="color: purple" href="' . $value . '">' . $key . '</a></li>';
        } else {
            echo '<li><a href="' . $value . '">' . $key . '</a></li>';
        }
    }

    ?>

</ul>