
<?php

$aidus_pay_pop_lang = $__lang -> aidus_pay_pop($language);
?>
<div class="ap_pay_pop_mask" id="aidus_pay_pop">
    <div class="ap_pay_pop">
        <div class="ap_pop_close" id="aidus_pay_pop_close">X</div>
        <div class="ap_pop_body">
            <div class="ap_pop_text ap_pay_pop_sm_title"><?=$aidus_pay_pop_lang[0]?></div>
            <div class="ap_pop_text ap_pay_pop_lg_title">AIDUS PAY</div>
            <div class="ap_pop_text ap_pay_pop_sm_title ap_pay_color margin-bottom-20"><?=$aidus_pay_pop_lang[1]?></div>
            <div class="ap_pop_circle_box margin-bottom-20">
                <div class="ap_pop_text ap_pay_pop_sm_title ap_pay_color_w">
                    <?=$aidus_pay_pop_lang[2]?><br>
                    <?=$aidus_pay_pop_lang[3]?><br>
                    <?=$aidus_pay_pop_lang[4]?><br>
                </div>
                <img src="/images/ap_pop_img.png" alt="">
            </div>
            <div class="ap_pop_logo_box">
                <img src="/images/ap_pop_logo.png" alt="">
            </div>
        </div>
        <div class="aidus_pay_pop_foot">
            <div class="aidus_pay_pop_btn close" id="aidus_pay_pop_btn_close">
                CLOSE
            </div>
            <div class="aidus_pay_pop_btn" id="aidus_pay_more">
                <?=$aidus_pay_pop_lang[5]?>
            </div>
        </div>
    </div>

</div>