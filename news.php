<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
$page_type = (!isset($_POST['page_type'])) ? 'photo' : $_POST['page_type'];
$page = (!isset($_POST['now_page'])) ? 1 : $_POST['now_page'];
$news_type = "NEWS";
if($page_type == 'photo'){
    $news_type = "NEWS";
}else if($page_type == 'movie'){
    $news_type = "MOVIE";
}
?>
<div class="main_section sub_fund_section" style="text-align: center;">
    <div class="container">
        <div class="fund_title" style="margin-bottom:30px;">
            AIDUS NEWS
        </div>
    </div>
    <div class="news_back"></div>
    <div class="container">
        <div class="wallet_box">
            <div class="wallet_box_head">
                <div class="wallet_box_head_menu flex_r <?php if($page_type == 'movie') echo 'on'; ?> cursor" data-id="movie" id="">MOVIE</div>
                <div class="wallet_box_head_menu flex_r <?php if($page_type == 'photo') echo 'on'; ?> cursor" data-id="photo" id="">PHOTO</div>
            </div>

            <div class="wallet_box_body" id="news_list">
                <div class="wallet_box_body_area">
                    <div class="sub_news_area">
                        <div class="sub_news_head">
                            <div class="sub_news_left flex_r">DATE</div>
                            <div class="sub_news_right flex_r">Title</div>
                        </div>
                        <div class="sub_news_body">
                            <?php
                            $news = $__api -> getNews(array("news_type"=>$news_type ,"page_size"=>15,"page"=>$page, "locale" => $locale));
                            $result = $news['data'];
                            foreach($result as $key => $values){
                                $date = substr($result[$key]['reg_date'],0,10);
                                $date = date('d.M Y',strtotime($date));
                                ?>
                                <div class="sub_news_list cursor" data-seq="<?=$result[$key]['seq']?>">
                                    <div class="sub_news_left sub_news_body_left"><?=$date?></div>
                                    <div class="sub_news_right sub_news_body_right"><?=$result[$key]['title']?></div>
                                    <div class="sub_news_detail">
                                        <?php
                                        $news_detail = $__api -> getNewsDetail($result[$key]['seq']);
                                        $news_res = $news_detail['data'];
                                        ?>
                                        <?php
                                        if($page_type == 'photo'){
                                           echo $news_res['contents'];
                                        }else if($page_type == 'movie'){
                                            $movie_link = str_replace(".be/","be.com/embed/",$result[$key]['cover_url']); ?>
                                            <div style="position:relative;height:0;width:100%;padding-bottom:56.25%">
                                                <div class="item" id="loader">
                                                    <div class="loader"></div>
                                                </div>
                                                <iframe src="<?=$movie_link?>" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="paging"><?php paging($news['total_cnt'],$news['current_page'],$news['current_cnt'],$news['total_page'],''); ?></div>
            </div>
            <!--------------------------------------------------------------------------------------------------------->
        </div>
    </div>
</div>
<div class="carousel_pop_mask">
    <div class="carousel_pop_box">
        <div class="carousel_pop_head">
            <span id="news_pop_title">Title</span>
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
<form action="news.php" method="post" id="page_frm">
    <input type="hidden" id="now_page" name="now_page" value="<?=$page?>">
    <input type="hidden" id="page_type" name="page_type" value="<?=$page_type?>">
</form>
<script>
    var newsSeq = new Array();
    $(".wallet_box_head_menu").click(function(){
        var dataId = $(this).attr('data-id');
        $("#page_type").val(dataId);
        $("#now_page").val(1);
        $("#page_frm").submit();
    });
    $(".wall_paging").click(function(){
        var dataPage = $(this).attr('data-page');
        if(!dataPage){
            return;
        }
        $("#now_page").val(dataPage);
        $("#page_frm").submit();
    });
    $(".sub_news_list").click(function(){
        var seq = $(this).attr('data-seq');
        popup_move(seq);
    });
    $(".carousel_pop_close,.news_pop_close").click(function(){
        $(".carousel_pop_mask").fadeOut();
    });
    /*$(".sub_news_list").click(function(){
        if($(this).hasClass('on')){
            $(this).removeClass('on');
            $(this).find('.sub_news_detail').css('display','none');
        }else{
            $(".sub_news_list").removeClass('on');
            $('.sub_news_detail').css('display','none');
            $(this).addClass('on');
            $(this).find('.sub_news_detail').css('display','block');
        }
    });*/

    var locale = "<?=$locale?>";
    var type   = "NEWS";
    $.ajax({
        url: "/ajax/ajax.news.php",
        type: "post",
        data: {
            'type': type,
            'locale':locale
        },
        dataType: "json",
        headers: { "X-CSRF-TOKEN": $("meta[name='csrf']").attr("content") },
        async: true,
        error: function (e) {
        },
        success: function (result) {
            var seqArr = result['data'];
            for(var i = 0;i<seqArr.length;i++){
                newsSeq.push(seqArr[i]['seq']);
            }
        }
    });
    $(".carousel_pop_foot_left_right").click(function(){
        var thisId = $(this).attr('id');
        var dataSeq = $(".carousel_pop_box").attr('data-seq');
        var thisSeq = $.inArray(dataSeq,newsSeq);

        //alert($.inArray(newsSeq))
        if(thisId == 'carousel_left'){
            thisSeq--;
        }else{
            thisSeq++;
        }
        var moveSeq = newsSeq[thisSeq];
        if(!moveSeq){
            alert("No More Article");
            return false;
        }
        $("#news_pop_content").html('');
        var appendData = '<div class="item" id="loader">' +
            '            <div class="loader"></div>' +
            '        </div>';
        $("#news_pop_content").append(appendData);
        popup_move(moveSeq);
    });

    function popup_move(seq){
        var thisSeq = seq;
        $.ajax({
            url: "/ajax/ajax.popup.php",
            type: "post",
            data: {'seq': thisSeq},
            dataType: "json",
            headers: { "X-CSRF-TOKEN": $("meta[name='csrf']").attr("content") },
            async: false,
            error: function (e) {
            },
            success: function (result) {
                if(result == 100){
                    alert("실행 오류");
                }else{
                    $(".carousel_pop_box").attr('data-seq',result['seq']);
                    $("#news_pop_title").html(result['title']);
                    $("#news_pop_content").html(result['contents']);
                    $(".carousel_pop_mask").css('display','flex');
                }
            }
        });
    }
</script>
<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/footer.php");
?>

