<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");

$page = (!isset($_POST['now_page'])) ? 1 : $_POST['now_page'];

?>
<div class="main_section sub_fund_section" style="text-align: center;">
    <div class="container">
        <div class="fund_title" style="margin-bottom:30px;">
            AIDUS FAQ
        </div>
    </div>
    <style>
        .wallet_box_body_area{
            padding:30px 0;
        }
    </style>
    <div class="news_back"></div>
    <div class="container">
        <div class="wallet_box">
            <div class="wallet_box_head">
                <div class="wallet_box_head_menu faq_menu flex_r on cursor">FAQ</div>
            </div>

            <div class="wallet_box_body" id="news_list">
                <div class="wallet_box_body_area">
                    <div class="sub_news_area">
                        <div class="sub_news_head">
                            <div class="sub_news_right sub_faq_title flex_r">Title</div>
                        </div>
                        <div class="sub_news_body">
                            <?php
                            $news = $__api -> getFAQ(array("news_type"=>$news_type ,"page_size"=>15,"page"=>$page, "locale" => $locale));
                            $result = $news['data'];
                            foreach($result as $key => $values){
                                ?>
                                <div class="sub_news_list cursor" data-seq="<?=$result[$key]['seq']?>">
                                    <div class="sub_news_right sub_faq_list_title sub_news_body_right"><?=$result[$key]['title']?></div>
                                    <div class="sub_news_detail sub_faq_detail">
                                        <?=$result[$key]['contents']?>
                                    </div>
                                </div>
                            <?php }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="paging"><?php paging($news['total_cnt'],$news['current_page'],$news['current_cnt'],$news['total_page'],''); ?></div>
            </div>
        </div>
    </div>
</div>
<form action="faq.php" method="post" id="page_frm">
    <input type="hidden" id="now_page" name="now_page" value="<?=$page?>">
</form>
<script>
    $(".wallet_box_head_menu").click(function(){
        var dataId = $(this).attr('data-id');
        $("#now_page").val(1);
        $("#page_frm").submit();
    });
    $(".wall_paging").click(function(){
        var dataPage = $(this).attr('data-page');
        $("#now_page").val(dataPage);
        $("#page_frm").submit();
    });
    $(".sub_news_list").click(function(){
        if($(this).hasClass('on')){
            $(this).removeClass('on');
            $(this).find('.sub_news_detail').css('display','none');
        }else{
            $(".sub_news_list").removeClass('on');
            $('.sub_news_detail').css('display','none');
            $(this).addClass('on');
            $(this).find('.sub_news_detail').css('display','block');
        }
    });
</script>
<?php

include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/footer.php");
?>

