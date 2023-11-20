<?php

// Néhány PHP verzió nem tartalmazza az str_contains függvényt, így itt definiálva van. (Figyelmen kívül hagyhatod.)
if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle)
    {
        return $needle !== '' && mb_strpos($haystack, $needle) !== false;
    }
}

$users = [
    [
        "name" => "Vuk",
        "img" => "https://images.unsplash.com/photo-1560809451-9e77c2e8214a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&h=100&q=80"
    ],
    [
        "name" => "Róka Úr",
        "img" => "https://images.unsplash.com/photo-1516934024742-b461fba47600?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&h=100&q=40"
    ],
    [
        "name" => "Róka Koma",
        "img" => "https://images.unsplash.com/photo-1605101479435-005f9c563944?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&h=100&q=80"
    ],
    [
        "name" => "Karak",
        "img" => "https://images.unsplash.com/photo-1578170681526-de18d598a5b8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&h=100&q=80"
    ]
];

// 1. Kérdezd le a keresőkifejezést a GET Paraméterek közül! (1 pont)
$keyword = "";
if (isset($_GET["search"])) {
    $keyword = $_GET["search"];
}
// var_dump($keyword);

// 2. Ha van megadva keresőkifejezés az URL-ben, listázd ki csak azokat a felhasználókat, amelyek neve tartalmazza a keresőkifejezést!
//    A keresés ne tegyen különbséget kis- és nagy betűk között.
//    (Tipp: A megoldáshoz az str_contains illetve strtolower függvényeket használhatod.) (1 pont)
// Pl. A "ró" kifejezésre listázza ki a "Róka Úr" illetve "Róka Koma" felhasználókat.

$filtered_users = [];
foreach ($users as $user) {
    if (str_contains(strtolower($user["name"]), strtolower($keyword))) {
        $filtered_users[] = $user;
    }
}
// 3. Ha nincs megadva semmilyen query az url-ben (Nincsenek GET paraméterek) listázza ki az összes felhasználót az oldal! (1 pont)
// (A navigációs sávon található FaceVuk Feliratra kattintva)


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FaceVuk</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <!-- A 4. feladat megoldásához szerkeszd a href attribútumot! -->
        <a href="?">
            <h1>FaceVuk</h1>
        </a>
        <form method="get">
            <input type="text" name="search" id="search">
            <button type="submit">
                <img src="./search-icon.svg" alt="Search">
            </button>
        </form>
    </nav>
    <ul id="results">
        <!-- Minta az elvárt listázáshoz (ezt kitörölheted) -->
        <!-- <li class="result">
            <img src="https://images.unsplash.com/photo-1560809451-9e77c2e8214a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&h=100&q=80">
            <h2>Minta felhasználó</h2>
        </li> -->
        <?php foreach ($filtered_users as $user) : ?>
            <li>
                <img src="<?= $user["img"] ?>" alt="" />
                <h2><?= $user["name"] ?></h2>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>