<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Manager - Cica hozzáadása</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'navigation.php' ?>
    <h1>Cica hozzáadása</h1>
    <form action="./queries/add_cat_query.php" method="post">
        <label for="name">Cicád neve:</label>
        <input type="text" name="name" id="name">
        <label for="breed">Cicád fajtája:</label>
        <input type="text" name="breed" id="breed">
        <label for="food">Cicád kedvenc étele:</label>
        <input type="text" name="food" id="food">
        <button type="submit">Cica hozzáadása</button>
    </form>
    <footer>⚠ Az oldal nem használ biztonságos kommunikációt, és plain textként tárolja a jelszavad a szerveren. <br />
        <b>Ne adj meg szenzitív adatokat, vagy olyan jelszót, amit máshol is használsz!</b>
    </footer>
</body>

</html>