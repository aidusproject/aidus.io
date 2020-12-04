<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
$lang_pack = $__lang -> home($language);
?>
<section class="main_top">
    <div class="main_top_inner">
        <div class="container flex_c main_text">
            <div class="main_top_text margin-bottom-10">
                <?=$lang_pack[0] ?>
                <!--국경, 시간, 통화의 제약을 극복하고 AIDUS TOKEN을 통해 자유로운 해외 펀드 가입이 가능한-->
            </div>
            <div class="main_top_text_bottom">
                <?=$lang_pack[1] ?>
                <!--탈중앙화 글로벌 펀드 마켓 플레이스-->
            </div>

        </div>
    </div>
</section>
<?php
$news = $__api -> getNews(array("page_size"=>0, "locale" => $locale));
$result = $news['data'];
?>
<div class="carousel_box" id="carousel_box">
    <div class="carousel_pop_mask">
        <div class="carousel_pop_box">
            <div class="carousel_pop_head">
                <span id="news_pop_title">Title</span>
                <span class="news_pop_close">X</span>
            </div>
            <div class="carousel_pop_body">
                <div class="carousel_pop_body_contents" id="news_pop_content">

                </div>
            </div>
            <div class="carousel_pop_foot">
                <div class="carousel_pop_foot_left_right carousel_pop_foot_left cursor flex_r" id="carousel_left">〈</div>
                <div class="carousel_pop_foot_center flex_r">
                    <div class="carousel_pop_close cursor">CLOSE</div>
                </div>
                <div class="carousel_pop_foot_left_right carousel_pop_foot_right cursor flex_r" id="carousel_right">〉</div>
            </div>
        </div>
    </div>
    <div class="container flex_c">
        <div class="carousel_menu col col-12">
            <div class="row" style="height:100%;">
                <div class="carousel_menu_btn cursor all on" data-type="ALL">All</div>
                <div class="carousel_menu_btn cursor" data-type="MOVIE">MOVIE</div>
                <div class="carousel_menu_btn cursor" data-type="NEWS">NEWS</div>
                <div class="carousel_menu_btn cursor" data-type="MEET">MEETUP</div>
                <div class="carousel_menu_btn cursor" data-type="QTS">SMART QTS</div>
            </div>
        </div>
        <!--<div class="carousel_title margin-bottom-30">
        <span class="carousel_text">
            AIDUS <span>NEWS</span>
        </span>

        </div>-->
        <div style="width: 100%;text-align: right;font-weight: 700;padding-right: 10px;">Total : <span id="slide_total_cnt"><?=$news['total_cnt']?></span></div>
        <div class="item" id="loader">
            <div class="loader"></div>
        </div>

        <div class="swiper_area" id="swiper_area">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    foreach($result as $key => $values){ ?>
                        <div data-seq="<?=$result[$key]['seq']?>" class="swiper-slide flex_r">
                            <img src="<?=$result[$key]['cover_url']?>" onerror="this.src='/images/no-image.png'">
                            <div class="slide_center_title">
                                <div class="slide_center_title_text">
                                    <?=$result[$key]['title']?>
                                </div>
                            </div>
                            <div class="slide_center_detail">
                                <div class="slide_center_detail_btn swiper_pop flex_r">
                                    Detail
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

    </div>
</div>
<div class="main_section bg-grey" id="why">
    <div class="main_title">WHY <span>AIDUS?</span></div>
    <img src="/images/why_aidus_<?=$locale?>.png" onerror="this.src='/images/why_aidus_en.png'" width="100%" id="why_aidus_image">
    <a href="whyaidus.php"><div class="main_btn flex_r">DETAIL</div></a>
</div>
<div class="main_section fund_section" style="text-align: center;" id="fund">
    <div class="container">
        <div class="fund_title margin-bottom-30">
            AIDUS <span><!--펀드 플랫폼--><?=$lang_pack[2]?></span>
        </div>
        <br>
        <span class="fund_text_area">
            <span class="fund_text_sub margin-bottom-10">
                <?=$lang_pack[3] ?>
                <!--독자적인 QTS를 기반으로 고수익 자산운용이 가능한-->
            </span>
            <br>
            <span class="fund_text_main margin-bottom-30">
                <?=$lang_pack[4] ?>
                <!--탈중앙화 글로벌 펀드 마켓 플랫폼(ADFP) 운영-->
            </span>
        </span>
        <div class="fund_img_box">
            <div class="fund_img_box_img">
                <img src="/images/index_1.png" alt="">
                <div class="text"><?=$lang_pack[5] ?></div>
                <!--투자자-->
            </div>
            <div class="plus_img">
                <img src="/images/index_plus.png" alt="">
            </div>
            <div class="fund_img_box_img">
                <img src="/images/index_2.png" alt="">
                <div class="text"><?=$lang_pack[6] ?></div>
                <!--AIDUS D-Fund Platform-->
            </div>
            <div class="plus_img">
                <img src="/images/index_plus.png" alt="">
            </div>
            <div class="fund_img_box_img">
                <img src="/images/index_3.png" alt="">
                <div class="text"><?=$lang_pack[7] ?></div>
                <!--자산운용사-->
            </div>
            <div class="plus_img">
                <img src="/images/index_plus.png" alt="">
            </div>
            <div class="fund_img_box_img">
                <img src="/images/index_4.png" alt="">
                <div class="text"><?=$lang_pack[8] ?></div>
                <!--SMART QTS-->
            </div>
        </div>
        <a href="platform.php"><span class="fund_btn cursor  flex_r">DETAIL</span></a>
    </div>
</div>
<div class="main_section" style="background-color: #f5f5f5;" id="qts">
    <div class="container">
        <div class="row">
            <div class="col col-4 qts_text_box">
                <div class="qts_title margin-bottom-20">
                    SMART <span>QTS</span>
                </div>
                <div class="qts_text margin-bottom-30">
                    <?=$lang_pack[10] ?>
                    <?=$lang_pack[11] ?>
                    <!--다년간 축적된 BIG DATA를 토대로 지속적,<br>
                    안정적 수익률 운영이 가능한 <br>
                    자동화 펀드 트레이드 시스템 <br>-->
                </div>
                <a href="qts.php"><span class="fund_btn go_qts_btn cursor flex_r">DETAIL</span></a>
            </div>
            <div class="col col-4 qts_box">
                <div class="certificate_box">
                    <div class="certificate_area">
                        <div class="certificate_img">
                            <img src="/images/certificate.png" width="100%">
                            <img src="/images/medal.png" class="medal_img">
                        </div>
                        <div class="certificate_text">
                            <span class="small_text">Update QTS Earning Rate Report by </span>
                            <span class="big_text"><?=$qts_res[0]['title']?></span>
                            <span class="small_text">AVERAGE ANNUAL IRR </span>
                            <span class="big_text" style="color:#fff600;"><?=$qts_res[0]['yield']?><span style="font-size:16px;">%</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-4 revenue_box">
                <div class="certificate_revenue">
                    <div class="revenue_img">
                        <img src="/images/revenue.png" width="100%">
                    </div>
                    <div class="revenue_text">
                        <span class="big_text">CERTIFICATE OF REVENUE</span>
                        <span class="small_text">Update QTS Earning Rate Report by Dec. 21, 2018</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$news_article = $__api -> getNewsLink(array("page_size"=>8));
$article_res  = $news_article['data'];
?>
<div class="main_section article_section" style="text-align: center;" id="article">
    <div class="container">
        <div class="fund_title margin-bottom-50">
            AIDUS <span>PRESS ARTICLE</span>
        </div>
        <div class="row" id="article_area">
            <?php
            foreach($article_res as $key => $value){ ?>
                <div class="col col-3 margin-bottom-20 article_area_box">
                    <a href="<?= $article_res[$key]['link']; ?>" target="_blank">
                        <div class="article_box" data-seq="<?=$article_res[$key]['seq']?>">
                            <div class="article_box_img">
                                <img src="<?php
                                if(!empty($article_res[$key]['image_link'])) {
                                    echo $article_res[$key]['image_link'];
                                } else {
                                    echo "/images/no-image.png";
                                }
                                ?>
                                " onerror="this.src='/images/no-image.png'"/>
                            </div>
                            <div class="article_desc">
                                <div class="article_title margin-bottom-10">
                                    <?=$article_res[$key]['title']?>
                                </div>
                                <div class="article_date">
                                    <?=$article_res[$key]['reg_date']?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php }
            ?>
        </div>
        <div id="article_loader_area"></div>
        <span class="article_btn cursor flex_r" id="article_more" style="display: inline-flex">MORE</span>
        <span class="article_btn reset cursor flex_r" id="article_reset" style="display: inline-flex">RESET</span>
    </div>
</div>
<div class="main_section social_section" id="social">
    <div class="social_title">AIDUS Social Network Service</div>
    <a href="https://www.facebook.com/AIDUSofficial/?modal=admin_todo_tour" target="_blank"><img src="/images/icon/facebook_icon.png"></a>
    <a href="https://twitter.com/AIDUSofficial" target="_blank"><img src="/images/icon/twitter_icon.png"></a>
    <a href="https://medium.com/@AIDUSofficial" target="_blank"><img src="/images/icon/naver_icon.png"></a>
    <a href="https://www.reddit.com/user/AIDUSofficial" target="_blank"><img src="/images/icon/robot_icon.png"></a>
    <a href="https://t.me/aidusofficial" target="_blank"><img src="/images/icon/plain_icon.png"></a>
</div>
    <script>

        totalIndex   = "<?=$news['total_cnt']?>";
        slideObject  = {
            "pre_1"  : 0,
            "pre_2"  : 0,
            "pre_3"  : 0,
            "curIdx" : 0,
            "nex_1"  : 0,
            "nex_2"  : 0,
            "nex_3"  : 0
        }
        var slidePage = 1;
        var cover;
        var menuType = '';

        currentViewIndex = 0;
        var swiper,coverflow;
        if($(window).width() < 768){
            swiper = new Swiper('.swiper-container', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                loop:true,
                coverflowEffect: {
                    rotate: 20,
                    stretch: 100,
                    depth: 100,
                    modifier: 1,
                    slideShadows : true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                    spaceBetween : 100
                },
            });
        }else{
            swiper = new Swiper('.swiper-container', {
                effect: 'coverflow',
                centeredSlides: true,
                slidesPerView: 'auto',
                loop:true,
                simulateTouch: true,
                allowTouchMove:false,
                slideToClickedSlide:true,
                coverflowEffect: {
                    rotate: 20,
                    stretch: 100,
                    depth: 100,
                    modifier: 1,
                    slideShadows : true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                    spaceBetween : 100
                }
            });
            $("#loader").fadeOut();
        }

        $(".carousel_menu_btn").click(function(){
            $("#loader").css('display','block');
            var locale = "<?=$locale ?>";
            menuType = $(this).attr('data-type');
            if(menuType == 'QTS'){
                location.href='qts.php?page_type=report';
            }else{

                swiper.removeAllSlides();
                $(".carousel_menu_btn").removeClass('on');
                $(this).addClass('on');
                var page = 1;
                $.ajax({
                    url: "/ajax/ajax.news.php",
                    type: "post",
                    data: {'type': menuType,'page':page, 'locale' : locale},
                    dataType: "json",
                    async: true,
                    error: function () {
                    },
                    success: function (result) {
                        totalIndex = result['total_cnt'];
                        indexArray = new Array();
                        $("#slide_total_cnt").html(totalIndex);
                        result = result['data'];

                        for(var i=0;i<result.length;i++){
                            var append_text = '';
                            if(result[i]['news_type'] != 'MOVIE'){
                                append_text = '<div data-seq="'+
                                    result[i]['seq']+'" class="swiper-slide flex_r"><img src="'+
                                    result[i]['cover_url']+'" onerror="this.src=\'/images/no-image.png\'"><div class="slide_center_title"><div class="slide_center_title_text">'+
                                    result[i]['title']+'</div></div><div class="slide_center_detail"><div class="slide_center_detail_btn swiper_pop flex_r">Detail</div></div></div>';
                            }else {
                                var yImg = '';
                                var yImgLink = '';
                                if (result[i]['cover_url'].indexOf('.be/') != -1) {
                                    yImg = result[i]['cover_url'].split('.be/');
                                    yImg = yImg[1];
                                } else {
                                    yImg = result[i]['cover_url'].split('embed/');
                                    yImg = yImg[1];
                                }
                                yImgLink = 'http://img.youtube.com/vi/' + yImg + '/0.jpg';
                                append_text = '<div data-seq="' +
                                    result[i]['seq'] + '" class="swiper-slide flex_r"><img src="' +
                                    yImgLink + '" onerror="this.src=\'/images/no-image.png\'"><div class="slide_center_title"><div class="slide_center_title_text">' +
                                    result[i]['title'] + '</div></div><div class="slide_center_detail"><div class="slide_center_detail_btn swiper_pop flex_r">Detail</div></div></div>';

                            }
                            swiper.appendSlide(append_text);
                        }
                        swiper.update();
                        swiper.slideReset();
                        swiper.slideToLoop(0,400);
                        $("#loader").fadeOut();
                    }
                });
            }


        });

        var articlePage = 1;
        $("#article_more").click(function(){
            var appendText = '<div class="loader"></div>';
            $("#article_loader_area").append(appendText);
            articlePage++;
            $.ajax({
                url: "/ajax/ajax.news_link.php",
                type: "post",
                data: {'type': 'NEWS','page':articlePage},
                dataType: "json",
                async: false,
                error: function (e) {
                },
                success: function (result) {
                    $("#article_area").append('<div class="col col-12" id="article'+articlePage+'" style="display:none;">');
                    for(var i=0;i<result.length;i++){
                        var imageLink = result[i]['image_link'];
                        if(imageLink.trim() == '') {
                            imageLink = '../images/no-image.png';
                        }
                        var articleAppend = '<div class="col col-3 margin-bottom-20 load_article article_area_box">' +
                            '                            <a href="'+
                            result[i]['link']+'" target="_blank"><div class="article_box" data-seq="'+
                            result[i]['seq']+'">'+
                            '                                <div class="article_box_img">' +
                            '                                    <img src="'+
                            imageLink+'" onerror="this.src=\'/images/no-image.png\'"/>' +
                            '                                </div>' +
                            '                                <div class="article_desc">' +
                            '                                    <div class="article_title margin-bottom-10">'+
                            result[i]['title']+'</div>' +
                            '                                    <div class="article_date">'+
                            result[i]['reg_date']+'</div>' +
                            '                                </div>' +
                            '                            </div></a>' +
                            '                        </div>';
                        $("#article"+articlePage).append(articleAppend);
                    }
                    $("#article"+articlePage).fadeIn();
                    $("#article_loader_area").html("");
                }
            });
        });
        $("#article_reset").click(function(){
            $(".load_article").remove();
        });


        $(".carousel_pop_close,.news_pop_close").click(function(){
            $(".carousel_pop_mask").fadeOut();
            $("html, body").css({
                "overflow":"auto"
            });
        });
        $(".carousel_pop_foot_left_right").click(function(){
            var thisId = $(this).attr('id');
            var thisSeq;
            if(thisId == 'carousel_left'){
                thisSeq = $(".swiper-slide-prev").attr('data-seq');
                $(".swiper-button-prev").click();
            }else{
                thisSeq = $(".swiper-slide-next").attr('data-seq');
                $(".swiper-button-next").click();
            }
            if(!thisSeq){
                alert("No More Article");
                return false;
            }
            $("#news_pop_content").html('');
            var appendData = '<div class="item" id="loader">' +
                '            <div class="loader"></div>' +
                '        </div>';
            $("#news_pop_content").append(appendData);
            popup_move(thisSeq,'more');
        });

        function popup_move(seq,text){
            var thisSeq = seq;

            $.ajax({
                url: "/ajax/ajax.popup.php",
                type: "post",
                data: {'seq': thisSeq},
                dataType: "json",
                async: false,
                error: function (e) {
                },
                success: function (result) {
                    if(result == 100){
                        alert("실행 오류");
                    }else{
                        $("#news_pop_title").html(result['title']);
                        $("#news_pop_content").html(result['contents']);
                        if(text == 'new'){
                            $("html, body").css({
                                "overflow":"hidden"
                            });
                            location.href="#carousel_box";
                            $(".carousel_pop_mask").css('display','flex');
                        }
                    }
                }
            });
        }

        $(document).on("click",".slide_center_detail",function(){
            var target = $(this).parents('div.swiper-slide');
            var thisSeq = target.attr('data-seq');
            popup_move(thisSeq,'new');
        });
        var locale = "<?=$locale?>";
        if($(window).width() < 768){
            $("#why_aidus_image").attr('src','/images/why_aidus_mo_'+locale+'.png');
            $("#fund_image").attr('src','/images/fund_img_mo_'+locale+'.png');
        }
        $(window).resize(function(){
            if($(window).width() < 768){
                $("#why_aidus_image").attr('src','/images/why_aidus_mo_'+locale+'.png');
                $("#fund_image").attr('src','/images/fund_img_mo_'+locale+'.png');
            }else{
                $("#why_aidus_image").attr('src','/images/why_aidus_'+locale+'.png');
                $("#fund_image").attr('src','/images/fund_img_'+locale+'.png');
            }
        });
        $(".swiper-button-next").click(function(){
            var curIndex = swiper.activeIndex;
            if(curIndex > ($(".swiper-slide").length - 5)){
                mobaReadMore();
            }
        });
        function loaderHide(){
            $("#loader").fadeOut();
        }
    </script>
<?php include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/footer.php"); ?>