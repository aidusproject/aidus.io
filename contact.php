<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");

if(isset($_SESSION['AIDAUTH'])) {
    $auth       = $__api -> getDecrypt($_SESSION['AIDAUTH']);
    if($auth['status'] == 200) {
        $user_email = $auth['string'];
    }
}
?>
<div class="main_section sub_fund_section" style="text-align: center;">
    <div class="container">
        <div class="fund_title" style="margin-bottom:30px;">
            Contact US
        </div>
    </div>
    <div class="contact_back flex_r">
        If you have any question, please feel free to contact us.
    </div>
    <div class="container">
        <div class="contact_box">
            <input type="text" class="contact_input" id="contact_us_email" placeholder="YOUR EMAIL ADDRESS" value="<?=$user_email ?>">
            <textarea name="" id="contact_us_textarea" class="contact_textarea"></textarea>
            <div class="contact_btn flex_r cursor" id="contact_us_btn">
                Send
            </div>
        </div>
    </div>
</div>
<script>
    $("#contact_us_btn").click(function(){
        if(!chkSubmit($("#contact_us_textarea"),'이메일 내용을 ')) return;
        else{
            $("#loading_mask").css('display','flex');
            var type   = 'contact';
            var sender = $('#contact_us_email').val();
            var contactContents = $("#contact_us_textarea").val();

            if(sender.trim() == '') {
                alert("이메일을 입력 해 주세요");
                return false;
            }
            if(contactContents.trim() == '') {
                alert("내용을 입력 해 주세요");
                return false;
            }
            $.ajax({
                url: "/ajax/ajax.mail.php",
                type: "post",
                data: {
                    'type':type,
                    'sender' : sender,
                    'contents':contactContents
                },
                headers: { "X-CSRF-TOKEN": $("meta[name='csrf']").attr("content") },
                dataType: "json",
                async: true,
                error: function (e) {
                },
                success: function (result) {
                    console.log(result);
                    $("#loading_mask").fadeOut();
                    if(result.status != 200){
                        alert('메일 전송에 실패 하였습니다');
                    }else{
                        alert("전송 되었습니다.");
                        //location.reload();
                    }
                }
            });

        }
    });
</script>
<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/footer.php");
?>

