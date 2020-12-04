<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");
$qts = $__api -> getQts(array("page_size"=>1));
$qts_res = $qts['data'];

$auth_result = $__api -> authCheck($_SESSION);
$auth_chk = false;
if($auth_result['status'] == 200){
    $auth_chk = true;
}

$current_uri = $_SERVER['REQUEST_URI'];
if(empty($current_uri) || $current_uri == 'index.php') {

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="apple-mobile-web-app-capable" content="yes"><!--  상태바제거 -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="title" content="AIDUS">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.waterwheelCarousel.js"></script>
    <link rel="stylesheet" href="/css/jquery.flipster.css">
    <script src="/js/jquery.flipster.js"></script>
    <script src="/js/function.js"></script>
</head>
<body>
<div class="main_wrapper">
    <header>
        <div class="top_header">
            <div class="container">
                <div class="col col-6 header_news flex_r_l">
                    <span class="news_title">HOT NEWS!</span>
                    <span class="news_subject cursor"><?=$qts_res[0]['title']?> : <span style="color:#00afb8;font-size:14px;"><?=$qts_res[0]['yield']?></span></span>
                    <span class="more_detail_btn cursor">More Detailed Report</span>
                </div>
                <div class="col col-6 header_btn flex_r_r">

                    <?php
                    if($auth_chk){ ?>
                        <a href="/wallet.php"><span class="white_btn margin-left-10 cursor">WALLET</span></a>
                        <a href="/logout.php"><span class="white_btn margin-left-10 cursor">LOGOUT</span></a>
                    <?php }else{ ?>
                        <a href="/signup.php"><span class="white_btn margin-left-10 cursor">SIGN UP</span></a>
                        <a href="/login.php"><span class="white_btn margin-left-10 cursor">LOGIN</span></a>
                    <?php }
                    ?>
                    <a href="/contact.php"><span class="white_btn margin-left-10 cursor">Contact US</span></a>
                </div>
            </div>
        </div>
        <div class="bottom_header main_bottom_header">
            <div class="container">
                <div class="header_logo">
                    <a href="/">
                        <img src="/images/icon/logo.png" width="100%">
                    </a>
                </div>
                <div class="header_nav">
                    <a href="/whyaidus.php"><span class="on">WHY AIDUS</span></a>
                    <a href="/platform.php"><span>D-FUND FLATFORM</span></a>
                    <a href="/qts.php"><span>SMART QTS</span></a>
                    <a href="/news.php"><span>NEWS</span></a>
                </div>
            </div>
        </div>
    </header>