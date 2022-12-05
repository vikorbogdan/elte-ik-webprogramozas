<?php
include_once '../util.php';
session_start();

$user = [];
function success($username, $password)
{
    // 1. Add to JSON
    add_user($username, $password);
    // 2. Redirect to Login Page with Success message
    redirect('../login.php?register=success');
}

function error($error)
{
    $_SESSION['register_error'] = $error;
    redirect('../register.php');
}

if (isset($_POST['username']) && trim($_POST['username']) != "") {
    if (isset($_POST['password1']) && trim($_POST['password1']) != "") {
        if (isset($_POST['password2']) && trim($_POST['password2']) != "") {
            if ($_POST['password1'] === $_POST['password2']) {
                if (!user_exists($_POST['username'])) {
                    success($_POST['username'], $_POST['password1']);
                } else {
                    $error = "A megadott felhasználónév foglalt!";
                }
            } else {
                $error = "A megadott jelszavaknak egyeznie kell!";
            }
        } else {
            $error = "Erősítsd meg a jelszavad!";
        }
    } else {
        $error = "Adj meg egy jelszót!";
    }
} else {
    $error = "Adj meg egy felhasználónevet!";
}

if (isset($error)) {
    error($error);
}
