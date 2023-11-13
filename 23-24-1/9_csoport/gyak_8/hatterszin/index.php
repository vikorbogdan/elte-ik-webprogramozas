<?php
// Készíts olyan oldalt, amelynek háttérszínét paraméterként lehet megadni.
// a) A színkódot URL-ben add meg!
// b) Készíts három hivatkozást kék, sárga, piros felirattal, amelyekre kattintva az oldal háttérszíne megfelelően változik!
// c) A színkódot űrlap segítségével adjuk meg!

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Háttérszín</title>
</head>

<body style="background-color: rgb(<?= $_GET["r"] ?? "255" ?>,<?= $_GET["g"] ?? "255" ?>,<?= $_GET["b"] ?? "255" ?>) ;">
    <ul>
        <li><a href="./?r=0&g=0&b=255">Kék</a></li>
        <li><a href="./?r=255&g=255&b=0">Sárga</a></li>
        <li><a href="./?r=255&g=0&b=0">Piros</a></li>
    </ul>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt autem enim fugit eaque minus consectetur asperiores sequi fuga corporis minima aliquam molestiae dolorem, doloribus reprehenderit est at nisi saepe iure.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, voluptatem.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam necessitatibus repellat quod et, eum error enim, vitae assumenda accusantium pariatur dolorem laudantium magni, repellendus amet quidem! Perferendis nam ut provident fugiat, velit aut. Ex suscipit modi placeat commodi alias laboriosam in odio totam aut quisquam. Omnis animi provident accusantium nobis impedit cumque cum dolorum sequi, porro atque optio, tempore repellendus?</p>
    <form>
        <label for="red">Piros</label>
        <input id="red" name="r" type="text">
        <label for="green">Zöld</label>
        <input id="green" name="g" type="text">
        <label for="blue">Kék</label>
        <input id="blue" name="b" type="text">
        <button type="submit">Küldés</button>
    </form>

</body>

</html>