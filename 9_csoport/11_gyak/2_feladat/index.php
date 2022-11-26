<?php


// Készíts olyan oldalt, amelynek háttérszínét paraméterként lehet megadni.

//     a) A színkódot URL-ben add meg!
//     b) Készíts három hivatkozást kék, sárga, piros felirattal,
//        amelyekre kattintva az oldal háttérszíne megfelelően változik!
//     c) A színkódot űrlap segítségével adjuk meg!

$red = $_GET['red'];
$green = $_GET['green'];
$blue = $_GET['blue'];

var_dump($_GET)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hattérszín</title>
</head>

<body style="background: rgb(<?= $red ?>, <?= $green ?>, <?= $blue ?>);">
    <h1>Cím</h1>
    <ul>
        <li><a href="./index.php/?red=0&green=30&blue=255">Kék</a></li>
        <li><a href="./index.php/?red=255&green=255&blue=0">Sárga</a></li>
        <li><a href="./index.php/?red=255&green=0&blue=0">Piros</a></li>
        <li><a href="./index.php/?red=255&green=255&blue=255">Fehér</a></li>

    </ul>
    <form>
        <label for="red">Piros</label>
        <input name="red" type="range" min="1" max="255" value="50">
        <label for="green">Zöld</label>
        <input name="green" type="range" min="1" max="255" value="50">
        <label for="blue">Kék</label>
        <input name="blue" type="range" min="1" max="255" value="50">
        <button type="submit">Elküldés</button>
    </form>
</body>

</html>