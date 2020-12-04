<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");
$seq    = $_POST['seq'];

$news   = $__api -> getBrandDetail($seq);

$prev_next = $__api -> getNewsPrevNext($seq, "brand_news", $news['data']['locale']);

$status = $news['status'];

if($status == 200){
    $news['data']['prev_seq'] = $prev_next['prev_seq'];
    $news['data']['next_seq'] = $prev_next['next_seq'];

    echo json_encode($news['data']);
} else {
    echo json_encode(100);
}
?>