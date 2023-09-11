<nav>
    <?php if (isset($_SESSION['user'])) : ?>
        <a href="index.php">Cicáim</a>
        <a href="add_cat.php">Cica hozzáadása</a>
        <a href="logout.php">Kijelentkezés</a>
    <?php else : ?>
        <a href="login.php">Bejelentkezés</a>
        <a href="register.php">Regisztráció</a>
    <?php endif ?>
</nav>