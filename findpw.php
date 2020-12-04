<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
$lang_pack = $__lang -> findPassword($language);
?>
<div class="main_section sub_fund_section" style="text-align: center;">
    <div class="container">
        <div class="fund_title" style="margin-bottom:30px;">
            GLOBAL FUND. ONE COIN
        </div>
        <div class="signup_text">AIDUS</div>
    </div>
    <div class="signup_back">
        <div class="signup_box">
            <div class="signup_box_text">
                <div class="signup_box_title margin-bottom-10"><?=$lang_pack[0] ?></div>
                <div class="signup_box_sub"><?=$lang_pack[1] ?></div>
            </div>
            <div class="signup_input_box find_pw">
                <form action="" id="signup_frm">
                    <label class="signup_input_box_text" for="user_email"><?=$lang_pack[5] ?></label>
                    <input type="email" class="user_input margin-bottom-30" id="findpw_email" placeholder="<?=$lang_pack[1] ?>">

                    <div class="signup_btn_box margin-bottom-20">
                        <span class="signup_btn" id="find_pw_btn"><?=$lang_pack[6] ?></span>
                        <span class="signup_btn close" id="close_pw_btn"><?=$lang_pack[7] ?></span>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="signup_bottom">

    </div>
</div>
<script>
    $('#close_pw_btn').click(function(){
        location.href='login.php';
    });
    $("#find_pw_btn").click(function(){
        var emailRegex = /^[0-9a-zA-Z_\-.]+@[0-9a-zA-Z_\-]+(\.[0-9a-zA-Z_\-]+){1,2}$/;
        if(!chkSubmit($("#findpw_email"),'<?=$lang_pack[1] ?>')) return;
        else if(!emailRegex.test($("#findpw_email").val())){
            alert("<?=$lang_pack[1] ?>");
            $("#user_email").focus();
            return;
        }else{
            var type = 'temppassword';
            var findEmail = $("#findpw_email").val();
            $("#loading_mask").css('display','flex');
            var lang = "<?=$language ?>";
            $.ajax({
                url: "/ajax/ajax.mail.php",
                type: "post",
                data: {
                    'type':type,
                    'receiver':findEmail,
                    'lang' : lang
                },
                headers: { "X-CSRF-TOKEN": $("meta[name='csrf']").attr("content") },
                dataType: "json",
                async: true,
                error: function (e) {
                },
                success: function (result) {
                    $("#loading_mask").fadeOut();
                    alert("<?=$lang_pack[8] ?>");
                }
            });
        }

        $('#alert_close_btn').on("click", function() {
            location.reload();
        });
    });


</script>
<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/footer.php");
?>
