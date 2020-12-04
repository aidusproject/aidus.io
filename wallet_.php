<?php
include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
$lang_pack   = $__lang ->wallet($language);
$lang_pack_2 = $__lang ->wallet_2($language);

if ($auth_chk == false || !isset($_SESSION['AIDSEQ'])) {
    echo "<script>location.href='/login.php'</script>";
}
$page_type = (!isset($_POST['page_type'])) ? 'coin' : $_POST['page_type'];
$page = (!isset($_POST['now_page'])) ? 1 : $_POST['now_page'];
//$inout_page = 1;
$type = "coin";

$wallet_array = $__api->getWalletInout(array(
    "encrypt_sequence" => $_SESSION['AIDSEQ'],
    "page" => $page
));

if ($wallet_array['status'] == 200) {
    $inout_cnt = $wallet_array['total_cnt'];
    $inout_total_page = $wallet_array['total_page'];
    $inout_list = $wallet_array['data'];
}

$coin_array = $__api->getCoinInfo($_SESSION['AIDSEQ']);
$coin_deposit = 0;
$coin_exchange = 0;
$coin_withdraw = 0;
$coin_balance = 0;

if ($coin_array['status'] == 200) {
    $coin_deposit = $coin_array['eth_deposit'];
    $coin_exchange = $coin_array['aid_exchange'];
    $coin_withdraw = $coin_array['aid_withdraw'];
    $coin_balance = $coin_array['aid_balance'];
}

