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
if($auth_chk){
    $return_arr['status']  = 'success';
    $return_arr['message'] = $lang_pop[0].$lang_pop[1].$lang_pop[2];
}else{

    $return_arr['status']  = 'login';
    $return_arr['message'] = $lang_pop[7];
}
echo json_encode($return_arr);


?>