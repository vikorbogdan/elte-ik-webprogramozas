<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<nav>
    <a href="index.php">
        <h1>FaceVuk</h1>
    </a>
    <div style="margin-right: 20px;">
        <?php if (!isset($_SESSION["user"])) : ?>
            <a style="color: white;" href="register.php">
                Register
            </a>
            <a style="color: white;" href="login.php">
                Log In
            </a>
        <?php else : ?>
            <a style="color: white;" href="logout.php">Kijelentkezés</a>
        <?php endif ?>
    </div>
    <form method="get">
        <input type="text" name="search" id="search">
        <button type="submit">
            <img src="./search-icon.svg" alt="Search">
        </button>
    </form>
</nav>