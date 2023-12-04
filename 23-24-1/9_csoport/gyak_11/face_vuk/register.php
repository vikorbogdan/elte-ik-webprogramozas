<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include_once 'navigation.php' ?>
    <form action="register_query.php" method="post">
        <input type="text" name="username" id="username">
        <input type="password" name="password" id="password">
        <button type="submit">Register</button>
    </form>
</body>

</html>