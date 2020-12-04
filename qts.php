<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
$page_type = (!isset($_REQUEST['page_type'])) ? 'report' : $_REQUEST['page_type'];
$page_type = 'report';
/*임시로 하나만 보이게*/
/*if($move_page){
    if($move_page == 'report'){
        $page_type = 'report';
    }else{
        $page_type = 'qts';
    }
}*/
$lang_pack = $__lang -> qts($language);
?>
<div class="main_section sub_fund_section" style="text-align: center;" id="qts">
    <div class="container">
        <div class="fund_title margin-bottom-30">
            SMART QTS
        </div>
        <div class="smart_qts">
            <div class="smart_qts_left">
                <div class="smart_qts_box">
                    <img src="/images/certificate.png" width="100%">
                    <img src="/images/medal.png" class="medal_img">
                    <div class="certificate_text">
                        <span class="small_text">Update QTS Earning Rate Report by </span>
                        <span class="big_text"><?=$qts_res[0]['title']?></span>
                    </div>
                </div>
            </div>
            <div class="smart_qts_right">
                <div class="smart_qts_text"><?=$qts_res[0]['title']?></div>
                <div class="smart_qts_text_big">
                    <span class="smart_qts_rate">
                    AVERAGE ANNUAL IRR <span class="smart_qts_per"><?=$qts_res[0]['yield']?></span>
                    </span>
                </div>
                <div class="smart_qts_text_small">
                    <p>Confirmed by</p>
                    <p>AISYS GLOBAL PTE.LTD.</p>
                    <!--<p>LAWOFFICE JIMYUNG</p>
                    <p>Gong Jung Global Accounting Corporation.</p>-->
                </div>
                <a href="<?= _S3_URI_ . $qts_res[0]['attach_file_path'] . $qts_res[0]['attach_file_name'] ?>"><span class="fund_btn go_qts_btn cursor flex_r">QTS DETAIL</span></a>
            </div>
        </div>
        <div class="smart_qts_menu_bar">
            <div class="smart_qts_menu flex_r <?php if($page_type == 'report') echo 'on'; ?> cursor" data-id="report"><!--수익률 상세 리포트--><?=$lang_pack[0]?></div>
            <div class="hidden_temp smart_qts_menu flex_r <?php if($page_type == 'qts') echo 'on'; ?> cursor" data-id="qts"><!--인증절차--><?=$lang_pack[1]?></div>
        </div>
    </div>
</div>
<div class="smart_qts_section smart_qts_back">
    <div class="container">
        <div class="smart_qts_cert_box">
            <div class="smart_qts_cert_title margin-bottom-30">
                <div class="smart_qts_cert_title_text"><?=$lang_pack[2]?></div>
                <div class="smart_qts_cert_title_line"></div>
            </div>
            <div class="smart_qts_cert_content">
                <img src="/images/aidus_cert_img.png" width="100%">
                <!--<div class="smart_qts_cert_half">
                    <div class="float_left smart_qts_cert_half_img">
                        <img src="/images/qts_icon_1.png">
                    </div>
                    <div class="float_left smart_qts_cert_content_text">
                        <div class="smart_qts_cert_content_text_title"><?/*=$lang_pack[3]*/?></div>
                        <div class="smart_qts_cert_content_text_title font-bg"><?/*=$lang_pack[4]*/?></div>
                    </div>
                </div>
                <div class="smart_qts_cert_half">
                    <div class="float_left smart_qts_cert_half_img">
                        <img src="/images/qts_icon_2.png">
                    </div>
                    <div class="float_left smart_qts_cert_content_text">
                        <div class="smart_qts_cert_content_text_title"><?/*=$lang_pack[5]*/?></div>
                        <div class="smart_qts_cert_content_text_title font-bg"><?/*=$lang_pack[6]*/?></div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</div>
