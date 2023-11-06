<?php
$hello = "Helló ";
$name = "Bogdán";
$hello_name = $hello . $name . "!";
// egysoros komment
# egysoros komment
/*
 * többsoros
 * komment
 * 
 */
date_default_timezone_set('Europe/Budapest');
$hiba_lista = ["A megadott felhasználónév túl rövid!", "Túl gyenge jelszó!", "Nem mosolyogsz a feltöltött profilképen!", "Az életkor mező kitöltése kötelező!"];

// asszociatív tömb
$mufajok = [
    "action" => "Akció",
    "comedy" => "Vígjáték",
    "scifi" => "Tudományos Fantasztikus",
    "fantasy" => "Fantasy",
    "horror" => "Horror",
    "crime" => "Krimi",
    "thriller" => "Thriller"
];

$termekek = [
    54312 => "Virsli",
    12311 => "Majonéz",
    61123 => "Lego",
    51213 => "Plüss viziló"
];


function factorial($number)
{
    if ($number <= 1) return 1;
    return $number * factorial($number - 1);
}

$number_to_fac = 5;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP!</title>
</head>

<body>
    <h1> <?= "Helló {$name}ka!" ?> </h1>
    <h2>Aktuális idő: <?= date("Y M j - H:i:s") ?></h2>
    <h3>A(z) <?= $number_to_fac ?> a faktorálisa: <?= factorial($number_to_fac) ?> </h3>
    <?php for ($i = 0; $i < 10; $i++) : ?>
        <?php if ($i > 5) : ?>
            <p style="font-size: <?= $i * 2 ?>px">Heló</p>
        <?php else : ?>
            <p style="color: red; font-size: <?= $i * 10 ?>px">Heló</p>
        <?php endif ?>
    <?php endfor ?>
    <ul>
        <?php for ($i = 0; $i < count($hiba_lista); $i++) : ?>
            <li><?= $hiba_lista[$i] ?></li>
        <?php endfor ?>
    </ul>
    <ul>
        <?php foreach ($hiba_lista as $index => $hiba_elem) : ?>
            <li><?= $hiba_elem . $index ?></li>
        <?php endforeach ?>
    </ul>
    <select name="mufajok" id="mufajok">
        <?php foreach ($mufajok as $eng_name => $hun_name) : ?>
            <option value="<?= $eng_name ?>"><?= $hun_name ?></option>
        <?php endforeach ?>
    </select>
    <form method="GET">
        <?php foreach ($termekek as $azonosito => $termek) : ?>
            <input type="checkbox" name="<?= $azonosito ?>" id="termek<?= $azonosito ?>">
            <label for="termek<?= $azonosito ?>"> <?= $termek ?></label>
        <?php endforeach ?>
        <input type="submit" value="Küldés">
    </form>
</body>

</html>