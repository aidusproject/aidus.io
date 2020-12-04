<?php
$pre_lang = array();
if($language == 'jp'){
    $pre_lang = $__lang -> preRegistrants('en');
}else{
    $pre_lang = $__lang -> preRegistrants($language);
}

$aidus_pay = $_COOKIE['aidus_pay'];
if($aidus_pay != 'Y' && $_SERVER['REQUEST_URI'] != '/aidus_pay_reserve.php' && $_SERVER['REQUEST_URI'] != '/aidus_pay_form.php') {
    ?>
    <div class="ap_pay_pop_mask" id="aidus_pay_pop">
        <div class="ap_pay_pop">
            <div class="ap_pop_close" id="aidus_pay_pop_close">X</div>
            <div class="ap_pop_body">
                <div class="ap_pop_text ap_pay_pop_sm_title">AIDUS PAY</div>
                <div class="ap_pop_text ap_pay_pop_lg_title" style="margin-bottom: 20px;"><?=$pre_lang[7]?></div>
                <div class="ap_pop_text ap_pay_pop_sm_title ap_pay_color margin-bottom-10" style="margin-top: 20px;font-weight: bold;color: #14133b">
                    <?/*=$pre_lang[8]*/?>
                </div>
                <a href="/aidus_pay_reserve.php">
                    <div class="ap_pop_circle_box margin-bottom-20 flex_c" style="min-height:200px;width: 215px;margin: 0 auto;padding-top: 10px;">
                        <div class="ap_pop_text ap_pay_pop_sm_title ap_pay_color_w" style="font-size: 14px;">
                            <?=$pre_lang[12]?><br>
                            <!--        <span style="font-size: 18px;">
                            <?/*=$pre_lang[10]*/?>
                    </span>-->
                        </div>
                    </div>
                </a>
                <div class="ap_pop_text ap_pay_pop_sm_title ap_pay_color margin-bottom-10" style="margin-top: 20px;font-weight: bold;color: #14133b">
                    <?=$pre_lang[13]?>

                </div>
                <div class="ap_pop_logo_box">
                    <img src="/images/ap_pop_logo.png" alt="">
                </div>
            </div>
            <div class="aidus_pay_pop_foot">
                <div class="aidus_pay_pop_btn close" id="aidus_pay_pop_btn_close" style="width: 100%;">
                    CLOSE
                </div>

            </div>
        </div>
    </div>
    <?php
}
?>

<script>
    $("#aidus_pay_pop_btn_close,#aidus_pay_pop_close").click(function(){
        $("#aidus_pay_pop").fadeOut();
    });
    $("#aidus_pay_pop_btn_close").click(function(){
        document.cookie = "aidus_pay=Y;";
        $("#aidus_pay_pop").fadeOut();
    });
    $("#aidus_pay_more").click(function(){
        document.cookie = "aidus_pay=Y;";
        location.href='/daily_pay.php';
    });
    $("#pop_aidus_pay_join").click(function(){

        $("#aidus_pay_pop").hide();
        var lang = "<?=$language?>";
        if(lang == "ko"){
            /*alert("Preparing for event<br>" +
                "Open : 19.July. 2019 15:00<br>");*/
            alert("총 31,727,796.13.13 AID 참여<br> 119% 초과 달성");
        }else if(lang == "cn"){
            alert("全体 31,727,796.13 AID<br> 119% 超额完成");
        } else{
            alert("TOTAL 31,727,796.13 AID<br> 119% Overachievement");
            /*alert("Preparing for event. <br>" +
                "Open : 19.July. 2019 14:00 (GMT+8:00).<br>");*/
        }

    });
</script>