<?php
if($page_type == 'qts'){ ?>
<div class="smart_qts_section_hide">
<div class="smart_qts_section" id="report">
    <?php }else{ ?>
    <div class="smart_qts_section" id="report">
        <?php }
        ?>
    <div class="container">
        <!--<div class="row" style="overflow:hidden;">
            <div class="col col-4 smart_qts_report_box">
                <div class=" smart_qts_report_box_in">
                    <div class="report_box_circle flex_r">STEP 01.</div>
                    <div class="report_box_text">
                        <?/*=$lang_pack[7]*/?>
                    </div>
                </div>
            </div>
            <div class="col col-4 smart_qts_report_box">
                <div class=" smart_qts_report_box_in">
                    <div class="report_box_circle flex_r">STEP 02.</div>
                    <div class="report_box_text">
                        <?/*=$lang_pack[8]*/?>
                    </div>
                </div>
            </div>
            <div class="col col-4 smart_qts_report_box">
                <div class=" smart_qts_report_box_in">
                    <div class="report_box_circle flex_r">STEP 03.</div>
                    <div class="report_box_text">
                        <?/*=$lang_pack[9]*/?>
                    </div>
                </div>
            </div>
            <div class="col col-4 smart_qts_report_box">
                <div class=" smart_qts_report_box_in">
                    <div class="report_box_circle flex_r">STEP 04.</div>
                    <div class="report_box_text">
                        <?/*=$lang_pack[10]*/?></div>
                </div>
            </div>
            <div class="col col-4 smart_qts_report_box">
                <div class=" smart_qts_report_box_in">
                    <div class="report_box_circle flex_r">STEP 05.</div>
                    <div class="report_box_text"><?/*=$lang_pack[11]*/?></div>
                </div>
            </div>
            <div class="col col-4 smart_qts_report_box">
                <div class=" smart_qts_report_box_in">
                    <div class="report_box_circle flex_r">STEP 06.</div>
                    <div class="report_box_text"><?/*=$lang_pack[12]*/?></div>
                </div>
            </div>
        </div>-->
        <div class="smart_qts_report_area">
            <div class="smart_qts_report_list_area" id="smart_qts_report_list_area">
                <?php
                $report_result = $__api -> getQts(array("page" => 1,"page_size" => 5, "locale" => $locale));
                $report_list = $report_result['data'];
                $total_cnt = $report_result['total_cnt'];
                $block = 5;
                $scale = 5;
                foreach ($report_list as $key => $value){
                    $list_reg_date = $report_list[$key]['reg_date'];
                    $list_reg_date = date("Y.m.d",strtotime($list_reg_date));
                    ?>
                    <div class="smart_qts_report_list">
                        <a href="https://aidus-staging.s3.ap-northeast-2.amazonaws.com<?=$report_list[$key]['attach_file_path']?><?=$report_list[$key]['attach_file_name']?>" target="_blank" title="<?=$report_list[$key]['attach_source_file_name']?>">
                            <div class="smart_qts_report_list_detail" data-seq="<?=$report_list[$key]['seq']?>">
                                <div class="smart_qts_report_list_detail_title">
                                    <?=$report_list[$key]['title']?>&nbsp;
                                    <img src="/images/icon/pdf_icon.png" width="10">
                                </div>
                                <div class="smart_qts_report_list_detail_date"><?=$list_reg_date?></div>
                            </div>
                            <div class="smart_qts_report_list_per flex_r"><?=$report_list[$key]['yield']?></div>
                        </a>
                    </div>
                <?php }
                ?>
            </div>
            <div class="paging"><?php paging($total_cnt,1,$scale,5,''); ?></div>
        </div>
    </div>
        <?php
        if($page_type == 'qts'){ ?>
    </div>
</div>
    <?php }else{ ?>
</div>
<?php } ?>
<script>
    $(".smart_qts_menu").click(function(){
        var dataId = $(this).attr('data-id');
        $(".smart_qts_menu").removeClass('on');
        $(this).addClass('on');
        if(dataId == 'qts'){
            $("#smart_qts_hd").css('display','block');
            $("#smart_report_hd").css('display','none');
        }else{
            $("#smart_qts_hd").css('display','none');
            $("#smart_report_hd").css('display','block');
        }
    });
    $(document).on("click",".wall_paging",function(){
        var page = $(this).attr('data-page');
        if(!page){
            return;
        }
        var totalCnt = "<?=$total_cnt?>";
        var block = "<?=$block?>";
        var scale = "<?=$scale?>";
        $.ajax({
            url: "/ajax/ajax.qts.php",
            type: "post",
            data: {
                'page' : page,
                'locale' : "<?=$locale ?>"
            },
            dataType: "json",
            headers: { "X-CSRF-TOKEN": $("meta[name='csrf']").attr("content") },
            async: true,
            error: function (e) {
            },
            success: function (result) {
                $("#smart_qts_report_list_area").html("");
                for(var i=0;i<result.length;i++){
                    $("#smart_qts_report_list_area").append('<div class="smart_qts_report_list" id="list'+i+'">');
                    var appendText = '<a href="https://aidus-staging.s3.ap-northeast-2.amazonaws.com'+
                        result[i]['attach_file_path']+result[i]['attach_file_name']+'" target="_blank" title="'+
                        result[i]['attach_source_file_name']+'"><div class="smart_qts_report_list_detail" data-seq="' + result[i]['seq'] + '">' +
                        '                            <div class="smart_qts_report_list_detail_title">' +
                        '                                ' + result[i]['title'] + ' ' +
                        '                                <img src="/images/icon/pdf_icon.png" width="10">' +
                        '                            </div>' +
                        '                            <div class="smart_qts_report_list_detail_date">' + result[i]['reg_date'] + '</div>' +
                        '                        </div>' +
                        '                        <div class="smart_qts_report_list_per flex_r">' + result[i]['yield'] + '</div>';
                    $("#list"+i).append(appendText);
                }
                wall_paging(page,block,scale,totalCnt);
            }
        });
    });
