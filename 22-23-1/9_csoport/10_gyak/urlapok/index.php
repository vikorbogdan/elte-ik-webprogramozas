<?php

// Készíts olyan oldalt, amelynek paraméterül adva egy nevet, azt üdvözli (Hello név!)!

// a) A nevet URL-ben adjuk meg!
// b) A nevet űrlapon keresztül adjuk meg! 

var_dump($_GET);


$nev = $_GET['nev'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üdvözlő</title>
</head>

<body>

    <h1>Hello <?= $nev ?> </h1>
    <form method="GET">
        <h2>Itt add meg a nevedet!</h2>
        <input type="text" name="nev" id="nev">
        <input type="text" name="eletkor" id="eletkor">
        <input type="text" name="hobbi" id="eletkor">
        <input type="text" name="kedvenc_film" id="eletkor">
        <button type="submit">Elküldés</button>
    </form>
</body>

</html>