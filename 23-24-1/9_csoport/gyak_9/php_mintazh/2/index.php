<?php
$ERROR_TEXT = "A kérdést kötelező megválaszolni!";
$COLORS = ["orange", "blue", "brown", "black", "purple", "green", "yellow", "aqua", "pink", "gray", "red"];

$suspicious_error = "";
$space_error = "";


$points = 0;
$color = "";


// 1. Amennyiben a felhasználó hiányosan küldi be az űrlapot, történjen a következő: 
//    - Állítsd be a megfelelő változó(ka)t ($suspicious_error / $space_error / mindkettőt) az $ERROR_TEXT értékére!
// (1 pont)

// if (isset($_GET["suspicious"]) || isset($_GET["space"])) {
//     if (!isset($_GET["suspicious"]) || $_GET["suspicious"] == "") $suspicious_error = $ERROR_TEXT;
//     if (!isset($_GET["space"]) || $_GET["space"] == "") $space_error = $ERROR_TEXT;
// } else {
//     if (isset($_GET["sent"])) {
//         $suspicious_error = $ERROR_TEXT;
//         $space_error = $ERROR_TEXT;
//     }
// }

if (!isset($_GET["suspicious"]) && isset($_GET["sent"])) $suspicious_error = $ERROR_TEXT;
if (!isset($_GET["space"]) && isset($_GET["sent"])) $space_error = $ERROR_TEXT;



// 2. Amennyiben a felhasználó mindkét beviteli mezőt kitöltötte az űrlapon történjen a következő:
//    - Az űrlapon lévő mezők értékét összegezd a points változóba az űrlap elküldése után!
//    - Állítsd be a $color változó értékét a $COLORS[$points] elemre!
//    - Jelenjen meg a "color-result" azonosítójú <h1>! (Minden más esetben ez a címsor ne jelenjen meg.)
// (2 pont)

if (isset($_GET["suspicious"]) && isset($_GET["space"]) && $suspicious_error == "" && $space_error == "") {
    $points = (int)$_GET["suspicious"] + (int)$_GET["space"];
    $color = $COLORS[$points];
}

// 3. Rejtett beviteli mező segítségével ellenőrizd, hogy el lett-e már küldve az űrlap,
//    és csak elküldött űrlap esetén jelenjenek meg hibaüzenetek! (hidden input)
//    (1 pont)


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SusFeed</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <h1>SusFeed</h1>
    </nav>
    <!-- h1#color-result: Csak helyesen beküldött űrlap esetén jelenik meg. -->
    <?php if ($color != "") : ?>
        <h1 id="color-result" style="color: <?= $color ?>">Te a(z) <?= $color ?> űrhajós lennél!</h1>
    <?php endif; ?>
    <h1>Vajon milyen színű szkafandered lenne, ha űrhajós lennél?</h1>
    <form>
        <ul>
            <li>
                <h2>Mennyire vagy gyanús?</h2>
                <div class="inputs">
                    <input type="radio" id="0" name="suspicious" value="0">
                    <input type="radio" id="1" name="suspicious" value="1">
                    <input type="radio" id="2" name="suspicious" value="2">
                    <input type="radio" id="3" name="suspicious" value="3">
                    <input type="radio" id="4" name="suspicious" value="4">
                    <input type="radio" id="5" name="suspicious" value="5">
                </div>
                <div class="labels">
                    <label for="0">0</label>
                    <label for="1">1</label>
                    <label for="2">2</label>
                    <label for="3">3</label>
                    <label for="4">4</label>
                    <label for="5">5</label>
                </div>
                <span class="suspicious_error"><?= $suspicious_error ?></span>
            </li>
            <li>
                <h2>Mennyire szeretsz az űrben lenni?</h2>
                <div class="inputs">
                    <input type="radio" id="0" name="space" value="0">
                    <input type="radio" id="1" name="space" value="1">
                    <input type="radio" id="2" name="space" value="2">
                    <input type="radio" id="3" name="space" value="3">
                    <input type="radio" id="4" name="space" value="4">
                    <input type="radio" id="5" name="space" value="5">
                </div>
                <div class="labels">
                    <label for="0">0</label>
                    <label for="1">1</label>
                    <label for="2">2</label>
                    <label for="3">3</label>
                    <label for="4">4</label>
                    <label for="5">5</label>
                </div>
                <span class="space_error"><?= $space_error ?></span>
            </li>
        </ul>
        <input type="hidden" name="sent" value="true" />
        <button type="submit">Kiértékelés</button>
    </form>
</body>

</html>