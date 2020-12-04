<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");

$csrf = $__secure->csrf_validation();

if ($csrf['status'] !== 200) {
    echo json_encode($csrf);
    exit;
}

$type = $_POST['type'];
$page = $_POST['page'];

if($type == 'ALL'){
    $type = "";
}

$send_arr = array(
    "page_size" => 8,
    "page" => $page
);
$news   = $__api -> getNewsLink($send_arr);
$status = $news['status'];

if($status == 200){
    echo json_encode($news['data']);
} else {
    echo json_encode($news);
}


?>