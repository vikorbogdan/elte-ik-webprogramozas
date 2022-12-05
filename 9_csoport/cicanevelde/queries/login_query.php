<?php
include_once '../util.php';
session_start();

function success($username)
{
    $_SESSION['user'] = $username;
    redirect('../');
}

function error($error)
{
    $_SESSION['login_error'] = $error;
    redirect('../login.php');
}

var_dump($_POST);
if (isset($_POST['username']) && trim($_POST['username']) != "") {
    if (isset($_POST['password']) && trim($_POST['password']) != "") {
        if (user_exists($_POST['username'])) {
            if (get_password($_POST['username']) === $_POST['password']) {
                success($_POST['username']);
            } else {
                $error = "A megadott jelszó helytelen.";
            }
        } else {
            $error = "A megadott felhasználónév nem szerepel az adatbázisban.";
        }
    } else {
        $error = "Add meg a jelszavad!";
    }
} else {
    $error = "Adj meg felhasználónevet!";
}

if (isset($error)) {
    error($error);
}
