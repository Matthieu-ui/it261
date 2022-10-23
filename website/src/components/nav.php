<div class="nav-container">
    <nav>
        <ul>
            <?php
            // <!-- <li><a href="#">Home</a></li>
            // <li><a href="../../it261/index.php">Portal</a></li>
            // <li><a href="#">About</a></li>
            // <li><a href="#">Daily</a></li>
            // <li><a href="#">Database</a></li>
            // <li><a href="#">Contact</a></li>
            // <li><a href="#">Gallery</a></li> -->

            $nav = array(
                'Home' => 'index.php',
                'Portal' => '../../it261/index.php',
                'About' => 'about.php',
                'Daily' => 'daily.php',
                'Database' => 'database.php',
                'Contact' => 'contact.php',
                'Gallery' => 'gallery.php'
            );

            foreach ($nav as $key => $value) {
                if ($value == THIS_PAGE) {
                    echo '<li><a class="active" style="color: purple"; href="' . $value . '">' . $key . '</a></li>';
                } else {
                    echo '<li><a href="' . $value . '">' . $key . '</a></li>';
                }
            }


            ?>



        </ul>
    </nav>
</div>

