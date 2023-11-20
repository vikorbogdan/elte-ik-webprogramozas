<?php
//  Készíts elsőfokú egyenletet (ax+b=0) megoldó oldalt!
//  Űrlapon keresztül lehessen megadni a és b értékét. 
//  Hiba esetén az űrlap felett listában jelenjenek meg a hibaüzenetek!
//  A megoldást az űrlap alá írjuk! Gondoskodj az űrlap állapottartásáról!

// Hibák:
// - Nem szám típusú érték
// - Ha az a érték nulla
// - Üresen hagyott mezők

$hibak = [];
$a = 0;
$b = 0;
$megoldas = "";
if (isset($_GET["a"]) && isset($_GET["b"])) {
    if ($_GET["a"] != "" && $_GET["b"] != "") {
        if (is_numeric($_GET["a"]) && is_numeric($_GET["b"])) {
            $a = (int)$_GET["a"];
            $b = (int)$_GET["b"];

            if ($a == 0) {
                $hibak[] = "Az \"a\" érték nem lehet nulla.";
            }
        } else {
            if (!is_numeric($_GET["a"])) {
                $hibak[] = "Az \"a\" érték nem szám típusú.";
            }
            if (!is_numeric($_GET["b"])) {
                $hibak[] = "A \"b\" érték nem szám típusú.";
            }
        }
    } else {
        $hibak[] = "Minden mező kitöltése kötelező.";
    }
    if (count($hibak) == 0) {
        $megoldas = -$b / $a;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egyenlet</title>
</head>

<body>
    <h1>Elsőfokú egyenlet megoldás generátor</h1>
    <ul style="color:red;">
        <?php foreach ($hibak as $hiba) : ?>
            <li><?= $hiba ?></li>
        <?php endforeach ?>
    </ul> <br />
    <form>
        <label for="a">Az "a" értéke</label>
        <input value="<?= $_GET["a"] ?? "" ?>" type="text" id="a" name="a" />
        <label for="b">, a "b" értéke pedig</label>
        <input value="<?= $_GET["b"] ?? "" ?>" type="text" id="b" name="b" />.
        <input type="submit" value="Számítás">
    </form> <br />
    <?php if ($megoldas != "") : ?>
        <main>
            <?= $megoldas ?>
        </main>
    <?php endif ?>
</body>

</html>