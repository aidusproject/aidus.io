<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
$sitekey   = '6LfhFZIUAAAAACB0tDhJYSfRXWusiYdq9AMdUXtK';
if($language == 'jp'){
    $language = 'en';
}

$lang_pack = $__lang -> aidus_reserve_form($language);
$lang_top = $lang_pack['top'];
$lang_content = $lang_pack['content'];
$lang_info = $lang_pack['info'];
$lang_pop = $lang_pack['pop'];
$lang_btn = $lang_pack['btn'];
?>

<div class="main_section dp_top_section">
    <div class="dp_full_box">
        <div class="aidus_top_back" style="flex-direction: column">

            <div class="reserve_logo_title">
                <?=$lang_top[0]?>
            </div>
            <div class="reserve_logo_text">
                <?=$lang_top[1]?>
            </div>
            <img src="/images/reserve_logo.png" alt="reserve_logo">
            <div class="reserve_logo_btn">
                <?=$lang_top[2]?>
            </div>
        </div>
        <div class="aidus_pay_box">
            <div class="container">
                <div class="aidus_pay_qna_box pd_b_50">
                    <div class="aidus_qna_title">
                        <?=$lang_content[0]?><br>
                        <?=$lang_content[1]?>
                    </div>
                    <!--<div class="aidus_wallet_box" id="wallet_copy">
                        <input class="copy_input" id="copy_input" type="text" readonly value="">
                        <span class="aidus_copy_btn">&lt;COPY&gt;</span>
                    </div>-->
                    <div class="copy_info_box" id="copy_info_box">OK! Copied it</div>
                    <ul class="aidus_wallet_ul">
                        <li><?=$lang_content[2]?></li>
                        <li><?=$lang_content[3]?></li>
                        <li><?=$lang_content[4]?></li>
                    </ul>
                </div>
                <div class="aidus_pay_qna_box pd_b_50">
                    <div class="aidus_qna_title">
                        <?=$lang_content[5]?><br>
                        <?=$lang_content[6]?>
                    </div>
                    <input style="display:none" type="text" name=""/>
                    <input style="display:none" type="password" name=""/>
                    <div class="aidus_wallet_box input m_b_20">
                        <input type="text" placeholder="<?=$lang_content[7]?> (<?=$lang_content[8]?>)" onkeyup="characterCheck(this)" id="aid_hash" autocomplete="off">
                    </div>
                    <div class="aidus_wallet_box input m_b_20">
                        <input type="text" placeholder="<?=$lang_content[9]?> (<?=$lang_content[10]?>)" onkeyup="characterCheck(this)" id="aid_addr" autocomplete="off">
                    </div>
                    <div class="aidus_wallet_box input m_b_20">
                        <input type="number" placeholder="<?=$lang_content[11]?> (<?=$lang_content[12]?>)" onkeyup="imsi(this)" id="aid_cnt" autocomplete="off">
                    </div>
                    <div class="aidus_wallet_box btn m_b_20" id="pay_reserve">
                        <?=$lang_content[13]?>
                    </div>
                </div>
                <div class="aidus_pay_qna_box pd_b_50">

                    <div class="aidus_qna_title">
                        <?=$lang_content[14]?><br>
                        <?=$lang_content[15]?>
                    </div>
                    <?php
                    $pay_join_status = $__api -> aiudsPayInfo($_SESSION);
                    if($pay_join_status['status'] == 200){
                        $row = $pay_join_status['data'];
                        $idx = 1;
                        for($i=0;$i<count($row);$i++){
                            $reg_date = '';
                            if($language == 'en'){
                                $reg_date = date('F d,Y',strtotime($row[$i]['reg_date']));
                            }else if($language == 'cn'){
                                $reg_date = date('Y年m月d日',strtotime($row[$i]['reg_date']));
                            }else{
                                $reg_date = date('Y년 m월 d일',strtotime($row[$i]['reg_date']));
                            }

                            $status_text = '';
                            $status_id   = '';
                            $status_id_text = 'aidus_hide';
                            $status_btn_text = '';
                            switch($row[$i]['user_status']){
                                case 00 :
                                    $status_text = $lang_info[2];
                                    $status_id   = '';
                                    $status_id_text = 'aidus_hide';
                                    break;
                                case 01 :
                                    $status_text = $lang_info[0];
                                    $status_id   = 'success';
                                    $status_id_text = 'approve join_cancel';
                                    $status_btn_text = $lang_info[1];
                                    break;
                                case 02 :
                                    $status_text = $lang_info[3];
                                    $status_id_text = 'approve cancel_withdrawal';
                                    $status_btn_text = $lang_info[4];
                                    break;
                                case 03 :
                                    $status_text = $lang_info[5];
                                    $status_id_text = 'aidus_hide';
                                    break;
                            }
                            ?>
                            <div class="aidus_row">
                                <div class="aidus_participation">
                                    <div class="aidus_wallet_box">
                                        <?php
                                        if($language == 'cn'){
                                            echo "第";
                                        }
                                        ?>
                                        <?=$idx?>
                                        <?php
                                        if($language == 'en'){
                                            if($i == 0){
                                                echo "st";
                                            }else if($i == 1){
                                                echo "nd";
                                            }else if($i == 2){
                                                echo "rd";
                                            }else{
                                                echo "th";
                                            }
                                        }else if($language == 'cn'){
                                            echo "次";
                                        }else{
                                            echo "차";
                                        }
                                        ?> : <?=$reg_date?>
                                    </div>
                                </div>
                                <div class="aidus_participation">
                                    <div class="aidus_wallet_box btn <?=$status_id?> m_b_20">
                                        <?=$status_text?>
                                    </div>
                                </div>
                                <div class="aidus_participation">
                                    <div class="aidus_wallet_box btn <?=$status_id_text?> m_b_20" data-id="<?=$row[$i]['seq']?>">
                                        <?=$status_btn_text?>
                                    </div>
                                </div>
                                <ul class="aidus_participation_ul">
                                    <li>TX HASH : <?=$row[$i]['tx_hash']?></li>
                                    <li>SEND WALLET : <?=$row[$i]['wallet_address']?></li>
                                    <li>AID AMOUNT : <?=$row[$i]['aid_cnt']?> AID</li>
                                </ul>
                            </div>
                            <?php $idx++; }
                    }
                    ?>
                </div>
                <div class="aidus_pay_qna_box">
                    <div class="aidus_qna_title">
                        <?=$lang_content[16]?>
                    </div>
                    <ul class="aidus_reserve_notice">
                        <li><?=$lang_content[17]?></li>
                        <li><?=$lang_content[18]?></li>
                        <li><?=$lang_content[19]?></li>
                        <li><?=$lang_content[20]?></li>
                        <li><?=$lang_content[21]?></li>
                        <li><?=$lang_content[22]?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wallet_mask flex_r" id="wallet_mask">
    <div class="wallet_pop" id="wallet_pop">
        <div class="wallet_pop_head">Password</div>
        <div class="wallet_pop_body">
            <input type="hidden" id="wallet_pw_chk_" value="<?= $_SESSION['AIDAUTH'] ?>">
            <input type="password" class="wallet_pop_input wallet_input" autocomplete="password"
                   id="wallet_pw_chk" placeholder="<?=$lang_pack_2[0] ?>">
        </div>
        <div class="wallet_pop_foot">
            <span class="wallet_btn wallet_confirm_btn flex_r cursor" id="wallet_confirm_btn"><?=$lang_pack_2[8] ?></span>
            <span class="wallet_btn wallet_close_btn flex_r cursor" id="wallet_close_btn"><?=$lang_pack_2[9] ?></span>
        </div>
    </div>
    <div class="withdraw_pop" id="withdraw_pop">
        <div class="wallet_pop_head">AID Withdrawal</div>
        <div class="wallet_pop_body">
            <input type="hidden" id="wallet_auth" value="<?= $_SESSION['AIDSEQ'] ?>">
            <label class="withdraw_label" for="withdraw_addr"><?=$lang_pack_2[1] ?></label>
            <input type="text" class="wallet_pop_input withdraw_input" id="withdraw_address"
                   placeholder="<?=$lang_pack_2[2] ?>">
            <label class="withdraw_label" for="withdraw_cnt"><?=$lang_pack_2[3] ?></label>
            <input type="number" class="wallet_pop_input withdraw_input" id="withdraw_amount"
                   placeholder="<?=$lang_pack_2[4] ?>">
        </div>
        <div class="wallet_pop_foot flex_r">
            <span class="wallet_btn wallet_confirm_btn flex_r cursor" id="withdraw_confirm_btn"><?=$lang_pack_2[8] ?></span>
            <span class="wallet_btn wallet_close_btn flex_r cursor" id="withdraw_close_btn"><?=$lang_pack_2[9] ?></span>
        </div>
    </div>
