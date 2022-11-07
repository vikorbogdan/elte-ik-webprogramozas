<?php
# változó
$nev = "Saját nevét";
# függvénydefiníció
function faktorialis($szam)
{
    if ($szam <= 1) {
        return 1;
    } else {
        return $szam * faktorialis($szam - 1);
    }
}

$szam = 10;
# tömb
$hiba_lista = ["Túl rövid!", "Nincs elég speciális karakter!", "Nem vagy elég speciális!", "Írj be valamit a mezőbe!"];

# asszociatív tömb kulcs=>érték
$mufajok = [
    "action" => "Akció",
    "drama" => "Dráma",
    "comedy" => "Vígjáték",
    "horror" => "Horror",
    "thriller" => "Thriller",
    "fantasy" => "Fantasy",
    "romcom" => "Romantikus vígjáték"
];

$termekek = [
    41 => "Pendrive",
    51 => "PC",
    10 => "Flower",
    9 => "Truck",
    90 => "Cat",
    91 => "Among Us Plush",
    100 => "Shrek 2 DVD",
    300 => "Club Penguin Puffle Toy"
];

# Kiírás: echo(kifejezés)
# Kiírás html-en belül: <?php echo(kifejezés) 
?>
# Röviden: <?= kifejezés ?>

?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1. gyakorlat</title>
</head>

<body>
    <h1>Helló világ</h1>
    <p>Hello <?= $nev ?></p>
    <p>Aktuális idő: <?= date("H : i : s"); ?></p>
    <p><?= $szam ?> faktoriálisa: <?= faktorialis($szam) ?></p>
    <?php for ($i = 1; $i < 11; $i++) { ?>
        <span style="font-size: <?= $i * 5 ?>px">Helló világ</span>
    <?php } ?>

    <ul>
        <!-- Beágyazott for ciklusok !>
        <?php for ($i = 0; $i < count($hiba_lista); $i++) { ?>
            <li><?= $hiba_lista[$i] ?></li>
        <?php } ?>
    </ul>

    <select>
        <?php foreach ($mufajok as $kulcs => $mufaj) { ?>
            <option value="<?= $kulcs ?>"><?= $mufaj ?></option>
        <?php } ?>
    </select>

    <form>
        <?php foreach ($termekek as $azonosito => $termek) { ?>
            <input type="checkbox" id="termek<?= $azonosito ?>" name="termek<?= $azonosito ?>" value="<?= $azonosito ?>">
            <label for="termek<?= $azonosito ?>"><?= $termek ?></label><br>
        <?php } ?>
    </form>

</body>

</html>