</script>
    <?php
    if($page_type == 'report'){ ?>
<div class="smart_qts_section_hide">
    <div class="smart_qts_section" id="meta">
        <?php }else{ ?>
        <div class="smart_qts_section" id="meta">
            <?php }
            ?>
    <div class="container" style="text-align: center">
        <div class="fund_title margin-bottom-30">
            <!--인증절차-->
            <?=$lang_pack[13]?>
        </div>
        <div class="qts_step_title_box">
            <div class="qts_step_title">
                <div class="qts_step_title_top">
                    <?=$lang_pack[14]?>
                </div>
                <div class="qts_step_title_bottom">
                    <?=$lang_pack[15]?>
                </div>
            </div>
        </div>
        <div class="qts_step_area">

            <div class="qts_step flex_r">
                <div class="col qts_hexagon_box_top">
                    <div class="qts_hexagon_box">
                        <div class="qts_hexagon">
                            <img src="/images/hexagon_g.png" alt="">
                            <div class="qts_hexagon_text">
                                <?=$lang_pack[16]?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col qts_hexagon_box_top">
                    <div class="qts_hexagon_box">
                        <div class="qts_hexagon">
                            <img src="/images/hexagon_w.png" alt="">
                            <div class="qts_hexagon_text">
                                <?=$lang_pack[18]?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col qts_hexagon_box_top">
                    <div class="qts_hexagon_box">
                        <div class="qts_hexagon">
                            <img src="/images/hexagon_g.png" alt="">
                            <div class="qts_hexagon_text">
                                <?=$lang_pack[20]?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col qts_hexagon_box_top">
                    <div class="qts_hexagon_box">
                        <div class="qts_hexagon">
                            <img src="/images/hexagon_w.png" alt="">
                            <div class="qts_hexagon_text">
                                <?=$lang_pack[22]?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="qts_step flex_r">
                <div class="col qts_hexagon_box_top">
                    <div class="qts_hexagon_box">
                        <div class="qts_hexagon">
                            <img src="/images/hexagon_w.png" alt="">
                            <div class="qts_hexagon_text">
                                <?=$lang_pack[17]?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col qts_hexagon_box_top">
                    <div class="qts_hexagon_box">
                        <div class="qts_hexagon">
                            <img src="/images/hexagon_g.png" alt="">
                            <div class="qts_hexagon_text">
                                <?=$lang_pack[19]?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col qts_hexagon_box_top">
                    <div class="qts_hexagon_box">
                        <div class="qts_hexagon">
                            <img src="/images/hexagon_w.png" alt="">
                            <div class="qts_hexagon_text">
                                <?=$lang_pack[21]?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col qts_hexagon_box_top">
                    <div class="qts_hexagon_box">
                        <div class="qts_hexagon">
                            <img src="/images/hexagon_g.png" alt="">
                            <div class="qts_hexagon_text">
                                <?=$lang_pack[23]?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="qts_step_title_box">
                <div class="qts_step_title" style="margin-top: 50px;">
                    <div class="qts_step_title_top">
                        <?=$lang_pack[24]?>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <?php
            if($page_type == 'report'){ ?>
        </div>
    </div>
                    <?php }else{ ?>
    </div>
                        <?php }
                        ?>
<div class="main_section" style="text-align: center">
    <div class="smart_qts_title">
        <!--인증 상세 설명-->
        <?=$lang_pack[25]?>
    </div>
</div>

