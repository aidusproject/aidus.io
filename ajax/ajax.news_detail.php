<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");

$seq = $_POST['seq'];


$news   = $__api -> getNewsDetail($seq);
$status = $news['status'];

if($status == 200){
    echo json_encode($news['data']);
} else {
    echo json_encode($news);
}


?>