?>
<div class="main_section sub_fund_section" style="text-align: center;">
    <div class="container">
        <div class="fund_title" style="margin-bottom:30px;">
            <?= $lang_pack[0] ?>
        </div>
        <div class="page_sub_text"><?= $lang_pack[1] ?></div>
    </div>
    <div class="wallet_back"></div>
    <div class="container">
        <div class="wallet_box">
            <div class="wallet_box_head">
                <div class="wallet_box_head_menu flex_r <?php if ($page_type == 'list') echo 'on'; ?> cursor"
                     data-id="list"><?= $lang_pack[2] ?></div>
                <div class="wallet_box_head_menu flex_r <?php if ($page_type == 'coin') echo 'on'; ?> cursor"
                     data-id="coin"><?= $lang_pack[3] ?></div>
            </div>
            <style>
                .contact_btn{
                    display: inline-flex;
                }
                .wallet_view{
                    width:100%;
                    font-size:18px;
                    color: #9c9b9b;
                    padding:10px;
                    border: 1px solid #e1e1e1;
                    text-align: left;
                }
                .wallet_view_btn{
                    display: inline-block;
                    margin-left:20px;
                    font-size:18px;
                    cursor: pointer;
                }
                .wallet_view_btn:hover{
                    color: #fd2e03;
                }
                /* modal */

                .modal_mask{
                    position: fixed;
                    top: 0;
                    left:0;
                    right:0;
                    bottom:0;
                    z-index: 100;
                    display: none;
                }
                .alert_box{
                    width:100%;
                    max-width:600px;
                    box-shadow: 1px 3px 5px rgba(0,0,0,.3);
                    -webkit-border-radius: 10px;
                    -moz-border-radius: 10px;
                    border-radius: 10px;
                    overflow: hidden;
                    transform: translateY(-0%);
                    transition: all .4s;
                    margin:0 auto;
                }
                .alert_box.on{
                    transform: translateY(150px);
                }
                .aidus_alert_body{
                    width:100%;
                    padding:40px;
                    font-size:14px;
                    background-color: #f1f1f1;
                }
                .alert_text_box{
                    min-height:100px;
                    display: flex;
                    justify-content:center;
                    flex-direction: column;
                }
                .alert_close{
                    width:250px;
                    height:40px;
                    -webkit-border-radius: 25px;
                    -moz-border-radius: 25px;
                    border-radius: 25px;
                    margin:0 auto;
                    color: #fff;
                    background-color: #c0254d;
                    display: flex;
                    justify-content:center;
                    align-items: center;
                    cursor: pointer;
                    box-shadow: 1px 2px 3px rgba(0,0,0,.2);
                    margin-top:40px;
                }
                .aidus_alert_head{
                    height:50px;
                    background-color: #f1f1f1;
                    text-align: center;
                    padding-top:10px;
                    font-size:20px;
                }
                .aidus_alert_foot_btn{
                    width:50%;
                    float: left;
                }
                .aidus_alert_foot{
                    height:50px;
                    width:100%;
                }
                .aidus_alert_foot_btn{
                    width:50%;
                    float: left;
                    height:100%;
                    display: flex;
                    justify-content:center;
                    align-items: center;
                    color: #fff;
                    cursor: pointer;
                }
                .aidus_alert_foot_btn.alert_confirm{
                    background-color: #c0254d;
                }
                .aidus_alert_foot_btn.confirm_close{
                    background-color: #222222;
                }
                .pin_input_box{
                    padding-top:10px;
                    width:100%;
                }
                .pin_box_desc{
                    font-size:10px;
                    line-height: 1.2;
                }
                .modal_input{
                    width:100%;
                    height:40px;
                    font-size:16px;
                    padding-left:10px;
                    background-color: #fff;
                }
                .alert_text_box.pin{
                    text-align: left;
                }
                #pw_message_box{
                    color: #ff0000;
                }

                /* modal end */
            </style>
            <?php
            $user_info = $__api -> getUser($_SESSION['AIDSEQ']);
            $user_info = $user_info['data'];
            if ($page_type == 'list'){ ?>
            <div class="wallet_box_body" id="hide">
                <?php }else{ ?>
                <div class="wallet_box_body">
                    <?php }
                    ?>

                    <div class="wallet_box_body_area">
                        <div class="wallet_view">
                            <?=$user_info['id']?>
                            님의 AIDUS TOKEN 사전 가입 지갑 주소 :
                            <span id="wallet_view_address">***********************</span>
                            <span class="wallet_view_btn wallet_view_open" id="wallet_view_btn">
                                [보기]
                            </span>
                        </div>
                        <div class="wallet_status">
                            <div class="wallet_status_left">
                                <div class="wallet_status_left_top"><?= $lang_pack[11] ?></div>
                                <div class="wallet_status_left_bottom">AID</div>
                            </div>
                            <div class="wallet_status_right">
                                <div class="wallet_status_right_top"><?= $coin_balance ?></div>
                                <div class="wallet_status_right_bottom"><?= $lang_pack[12] ?></div>
                            </div>
                            <div class="clear"></div>
                            <div class="contact_btn flex_r cursor" id="withdraw">
                                <?= $lang_pack[13] ?>
                            </div>
                            <?php
                            $pay_join_status = $__api -> aiudsPayInfo($_SESSION);
                            if($pay_join_status['status'] == 201){ ?>
                                <div class="contact_btn flex_r cursor" id="pay_reserve" style="background-color: #fd2e03">
                                    사전가입 이벤트 참여
                                    <?/*= $lang_pack[13] */?>
                                </div>
                            <?php }else if($pay_join_status['status'] == 200){
                                $pay_join_status_word = '';
                                $pay_join_btn_id = '';
                                if($pay_join_status['user_status'] == '00' || $pay_join_status['user_status'] == '01'){
                                    $pay_join_status_word = '참여 취소';
                                    $pay_join_btn_id = 'join_cancel';
                                }else if($pay_join_status['user_status'] == '02'){
                                    $pay_join_status_word = '참여 취소 중';
                                }else if($pay_join_status['user_status'] == '03'){
                                    $pay_join_status_word = '참여 취소 완료';
                                }

                                ?>
                                <div class="contact_btn flex_r cursor" id="<?=$pay_join_btn_id?>" style="background-color: #fd2e03">
                                    사전가입 이벤트 <?=$pay_join_status_word?>
                                    <?/*= $lang_pack[13] */?>
                                </div>
                            <?php }
                            ?>

                        </div>
                    </div>
                    <div class="wallet_box_body_area">
                        <div class="wallet_status">
                            <div class="wallet_status_left">
                                <div class="wallet_status_left_top"><?= $lang_pack[14] ?> <span class="font-aidus"
                                                                                                style="font-size:20px;"><?= $lang_pack[15] ?></span>
                                </div>
                                <div class="wallet_status_left_bottom">AID</div>
                            </div>
                            <div class="wallet_status_right">
                                <div class="wallet_status_right_top"><?= $coin_exchange ?></div>
                                <div class="wallet_status_right_bottom"><?= $lang_pack[16] ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="wallet_box_body_area">
                        <div class="wallet_status">
                            <div class="wallet_status_left">
                                <div class="wallet_status_left_top"><?= $lang_pack[17] ?> <span class="font-aidus"
                                                                                                style="font-size:20px;"><?= $lang_pack[18] ?></span>
                                </div>
                                <div class="wallet_status_left_bottom">AID</div>
                            </div>
                            <div class="wallet_status_right">
                                <div class="wallet_status_right_top"><?= $coin_withdraw ?></div>
                                <div class="wallet_status_right_bottom"><?= $lang_pack[19] ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="wallet_box_body_area">
                        <div class="wallet_status">
                            <div class="wallet_status_left">
                                <div class="wallet_status_left_top"><?= $lang_pack[20] ?> <span class="font-aidus"
                                                                                                style="font-size:20px;"><?= $lang_pack[21] ?></span>
                                </div>
                                <div class="wallet_status_left_bottom">ETH</div>
                            </div>
                            <div class="wallet_status_right">
                                <div class="wallet_status_right_top"><?= $coin_deposit ?></div>
                                <div class="wallet_status_right_bottom"><?= $lang_pack[22] ?></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <!--------------------------------------------------------------------------------------------------------->
                <?php
                if ($page_type == 'coin'){ ?>
                <div class="wallet_box_body" id="hide">
                    <?php }else{ ?>
                    <div class="wallet_box_body">
                        <?php } ?>
                        <div class="wallet_box_list_area">
                            <?php
                            if ($wallet_array['total_cnt'] > 0) {

                                foreach ($inout_list as $key => $val) {
                                    $inout_seq    = $val['seq'];
                                    $inout_txid   = $val['txid'];
                                    $inout_status = $val['status'];
                                    $inout_type   = $val['type'];
                                    $inout_date   = $val['dt_format'];
                                    $inout_amount = $val['amount'];

                                    $inout_status_str = "";
                                    switch ($inout_status) {
                                        case "A" :
                                            $inout_status_str = $lang_pack[7];
                                            break;
                                        case "B" :
                                            $inout_status_str = $lang_pack[7];
                                            break;
                                        case "C" :
                                            $inout_status_str = $lang_pack[9];
                                            break;
                                        case "E" :
                                            $inout_status_str = $lang_pack[8];
                                            break;
                                    }
                                    $inout_type_str = "";
                                    $inout_code     = "";
                                    if ($inout_type == 'd') {
                                        $inout_code = "ETH";
                                        $inout_type_str = $lang_pack[4];
                                    } else if ($inout_type == 'w') {
                                        $inout_code = "AID";
                                        $inout_type_str = $lang_pack[5];
                                    } else {
                                        $inout_code = "ETH";
                                        $inout_type_str = $lang_pack[6];
                                    }
                                    ?>
                                    <div class="wallet_box_list">
                                        <div class="wallet_box_list_left">
                                            <div class="wallet_box_list_left_btn flex_r <?php if ($inout_type == 'd') echo 'on'; ?>"><?= $inout_type_str ?></div>
                                        </div>
                                        <div class="wallet_box_list_right">
                                            <div class="wallet_box_list_date"><?= $inout_date ?></div>
                                            <div class="wallet_box_list_status">
                                                <span><?= $lang_pack[23] ?> : <?= $inout_status_str ?></span>
                                                <span class="wallet_box_list_division">|</span>
                                                <span><?= $lang_pack[24] ?> : <?=$inout_code ?></span>
                                                <span class="wallet_box_list_division">|</span>
                                                <span><?= $lang_pack[25] ?> : <?= $inout_amount ?></span>
                                            </div>
                                            <div class="wallet_box_list_site">
                                                <a href="https://etherscan.io/tx/<?= $inout_txid ?>"
                                                   target="_blank"><?= $inout_txid ?></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            } else { ?>

                                <div class="wallet_box_list">
                                    <!-- class 생성 필요-->
                                    <div class="empty_value"><?= $lang_pack[26] ?></div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="paging"><?php paging($wallet_array['total_cnt'], $page, 10, 5, ''); ?></div>
                    </div>
                </div>
            </div>
        </div>

        <form action="wallet.php" method="post" id="page_frm">
            <input type="hidden" id="now_page" name="now_page" value="<?= $page ?>">
            <input type="hidden" id="page_type" name="page_type" value="<?= $page_type ?>">
        </form>
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
                    AIDUS PAY 사전가입 이벤트 안내
                </div>
                <div class="aidus_alert_body">
                    <div class="alert_text_box">
                        <div id="alert_text"></div>
                    </div>
                    <div class="alert_close" id="alert_close" onclick="modal_close('alert');">
                        닫기
                    </div>
                </div>
            </div>
        </div>
        <div class="aidus_mask modal_mask" id="confirm_modal">
            <div class="alert_box" id="confirm_box">
                <div class="aidus_alert_head">
                    AIDUS PAY 사전가입 이벤트 안내
                </div>
                <div class="aidus_alert_body">
                    <div class="alert_text_box">
                        <div id="confirm_text"></div>
                    </div>
                </div>
                <div class="aidus_alert_foot">
                    <div class="aidus_alert_foot_btn confirm_close" onclick="modal_close('confirm');">
                        닫기
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
                        닫기
                    </div>
                    <div class="aidus_alert_foot_btn alert_confirm">
                        확인
                    </div>
                </div>
            </div>
        </div>
        <script>
            $("#wallet_pw_chk").keydown(function(key) {
                if (key.keyCode == 13) {
                    $("#wallet_confirm_btn").click();
                }
            });
            $("#withdraw_address,#withdraw_amount").keydown(function(key) {
                if (key.keyCode == 13) {
                    $("#withdraw_confirm_btn").click();
                }
            });

            $(".wallet_box_head_menu").click(function () {
                var dataId = $(this).attr('data-id');
                $("#page_type").val(dataId);
                $("#now_page").val(1);
                $("#page_frm").submit();
            });
            $(".wall_paging").click(function () {
                var dataPage = $(this).attr('data-page');
                if (!dataPage) {
                    return;
                }
                $("#now_page").val(dataPage);
                $("#page_frm").submit();
            });

            $("#withdraw").click(function () {
                $("#wallet_mask").css('display', 'flex').hide().fadeIn();
                $("#wallet_pop").fadeIn().css('transform', 'translateY(0)');
                $("#wallet_pw_chk").focus();
            });
            $("#wallet_confirm_btn").click(function () {
                if (!chkSubmit($("#wallet_pw_chk"), 'Input your password')) return;
                else {

                    var encAuth = $('#wallet_pw_chk_').val();
                    var password = $('#wallet_pw_chk').val();

                    $.ajax({
                        url: "/ajax/ajax.withdraw_password_check.php",
                        type: "post",
                        data: {
                            'encAuth'  : encAuth,
                            'password' : password
                        },
                        dataType: "json",
                        async: true,
                        error: function (e) {
                        },
                        success: function (result) {
                            if (result.status == "success") {
                                $("#wallet_pop").css({
                                    'transform':'translateY(50%)',
                                    'opacity':'0'
                                });
                                setTimeout(function () {
                                    $("#wallet_pw_chk").val('');
                                    $("#wallet_pop").css({
                                        'display': 'none',
                                        'transform': 'translateY(-50%)',
                                        'opacity':'1'
                                    });
                                    $("#withdraw_pop").fadeIn(300).css({
                                        'transform': 'translateY(0)'
                                    });

                                }, 400);

                            } else {
                                //alert(result.message);
                                alert("<?=$lang_pack_2[10] ?>");
                            }
                        }
                    });
                }
            });
            $("#wallet_close_btn").click(function () {
                $("#wallet_pop").css('transform', 'translateY(-50%)');
                $("#wallet_mask").fadeOut();
            });
            $("#withdraw_confirm_btn").click(function () {
                if (!chkSubmit($("#withdraw_address"), "<?=$lang_pack_2[2] ?>")) return;
                else if (!chkSubmit($("#withdraw_amount"), "<?=$lang_pack_2[4] ?>")) return;
                else {
                    var withdraw_address = $('#withdraw_address').val();
                    var withdraw_amount  = $('#withdraw_amount').val();
                    var wallet_auth      = $('#wallet_auth').val();
                    if (withdraw_address.trim() == '') {
                        alert("<?=$lang_pack_2[2] ?>");
                        return false;
                    } else if (withdraw_amount < 1) {
                        alert("<?=$lang_pack_2[6] ?>");
                        return false;
                    }
                    $.ajax({
                        url: "/ajax/ajax.withdraw_coin.php",
                        type: "post",
                        data: {
                            'wallet_auth': wallet_auth,
                            'withdraw_address': withdraw_address,
                            'withdraw_amount': withdraw_amount
                        },
                        dataType: "json",
                        async: true,
                        error: function (e) {
                        },
                        success: function (result) {
                            if (result.status == "success") {
                                alert("<?=$lang_pack_2[7] ?>");
                                $('#alert_close_btn').on("click", function () {
                                    location.reload();
                                });
                            } else {
                                if(result.code == 106) {
                                    alert("Please enter an accurate withdrawal address.");
                                } else {
                                    alert("Withdraw failed - ErrorCode => (" + result.code + ")");
                                }
                            }
                            //請輸入準確的取款地址.
                        }
                    });
                }
            });
            $("#withdraw_close_btn").click(function () {
                $("#withdraw_pop").css('transform', 'translateY(-50%)');
                $("#wallet_mask").fadeOut();
                setTimeout(function () {
                    $("#withdraw_pop").css({
                        'transform': 'translateY(-50%)'
                    }).fadeOut();
                    $("#withdraw_addr,#withdraw_cnt").val('');
                }, 400);
            });
            $("#wallet_view_btn").click(function(){
                if($(this).hasClass('wallet_view_open')){
                    aidus_modal('로그인 비밀번호를 입력해주세요.','pin','지갑주소보기','modal_view_btn');
                }else if($(this).hasClass('wallet_view_hide')){
                    $("#wallet_view_address").text('*************************');
                    $("#wallet_view_btn").text('[보기]').removeClass('wallet_view_hide').addClass('wallet_view_open');
                }
            });
            $(document).on("click","#modal_view_btn",function(){
                var pwd = $("#pin_code").val();
                $.ajax({
                    url: "/ajax/ajax.get_addr.php",
                    type: "post",
                    data: {
                        passwd : pwd
                    },
                    dataType: "json",
                    async: false,
                    error: function (e) {
                        console.log(e);
                    },
                    success: function (result) {
                        if(result['status'] == 'error'){
                            $("#pw_message_box").text(result['message']);
                        }else if(result['status'] == 'success'){
                            modal_close('pin');
                            $("#wallet_view_address").text(result['addr']);
                            $("#wallet_view_btn").text('[감추기]').removeClass('wallet_view_open').addClass('wallet_view_hide');
                        }
                    }
                });
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
                            aidus_modal(result['message'],'confirm','가입하기','aidus_pay_join');
                        }else if(result['status'] == 'error'){
                            aidus_modal(result['message']);
                        }
                        console.log(result);
                    }
                });
            });
            $(document).on("click","#move_login",function(){
                location.href='/login.php';
            });
            $(document).on("click","#aidus_pay_join",function(){
                $.ajax({
                    url: "/ajax/ajax.aidus_pay_join.php",
                    type: "post",
                    data: '',
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
            $(document).on("click","#page_reload",function(){
                location.reload();
            });
            $("#join_cancel").click(function(){
                var html = '아이더스 페이 사전 가입 이벤트 참여를 취소합니다.<br>' +
                    '<br>' +
                    '취소 이후 관리자 확인 후 지갑은 동결 해제되어, 가입자 분께서<br>' +
                    '<br>' +
                    '자유롭게 이동 가능합니다.<br>';
                aidus_modal(html,'confirm','가입 취소하기','join_cancel_btn');
            });
            $(document).on("click","#join_cancel_btn",function(){
                $.ajax({
                    url: "/ajax/ajax.join_cancel.php",
                    type: "post",
                    data: '',
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
        <?php
        include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/footer.php");
        ?>

