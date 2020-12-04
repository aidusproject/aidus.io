<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");

$__api -> authLogout();

echo "<script>location.href='index.php'</script>";
?>