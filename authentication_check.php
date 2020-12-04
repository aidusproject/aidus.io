<?php
include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");

$home_url = _MAIN_URL_;

$authentication_id = $_GET['auth_string'];
if(!isset($authentication_id) || empty($authentication_id)) {
    $prev_page = $_SERVER['HTTP_REFERER'];
    header('location:'.$prev_page);
}

$sql = "update user set user_role_seq = 2 where authentication_key = '{$authentication_id}'";
$res = $mysqli -> query($sql);
header('location:'.$home_url);
?>