</div>
<div class="aidus_mask modal_mask" id="alert_modal">
    <div class="alert_box" id="alert_box">
        <div class="aidus_alert_head">
            <?=$lang_pop[9]?>
        </div>
        <div class="aidus_alert_body">
            <div class="alert_text_box">
                <div id="alert_text"></div>
            </div>
            <div class="alert_close" id="alert_close" onclick="modal_close('alert');">
                <?=$lang_btn[2]?>
            </div>
        </div>
    </div>
</div>
<div class="aidus_mask modal_mask" id="confirm_modal">
    <div class="alert_box" id="confirm_box">
        <div class="aidus_alert_head">
            <?=$lang_pop[9]?>
        </div>
        <div class="aidus_alert_body">
            <div class="alert_text_box">
                <div id="confirm_text"></div>
            </div>
        </div>
        <div class="g-recaptcha" style="background-color:#f1f1f1;padding-bottom: 20px;display: flex; justify-content: center;" data-sitekey="<?=$sitekey ?>"></div>
        <div class="aidus_alert_foot">
            <div class="aidus_alert_foot_btn confirm_close" onclick="modal_close('confirm');">
                <?=$lang_btn[2]?>
            </div>
            <div class="aidus_alert_foot_btn alert_confirm">
                확인
            </div>
        </div>
    </div>
