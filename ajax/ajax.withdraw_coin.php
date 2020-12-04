<?php
include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");

$csrf = $__secure->csrf_validation();

if ($csrf['status'] !== 200) {
    echo json_encode($csrf);
    exit;
}


$return_arr = array();

$withdraw_address = "";
$withdraw_amount  = 0;
$wallet_auth      = "";

$withdraw_address = trim($_POST['withdraw_address']);
$withdraw_amount  = trim($_POST['withdraw_amount']);
$wallet_auth      = trim($_POST['wallet_auth']);

if(empty($withdraw_address) || $withdraw_address == "") {
    $return_arr['status']  = "error";
    $return_arr['message'] = "Withdrawal Address not exist";
    echo json_encode($return_arr);
    exit;
}

if(empty($withdraw_amount) || $withdraw_amount == "") {
    $return_arr['status']  = "error";
    $return_arr['message'] = "Withdrawal quantity are not exist";
    echo json_encode($return_arr);
    exit;
}

if(empty($wallet_auth) || $wallet_auth == "") {
    $return_arr['status']  = "error";
    $return_arr['message'] = "User information is not exist";
    echo json_encode($return_arr);
    exit;
}

$api_res = $__api -> withdrawCoin(array(
    "enc_user_seq" => $wallet_auth,
    "amount"       => $withdraw_amount,
    "to_address"   => $withdraw_address
));

$status  = intval($api_res['status']);
if($status !== 200) {
    $return_arr['code'] = $status;
    switch($status) {
        case 100 :
            $return_arr['status']  = "error";
            $return_arr['message'] = "지갑 사용자의 정보가 맞지 않습니다";
            break;
        case 101 :
            $return_arr['status']  = "error";
            $return_arr['message'] = "출금 수량이 입력 되지 않았습니다";
            break;
        case 102 :
            $return_arr['status']  = "error";
            $return_arr['message'] = "출금 주소가 정확하지 않습니다";
            break;
        case 103 :
            $return_arr['status']  = "error";
            $return_arr['message'] = "사용자 정보 취득 중 문제가 발생했습니다";
            break;
        case 104 :
            $return_arr['status']  = "error";
            $return_arr['message'] = "지갑 사용자의 정보가 맞지 않습니다 (API-ERR)";
            break;
        case 105 :
            $return_arr['status']  = "error";
            $return_arr['message'] = "출금 주소 입력 되지 않았습니다 (API-ERR)";
            break;
        case 106 :
            $return_arr['status']  = "error";
            $return_arr['message'] = "출금 주소 유효성 검증 실패";
            break;
        case 107 :
            $return_arr['status']  = "error";
            $return_arr['message'] = "출금 수량 유효성 검증 실패";
            break;
        case 108 :
            $return_arr['status']  = "error";
            $return_arr['message'] = "출금 API 연동 중 문제 발생(error - mininum coin amount error)";
            break;
        case 109 :
            $return_arr['status']  = "error";
            $return_arr['message'] = "출금 API 연동 중 문제 발생(error - maximum coin amount error)";
            break;
    }
    $return_arr['message'] = $api_res['message'];
    echo json_encode($return_arr);
    exit;
} else {
    $return_arr['status'] = "success";
    echo json_encode($return_arr);
    exit;
}
?>