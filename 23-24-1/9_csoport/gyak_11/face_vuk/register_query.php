<?php

$username = $_POST["username"];
$password = $_POST["password"];

$users = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/users.json'), true);
/**
 * [
 * [
 *  username => "valami",
 *  password => "password"
 * ],
 * ]
 */
$new_user = [
    "username" => $username,
    "password" => $password
];
$users[] = $new_user;

file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/users.json", json_encode($users, JSON_PRETTY_PRINT));

header("Location: " . "/login.php");
// die;
