<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
$lang_pack      = $__lang -> login($language);
$lang_pack_inc  = $__lang -> signup($language);
$lang_pack_pass = $__lang -> findPassword($language);
?>
<div class="main_section sub_fund_section" style="text-align: center;">
    <div class="container">
        <div class="fund_title" style="margin-bottom:30px;">
            GLOBAL FUND. ONE COIN
        </div>
        <div class="signup_text">AIDUS</div>
    </div>
    <div class="login_back">
        <div class="container login_container">
            <div class="login_box">
                <div class="login_box_text">
                    <div class="signup_box_title margin-bottom-10"><?=$lang_pack[0] ?></div>
                    <div class="signup_box_sub"><?=$lang_pack[1] ?></div>
                    <div class="signup_input_box">
                        <form action="" id="signup_frm">
                            <input type="email" class="login_user_input margin-bottom-30" id="user_email" placeholder="Email">
                            <input type="password" class="login_user_input margin-bottom-30" autocomplete="password" id="user_pw" placeholder="Password">
                        </form>
                        <div class="login_btn_box">
                            <div class="login_btn" id="login_btn">LOGIN</div>
                        </div>
                        <div class="login_bottom">
                            <div class="login_bottom_box">
                                <span class="login_bottom_text"><?=$lang_pack[9] ?></span>
                                <a href="signup.php"><span class="login_bottom_btn"><?=$lang_pack[10] ?></span></a>
                            </div>
                            <div class="login_bottom_box">
                                <span class="login_bottom_text"><?=$lang_pack[11] ?></span>
                                <a href="findpw.php"><span class="login_bottom_btn"><?=$lang_pack[12] ?></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="face_book_btn login_facebook" id="facebook_login">
                        <span>FACEBOOK LOGIN</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pw_change_pop_mask flex_r">
    <div class="pw_change_pop">
        <div class="pw_change_pop_head flex_r">
            Change Password
        </div>
        <div class="pw_change_pop_body">
            <label for="change_temp_pw"><?=$lang_pack_pass[2] ?></label>
            <input type="password" autocomplete="password" class="login_user_input" id="change_temp_pw">
            <label for="user_pw"><?=$lang_pack_pass[3] ?></label>
            <input type="password" autocomplete="password" class="login_user_input" id="change_user_pw">
            <label for="user_pw_chk"><?=$lang_pack_pass[4] ?></label>
            <input type="password" autocomplete="password" class="login_user_input" id="change_user_pw_chk">
        </div>
        <div class="pw_change_pop_foot flex_r">
            <span class="signup_btn cursor" id="pw_change_btn"><?=$lang_pack_pass[6] ?></span>
            <span class="signup_btn cursor pw_change_btn" id="pw_change_close"><?=$lang_pack_pass[7] ?></span>
        </div>
    </div>
</div>
<script>
    $("#pw_change_close").click(function(){
         $(".pw_change_pop").css('transform','translateY(-300%)');
         $(".pw_change_pop_mask").fadeOut(400)
    });
    $("#pw_change_btn").click(function(){
        var pwLoc = $("#change_user_pw");
        var pw = pwLoc.val();
        var num = pw.search(/[0-9]/g);
        var eng = pw.search(/[a-z]/ig);
        var spe = pw.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);
        var pwChkLoc = $("#change_user_pw_chk");
        var pwChk = pwChkLoc.val();
        var numChk = pwChk.search(/[0-9]/g);
        var engChk = pwChk.search(/[a-z]/ig);
        var speChk = pwChk.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);

        if(!chkSubmit($("#change_temp_pw"),'<?=$lang_pack_pass[9] ?>')) return;
        else if(!chkSubmit($("#change_user_pw"),'<?=$lang_pack_pass[11] ?>')) return;
        else if(!chkSubmit($("#change_user_pw_chk"),'<?=$lang_pack_pass[12] ?>')) return;
        else if(pw.length < 10 || pw.length > 20){
            alert("<?=$lang_pack_inc[14] ?>");
            pwLoc.focus();
            return false;
        }
        else if(pw.search(/₩s/) != -1){
            alert("<?=$lang_pack_inc[15] ?>");
            pwLoc.focus();
            return false;
        }
        else if( (num < 0 && eng < 0) || (eng < 0 && spe < 0) || (spe < 0 && num < 0) ){
            alert("<?=$lang_pack_inc[14] ?>");
            pwLoc.focus();
            return false;
        }
        else if(pwChk.length < 10 || pwChk.length > 20){
            alert("<?=$lang_pack_inc[14] ?>");
            pwChkLoc.focus();
            return false;
        }
        else if(pwChk.search(/₩s/) != -1){
            alert("<?=$lang_pack_inc[17] ?>");
            pwChkLoc.focus();
            return false;
        }
        else if( (numChk < 0 && engChk < 0) || (engChk < 0 && speChk < 0) || (speChk < 0 && numChk < 0) ){
            alert("<?=$lang_pack_inc[14] ?>");
            pwChkLoc.focus();
            return false;
        }
        else if($("#change_user_pw").val() != $("#change_user_pw_chk").val()){
            alert("<?=$lang_pack_inc[18] ?>");
            return;
        }else{
            var type = 'pw_change';
            var tempPw = $("#change_temp_pw").val();
            var changePw = $("#change_user_pw").val();
            var changePwChk = $("#change_user_pw_chk").val();
            $.ajax({
                url: "/ajax/ajax.user.php",
                type: "post",
                data: {
                    'type':type,
                    'current_password':tempPw,
                    'update_password':changePw
                },
                dataType: "json",
                headers: { "X-CSRF-TOKEN": $("meta[name='csrf']").attr("content") },
                async: true,
                error: function (e) {
                },
                success: function (result) {
                    if(result == 200){
                        location.href='index.php';
                    } else if(result == 105){
                        alert("<?=$lang_pack_pass[10] ?>");
                    } else {
                        alert("Login / Password Change failed..");
                    }
                }
            });
        }
    });
    $("#login_btn").click(function(){
        if(!chkSubmit($("#user_email"), "<?=$lang_pack[3]?>")) return;
        else if(!chkSubmit($("#user_pw"), "<?=$lang_pack[5]?>")) return;
        else{
            var type = 'login';
            var userEmail = $("#user_email").val();
            var userPw   = $("#user_pw").val();

            $.ajax({
                url: "/ajax/ajax.user.php",
                type: "post",
                data: {
                    'type':type,
                    'user_id':userEmail,
                    'user_password':userPw
                },
                dataType: "json",
                headers: { "X-CSRF-TOKEN": $("meta[name='csrf']").attr("content") },
                async: true,
                error: function (e) {
                },
                success: function (result) {
                    if(result == 200){
                        location.href='index.php';
                    }else if(result == 300){
                        $(".pw_change_pop_mask").css('display','flex');
                        $(".pw_change_pop").css('transform','translateY(0)');

                    }else{
                        if(result.status == 105 || result.status == 102) {
                            alert("<?=$lang_pack[14] ?>");
                            return false;
                        } else {
                            alert(result.message);
                            return false;
                        }
                    }
                }
            });
        }

    });

    $('#facebook_login').on('click', function() {
        alert("Not Working yet");
    });
    $(".login_user_input").keydown(function(key) {
        if (key.keyCode == 13) {
            $("#login_btn").click();
        }
    });
</script>
<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/footer.php");
?>

