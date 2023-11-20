<?php
// 1. Olvasd be a data.json állományt asszociatív tömbként. (1 pont)
// Fájlból olvasás: https://www.php.net/manual/en/function.file-get-contents.php
// JSON Feldolgozása: https://www.php.net/manual/en/function.json-decode.php

// 2. Jelenítsd meg az adatokat a táblázat soraiként. (1 pont)

// 3. A 2000-ben, és annál később kiadott könyveknél a könyv címe legyen "bold", tehát vastagon-szedett! (1 pont)
// (Pl. <b> tagek segítségével!)
// A megoldáshoz célszerű a "substr()" függvény használata.

// $file_contents = file_get_contents("data.json");
// $data = json_decode($file_contents, true);

// Fájlból olvasás
$data = json_decode(file_get_contents("data.json"), true);
$output_data = [];
foreach ($data as $value) {
    $output_data[] = [
        "title" => "",
        "release_date" => $value["release_date"],
    ];
}
var_dump($output_data);

//Fájlba írás
file_put_contents("data.json", json_encode($output_data, JSON_PRETTY_PRINT));


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garfield Books</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table>
        <tr>
            <th>Könyv Címe (title)</th>
            <th>Kiadás dátuma (release_date)</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>

</html>