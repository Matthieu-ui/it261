<div class="nav-container">
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="../../it261/index.php">Portal</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Daily</a></li>
            <li><a href="#">Database</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Gallery</a></li>
         
            <li>
                <a onclick=darkMode()><img class='dark-moon' src='./src/assets/icons/icons8-moon-man-48.png' alt='Dark Mode'></a>
            </li>
        </ul>
    </nav>
</div>

<script>
    darkMode = () => {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
</script>