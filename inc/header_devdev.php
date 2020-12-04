<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");

$qts = $__api -> getQts(array("page_size"=>1));
$qts_res = $qts['data'];

$auth_result = $__api -> authCheck($_SESSION);
$auth_chk = false;
if($auth_result['status'] == 200){
    $auth_chk = true;
}

$current_uri       = $_SERVER['REQUEST_URI'];

$main_header_class = "";
$wrapper_class     = "";

if(empty($current_uri) || $current_uri == 'index.php' || $current_uri == '/') {
    $main_header_class = " main_bottom_header";
    $wrapper_class ="main_";
}
$move_page = $_GET['move'];
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
switch ($language) {
    case "ko" :
        $lang_icon = "kr_icon";
        $lang_txt  = "한국어";
        $locale    = "kr";
        $lang_file = "kor";
        $lang      = "ko";
        break;
    case "cn" :
        $lang_icon = "ch_icon";
        $lang_txt  = "简体中文";
        $locale    = "cn";
        $lang_file = "chi";
        $lang      = "zh";
        break;
    case "jp" :
        $lang_icon = "jp_icon";
        $lang_txt  = "日本語";
        $locale    = "jp";
        $lang_file = "jap";
        $lang      = "ja";
        break;
    case "en" :
        $lang_icon = "en_icon";
        $lang_txt  = "English";
        $locale    = "en";
        $lang_file = "eng";
        $lang      = "en";
        break;
    default :
        $lang_icon = "en_icon";
        $lang_txt  = "English";
        $locale    = "en";
        $lang_file = "eng";
        $lang      = "en";
        break;
}
?>
<!DOCTYPE html>
<html lang="<?=$lang ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>AIDUS – D Fund Platform</title>
    <meta property="og:type" content="website">
    <meta property="og:title" content="AIDUS Decentralized Fund Platform">
    <meta property="og:url" content="https://aidus.io">
    <meta property="og:description"
          content="AIDUS Decentralized Fund Platform - Free access to foreign fund portfolios is facilitated through the AIDUS Coin that would overcome various limitations from border, time, and currency">
    <meta property="og:image" content="/images/banner.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="title" content="AIDUS">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="shortcut icon" href="/images/icon/favicon.ico">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/custom_dev.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/swiper_dev.css">
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.waterwheelCarousel.js"></script>
    <script src="/js/function.js"></script>
    <script src="/js/_swiper.js"></script>
    <!--<script src="/js/swiper.js"></script>-->
    <script src="https://www.google.com/recaptcha/api.js?hl=<?=$lang ?>" async defer></script>
    <script src="/js/echarts.js"></script>
