<?php
$pop_arr = $__lang->open_popup($language);
?>
<style>
    @font-face {
        font-family: 'NanumMEB';
        src: url('/fonts/nanum/NanumMyeongjo-ExtraBold.ttf');
    }

    .open_pop_body {
        background: url('/images/popup/open_popup_back.png') no-repeat 50%;
        background-size: cover;
        padding: 60px 5%;
        font-size: 18px;
        border-image: linear-gradient(to right, #ecdd7c, #c1a454);
        border-style: solid;
        border-image-slice: 1;
        border-image-width: 15px 15px 15px 15px;
        position: relative;
    }
    .open_pop_body *{
        font-size:18px;
    }
    .ribbon1 {
        position: absolute;
        right: -10px;
        bottom: -10px;
    }

    .ribbon2 {
        position: absolute;
        left: -10px;
        top: -10px;
    }

    .open_pop_title img {
        width: 100%;
    }

    .open_pop_date {
        font-family: NanumMEB, "나눔명조", sans-serif;
        background: -webkit-linear-gradient(left, #c0a35c, #e2d373);
        background: -moz-linear-gradient(right, #e2d373, #c0a35c);
        background: -o-linear-gradient(right, #e2d373, #c0a35c);
        background: linear-gradient(to right, #e2d373, #c0a35c);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-weight: bold;
        text-align: center;
    }

    .open_pop_center {
        font-family: NanumMEB, "나눔명조", sans-serif;
        width: 60%;
        margin: 25px auto;
        border-top: 1px solid #dcc870;
        border-bottom: 1px solid #dcc870;
        padding: 15px;
        text-align: center;
        color: #e2cd71;
    }

    .open_pop_text {
        color: #a1a1a1;
        text-align: center;
        line-height: 1.6;
    }

    .open_pop_btn_box {
        padding: 20px;
        text-align: center;
        border: 1px solid #433e23;
        width: 90%;
        margin: 20px auto;
        cursor: pointer;
    }

    .open_pop_btn_gray {
        color: #a1a1a1;
        text-align: center;
    }

    .open_pop_btn_y {
        background: -webkit-linear-gradient(left, #c0a35c, #e2d373);
        background: -moz-linear-gradient(right, #e2d373, #c0a35c);
        background: -o-linear-gradient(right, #e2d373, #c0a35c);
        background: linear-gradient(to right, #e2d373, #c0a35c);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-size: 32px;
        text-align: center;
    }

    .ap_pop_close {
        z-index: 20;
        color: #d4be69;
    }
    .open_pop_day_close{
        font-size:14px;
        color: #d4be69;
        cursor: pointer;
        position: absolute;
        bottom:15px;
        left:10%;
    }

    @media (max-width: 768px) {
        .open_pop_body {
            padding: 15px 5%;
        }
        .open_pop_btn_y{
            font-size:24px;
        }
    }
</style>
<div class="ap_pay_pop_mask" id="aidus_pay_pop">
    <div class="ap_pay_pop" style="max-width: 500px;">
        <div class="ap_pop_close" id="aidus_pay_pop_close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="open_pop_body">
                <span class="ribbon1">
                    <img src="/images/popup/ribbon1.png" width="170">
                </span>
            <span class="ribbon2">
                    <img src="/images/popup/ribbon2.png" width="170">
                </span>
            <div class="open_pop_title">
                <img src="/images/popup/open_popup_title.png">
            </div>
            <div class="open_pop_date">
                Feb. 24. 2020
            </div>
            <div class="open_pop_center">
                <?= $pop_arr[0] ?>
            </div>
            <div class="open_pop_text">
                <?= $pop_arr[1] ?><br>
                <?= $pop_arr[2] ?><br>
                <?= $pop_arr[3] ?><br>
                <?= $pop_arr[4] ?><br>
            </div>
                <div class="open_pop_btn_box">
                    <div class="open_pop_btn_gray"><?= $pop_arr[5] ?></div>
                    <div class="open_pop_btn_y"><?= $pop_arr[6] ?></div>
                </div>
            <div class="open_pop_day_close" id="open_pop_day_close">
                <i class="fa fa-times" aria-hidden="true"></i><?= $pop_arr[7] ?><br>
            </div>
        </div>
        <!--<div class="aidus_pay_pop_foot">
            <div class="aidus_pay_pop_btn popclose" id="aidus_pay_pop_btn_close" style="width: 100%;">
                하루동안 보지 않기
            </div>
        </div>-->
    </div>
</div>
<script>
    $("#open_pop_day_close").click(function(){
        document.cookie = "aiduspay_open=Y;";
        $("#aidus_pay_pop").fadeOut();
    });
    $("#aidus_pay_pop_btn_close,#aidus_pay_pop_close").click(function(){
        $("#aidus_pay_pop").fadeOut();
    });
    $(".open_pop_btn_box").click(function(){
        $.ajax({
            url: "/ajax/ajax.aidus_pay_open.php",
            type: "post",
            dataType: "json",
            async: false,
            error: function (e) {
            },
            success: function (result) {
                if(result.status == 200){
                    window.open('https://aiduspay.com');
                }
            }
        });
    });

</script>