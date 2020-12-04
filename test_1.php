<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");

$result = $__api -> getYieldList();

$__cf -> prpre($result);

?>