</head>
<body>
<div class="<?=$wrapper_class ?>wrapper">
    <header>
        <div class="top_header">
            <div class="container">
                <div class="col col-6 header_news flex_r_l">
                    <span class="news_title">HOT NEWS!</span>
                    <a class="news_subject_box" href="<?=_S3_URI_?><?=$qts_res[0]['attach_file_path']?><?=$qts_res[0]['attach_file_name']?>" target="_blank" title="<?=$qts_res[0]['attach_source_file_name']?>">
                        <span class="news_subject cursor"><?=$qts_res[0]['title']?> : <span style="color:red;font-size:15px;"><?=$qts_res[0]['yield']?></span></span>
                    </a>
                    <span class="more_detail_btn cursor"><a href="qts.php?page_type=report">More Detailed Report</a></span>
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
                    <span class="white_btn margin-left-10 cursor region_select_btn">
                    <img src="/images/icon/<?=$lang_icon ?>.png">
                    <span class="region_after_span"><?=$lang_txt ?></span>
                    <div class="region_select_area">
                        <div class="region_select_region cursor" data="en">
                            <img src="/images/icon/en_icon.png">
                            <span>English</span>
                        </div>
                        <div class="region_select_region cursor" data="ko">
                            <img src="/images/icon/kr_icon.png">
                            <span>한국어</span>
                        </div>
                        <div class="region_select_region cursor" data="cn">
                            <img src="/images/icon/ch_icon.png">
                            <span>简体中文</span>
                        </div>
                        <div class="region_select_region cursor" data="jp">
                            <img src="/images/icon/jp_icon.png">
                            <span>日本語</span>
                        </div>
                    </div>
                </span>
                </div>
            </div>
        </div>
        <div class="bottom_header<?=$main_header_class ?>">
            <div class="container">
                <div class="header_logo">
                    <a href="/">
                        <img src="/images/icon/logo.png" width="100%">
                    </a>
                </div>
                <div class="header_nav">
                    <?php
                    $tab_index    = " class='navbar_menu'";
                    $tab_whyaidus = " class='navbar_menu'";
                    $tab_platform = " class='navbar_menu'";
                    $tab_qts      = " class='navbar_menu'";
                    $tab_news     = "";
                    $tab_faq      = "";
                    $on_class     = " class='navbar_menu on'";
                    $none_on_class = " class='on'";
                    $current_uri = explode("?",$current_uri);
                    $current_uri = $current_uri[0];
                    switch ($current_uri) {
                        case "/"             : $tab_index    = $on_class;break;
                        case "/index.php"    : $tab_index    = $on_class;break;
                        case "/whyaidus.php" : $tab_whyaidus = $on_class;break;
                        case "/platform.php" : $tab_platform = $on_class;break;
                        case "/qts.php"      : $tab_qts      = $on_class;break;
                        case "/news.php"     : $tab_news     = $none_on_class;break;
                        case "/faq.php"      : $tab_faq      = $none_on_class;break;
                    }
                    ?>
                    <span <?=$tab_index    ?>>
                    <a class="header_menu_link flex_r" href="/">HOME</a>
                        <div class="menu_box">
                        <span class="menu_box_menu" data-id="carousel_box">AIDUS NEWS</span>
                        <span class="menu_box_menu" data-id="why">WHY AIDUS</span>
                        <span class="menu_box_menu" data-id="fund">FUND PLATFORM</span>
                        <span class="menu_box_menu" data-id="qts">SMART QTS</span>
                        <span class="menu_box_menu" data-id="article">PRESS ARTICLE</span>
                        <span class="menu_box_menu" data-id="social">SOCIAL NETWORK</span>
                    </div>
                </span>
                    <span<?=$tab_whyaidus ?> data-id="menu-1">
                    <a class="header_menu_link flex_r" href="/whyaidus.php">WHY AIDUS</a>
                    <div class="menu_box">
                        <span class="menu_box_menu" data-id="adfp">ADFP</span>
                        <span class="menu_box_menu" data-id="coin">AIDUS COIN</span>
                        <span class="menu_box_menu" data-id="point">DIFFERENTIATION</span>
                        <span class="menu_box_menu" data-id="team">TEAM</span>
                    </div>
                </span>
                    <span<?=$tab_platform ?> data-id="menu-2">
                    <a class="header_menu_link flex_r" href="/platform.php">D-FUND FLATFORM</a>
                    <div class="menu_box">
                        <span class="menu_box_menu" data-id="fund">D-FUND PLATFORM</span>
                        <span class="menu_box_menu" data-id="paper">WHITE PAPER</span>
                        <span class="menu_box_menu" data-id="market">MARKET PLATFORM</span>
                    </div>
                </span>
                    <span<?=$tab_qts      ?> data-id="menu-3">
                    <a class="header_menu_link flex_r" href="/qts.php">SMART QTS</a>
                        <div class="menu_box">
                        <span class="menu_box_menu" data-id="qts">SMART QTS</span>
                        <span class="menu_box_menu" data-id="meta">AUTHENTICATION</span>
                        <span class="menu_box_menu" data-id="desc">AUTHENTICATION DETAIL</span>
                        <span class="menu_box_menu" data-id="cross">CROSS CHECK</span>
                        <span class="menu_box_menu" data-id="report">QTS REPORT</span>
                    </div>
                </span>
                    <span<?=$tab_news     ?> data-id="menu-4">
                    <a class="header_menu_link flex_r" href="/news.php">NEWS</a>
                        <div class="menu_box">
                        <span class="menu_box_menu">PHOTO</span>
                        <span class="menu_box_menu">MOVIE</span>
                    </div>
                </span>
                    <span<?=$tab_faq      ?> data-id="menu-5">
                    <a class="header_menu_link flex_r" href="/faq.php">FAQ</a>
                </span>
                    <span>
                        <a class="buy_token_link_open">BUY AIDUS TOKEN</a>
                        <div class="buy_token_link_area">
                            <div class="buy_token_link_box">
                                <a href="https://coinbene.com" target="_blank">
                                <div class="buy_token_link">
                                    <img src="/images/icon/coinbene.png">
                                    <span class="buy_token_link_text" id="buy_coinbene">CoinBene</span>
                                </div>
                                </a>
                                <a href="https://bit.ly/2VeGQrk" target="_blank">
                                <div class="buy_token_link">
                                    <img src="/images/icon/latoken2.png">
                                    <span class="buy_token_link_text" id="buy_latoken">LATOKEN</span>
                                </div>
                                </a>
                                <a href="https://rankcoin.com" target="_blank">
                                <div class="buy_token_link">
                                    <img src="/images/icon/rankcoin.png">
                                    <span class="buy_token_link_text" id="buy_rankcoin">RankCoin</span>
                                </div>
                                </a>
                            </div>
                        </div>
                    </span>
                    <div class="buy_token_mask" id="buy_token_mask"></div>
                </div>
            </div>
        </div>
        <div class="head_sub_menu_box" id="head_sub_menu_box">
        </div>
        <div class="mobile_header">
            <div class="mobile_logo">
                <a href="/">
                    <img src="/images/icon/logo.png" width="100%">
                </a>
            </div>

            <div class="mobile_menu_btn">
                <button class="minMenu_btn" id="minMenu_btn">
                    <div class="burgur"></div>
                </button>
            </div>
        </div>
        <div class="mobile_menu_area">
            <div class="mobile_menu_list">
                <div class="mobile_menu"><a href="/">HOME</a></div>
                <div class="mobile_menu"><a href="/whyaidus.php">WHY AIDUS</a></div>
                <div class="mobile_menu"><a href="/platform.php">D-FUND FLATFORM</a></div>
                <div class="mobile_menu"><a href="/qts.php">SMART QTS</a></div>
                <div class="mobile_menu"><a href="/news.php">NEWS</a></div>
                <div class="mobile_menu"><a href="/faq.php">FAQ</a></div>
                <?php
                if($auth_chk){ ?>
                    <div class="mobile_menu"><a href="/wallet.php">WALLET</a></div>
                    <div class="mobile_menu"><a href="/logout.php">LOGOUT</a></div>
                <?php }else{ ?>
                    <div class="mobile_menu"><a href="/signup.php">SIGN UP</a></div>
                    <div class="mobile_menu"><a href="/login.php">LOGIN</a></div>
                <?php }
                ?>
                <div class="mobile_menu"><a href="/contact.php">Contact US</a></div>
                <div class="mobile_menu moba_buy_token" id="moba_buy_token" style="background-color: #00afb8;padding:10px;">
                    <a>BUY AIDUS TOKEN</a>
                </div>
                <div class="moba_buy_token_area">
                    <div class="moba_buy_token_box">
                        <a href="https://coinbene.com" target="_blank">
                            <div class="moba_buy_token_link">
                                <img src="/images/icon/coinbene.png" width="20"> CoinBene
                            </div>
                        </a>
                        <a href="https://rankcoin.com" target="_blank">
                            <div class="moba_buy_token_link">
                                <img src="/images/icon/rankcoin.png" width="20"> RankCoin
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mobile_region_list">
                <div class="container">
                    <div class="row">
                        <div class="col col-6 mobile_region_btn_box">
                            <div class="mobile_region_btn" data="en">
                                <img src="/images/icon/en_icon.png">
                                <span>English</span>
                            </div>
                        </div>
                        <div class="col col-6 mobile_region_btn_box">
                            <div class="mobile_region_btn" data="ko">
                                <img src="/images/icon/kr_icon.png">
                                <span>한국어</span>
                            </div>
                        </div>
                        <div class="col col-6 mobile_region_btn_box">
                            <div class="mobile_region_btn" data="cn">
                                <img src="/images/icon/ch_icon.png">
                                <span>简体中文</span>
                            </div>
                        </div>
                        <div class="col col-6 mobile_region_btn_box">
                            <div class="mobile_region_btn" data="jp">
                                <img src="/images/icon/jp_icon.png">
                                <span>日本語</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            realWidth = $(window).width();
            $("#minMenu_btn").click(function(){
                if($(this).hasClass('on')){
                    $(this).removeClass('on');
                    $(".burgur").removeClass('on');
                    $(".mobile_menu_area").fadeOut(300);
                }else{
                    $(this).addClass('on');
                    $(".burgur").addClass('on');
                    $(".mobile_menu_area").fadeIn(300);
                }
            });

            $('.region_select_region.cursor,.mobile_region_btn').on('click',function() {
                var selectLang = $(this).attr('data');
                document.cookie = "lang=" + selectLang;
                location.reload();
            });
            $(".buy_token_link_open").click(function(){
                if($(this).hasClass('on')){
                    $(".buy_token_link_area").fadeOut();
                    $("#buy_token_mask").hide();
                    $(this).removeClass('on');
                }else{
                    $(".buy_token_link_area").fadeIn();
                    $("#buy_token_mask").show();
                    $(this).addClass('on');
                }
            });
            /*$(document).click(function(e){
                var className = e.target.className;
                console.log(className);
                if(className == 'buy_token_link_open'){
                    return false;
                }
                $(".buy_token_link_open").removeClass('on');
                $(".buy_token_link_area").fadeOut();
            });*/
            $("#buy_token_mask").click(function(){
                $(this).hide();
                $(".buy_token_link_area").fadeOut();
                $(".buy_token_link_open").removeClass('on');
            });
            $("#moba_buy_token").click(function(){
                if($(this).hasClass('on')){
                    $(".moba_buy_token_box").css({
                        'visibility':'hidden',
                        'margin-top':'-60px',
                        'opacity':'0'
                    });
                    $(this).removeClass('on');
                }else{
                    $(".moba_buy_token_box").css({
                        'visibility':'inherit',
                        'margin-top':'0',
                        'opacity':'1'
                    });
                    $(this).addClass('on');
                }

            });
        </script>
    </header>
