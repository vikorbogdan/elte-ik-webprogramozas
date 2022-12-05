<?php
session_start();
include_once 'util.php';
$logged_in = isset($_SESSION['user']);
if (!$logged_in) redirect('login.php');
$user;
$cats;
if ($logged_in) {
    $user = $_SESSION['user'];
    $cats = get_cats($user);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat manager</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include_once 'navigation.php' ?>
    <h1>Cicáid</h1>
    <?php if (!is_null($cats)) : ?>
        <table>
            <thead>
                <tr>
                    <th>
                        Név
                    </th>
                    <th>
                        Fajta
                    </th>
                    <th>
                        Kedvenc étel
                    </th>
                    <th>
                        Simik száma
                    </th>
                    <th>

                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cats as $cat_name => $cat) : ?>
                    <tr>
                        <td>
                            <?= $cat_name ?>
                        </td>
                        <td>
                            <?= $cat["breed"] ?>
                        </td>
                        <td>
                            <?= $cat["favorite_food"] ?>
                        </td>
                        <td>
                            <?= $cat["num_of_pets"] ?>
                        </td>
                        <td>
                            <form method="POST" action="queries\pet_query.php">
                                <input type="hidden" name="cat_name" value="<?= $cat_name ?>">
                                <button type="submit">Megsimogatom 😻</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    <?php else : ?>
        <span>Még nincs rögzítve cicád 😿</span>
        <br />
        <a href="add_cat.php">Adj hozzá cicát! 😻</a>
    <?php endif ?>
</body>

</html>