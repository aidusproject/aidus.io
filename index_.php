<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
$lang_pack = $__lang -> home($language);


$yield_list = $__api -> getYieldList_2();
$x_axis = $yield_list['x_axis'];
$y_axis = $yield_list['y_axis'];
$y_axis_pop = $y_axis;
$y_axis_min = round((((int)$y_axis[0] - 10)/10)*10);
$y_axis_max = round((((int)array_pop($y_axis_pop) + 10)/10)*10);
unset($y_axis_pop);
?>
    <section class="main_top">
        <div class="main_top_slide_area" id="main_top_slide">
            <div class="mouse_box" id="stop_slide">
                <div class="mouse_img_box">
                    <img src="/images/mouse.png" alt="mouse">
                </div>
                <div class="mouse_text_box">
                    마우스를 올려주세요.
                </div>
            </div>
            <div class="play_stop_box" id="play_stop_box">
                <div class="play_box" id="play_box">
                    <img src="/images/play.png" alt="play">
                </div>
                <div class="stop_box" id="stop_box">
                    <img src="/images/stop.png" alt="stop">
                </div>
            </div>
            <div class="slide_right_left right_box" id="slide_next">

            </div>
            <div class="slide_right_left left_box" id="slide_prev">

            </div>
            <div class="main_top_slide_box box1" id="main_top_slide_box1" data-idx="1">
                <div class="main_top_slide_before">
                    <div class="main_top_slide_title">
                        WHY AIDUS
                        <div class="why_aidus_bottom_line"></div>
                        <div class="main_top_slide_sub">WORLD TOP<br><?=$lang_pack[12] ?></div>
                        <div class="main_top_slide_whyaidus"><?=$qts_res[0]['yield']?>/ Yr</div>
                    </div>
                    <div class="main_top_slide_click_title">WHY AIDUS</div>
                </div>
                <div class="in_box box1">
                    <div class="in_box_division">
                        <div class="division_title">WHY AIDUS</div>
                        <div class="division_sub">
                            <span class="division_sub_sm"><?=$lang_pack[13] ?></span> <?=$qts_res[0]['yield']?>/ Yr
                        </div>
                        <div class="division_img_box">
                            <img src="/images/slide_1_1.png" alt="">
                        </div>
                        <div class="division_img_desc"><?=$lang_pack[14] ?></div>
                    </div>
                    <div class="in_box_division">
                        <div class="division_title">
                            Barron`s
                            Top100 Hedge
                            Fund
                        </div>
                        <div class="division_sub">
                            <span class="division_sub_sm"><?=$lang_pack[15] ?></span>
                            <div style="font-size: 30px;font-weight: bold;color:red;text-align: center">13.49%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_top_slide_box box2" data-idx="2">
                <div class="main_top_slide_before">
                    <div class="season_title">SEASON2</div>
                    <div class="main_top_slide_title">
                        <?=$lang_pack[16] ?>
                        <div class="main_top_slide_sub" id="main_slide"></div>
                    </div>
                    <div class="main_top_slide_click_title">QTS <?=$lang_pack[17] ?></div>
                </div>
                <div class="in_box box2">
                    <div class="in_box_division chart_box">
                        <div class="season_title">SEASON2</div>
                        <div class="chart_title">QTS <?=$lang_pack[17] ?></div>
                        <div id="main" class="chart"></div>
                    </div>
                    <div class="in_box_division graph_bottom">
                        <div class="chart_title_sub"><?=$qts_res[0]['title']?></div>
                        <div class="chart_title_sub chart_title_sub_2">AIDUS QTS Earning Rate</div>
                        <div class="chart_IRR">IRR : <?=$qts_res[0]['yield']?></div>
                        <div class="chart_title_sub chart_sub">
                            <?=$lang_pack[18] ?> <span style="color:red;font-size: 30px;font-weight: bold;">+13.49%</span>
                        </div>
                        <div class="chart_btn_box">
                            <span class="chart_btn" id="go_qts_report">
                                <?=$lang_pack[19] ?>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="main_top_slide_box box3" data-idx="3">
                <div class="main_top_slide_before">
                    <div class="main_top_slide_title">
                        <?=$lang_pack[20] ?>
                        <div class="main_top_slide_sub">
                            <?=$lang_pack[21] ?>
                        </div>
                    </div>
                    <div class="main_top_slide_click_title">AIDUS<br> TOKEN</div>
                </div>
                <div class="in_box box3">
                    <div class="in_box_division in_box_division_full">
                        <div class="sub_title"><?=$lang_pack[22] ?></div>
                        <div class="sub_img_box">
                            <img src="/images/<?=$lang_pack[23] ?>" alt="adfp_in">
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_top_slide_box box4" data-idx="4">
                <div class="main_top_slide_before">
                    <div class="main_top_slide_title">
                        <?=$lang_pack[25] ?>
                        <div class="main_top_slide_sub">
                            <?=$lang_pack[26] ?>
                        </div>
                    </div>
                    <div class="main_top_slide_click_title">ADFP</div>
                </div>
                <div class="in_box box4">
                    <div class="in_box_division in_box_division_full">
                        <div class="sub_title">AIDUS Decentralized Fund Platform</div>
                        <div class="sub_img_box">
                            <img src="/images/<?=$lang_pack[24] ?>" alt="adfp_in">
                        </div>
                    </div>
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
        <div class="container flex_c carousel_container">
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

            <div class="swiper_area" id="swiper_area" style="display: none;">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                    </div>
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
                AIDUS <span><?=$lang_pack[2]?></span>
            </div>
            <br>
            <span class="fund_text_area">
            <span class="fund_text_sub margin-bottom-10">
                <?=$lang_pack[3] ?>
            </span>
            <br>
            <span class="fund_text_main margin-bottom-30">
                <?=$lang_pack[4] ?>
            </span>
        </span>
            <div class="fund_img_box">
                <div class="fund_img_box_img">
                    <img src="/images/index_1.png" alt="">
                    <div class="text"><?=$lang_pack[5] ?></div>
                </div>
                <div class="plus_img">
                    <img src="/images/index_plus.png" alt="">
                </div>
                <div class="fund_img_box_img">
                    <img src="/images/index_2.png" alt="">
                    <div class="text"><?=$lang_pack[6] ?></div>
                </div>
                <div class="plus_img">
                    <img src="/images/index_plus.png" alt="">
                </div>
                <div class="fund_img_box_img">
                    <img src="/images/index_3.png" alt="">
                    <div class="text"><?=$lang_pack[7] ?></div>
                </div>
                <div class="plus_img">
                    <img src="/images/index_plus.png" alt="">
                </div>
                <div class="fund_img_box_img">
                    <img src="/images/index_4.png" alt="">
                    <div class="text"><?=$lang_pack[8] ?></div>
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
    <style>
        .mebion_box{
            height:300px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5;
        }
        .mebion_box img{
            margin:30px;
            width:100%;
            max-width: 250px;
        }
        @media (max-width: 768px){
            .mebion_box{
                height:auto;
                flex-direction: column;
            }
        }
    </style>
    <div class="main_section mebion_box">
        <a href="https://aiduspay.com" target="_blank">
            <img src="/images/aiduspay_logo.png" alt="">
        </a>
        <a href="http://mebion.kr/" target="_blank">
            <img src="/images/mebion_logo.png" alt="">
        </a>
    </div>
    <div class="main_section social_section" id="social">
        <div class="social_title">AIDUS Social Network Service</div>
        <a href="https://www.facebook.com/AIDUSofficial/?modal=admin_todo_tour" target="_blank"><img src="/images/icon/facebook_icon.png"></a>
        <a href="https://twitter.com/AIDUSofficial" target="_blank"><img src="/images/icon/twitter_icon.png"></a>
        <a href="https://medium.com/@AIDUSofficial" target="_blank"><img src="/images/icon/naver_icon.png"></a>
        <a href="https://www.reddit.com/user/AIDUSofficial" target="_blank"><img src="/images/icon/robot_icon.png"></a>
        <?php
        if($language == 'ko'){ ?>
            <a href="https://t.me/aiduskorea" target="_blank"><img src="/images/icon/plain_icon_kor.png"></a>
            <a href="https://open.kakao.com/o/gFNeIbvb" target="_blank"><img src="/images/icon/kakao.png" style="-webkit-border-radius: 50%;-moz-border-radius: 50%;border-radius: 50%;"></a>
        <?php }else{ ?>
            <a href="https://t.me/aidusofficial" target="_blank"><img src="/images/icon/plain_icon.png"></a>
        <?php } ?>
    </div>
    <script>
        currentViewIndex = 0;
        var swiper;
        totalIndex   = "<?=$news['total_cnt']?>";
        var slidePage = 1;
        var cover;
        var menuType = '';

        var repeat;
        var index = 0;
        var first = true;
        var graph = false;
        var start = false;
        $("#go_qts_report").click(function(e){
            e.stopPropagation();
            location.href='https://aidus.io/qts.php';
        });
        $(".main_top_slide_box").click(function () {
            if (first) {
                $(".main_top_slide_box").css('display','none');
                $(this).css('display','block');
                $(".main_top_slide_box").addClass('click');
            }
            index = $(this).attr('data-idx');

            $(".main_top_slide_box").removeClass('on').addClass('off');
            $(this).removeClass('off').addClass('on');
            $(this).find(".in_box_division").css('display', 'flex').hide().fadeIn();
            if (index == 2) {
                getChart();
            }
            stopLoop();
            if(first){
                $(".main_top_slide_box").css('display','block');
                first = false;
            }

        });
        $("#slide_next").click(function(){
            var target = parseInt(index) + 1;
            if(target > 4){
                target = 1
            }
            $(".main_top_slide_box.box"+target).click();
        });
        $("#slide_prev").click(function(){
            var target = parseInt(index) - 1;
            if(target < 1){
                target = 4;
            }
            $(".main_top_slide_box.box"+target).click();
        });
        $("#stop_slide").mouseenter(function () {
            $("#play_stop_box").fadeIn();
        });
        $("#play_box").click(function () {
            if (!start) {
                startLoop(index);
            } else {
                console.log('already start');
            }

        });
        $("#stop_box").click(function () {
            stopLoop();
        });
        $(window).resize(function(){
            if($(window).width() < 992){
                if(first){
                    $("#slide_next").click();
                    $("#play_box").click();
                }
            }
        });
        if($(window).width() < 992){
            if(first){
                $("#slide_next").click();
                $("#play_box").click();
            }
        }
        function stopLoop() {
            clearInterval(repeat);
            start = false;
            if($(window).width() > 992){
                $("#play_stop_box").fadeOut();
            }

            $("#stop_box").css('display','none');
            $("#play_box").css('display','block');
        }

        function startLoop(index) {
            start = true;
            if($(window).width() > 992){
                $("#play_stop_box").fadeOut();
            }

            $("#play_box").css('display','none');
            $("#stop_box").css('display','block');
            repeat = setInterval(function () {
                index++;
                if (index > 4) {
                    index = 1;
                }
                if (index == 2) {
                    getChart();
                }
                if (first) {
                    $(".main_top_slide_box").addClass('click');
                    first = false;
                }
                $(".main_top_slide_box").removeClass('on').addClass('off');
                $(".main_top_slide_box.box" + index).removeClass('off').addClass('on');
                $(".main_top_slide_box.box" + index).find(".in_box_division").css('display', 'flex').hide().fadeIn();
            }, 2000);

        }

        function getChart() {
            if (!graph) {
                setTimeout(function () {
                    var xAxis = <?php echo json_encode($x_axis) ?>;
                    var yAxis = <?php echo json_encode($y_axis) ?>;
                    var min = "<?=$y_axis_min?>";
                    var max = "<?=$y_axis_max?>";
                    var myChart = echarts.init(document.getElementById('main'));
                    // specify chart configuration item and data
                    var option = {
                        tooltip: {
                            trigger: 'axis',
                            axisPointer: {
                                type: 'cross',
                                animation: false,
                                label: {
                                    backgroundColor: '#ccc',
                                    borderColor: '#aaa',
                                    borderWidth: 1,
                                    shadowBlur: 0,
                                    shadowOffsetX: 0,
                                    shadowOffsetY: 0,
                                    textStyle: {
                                        color: '#222'
                                    }
                                }

                            },
                            formatter : "{b} <br> {a}:{c}%"
                        },
                        xAxis: {
                            type: 'category',
                            data: xAxis,
                            splitLine: {show: false},
                            axisTick: {show: false},
                            axisLine: {
                                show: true,
                                lineStyle: {
                                    color: '#fff'
                                }
                            },
                            axisLabel: {show: false},
                        },
                        yAxis: {
                            type: 'value',
                            splitLine: {show: false},
                            axisTick: {show: false},
                            axisLine: {
                                show: true,
                                lineStyle: {
                                    color: '#fff'
                                }
                            },
                            axisLabel: {show: false},
                            /*scale: [min, max]*/
                        },

                        color: ['#00afb8'],
                        series: [{
                            name: 'Yield',
                            data: yAxis,
                            type: 'line',
                            animation: false
                        }]
                    };
                    myChart.setOption(option);
                }, 400);
                graph = true;
            }
        }

        mainGraph();

        function mainGraph(){
            var xAxis = <?php echo json_encode($x_axis) ?>;
            var yAxis = <?php echo json_encode($y_axis) ?>;
            var min = "<?=$y_axis_min?>";
            var max = "<?=$y_axis_max?>";
            console.log(min);
            console.log(max);
            var mainChart = echarts.init(document.getElementById('main_slide'));
            var option = {

                xAxis: {
                    type: 'category',
                    data: xAxis,
                    splitLine: {show: false},
                    axisTick: {show: false},
                    axisLine: {
                        show: true,
                        lineStyle: {
                            color: '#fff'
                        }
                    },
                    axisLabel: {show: false},
                },
                yAxis: {
                    type: 'value',
                    splitLine: {show: false},
                    axisTick: {show: false},
                    axisLine: {
                        show: true,
                        lineStyle: {
                            color: '#fff'
                        }
                    },
                    axisLabel: {show: false},
                    /*scale: [min, max]*/
                },

                color: ['#009e5a'],
                series: [{
                    data: yAxis,
                    type: 'line',
                    animation: false,
                    symbol : 'none'
                }]
            };
            mainChart.setOption(option);
        }


        $(function(){
            var locale = "<?=$locale ?>";
            menuType = "ALL";
            $.ajax({
                url: "/ajax/ajax.news.php",
                type: "post",
                data: {'type': menuType,'page':1, 'locale' : locale},
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
                        $(".swiper-wrapper").append(append_text);
                    }
                    if($(window).width() < 768){
                        swiper = new Swiper('.swiper-container', {
                            effect: 'slide',
                            grabCursor: true,
                            centeredSlides: true,
                            slidesPerView: 'auto',
                            loop:true,
                            allowTouchMove:false,
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
                    }
                    swiper.slideToLoop(0,0);
                    $("#loader").fadeOut();
                }
            });
        });

        $("#loader").fadeOut();
        $("#swiper_area").fadeIn();

        var totalIndex;
        var indexArray;
        $(".carousel_menu_btn").click(function(){
            $("#loader").css('display','block');
            var locale = "<?=$locale ?>";
            menuType = $(this).attr('data-type');
            if(menuType == 'QTS'){
                location.href='qts.php?page_type=report';
            }else{
                //swiper.removeAllSlides();
                $(".swiper-wrapper").html('');
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
                        $("#swiper_area").html("");
                        $("#swiper_area").append('<div class="swiper-container">' +
                            '                    <div class="swiper-wrapper">' +
                            '                    </div>' +
                            '                    <div class="swiper-button-next"></div>' +
                            '                    <div class="swiper-button-prev"></div>' +
                            '                </div>');
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
                            $(".swiper-wrapper").append(append_text);
                        }
                        if($(window).width() < 768){
                            swiper = new Swiper('.swiper-container', {
                                effect: 'slide',
                                grabCursor: true,
                                centeredSlides: true,
                                slidesPerView: 'auto',
                                loop:true,
                                allowTouchMove:false,
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
                        }
                        swiper.slideToLoop(0,0);
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
        /*$(".swiper-button-prev,.swiper-button-next").click(function(){
            var curIndex = swiper.activeIndex;
        });*/
        function loaderHide(){
            $("#loader").fadeOut();
        }
    </script>
<?php include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/aiduspay_popup.php"); ?>
<?php include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/footer.php"); ?>