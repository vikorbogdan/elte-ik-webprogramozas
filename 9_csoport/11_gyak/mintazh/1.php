<?php
$iskolak = [
    "035277" => ["nev" => "Budapesti Fazekas Mihály Ált. Iskola és Gimnázium", "kozep" => 65, "emelt" => 56],
    "035229" => ["nev" => "ELTE Apáczai Csere János Gyakorlógimnázium", "kozep" => 70, "emelt" => 43],
    "029743" => ["nev" => "Szegedi Radnóti Miklós Kísérleti Gimnázium", "kozep" => 82, "emelt" => 44],
    "037169" => ["nev" => "Lovassy László Gimnázium (Veszprém)", "kozep" => 92, "emelt" => 31],
    "037802" => ["nev" => "ELTE Radnóti Miklós Gyak. Ált. Isk. és Gimnázium", "kozep" => 76, "emelt" => 61],
    "027397" => ["nev" => "Pécsi Leőwey Klára Gimnázium", "kozep" => 66, "emelt" => 34],
    "035246" => ["nev" => "Budapest XIV. Kerületi Szent István Gimnázium", "kozep" => 78, "emelt" => 31],
    "037632" => ["nev" => "Zalaegerszegi Zrínyi Miklós Gimnázium", "kozep" => 61, "emelt" => 54],
    "031198" => ["nev" => "Debreceni Fazekas Mihály Gimnázium", "kozep" => 80, "emelt" => 23],
    "029261" => ["nev" => "Miskolci Herman Ottó Gimnázium", "kozep" => 73, "emelt" => 28]
];
ksort($iskolak);
//Minden iskolának megfelel egy-egy sor, amelynek első oszlopa helyesen 
// tartalmazza az OM azonosítót. (Az iskolához tartozó egyedi hatszámjegyű kódot,
//  amellyel a megadott tömb kulcsaként szolgál.)
// A második oszlopban megjelenik az oktatási intézmény teljes neve.
// A harmadik-negyedik oszlop tartalmazza az adott iskolában közép- és emelt szinten matematikából érettségizők számát.

$sum_kozep = array_sum(array_column($iskolak, "kozep"));
$sum_emelt = array_sum(array_column($iskolak, "emelt"));
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP ZH - 1. feladat</title>
</head>

<body>
    <h1>ÉRETTSÉGI VIZSGA MATEMATIKÁBÓL</h1>
    <h2>1. feladat: kimenetgenerálás</h2>
    <table>
        <tr>
            <th>OM azonosító</th>
            <th>Intézmény neve</th>
            <th>Középszint</th>
            <th>Emelt szint</th>
            <th>Összesen</th>
        </tr>
        <?php foreach ($iskolak as $om_azonosito => $iskola) : ?>
            <tr>
                <td><?= $om_azonosito ?></td>
                <td><?= $iskola["nev"] ?></td>
                <td><?= $iskola["kozep"] ?></td>
                <td><?= $iskola["emelt"] ?></td>
                <td><?= $iskola["emelt"] + $iskola["kozep"] ?></td>
            </tr>
        <?php endforeach ?>
        <tr>
            <td colspan="2" style="text-align: right"><b>Összesen:</b></td>
            <td> <?= $sum_kozep ?> </td>
            <td> <?= $sum_emelt ?> </td>
            <td> <?= $sum_kozep  + $sum_emelt ?> </td>
        </tr>
    </table>
</body>

</html>