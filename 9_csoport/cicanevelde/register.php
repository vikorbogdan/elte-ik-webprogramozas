<?php
include_once 'util.php';
session_start();
if (isset($_SESSION['user'])) redirect('index.php');

$error;
if (isset($_SESSION['register_error'])) {
    $error = $_SESSION['register_error'];
    unset($_SESSION['register_error']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Manager - Regisztráció</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include_once 'navigation.php';
    ?>
    <h1>Regisztráció</h1>

    <form action="./queries/register_query.php" method="post">
        <label for="username">Felhasználónév</label>
        <input type="text" name="username" id="username">
        <label for="password">Jelszó</label>
        <input type="password" name="password1" id="password1">
        <label for="password">Jelszó mégegyszer</label>
        <input type="password" name="password2" id="password2">
        <button type="submit">Regisztráció!</button>
    </form>
    <?php if (isset($error)) : ?>
        <span class="error"><?= $error ?></span>
    <?php endif ?>
    <footer>⚠ Az oldal nem használ biztonságos kommunikációt, és plain textként tárolja a jelszavad a szerveren. <br />
        <b>Ne adj meg szenzitív adatokat, vagy olyan jelszót, amit máshol is használsz!</b>
    </footer>
</body>

</html>