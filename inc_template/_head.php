<?php
$sess_id    = $__sess -> __get('SESSID');
$encv       = $__secure -> encrypt($sess_id);

$auth_result = $__api -> authCheck($_SESSION);
$auth_chk = false;
if($auth_result['status'] == 200){
    $auth_chk = true;
}
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="csrf" content="<?=$encv?>">
<title>AIDUS – D Fund Platform</title>
<meta property="og:type" content="website">
<meta property="og:title" content="AIDUS Decentralized Fund Platform">
<meta property="og:url" content="https://aidus.io">
<meta property="og:description"
      content="AIDUS Decentralized Fund Platform - Free access to foreign fund portfolios is facilitated through the AIDUS Coin that would overcome various limitations from border, time, and currency">
<meta property="og:image" content="/images/banner.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<link rel="shortcut icon" href="/images/icon/favicon.ico">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/assets/plugin/swiper/css/swiper.css">


<script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/js/jquery.waterwheelCarousel.js"></script>
<script src="/js/function.js"></script>

<script src="/assets/plugin/swiper/js/swiper.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script src="/js/echarts.js"></script>
<link rel="stylesheet" href="/assets/css/aidus.css?ver=2">



<script src="https://www.google.com/recaptcha/api.js?hl=<?=$lang ?>" async defer></script>

