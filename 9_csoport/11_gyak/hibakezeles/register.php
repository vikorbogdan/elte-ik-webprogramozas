<?php

$hibak = [];
$uj_kutya = [];
// $_GET
// $_POST
// var_dump($_GET);
if (isset($_GET['name']) && trim($_GET['name']) != '') {
    $uj_kutya['name'] = $_GET['name'];
} else {
    $hibak[] = "A kutya nevének megadása kötelező!";
}

if (isset($_GET['breed'])) {
    if (in_array($_GET['breed'], ['dachshund', 'french_bulldog', 'german_shepherd'])) {
        $uj_kutya['breed'] = $_GET['breed'];
    } else {
        $hibak[] = 'A megadott fajtájú kutya sajnos nincs készleten!';
    }
} else {
    $hibak[] = 'Adj meg egy fajtát a kutyának!';
}

if (isset($_GET['gender'])) {
    if ($_GET['gender'] == "bitch" || $_GET['gender'] == "boy") {
        $uj_kutya['gender'] = $_GET['gender'];
    } else {
        $hibak[] = "Nem megfelelő \"nem\" érték van megadva.";
    }
} else {
    $hibak[] = 'Adj meg egy nemet a kutyádnak!';
}

if (isset($_GET['food']) && count($_GET['food']) >= 2) {
    foreach ($_GET['food'] as $food) {
        if (in_array($food, ['cat', 'dog_food', 'grass'])) {
            $uj_kutya['food'][] = $food;
        } else {
            $hibak[] = "A megadott étel nem létezik: " . $food;
        }
    }
} else {
    $hibak[] = "Válassz ki legalább két kedvenc ételt a kutyának!";
}


?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új kutya</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>WEBNEVELDE</h1>
    <ul id="hibalista">
        <?php if (isset($_GET['elkuldve'])) : ?>
            <?php foreach ($hibak as $hiba) : ?>
                <li><?= $hiba ?></li>
            <?php endforeach ?>
        <?php endif ?>
    </ul>
    <form method=post>
        <h2>Alapadatok</h2>
        <label for="name">Kutya neve:</label>
        <input type="text" value="<?= isset($_GET['name']) ? $_GET['name'] :  "" ?>" name="name" id="name"><br />
        <label for="breed">Kutya fajtája:</label>
        <select name="breed" id="breed">
            <option value="dachshund" <?= isset($_GET['breed']) && $_GET['breed'] == 'dachshund' ? "selected" : "" ?>>Tacskó</option>
            <option value="french_bulldog" <?= isset($_GET['breed']) && $_GET['breed'] == 'french_bulldog' ? "selected" : "" ?>>Francia Bulldog</option>
            <option value="german_shepherd" <?= isset($_GET['breed']) && $_GET['breed'] == 'german_shepherd' ? "selected" : "" ?>>Németjuhász</option>
        </select><br />
        <h2>Nem:</h2>
        <input type="radio" id="boy" name="gender" value="boy" <?= isset($_GET['gender']) && $_GET['gender'] == 'boy' ? "checked" : "" ?>>
        <label for="boy">Kan</label><br>
        <input type="radio" id="bitch" name="gender" value="bitch" <?= isset($_GET['gender']) && $_GET['gender'] == 'bitch' ? "checked" : "" ?>>
        <label for="bitch">Szuka</label><br>
        <h2>Kedvenc ételek:</h2>
        <input type="checkbox" id="cat" name="food[]" value="cat" <?= isset($_GET['food']) && in_array('cat', $_GET['food']) ? "checked" : "" ?>>
        <label for="cat"> Cica</label><br>
        <input type="checkbox" id="dog_food" name="food[]" value="dog_food" <?= isset($_GET['food']) && in_array('dog_food', $_GET['food']) ? "checked" : "" ?>>
        <label for="dog_food"> Táp</label><br>
        <input type="checkbox" id="grass" name="food[]" value="grass" <?= isset($_GET['food']) && in_array('grass', $_GET['food']) ? "checked" : "" ?>>
        <label for="grass"> Pázsit</label><br>
        <input type="hidden" name="elkuldve" value="igen">
        <button type="submit">Kutya létrehozása</button>
    </form>
</body>

</html>