<?php
$text = $_POST['text'];

if ($text == "aa") {
    http_response_code(400);

    $list = array("error" => "不正なリクエストです");
    header("Content-type: application/json; charset=UTF-8");
    echo json_encode($list);
    exit;
}

$list = array("text" => "$text", "app" => "test");
header("Content-type: application/json; charset=UTF-8");
echo json_encode($list);
exit;
