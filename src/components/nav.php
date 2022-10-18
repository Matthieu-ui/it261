<div class="nav-container">
    <nav>
        <ul>
          
            <li><a href="../../it261/website/index.php">PHP Website</a></li>
            <li><a href="#weeks">Assignments</a></li>
      
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