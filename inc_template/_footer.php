<div class="footer">
    <div class="container">
        <div class="footer_box" style="border-bottom: 1px solid #505050;">
            <div class="foot_logo">
                <img src="assets/image/footer_logo.png" alt="">
            </div>
            <div class="foot_terms">
                <a  href="https://d2ao5bnwtor39o.cloudfront.net/pdf/Privacy_Policy_PDF/AIDUS_Privacy_Policy_<?=$lang_file?>.pdf" target="_blank" class="foot_term">PRIVACY POLICY</a>
                <span class="foot_division">|</span>
                <a href="https://d2ao5bnwtor39o.cloudfront.net/pdf/Terms&Conditions_PDF/AIDUS_Terms&Conditions_<?=$lang_file?>.pdf" target="_blank" class="foot_term">TERMS&CONDITIONS</a>
            </div>
        </div>
        <div class="footer_box">
            <div class="foot_info">
                <div class="foot_info_text">CONTACT US : info@aidus.io</div>
                <div class="foot_info_text">Copyright © 2018 AIDUS Inc. All rights reserved.</div>
            </div>
            <div class="foot_sns">
                    <a href="https://www.facebook.com/AIDUSofficial/?modal=admin_todo_tour" target="_blank" class="foot_sns_btn">
                        <img src="assets/image/foot1.png" alt="">
                    </a>
                <a href="https://twitter.com/AIDUSofficial" target="_blank" class="foot_sns_btn">
                        <img src="assets/image/foot2.png" alt="">
                    </a>
                <a href="https://medium.com/@AIDUSofficial" target="_blank" class="foot_sns_btn">
                        <img src="assets/image/foot3.png" alt="">
                    </a>
                <a href="https://www.reddit.com/user/AIDUSofficial" target="_blank" class="foot_sns_btn">
                        <img src="assets/image/foot4.png" alt="">
                    </a>
                <a href="https://t.me/aiduskorea" target="_blank" class="foot_sns_btn">
                        <img src="assets/image/foot5.png" alt="">
                    </a>
                <a href="https://open.kakao.com/o/gFNeIbvb" target="_blank" class="foot_sns_btn">
                        <img src="assets/image/foot6.png" alt="">
                    </a>
                <a href="https://www.instagram.com/aidus_official/" target="_blank" class="foot_sns_btn">
                        <img src="assets/image/foot7.png" alt="">
                    </a>
            </div>
        </div>
    </div>
</div>
<div class="carousel_pop_mask">
    <div class="carousel_pop_box">
        <div class="carousel_pop_head">
            <span id="news_pop_title"></span>
            <span class="news_pop_close">X</span>
        </div>
        <div class="carousel_pop_body">
            <div class="carousel_pop_body_contents" id="news_pop_content">
            </div>
        </div>
        <div class="carousel_pop_foot">
            <div class="carousel_pop_foot_left_right carousel_pop_foot_left cursor flex_r" id="carousel_left">〈</div>
            <div class="carousel_pop_foot_center flex_r">
                <div class="carousel_pop_close cursor">CLOSE</div>
            </div>
            <div class="carousel_pop_foot_left_right carousel_pop_foot_right cursor flex_r" id="carousel_right">〉</div>
        </div>
    </div>
</div>
<script>
    var boardType = "";
    $(".carousel_pop_close,.news_pop_close").click(function(){
        $(".carousel_pop_mask").fadeOut();
        $("html, body").css({
            "overflow":"auto"
        });
    });
    $(".carousel_pop_foot_left_right").click(function(){
        var thisId = $(this).attr('id');
        var thisSeq;
        thisSeq = $("#"+thisId).attr('data-seq');
        if(!thisSeq){
            alert("No More Article");
            return false;
        }
        $("#news_pop_content").html('');
        var appendData = '<div class="item" id="loader">' +
            '            <div class="loader"></div>' +
            '        </div>';
        $("#news_pop_content").append(appendData);
        popup_move(thisSeq,'more',boardType);
    });
    $(document).on("click",".notice_view,.notice_list",function(){
        var thisSeq = $(this).attr('data-seq');
        var nextSeq = $(this).next().attr('data-seq');
        boardType   = "news";
        popup_move(thisSeq,'new',boardType);
    });
    $(document).on("click",".brand_news_box",function(){
        var thisSeq = $(this).attr('data-seq');
        var nextSeq = $(this).next().attr('data-seq');
        boardType   = "brand";
        popup_move(thisSeq,'new',boardType);
    });
    $(document).on("click",".faq_view, .faq_list",function(){
        var thisSeq = $(this).attr('data-seq');
        var nextSeq = $(this).next().attr('data-seq');
        boardType   = "faq";
        popup_move(thisSeq,'new',boardType);
    });
    function popup_move(seq,text,boardType){
        var thisSeq = seq;
        var url = "";

        if(boardType == "news"){
            url = "/ajax/ajax.popup.php";
        }else if(boardType == "brand"){
            url = "/ajax/ajax.brand_popup.php";
        }else{
            url = "/ajax/ajax.faq_view.php";
        }


        $.ajax({
            url: url,
            type: "post",
            data: {'seq': thisSeq},
            dataType: "json",
            async: false,
            headers: { "X-CSRF-TOKEN": $("meta[name='csrf']").attr("content") },
            error: function (e) {
            },
            success: function (result) {
                if(result == 100){
                    alert("실행 오류");
                }else{
                    $("#carousel_right").attr('data-seq',result['next_seq']);
                    $("#carousel_left").attr('data-seq',result['prev_seq']);

                    $("#news_pop_title").html(result['title']);
                    if(boardType == "brand"){
                        if(result['attach_seq'] != null){
                            var imgHtml = "<div style='text-align: center;margin-bottom: 30px;'>" +
                                "<img src='https://aidus-staging.s3.ap-northeast-2.amazonaws.com/NEWS"+result['attach_file_name']+"'>" +
                                "</div>";

                        }
                        $("#news_pop_content").html(imgHtml+result['contents']);
                    }else{
                        $("#news_pop_content").html(result['contents']);
                    }

                    if(text == 'new'){
                        $("html, body").css({
                            "overflow":"hidden"
                        });
                        location.href="#carousel_box";
                        $(".carousel_pop_mask").css('display','flex');
                    }
                }
            }
        });
    }
</script>