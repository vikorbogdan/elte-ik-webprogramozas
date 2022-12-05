<?php
include_once '../util.php';
session_start();
if (!isset($_SESSION['user'])) redirect('/index.php');
if (isset($_POST['cat_name'])) {
    if (cat_exists($_SESSION['user'], $_POST['cat_name'])) {
        increment_pets($_SESSION['user'], $_POST['cat_name']);
        redirect('../index.php');
    }
}
