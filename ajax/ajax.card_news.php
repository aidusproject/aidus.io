<?php
include $_SERVER['DOCUMENT_ROOT'] . "/inc/common.php";

$idx = trim($_POST['idx']);


try {
    $return_arr = array();

    $sql = "select file_name from attach where reference_seq = {$idx} and business_code = 'CARD'";
    $res = $mysqli -> query($sql);
    while($row = $res -> fetch_object()){
        $data_arr = array();

        $data_arr['img_url'] = $row -> file_name;

        $return_arr['data'][] = $data_arr;
    }

    //다운로드 압축파일
    $sql = "select file_name from attach where reference_seq = {$idx} and business_code = 'ZIP'";
    $res = $mysqli -> query($sql);
    $row = $res -> fetch_object();

    $return_arr['download_zip'] = $row -> file_name;

    echo json_encode($return_arr);
    exit;

}catch (Exception $e){
    throw $e;
}

?>
