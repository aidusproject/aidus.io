<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");

$csrf = $__secure->csrf_validation();

if ($csrf['status'] !== 200) {
    echo json_encode($csrf);
    exit;
}

$page   = $_POST['page'];
$locale = $_POST['locale'];

$report_result = $__api -> getQts(array("page" => $page,"page_size" => 5, "locale" => $locale));
$report_list = $report_result['data'];
for($i=0;$i<count($report_list);$i++){
    $date = date('Y.m.d',strtotime($report_list[$i]['reg_date']));
    $report_list[$i]['reg_date'] = $date;
}

echo json_encode($report_list);
?>

