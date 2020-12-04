<?php
include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");

$return_arr = array();
$return_arr['status'] = 400;

$user_ip = $_SERVER['REMOTE_ADDR'];
$user_ip = get_client_ip(); //aws는 전부 ip가 고정됨..
$sql = "insert open_pop_cnt set user_ip = '{$user_ip}',
                               reg_date = now() ";
$res = $mysqli -> query($sql);

if($res){
    $return_arr['status'] = 200;
}

echo json_encode($return_arr);

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

?>