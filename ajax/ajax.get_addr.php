<?php
include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");

$return_arr = array();

$password = $_POST['passwd'];

$pw_info = $__api -> withdrawPasswordCheck($_SESSION['AIDAUTH'], $password);

$pw_status  = intval($pw_info['status']);

if($pw_status !== 200) {
    switch($pw_status) {
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
    $wallet_array = $__api -> getWalletAddress($_SESSION['AIDSEQ']);
    if($wallet_array['status'] == 200){
        $return_arr['status'] = 'success';
        $return_arr['addr']   = $wallet_array['wallet_address'];

    }else{
        $return_arr['status'] = 'error';
        $return_arr['message'] = '지갑주소를 불러오는데 실패했습니다.';
    }
    echo json_encode($return_arr);
    exit;
}




?>