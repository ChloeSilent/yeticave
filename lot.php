<?php
require_once("functions.php");
require_once("data.php");
require_once("goods.php");



$title = "Лот";
$is_auth = rand(0, 1);

$lot = null; //$gif = null;

if (isset($_GET['lot_id'])) {
	$gif_id = $_GET['lot_id'];

	foreach ($goods as $item) {
		if ($item == $lot_id) {//{key($goods)
			$lot = $item;
			break;
		}
	}
}

if (!$lot) {
	http_response_code(404);
}

$content = render_template("lot", [
    "gif" => $gif,
    "categories" => $categories,
    "name" => $goods,
    "category" => $category,
    "image" => $image,
    "today" => $today,
    "tomorrow" => $tomorrow
]);

$layout = render_template("layout", [
    "title" => "GifTube - Просмотр гифки",
    "is_auth"  => $is_auth,
    "user_name" => $user_name,
    "content" => $content,
    "categories" => $categories
]);
print($layout);