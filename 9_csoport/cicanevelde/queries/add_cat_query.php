<?php
include_once '../util.php';
session_start();
//TODO: Hibakezelés
if (!isset($_SESSION['user'])) redirect('../login.php');
function success($cat_name, $cat_breed, $cat_food)
{
    add_cat($_SESSION['user'], $cat_name, $cat_breed, $cat_food);
    redirect("../?add_cat=success");
}
function error($error)
{
    $_SESSION['add_cat_error'] = $error;
}
if (true) {
    success($_POST['name'], $_POST['breed'], $_POST['food']);
} else {
    $error = "";
}

if (isset($error)) {
    error($error);
}
