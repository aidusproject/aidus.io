<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");

$csrf = $__secure->csrf_validation();

if ($csrf['status'] !== 200) {
    echo json_encode($csrf);
    exit;
}

$type = $_POST['type'];


if(!empty($type)){

    $data_arr = [];

    if($type == 'contact'){

        $sender   = $_POST['sender'];
        $contents = $_POST['contents'];
        $data_arr = array(
            "sender"   => $sender,
            "contents" => $contents
        );

        $result = $__api -> contactUs($data_arr);
        echo json_encode($result);

    }else{
        foreach($_POST as $key => $value){
            $data_arr[$key] = $value;
        }
        if($type == 'temppassword'){
            $result = $__api -> mailSend($data_arr);
            echo json_encode($result);
        }
    }

}else{
    echo json_encode('null type');
}






?>

