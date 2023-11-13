<?php
/*
Készíts olyan oldalt, amelynek paraméterül adva egy nevet, azt üdvözli (Hello név!)!
a) A nevet URL-ben adjuk meg!
b) A nevet űrlapon keresztül adjuk meg!
*/
$nev = "";
if (isset($_GET["nev"])) {
    $nev = $_GET["nev"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>

<body>
    <h1>Helló <?= $nev ?>!</h1>
    <form>
        <label for="nev">Név</label>
        <input name="nev" type="text" id="nev" placeholder="Add meg a neved!" />
        <input type="submit" value="Küldés">
    </form>
</body>

</html>