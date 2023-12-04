<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$users = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/users.json'), true);
$user_from_db = current(array_filter($users, function ($element) use ($username) {
    return $username === $element["username"];
}));


if (isset($user_from_db) && $password === $user_from_db["password"]) {
    // Success
    header("Location: index.php");
    $_SESSION["user"] = $username;
} else {
    // Fail
    header("Location: login.php");
}