</div>
<div class="aidus_mask modal_mask" id="pin_modal">
    <div class="alert_box" id="pin_box">
        <div class="aidus_alert_head">
            <img class="aidusfund_logo" src="/images/icon/logo.png" alt="Logo" width="150">
        </div>
        <div class="aidus_alert_body">
            <div class="alert_text_box pin">
                <div class="pin_text">
                    <div id="pin_text">

                    </div>
                </div>
                <div class="pin_input_box">
                    <input type="password" class="modal_input" id="pin_code">
                    <span id="pw_message_box">비밀번호를 입력해주세요.</span>
                </div>
            </div>
        </div>
        <div class="aidus_alert_foot">
            <div class="aidus_alert_foot_btn confirm_close" onclick="modal_close('pin');">
                <?=$lang_btn[2]?>
            </div>
            <div class="aidus_alert_foot_btn alert_confirm">
                확인
            </div>
        </div>
    </div>
</div>

<?php include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/footer.php"); ?>
<script>
    var popLang = <?php echo json_encode($lang_pop); ?>;
    var btnLang = <?php echo json_encode($lang_btn); ?>;
    $("#aidus_pay_event_btn").click(function(){
        location.href='/wallet_.php';
    });
    $("#pay_reserve").click(function(){
        $.ajax({
            url: "/ajax/ajax.chk_coin.php",
            type: "post",
            data: '',
            dataType: "json",
            async: false,
            error: function (e) {
                console.log(e);
            },
            success: function (result) {
                if(result['status'] == 'login'){
                    aidus_modal(result['message'],'alert','move_login');
                }else if(result['status'] == 'success'){
                    aidus_modal(result['message'],'confirm',btnLang[0],'aidus_pay_join');
                    grecaptcha.reset();
                }else if(result['status'] == 'error'){
                    aidus_modal(result['message']);
                }
            }
        });
    });
    $(document).on("click","#aidus_pay_join",function(){
        var hash = $.trim($("#aid_hash").val());
        var addr = $.trim($("#aid_addr").val());
        var cnt  = $.trim($("#aid_cnt").val());
        if(hash == ""){
            modal_close('confirm');
            aidus_modal('Please type your TX HASH value');
            $("#aid_hash").focus();
            return false;
        }else if(addr == ""){
            modal_close('confirm');
            aidus_modal('Please type WALLET ADDRESS');
            $("#aid_addr").focus();
            return false;
        }else if(cnt == ""){
            modal_close('confirm');
            aidus_modal('Please type your AIDUS COIN value');
            $("#aid_cnt").focus();
            return false;
        }else if (grecaptcha.getResponse() == ""){
            modal_close('confirm');
            aidus_modal('Please Check CapCha');
            return false;
        }
        $.ajax({
            url: "/ajax/ajax.aidus_pay_join.php",
            type: "post",
            data: {
                hash:hash,
                addr:addr,
                cnt :cnt
            },
            dataType: "json",
            async: false,
            error: function (e) {
                console.log(e);
            },
            success: function (result) {
                modal_close('confirm');
                if(result['status'] == 'error'){
                    aidus_modal(result['message']);
                }else if(result['status'] == 'success'){
                    aidus_modal(result['message'],'alert','page_reload');
                }
                console.log(result);
            }
        });
    });
    $(document).on("click","#move_login",function(){
        location.href='/login.php';
    });
    $(document).on("click","#page_reload",function(){
        location.reload();
    });
    var select = '';
    $(".join_cancel").click(function(){
        grecaptcha.reset();
        select = $(this).attr('data-id');
        var html = popLang[5] + '<br>' +
            '<br>' + popLang[6];
        aidus_modal(html,'confirm',btnLang[3],'join_cancel_btn');
    });
    $(document).on("click","#join_cancel_btn",function(){

        if (grecaptcha.getResponse() == ""){
            modal_close('confirm');
            aidus_modal('Please Check CapCha');
            return false;
        }
        $.ajax({
            url: "/ajax/ajax.join_cancel.php",
            type: "post",
            data: {select : select},
            dataType: "json",
            async: false,
            error: function (e) {
                console.log(e);
            },
            success: function (result) {
                modal_close('confirm');
                if(result['status'] == 'error'){
                    aidus_modal(result['message']);
                }else if(result['status'] == 'success'){
                    aidus_modal(result['message'],'alert','page_reload');
                }
            }
        });
    });
    $(".cancel_withdrawal").click(function(){
        grecaptcha.reset();
        select = $(this).attr('data-id');
        var html = popLang[8];
        aidus_modal(html,'confirm',btnLang[4],'join_cancel_withdrawal');
    });
    $(document).on("click","#join_cancel_withdrawal",function(){
        if (grecaptcha.getResponse() == ""){
            modal_close('confirm');
            aidus_modal('Please Check CapCha');
            return false;
        }
        $.ajax({
            url: "/ajax/ajax.join_cancel_withdrawal.php",
            type: "post",
            data: {select : select},
            dataType: "json",
            async: false,
            error: function (e) {
                console.log(e);
            },
            success: function (result) {
                modal_close('confirm');
                if(result['status'] == 'error'){
                    aidus_modal(result['message']);
                }else if(result['status'] == 'success'){
                    aidus_modal(result['message'],'alert','page_reload');
                }
                console.log(result);
            }
        });
    });
    $("#wallet_copy").click(function(){
        var copyText = document.getElementById("copy_input");
        console.log(copyText);
        copyText.select();
        document.execCommand("Copy");
        $("#copy_info_box").show();
        //$("#copy_input").select();
        //document.execCommand('Copy');
    });
    var prev = "";
    var regexp = /^\d*(\.\d{0,8})?$/;
    function imsi(obj) {
        console.log(obj.value);
        if(obj.value.search(regexp)==-1) {
            obj.value = prev;
            console.log(obj.value);
        }
        else {
            prev = obj.value;
            console.log(obj.value);
        }
        if(obj.value.search('e')==-1){
            obj.value = prev;
            console.log(obj.value);
        }
    }
    function characterCheck(obj) {
        var RegExp = /[ \{\}\[\]\/?.,;:|\)*~`!^\-_+┼<>@\#$%&\'\"\\\(\=]/gi;
        if (RegExp.test(obj.value)) {
            obj.value = obj.value.substring(0, obj.value.length - 1);
        }
    }
    function aidus_modal(text,type,confirm_text,confirm_id,close_text,close_id){
        var typeText = type;
        if(!type){
            typeText = 'alert';
        }
        $("#"+typeText+"_text").html('').append(text);
        if(confirm_text){
            $("#"+typeText+"_box").find('.alert_confirm').text(confirm_text).attr('id',confirm_id);
        }
        if(close_text){
            $("#"+typeText+"_box").find('.confirm_close').text(close_text).attr('id',close_id).attr('onclick','');
        }
        if(type == 'alert'){
            $("#"+typeText+"_box").find('.alert_close').attr('id',confirm_text).attr('onclick','');
        }
        $("#"+typeText+"_modal").fadeIn();
        $("#"+typeText+"_box").addClass('on');
    }
    function modal_close(type){
        $("#"+type+"_modal").fadeOut();
        $("#"+type+"_box").removeClass('on');
    }
</script>