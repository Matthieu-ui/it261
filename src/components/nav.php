<div class="nav-container">
    <nav>
        <ul>

            <?php
            define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
            $nav = array(
                'PHP Website' => '../../it261/website/index.php',
                'Assignments' => '#weeks'
            );
            foreach($nav as $key => $value){
                if($value == THIS_PAGE){
                    echo '<li><a; class="active" href="'.$value.'">'.$key.'</a></li>';
                } else {
                    echo '<li><a href="'.$value.'">'.$key.'</a></li>';
                }
            }
            ?>


            <!-- <li><a href="../../it261/website/index.php">PHP Website</a></li>
            <li><a href="#weeks">Assignments</a></li>
      
            <li>
                <a onclick=darkMode()><img class='dark-moon' src='./src/assets/icons/icons8-moon-man-48.png' alt='Dark Mode'></a>
            </li> -->
        </ul>
    </nav>
</div>

<script>
    darkMode = () => {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
</script>