<div class="smart_qts_section smart_qts_back_green" id="desc">
    <div class="container">
        <div class="qts_cert_detail">
            <div class="qts_cert_detail_left">
                <div class="qts_cert_detail_left_title"><!--1. AIDUS QTS 실적 리포트 작성-->
                    <?=$lang_pack[26]?>
                </div>
                <div class="qts_cert_detail_left_content">
                    <!--<p>AIDUS가 운용 중인 전체 계좌</p>
                    <p>3268274, 59516, 59517, 67971, 68199</p>
                    <p>70366, 2711267, 83165에 대하여,</p>
                    <p>리포트 작성 동영상과 같은 방법으로 Report를 작성합니다.</p>-->
                    <?=$lang_pack[27]?>
                    <span><!--* 추후 운용 계정은 추가 될 수 있습니다.-->
                        <?=$lang_pack[28]?>
                    </span>
                </div>
            </div>
            <div class="qts_cert_detail_right">
                <div style="position:relative;height:0;width:100%;padding-bottom:56.25%">
                    <iframe src="https://www.youtube.com/embed/eSYeY4Z4pGA" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="smart_qts_section hidden_temp">
    <div class="container">
        <div class="margin-bottom-30 smart_qts_report_detail_area">
            <div class="smart_qts_report_detail margin-bottom-30">
                <div class="smart_qts_report_detail_img">
                    <img src="/images/smart_qts_report_1.png" alt="">
                </div>
                <div class="smart_qts_report_detail_text">
                    <div class="smart_qts_report_detail_text_title"><!--2. 보고서 전달-->
                        <?=$lang_pack[29]?>
                    </div>
                    <div class="smart_qts_report_detail_text_sub"><!--작성된 보고서는 매주 법률사무소 지명과 세무법인 공정측으로 전달하여 실적에 대한 확인 요청.-->
                        <?=$lang_pack[30]?>
                    </div>
                </div>
            </div>
            <div class="smart_qts_report_detail margin-bottom-30">
                <div class="smart_qts_report_detail_img">
                    <img src="/images/smart_qts_report_2.png" alt="">
                </div>
                <div class="smart_qts_report_detail_text">
                    <div class="smart_qts_report_detail_text_title"><!--3. AIDUS QTS 실적 리포트 인증-->
                        <?=$lang_pack[31]?>
                    </div>
                    <div class="smart_qts_report_detail_text_sub"><!--법률사무소 지명과, 세무법인 공정은, AIDUS의 운용 계정의 로그인 정보를 이용하여,
                        각 계정에 직접 로그인 후, 1번 절차 AIDUS와 동일한 절차를 통하여 각 운용 계정의 전체 누적 Balance를
                        확인합니다. 확인된 Balance와 AIDUS측에서 제시된 보고서의 Balance가 일치함을 확인 후에 확인서를
                        발급합니다.-->
                        <?=$lang_pack[32]?>
                    </div>
                </div>
            </div>
            <div class="smart_qts_report_detail margin-bottom-30">
                <div class="smart_qts_report_detail_img">
                    <img src="/images/smart_qts_report_3.png" alt="">
                </div>
                <div class="smart_qts_report_detail_text">
                    <div class="smart_qts_report_detail_text_title"><!--4. AIDUS QTS 실적 리포트 게시-->
                        <?=$lang_pack[33]?>
                    </div>
                    <div class="smart_qts_report_detail_text_sub"><!--작성된 보고서는 매주 법률사무소 지명과 세무법인 공정측으로 전달하여 실적에 대한 확인 요청.-->
                        <?=$lang_pack[34]?>
                    </div>
                </div>
            </div>
        </div>
        <div class="smart_qts_perform" id="cross">
            <div class="smart_qts_perform_title"><!--AIDUS QTS 실적 리포트 이중 Cross Check-->
                <?=$lang_pack[35]?>
            </div>
            <div class="smart_qts_perform_cont">
                <div class="smart_qts_perform_text">
                    <img class="smart_qts_perform_text_img" src="/images/smart_qts_4.png" alt="">
                    <!--법률사무소 지명-->
                    <?=$lang_pack[38]?>
                </div>
                <div>
                    <img src="/images/smart_arrow.png" class="smart_qts_perform_text_arrow">
                </div>
                <div class="smart_qts_perform_text">
                    <img class="smart_qts_perform_text_img" src="/images/smart_qts_5.png" alt="">
                    AIDUS REPORT
                </div>
                <div class="smart_qts_perform_text">
                    <img src="/images/smart_arrow.png" class="smart_qts_perform_text_arrow">
                </div>
                <div class="smart_qts_perform_text">
                    <img class="smart_qts_perform_text_img" src="/images/smart_qts_6.png" alt="">
                    <!--세무법인 공정-->
                    <?=$lang_pack[36]?>
                </div>
            </div>
            <div class="smart_qts_perform_foot">
                <div><!--AIDUS는 QTS 의 실적 Report 결과에 대하여, 투명성과 신뢰를 위해 두 곳의 검증된 기관인 법률사무소 지명, 세무법인 공정의 철저한 확인을 받고 있습니다.-->
                    <?=$lang_pack[39]?>
                </div>
                <div>
                    <!--AIDUS의 QTS를 이용하여 발생한 총 Balance 금액은 Meta4 프로그램을 통한 결과와 AIDUS가 제시한 리포트가 정확하게 일치함을 확인 받고 있습니다.-->
                    <?=$lang_pack[40]?>
                </div>
            </div>
        </div>
    </div>
</div>
<form action="qts.php" method="post" id="page_frm">
    <input type="hidden" id="page_type" name="page_type" value="<?=$page_type?>">
</form>
<script>
    $(".smart_qts_menu").click(function(){
        var dataId = $(this).attr('data-id');
        $("#page_type").val(dataId);
        $("#page_frm").submit();
    });
</script>

<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/footer.php");
?>
