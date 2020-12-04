<?php
define("_DB_HOST_","aidus-ico-db.cidnxktlg2kc.ap-northeast-2.rds.amazonaws.com");
define("_DB_USER_","aidus");
define("_DB_PASS_","dkdlejtm135!#%");
define("_DB_NAME_","aidus_ico");

$mysqli = new Mysqli(_DB_HOST_, _DB_USER_, _DB_PASS_, _DB_NAME_);

if($mysqli -> connect_error) {
    die('mysql connection error ('. $mysqli -> connect_errno . ") " . $mysqli -> connect_error);
}

$mysqli -> set_charset('utf-8');
$mysqli -> query('set names utf8');
?>