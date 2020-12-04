<?php
include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");

$csrf = $__secure->csrf_validation();

if ($csrf['status'] !== 200) {
    echo json_encode($csrf);
    exit;
}


$return_arr = array();

$enc_auth = "";
$password = "";

$enc_auth = trim($_POST['encAuth']);
$password = trim($_POST['password']);

if(empty($enc_auth) || $enc_auth == "") {
    $return_arr['status']  = "error";
    $return_arr['message'] = "암호화된 사용자 정보가 맞지 않습니다";
    echo json_encode($return_arr);
    exit;
}

if(empty($password) || $password == "") {
    $return_arr['status']  = "error";
    $return_arr['message'] = "사용자 암호 정보가 맞지 않습니다";
    echo json_encode($return_arr);
    exit;
}

$api_res = $__api -> withdrawPasswordCheck($enc_auth, $password);

$status  = intval($api_res['status']);
if($status !== 200) {
    switch($status) {
        case 100 :
            $return_arr['status']  = "error";
            $return_arr['message'] = "암호가 입력되지 않았습니다";
            break;
        case 101 :
            $return_arr['status']  = "error";
            $return_arr['message'] = "사용자 정보가 입력되지 않았습니다";
            break;
        case 102 :
            $return_arr['status']  = "error";
            $return_arr['message'] = "사용자 정보 취득 중 문제가 발생 했습니다";
            break;
        case 103 :
            $return_arr['status']  = "error";
            $return_arr['message'] = "사용자 정보를 DB에서 확인 중 문제가 발생 했습니다";
            break;
        case 104 :
            $return_arr['status']  = "error";
            $return_arr['message'] = "해당 사용자가 존재 하지 않습니다";
            break;
        case 105 :
            $return_arr['status']  = "error";
            $return_arr['message'] = "사용자 암호가 틀렷습니다";
            break;
    }
    echo json_encode($return_arr);
    exit;
} else {
    $return_arr['status'] = "success";
    echo json_encode($return_arr);
    exit;
}
?>