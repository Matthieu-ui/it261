<div class="nav-container">
<nav>
    <ul>
        <li><a href="#"><button>Home</button></a></li>
        <li><a href="#"><button>and</button></a></li>
        <li><a href="#"><button>back</button></a></li>
        <li>
        <a onclick=darkMode()><?php echo"<img class='dark-moon' src='./src/assets/icons/icons8-moon-man-48.png' alt='Dark Mode'" ?></a></li>
    </ul>
</nav>
</div>

<script>
darkMode = () => {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>