<?php
define('USERS_PATH', __DIR__ . '/json/users.json');
define('CATS_PATH', __DIR__ . '/json/cats.json');

function redirect($destination)
{
    header("Location: " . $destination);
    die;
}

function read_json($source, $associative = true)
{
    return json_decode(file_get_contents($source), $associative);
}

function write_json($source, $data)
{
    file_put_contents($source, json_encode($data, JSON_PRETTY_PRINT));
}

function user_exists($username)
{
    $users = read_json(USERS_PATH);
    $usernames = array_column($users, "username");
    return !(array_search($username, $usernames) === false);
}
function cat_exists($username, $cat_name)
{
    $cats = read_json(CATS_PATH);
    $cat_names = array_keys($cats[$username]);
    return !(array_search($cat_name, $cat_names) === false);
}

function get_cat($username, $cat_name)
{
    $cats = read_json(CATS_PATH);
    return $cats[$username][$cat_name];
}
function add_cat($username, $cat_name, $cat_breed, $cat_food)
{
    $cats = read_json(CATS_PATH);
    $new_cat = [
        "breed" => $cat_breed,
        "favorite_food" => $cat_food,
        "num_of_pets" => 0
    ];
    $cats[$username][$cat_name] = $new_cat;
    write_json(CATS_PATH, $cats);
}

function increment_pets($username, $cat_name)
{
    $cats = read_json(CATS_PATH);
    $cats[$username][$cat_name]['num_of_pets']++;
    write_json(CATS_PATH, $cats);
}

function add_user($username, $password)
{
    $users = read_json(USERS_PATH);
    $new_user = ["username" => $username, "password" => $password];
    $users[] = $new_user;
    write_json(USERS_PATH, $users);
}
function get_user($username)
{
    $users = read_json(USERS_PATH);
    return current(array_filter($users, function ($element) use ($username) {
        return $element["username"] === $username;
    }));
}
function get_password($user)
{
    $user = get_user($user);
    return $user['password'];
}

function get_cats($user)
{
    $cats = read_json(CATS_PATH);
    return $cats[$user] ?? null;
}
