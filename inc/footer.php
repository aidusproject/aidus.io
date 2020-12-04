<?php
include "alert.php";
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col col-6 footer_left">
                <div class="col footer_logo_area">
                    <img src="/images/footer_logo.png">
                </div>
                <div class="col footer_text">
                    <div>CONTACT US : info@aidus.io</div>
                    <div>Copyright © 2018 AIDUS Inc. All rights reserved.</div>
                </div>
            </div>
            <div class="col col-6 footer_right">
                <a href="https://d2ao5bnwtor39o.cloudfront.net/pdf/Privacy_Policy_PDF/AIDUS_Privacy_Policy_<?=$lang_file?>.pdf"><span>Privacy Policy</span></a>
                <a href="https://d2ao5bnwtor39o.cloudfront.net/pdf/Terms&Conditions_PDF/AIDUS_Terms&Conditions_<?=$lang_file?>.pdf"><span>Terms&Conditions</span></a>
            </div>
        </div>
    </div>
</footer>
<div class="loading_mask" id="loading_mask">
    <div class="loading_box">
        <div class="item" id="loader">
            <div class="loader"></div>
        </div>
    </div>
</div>


</div>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128027872-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-128027872-1');
</script>

<script type="text/javascript">
    function alert(msg){
        $("#alert_content").html(msg);
        $("#alert_mask").css('display','flex');
    }
    function alert_close(){
        $("#alert_content").html('');
        $("#alert_mask").fadeOut(300);
    }

    function readPrev(current){
        page--;
        var locale = "<?=$locale ?>";
        console.log("readPrev : " + locale);
        $.ajax({
            url: "/ajax/ajax.news.php",
            type: "post",
            data: {'type': menuType,'page':page,'locale' : locale},
            dataType: "json",
            headers: { "X-CSRF-TOKEN": $("meta[name='csrf']").attr("content") },
            async: false,
            error: function (e) {
                console.log(e);
            },
            success: function (result) {
                appendData = false;
                var append_text = '';
                for(var i=0;i<result.length;i++){
                    append_text = '<li data-seq="'+result[i]['seq']+'" class="flipster__item" style="z-index: 16; margin-right: -210px;"><div class="flipster__item__content"><img src="'+
                        result[i]['cover_url']+'"/></div></li>';
                    $(".flip-items").prepend(append_text);
                    $(".flipster__item").last().remove();
                }
                $("#coverflow").flipster('index');

                currentViewIndex = currentViewIndex - 16;
                //$("#coverflow").flipster('jump', currentViewIndex);
                $("#coverflow").flipster('index');
                appendData = true;
            }
        });
    }
    
    $(".region_select_btn").click(function(){
        if($(this).hasClass('on')){
            $(this).removeClass('on');
            $(".region_select_area").fadeOut(300);
        } else{
            $(this).addClass('on');
            $(".region_select_area").fadeIn(300);
        }
    });
    $(".menu_box_menu").click(function(){
        var target= $(this).parents('span');
        var thisId = $(this).attr('data-id');
        if(target.hasClass('on')){
            var offset = $("#"+thisId).offset();
            var offsetTop = offset.top - 130;
            $('html, body').animate({scrollTop : offsetTop}, 400);
        }else{
            var href = target.find('a').attr('href');
            location.href = href+"?move="+thisId;
        }

    });
    $(".navbar_menu").hover(function(){
        $(this).addClass('over');
        $("#head_sub_menu_box").css('display','block');
        $(this).find('.menu_box').css('display','block');
    },function(){
        $(this).removeClass('over');
        $("#head_sub_menu_box").css('display','none');
        $(".menu_box").css('display','none');
    });
    $(function(){
        var movePage = "<?=$move_page?>";
        if(movePage){
            var offset = $("#"+movePage).offset();
            var offsetTop = offset.top - 130;
            $('html, body').animate({scrollTop : offsetTop}, 400);
        }
    });
    $("#noshow").click(function(){
        document.cookie = "latoken=Y;expires=7*86400";
        $("#latoken_mask").fadeOut();
    });
    $("#latoken_pop_close").click(function(){
        $("#latoken_mask").fadeOut();
    });
</script>

</body>
</html>
