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
    $hash = $_POST['hash'];
    $addr = $_POST['addr'];
    $aid_cnt = $_POST['cnt'];
    if(!isset($_COOKIE['lang']) || empty($_COOKIE['lang']) || $_COOKIE['lang'] == '') {
        switch ($__country_code) {
            case "KR" :
                $language  = "ko";
                break;
            case "CN" :
                $language  = "cn";
                break;
            case "JP" :
                $language  = "jp";
                break;
            default   :
                $language  = "en";
                break;
        }

        if(empty($language) || $language == '') {
            $language = "en";
        }
        $_COOKIE['lang'] = $language;
    }
    $language = $_COOKIE['lang'];
    if($language == 'jp'){
        $language = 'en';
    }
    $lang_pack = $__lang -> aidus_reserve_form($language);
    $lang_pop = $lang_pack['pop'];
    if($aid_cnt < 30000 || $aid_cnt > 1000000){
        $return_arr['status']  = "error";
        $return_arr['message'] = $lang_pop[3].$lang_pop[4];
        echo json_encode($return_arr);
        exit;
    }
    $join_res = $__api -> aiudsPayJoin($_SESSION, $hash, $addr, $aid_cnt);
    $join_res = $join_res['status'];
    if($join_res !== 200) {
        switch($join_res) {
            case 100 :
                $return_arr['status']  = "error";
                $return_arr['message'] = "AIDAUTH is not defined";
                break;
            case 101 :
                $return_arr['status']  = "error";
                $return_arr['message'] = "AIDSEQ is not defined";
                break;
            case 103 :
                $return_arr['status']  = "error";
                $return_arr['message'] = "AIDUS DB Check Error";
                break;
            case 104 :
                $return_arr['status']  = "error";
                $return_arr['message'] = "Reg Error";
                break;
        }
        echo json_encode($return_arr);
        exit;
    } else {
        $return_arr['status']  = "success";
        $return_arr['message'] = $lang_pop[10];
    }
    echo json_encode($return_arr);

}

?>