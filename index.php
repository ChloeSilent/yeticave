<?php
require_once("functions.php");
require_once("data.php");
$title = "Главная";
$is_auth = rand(0, 1);
$content = render_template("index", [
    "categories" => $categories,
    "goods" => $goods
]);
$layout = render_template("layout", [
    "title" => $title,
    "is_auth"  => $is_auth,
    "user_name" => $user_name,
    "content" => $content,
    "categories" => $categories
]);
print($layout);