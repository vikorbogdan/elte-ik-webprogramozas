<?php
/*
    A tanuló nevének megadása kötelező.
    A tanuló neve legalább két szóból kell álljon.
    Az elért százalékos eredmény megadása kötelező.
    Az elért százalékos eredmény egész szám kell legyen.
    Az elért százalékos eredmény nemnegatív kell legyen. (Tipp: ellenőrizd, hogy 0-ra ne adjon hibajelzést a kódod!)
    Ha a százalékos eredmény eléri a 12%-ot, de nem éri el a 25%-ot, akkor kötelező szóbeli időpontot foglalni. 
    (Ha a beírt eredményben eleve hiba volt, akkor nem kell ellenőrizni ezt a feltételt.)
    Az űrlap legyen állapottartó, tehát elküldés után az egyes mezők tartsák meg az értéküket!
    A hibaüzenetek ne listaként, hanem közvetlenül a hibás mező mellett jelenjenek meg!
*/
$tanulo;
$tanulo_hiba = "";
$szazalek_hiba = "";
$szobeli_hiba = "";
$kotelezo_szobeli = false;
if (isset($_POST["elkuldve"])) {

    if (isset($_POST["tanulo"]) && trim($_POST["tanulo"]) != "") {
        if (preg_match("/^[a-zA-ZöüóőúéáűÖÜÓŐÚÉÁŰ]* [a-zA-ZöüóőúéáűÖÜÓŐÚÉÁŰ]*$/", $_POST["tanulo"])) {
            $tanulo["tanulo"] = $_POST["tanulo"];
        } else {
            $tanulo_hiba = "A tanuló nevének két szóból kell állnia!";
        }
    } else {
        $tanulo_hiba = "Add meg a tanuló nevét!";
    }
    // var_dump($_POST["tanulo"]);
    // var_dump($tanulo_hiba);

    if (isset($_POST["szazalek"]) && trim($_POST["szazalek"]) != "") {
        if (filter_var($_POST["szazalek"], FILTER_VALIDATE_INT) !== false) {
            if ($_POST["szazalek"] >= 0) {
                $tanulo["szazalek"] = $_POST["szazalek"];
                if ($tanulo["szazalek"] > 12 && $tanulo["szazalek"] < 25) {
                    $kotelezo_szobeli = true;
                } else {
                    $kotelezo_szobeli = false;
                }
            } else {
                $szazalek_hiba = "A megadott százalékérték nem lehet negatív!";
            }
        } else {
            $szazalek_hiba = "A megadott százalék csak egész szám lehet!";
        }
    } else {
        $szazalek_hiba = "Add meg az eredmény értékét!";
    }

    if ($kotelezo_szobeli) {
        if (!isset($_POST["szobeli"])) {
            $szobeli_hiba = "12 és 25 százalék között ezt jól be kéne pipálni öcskös!";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP ZH - 2. feladat</title>
</head>

<body>
    <h1>ÉRETTSÉGI VIZSGA MATEMATIKÁBÓL</h1>
    <h2>2. feladat: űrlapfeldolgozás</h2>
    <form action="2.php" method="POST" novalidate>
        <label for="tanulo">Tanuló neve:</label>
        <input type="text" name="tanulo" id="tanulo" value="<?= isset($_POST["tanulo"]) ? $_POST["tanulo"] : "" ?>">
        <?= $tanulo_hiba ?>
        <br>
        <label for="szazalek">Eredmény (%):</label>
        <input type="text" name="szazalek" id="szazalek" value="<?= isset($_POST["szazalek"]) ? $_POST["szazalek"] : "" ?>">
        <?= $szazalek_hiba ?>
        <br>
        <input type="checkbox" name="szobeli" id="szobeli" <?= isset($_POST["szobeli"]) ? "checked" : "" ?>>
        <label for="szobeli">Szóbeli időpont szükséges</label>
        <?= $szobeli_hiba ?>
        <br>
        <input type="hidden" name="elkuldve" value="igen">
        <button type="submit">Küldés</button>
    </form>

</body>

</html>