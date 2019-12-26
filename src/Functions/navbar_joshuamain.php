<div class="navbar">
    <a href="ChrisHome.php" style="background-color:#333;">Home</a>
    <div class="dropdown">
        <button class="dropbtn" style="background-color:#333;" onclick="myFunction()">Movies
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" style="background-color:#333;" id="myDropdown">
            <a href="Action.php" style="background-color:#333;">Action</a>
            <a href="Comedy.php" style="background-color:#333;">Comedy</a>
            <a href="Animated.php" style="background-color:#333;">Animated</a>
            <a href="Romantic.php" style="background-color:#333;">Romantic</a>
            <a href="Drama.php" style="background-color:#333;">Drama</a>
            <a href="Other.php" style="background-color:#333;">Other</a>
            <a href="Collections.php" style="background-color:#333;">Collections</a>
        </div>
    </div>
    <a href="profile.php" style="background-color:#333;">Profile</a>
    <a href="index.php" style="background-color:#333;">Sign out</a>
</div>
<script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (e) {
        if (!e.target.matches('.dropbtn')) {
            var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
                myDropdown.classList.remove('show');
            }
        }
    }
</script>
