<?php

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
$document_root = "";
$lang_arr = $__lang2 -> head($language);
?>
<div class="header">
    <div class="top">
        <div class="head_container">
            <div class="header_top_box">
                <?php
                if($auth_chk){ ?>
                    <a class="header_top_menu login" href="/mypage.php">
                        MY PAGE
                    </a>
                    <span class="header_top_division">|</span>
                    <a class="header_top_menu" href="/logout.php">
                        <?=$lang_arr[1]?>
                    </a>
                <?php }else{ ?>
                    <a class="header_top_menu" href="/login.php">
                        <?=$lang_arr[0]?>
                    </a>
                <?php } ?>


                <span class="header_top_division">|</span>
                <a href="/notice.php" class="header_top_menu">
                    <?=$lang_arr[2]?>/FAQ
                </a>
                <span class="header_top_division">|</span>
                <a class="header_top_menu" id="loc_change">
                    <img src="/images/icon/<?=$lang_icon?>.png" width="24">&nbsp;<?=$lang_txt?>
                    <div class="lang_select_box" id="lang_select_box">
                        <span class="lang_select_btn" data="ko"><img src="/images/icon/kr_icon.png" width="24">&nbsp;한국어</span>
                        <span class="lang_select_btn" data="cn"><img src="/images/icon/ch_icon.png" width="24">&nbsp;简体中文</span>
                        <span class="lang_select_btn" data="en"><img src="/images/icon/en_icon.png" width="24">&nbsp;English</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <script>
        $("#loc_change").click(function(){
           if($(this).hasClass('on')){
               $(this).removeClass('on');
               $("#lang_select_box").fadeOut();
           } else{
               $(this).addClass('on');
               $("#lang_select_box").fadeIn();
           }
        });
    </script>
    <div class="bottom">
        <div class="head_container">
            <div class="header_bottom_box">
                <div class="header_img_box">
                    <a href="/">
                        <img src="assets/image/mo_logo.png" alt="" id="mo_logo" width="200">
                        <img src="assets/image/logo.png" alt="" id="logo">
                    </a>


                </div>
                <div class="header_menu_box">
                    <ul>
                        <?php
                        $menu_sql = "select * from menu where depth=0";
                        $menu_res = $mysqli -> query($menu_sql);
                        while($menu_row = $menu_res -> fetch_assoc()){ ?>
                            <li class="header_menu_btn">
                                <a class="header_menu"><?=$menu_row['menu_name']?></a>
                                <div class="header_sub_menu_box">
                                    <?php
                                    $sub_menu_sql = "select * from menu where depth=1 and parents = {$menu_row['seq']}";
                                    $sub_menu_res = $mysqli -> query($sub_menu_sql);
                                    while($sub_menu_row = $sub_menu_res -> fetch_assoc()){
                                        $target = "";
                                        if($menu_row['menu_name'] == "EXCHANGE"){
                                            $target = " target='_blank'";
                                        }
                                        ?>
                                        <a href="<?=$sub_menu_row['href']?>"<?=$target?>>
                                            <span class="header_sub_menu"><?=$sub_menu_row['menu_name']?></span>
                                        </a>
                                    <?php }
                                    ?>
                                </div>
                            </li>
                        <?php }
                        ?>
                    </ul>

                    <div class="sub_menu_box">
                    </div>
                </div>
                <div class="mo_menu_btn" id="mo_menu">
                    <div class="burgur" id="burgur">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mo_menu_box" id="mo_menu_box">
        <div class="mo_left_menu_box">
            <ul>
                <li class="mo_left_menu" data-id="aidus">
                    AIDUS
                </li>
                <li class="mo_left_menu" data-id="service">
                    SERVICE
                </li>
                <li class="mo_left_menu" data-id="whitepaper">
                    WHITE PAPER
                </li>
                <li class="mo_left_menu" data-id="qtsreport">
                    QTS REPORT
                </li>
                <li class="mo_left_menu" data-id="exchange">
                    EXCHANGE
                </li>
                <li class="mo_left_menu" data-id="brandnews">
                    BRANDNEWS
                </li>
            </ul>
            <style>
                .mo_menu_sub_menu_box{
                    width:100%;
                    overflow: hidden;
                    padding:0 10px;
                }
                .mo_menu_sub_btn{
                    width: 100%;
                    border: 1px solid #777777;
                    padding: 10px;
                    -webkit-border-radius: 25px;
                    -moz-border-radius: 25px;
                    border-radius: 25px;
                    text-align: center;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-size:12px;
                    float: left;
                    margin-top:10px;
                }
                .mo_menu_sub_menu_box .header_top_menu{
                    display: inline-block;
                    padding:10px;
                    border:1px solid ;
                }
            </style>
            <div class="mo_menu_sub_menu_box">
                <a href="login.php" class="mo_menu_sub_btn">로그인</a>
                <a href="notice.php" class="mo_menu_sub_btn">공지/FAQ</a>
                <div class="mobile_region_list">
                    <div class="mobile_region_btn" data="ko">
                        <img src="/images/icon/kr_icon.png">
                        <span>한국어</span>
                    </div>
                    <div class="mobile_region_btn" data="en">
                        <img src="/images/icon/en_icon.png">
                        <span>English</span>
                    </div>
                    <div class="mobile_region_btn" data="cn">
                        <img src="/images/icon/ch_icon.png">
                        <span>简体中文</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="mo_right_menu_box">
            <?php
            $menu_sql = "select * from menu where depth=0";
            $menu_res = $mysqli -> query($menu_sql);
            while($menu_row = $menu_res -> fetch_assoc()){ ?>
                <div class="mo_menu_sub_box" id="menu_<?=$menu_row['href']?>">
                    <?php
                    $sub_menu_sql = "select * from menu where depth=1 and parents = {$menu_row['seq']}";
                    $sub_menu_res = $mysqli -> query($sub_menu_sql);
                    while($sub_menu_row = $sub_menu_res -> fetch_assoc()){
                        $target = "";
                        if($menu_row['menu_name'] == "EXCHANGE"){
                            $target = " target='_blank'";
                        }
                        ?>

                        <a class="mo_right_menu" href="<?=$sub_menu_row['href']?>"<?=$target?>>
                            <span class="header_sub_menu mo_header_sub_menu"><?=$sub_menu_row['menu_name']?></span>
                        </a>
                    <?php }
                    ?>
                </div>
            <?php }
            ?>
        </div>
    </div>
</div>
<script>
    $(".mo_left_menu").click(function(){
        var menuId = $(this).attr('data-id');
        if($(this).hasClass('on')){
            $(this).removeClass('on');
            $("#menu_"+menuId).hide();
        }else{
            $(".mo_left_menu").removeClass('on');
            $(".mo_menu_sub_box").hide();
            $(this).addClass('on');
            $("#menu_"+menuId).show();
        }
    });

    $('.lang_select_btn').on('click',function() {
        var selectLang = $(this).attr('data');
        document.cookie = "lang=" + selectLang;
        var src = window.location.href;
        src = src.split("?");
        src = src[0];
        location.href=src;
        //location.reload();
    });
    $('.mobile_region_btn').on('click',function() {
        var selectLang = $(this).attr('data');
        document.cookie = "lang=" + selectLang;
        var src = window.location.href;
        src = src.split("?");
        src = src[0];
        location.href=src;
        //location.reload();
    });
</script>