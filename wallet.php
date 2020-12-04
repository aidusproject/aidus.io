<?php
include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
$lang_pack   = $__lang ->wallet($language);
$lang_pack_2 = $__lang ->wallet_2($language);

if ($auth_chk == false || !isset($_SESSION['AIDSEQ'])) {
    echo "<script>location.href='/login.php'</script>";
    //header("Location: /login.php"); 작동안함
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
            <?php
            if ($page_type == 'list'){ ?>
            <div class="wallet_box_body" id="hide">
                <?php }else{ ?>
                <div class="wallet_box_body">
                    <?php }
                    ?>

                    <div class="wallet_box_body_area">
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
                        headers: { "X-CSRF-TOKEN": $("meta[name='csrf']").attr("content") },
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
                        headers: { "X-CSRF-TOKEN": $("meta[name='csrf']").attr("content") },
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
        </script>
        <?php
        include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/footer.php");
        ?>

