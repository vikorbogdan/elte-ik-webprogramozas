<?php
include_once 'util.php';

session_start();
if (isset($_SESSION['user'])) redirect('index.php');

$error;
if (isset($_SESSION['login_error'])) {
    $error = $_SESSION['login_error'];
    unset($_SESSION['login_error']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Cat Manager - Bejelentkezés</title>
</head>

<body>
    <?php
    include_once 'navigation.php';
    ?>
    <?php if (isset($error)) : ?>
        <span class="error"><?= $error ?></span>
    <?php endif ?>
    <?php if (isset($_GET['register'])) : ?>
        <span class="success">Sikeres regisztráció!</span>
    <?php endif ?>
    <h1>Jelentkezz be!</h1>
    <form action="./queries/login_query.php" method="post">
        <label for="username">Felhasználónév</label>
        <input type="text" name="username" id="username">
        <label for="password">Jelszó</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Bejelentkezés">
    </form>
    <a href="register.php">Nincs felhasználód? Regisztrálj!</a>
</body>

</html>