<?php
include_once $_SERVER['DOCUMENT_ROOT']."/class/SessionClass.php";
include_once $_SERVER['DOCUMENT_ROOT']."/class/PasswordEncodeClass.php";
include_once $_SERVER['DOCUMENT_ROOT']."/class/CommonFunctionClass.php";
include_once $_SERVER['DOCUMENT_ROOT']."/inc/vendor/autoload.php";
include_once $_SERVER['DOCUMENT_ROOT']."/class/ApiClass.php";
include_once $_SERVER['DOCUMENT_ROOT']."/class/LangPackClass.php";
include_once $_SERVER['DOCUMENT_ROOT']."/class/ReLangPackClass.php";
include_once $_SERVER['DOCUMENT_ROOT']."/class/SecureClass.php";

$__sess = Session::getInstance();
$__sess -> __set("SESSID", session_id());

$__enc  = new passwordEncode;
$__cf   = new commonFunction;
$__api  = new API;

$__mail = new PHPMailer(true);

$__lang = new langPack;
$__lang2 = new reLangPack;

$__secure = new Secure;

use GeoIp2\Database\Reader;
$reader = new Reader($_SERVER['DOCUMENT_ROOT'].'inc/vendor/geoip2/geoip2/maxmind-db/GeoLite2-Country.mmdb');
try {
    if(isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        $record = $reader->country($_SERVER["HTTP_X_FORWARDED_FOR"]);
        $__country_code = $record -> country -> isoCode;
        if($__country_code == null || $__country_code == '' || empty($__country_code)) {
            $__country_code = "US";
        }
    } else {
        $__country_code = "US";
    }
} catch (Exception $e) {
    //echo $e -> getMessage();
    $__country_code = "US";
}
?>