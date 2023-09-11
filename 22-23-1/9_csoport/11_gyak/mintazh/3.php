<?php

$vizsgazok = json_decode(file_get_contents("vizsgazok.json"), true);
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP ZH - 3. feladat</title>
</head>

<body>
    <h1>ÉRETTSÉGI VIZSGA MATEMATIKÁBÓL</h1>
    <h2>3. feladat: adattárolás</h2>
    <h3>Könyvelt törzslapok</h3>
    <?php foreach ($vizsgazok as $torzslapszam => $konyvelve) : ?>
        <?= $konyvelve ? $torzslapszam . "<br />" : "" ?>
    <?php endforeach ?>
    <h3>Hiányos törzslapok</h3>
    <?php foreach ($vizsgazok as $torzslapszam => $konyvelve) : ?>
        <?= !$konyvelve ? $torzslapszam . "<br />" : "" ?>
    <?php endforeach ?>


</body>

</html>