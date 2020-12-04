<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");

$type = $_POST['type'];
$page = $_POST['page'];

if($type == 'ALL'){
    $type = "";
}

$send_arr = array(
    "news_type" => $type,
    "page_size" => 16,
    "page" => $page
);
$news   = $__api -> getNews($send_arr);
$status = $news['status'];

if($status == 200){
    echo json_encode($news['data']);
} else {
    echo json_encode($news['status']);
}


?>