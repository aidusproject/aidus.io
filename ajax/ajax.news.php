<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");

$csrf = $__secure->csrf_validation();

if ($csrf['status'] !== 200) {
    echo json_encode($csrf);
    exit;
}


$type   = $_POST['type'];
$page   = $_POST['page'];
$locale = $_POST['locale'];

if($type == 'ALL'){
    $type = "";
}

$send_arr = array(
    "news_type" => $type,
    "page_size" => 0,
    "page" => $page,
    "locale" => $locale
);
$news   = $__api -> getNews($send_arr);
$status = $news['status'];

if($status == 200){
    echo json_encode($news);
} else {
    echo json_encode($news);
}


?>