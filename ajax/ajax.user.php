<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");

$csrf = $__secure->csrf_validation();

if ($csrf['status'] !== 200) {
    echo json_encode($csrf);
    exit;
}

$type   = $_POST['type'];
$return = array();

if(!empty($type)){
    $data_arr = [];
    foreach($_POST as $key => $value){
        if($key != 'type'){
            $data_arr[$key] = $value;
        }
    }
    if($type == 'put'){

        if(isset($_POST['g-recaptcha-response'])){
            $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha) {
            $return = "please, robot check";
            echo json_encode($return);
            exit;
        }
        $ip = $_SERVER['REMOTE_ADDR'];
        $secretKey = "6LfhFZIUAAAAACyM8huS7ot3hDj7FXIdpaYSwcuE";

        $response     = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
            $return = "robot check failed.";
            echo json_encode($return);
            exit;
        }
        $result = $__api -> putUser($data_arr);



        $return = $result['status'];
    }else if($type == 'login'){
        $result = $__api -> authLogin($data_arr);
        if($result['status'] == 200){
            if($result['data']['reset_pass'] != 'Y'){
                $return = 200;
            }else{
                $return = 300;
            }
        }else{
            $return = $result;
        }
    }else if($type == 'pw_change'){
        $data_arr['enc_id'] = $_SESSION['AIDAUTH'];
        $result = $__api -> updatePassword($data_arr);
        $return = $result['status'];
    }
    echo json_encode($return);
}
?>

