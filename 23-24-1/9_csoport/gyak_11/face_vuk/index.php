<?php

$foxes = json_decode(file_get_contents("foxes.json"), true);
session_start();
$logged_in = isset($_SESSION["user"]);

if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle)
    {
        return $needle !== '' && mb_strpos($haystack, $needle) !== false;
    }
}


$keyword = "";
if (isset($_GET["search"])) {
    $keyword = $_GET["search"];
}


$filtered_users = [];
foreach ($foxes as $user) {
    if (str_contains(strtolower($user["name"]), strtolower($keyword))) {
        $filtered_users[] = $user;
    }
}


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
    <?php include_once 'navigation.php' ?>
    <ul id="results">
        <?php if ($logged_in) : ?>
            <?php foreach ($filtered_users as $user) : ?>
                <li>
                    <img src="<?= $user["img"] ?>" alt="" />
                    <h2><?= $user["name"] ?></h2>
                </li>
            <?php endforeach; ?>
        <?php else : ?>
            <div>
                <h1>Helló, itt jó rókák vannak, csak jelentkezz be.</h1>
            </div>
        <?php endif ?>
    </ul>
</body>

</html>