<?php
include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");

$csrf = $__secure->csrf_validation();

if ($csrf['status'] !== 200) {
    echo json_encode($csrf);
    exit;
}
$return_arr = array();

$auth_result = $__api -> authCheck($_SESSION);
$auth_chk = false;
if($auth_result['status'] == 200){
    $auth_chk = true;
}

if($auth_chk){
    $select_seq = $_POST['select'];
    $select_seq = $__cf -> Decrypt($select_seq);
    $join_res = $__api -> aiudsPayCancel($_SESSION,$select_seq);
    $join_res = $join_res['status'];
    if($join_res !== 200) {
        switch($join_res) {
            case 100 :
                $return_arr['status']  = "error";
                $return_arr['message'] = "취소 신청 중 문제가 발생 했습니다.";
                break;
        }
        echo json_encode($return_arr);
        exit;
    } else {
        $return_arr['status']  = "success";
        $return_arr['message'] = "사전등록 신청 취소 요청 되었습니다.";
    }
    echo json_encode($return_arr);

}

?>