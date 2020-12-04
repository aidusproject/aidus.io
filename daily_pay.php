<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
$lang_pack = $__lang -> dp_pay($language);
?>

<div class="main_section dp_top_section">
    <div class="dp_full_box">
        <div class="dp_top_back" style="flex-direction: column">
            <div class="dp_top_text margin-bottom-30">
                Boost your income<br>
                <?=$lang_pack[0]?>
            </div>
            <div class="dp_top_sub_text margin-bottom-30">
                <?=$lang_pack[63]?>
            </div>
            <div class="dp_top_sub_text">
                <?=$lang_pack[64]?><br>
                <?=$lang_pack[65]?><br>
            </div>
        </div>
        <div class="dp_box bg_blue">
            <div class="container">
                <div class="dp_section box_pd_150 flex_r">
                    <div class="col col-6 daily_pay_info_text">
                        <div class="dp_sub_title pd_b_60">
                            <?=$lang_pack[1]?>
                        </div>
                        <div class="dp_sub_text">
                            <ul>
                                <li>
                                    <?=$lang_pack[2]?>
                                </li>
                                <li>
                                    <?=$lang_pack[3]?>
                                </li>
                                <li>
                                    <?=$lang_pack[4]?>
                                </li>
                                <li>
                                    <?=$lang_pack[5]?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-6 daily_pay_info_img">
                        <img src="/images/<?=$lang_pack[6]?>" alt="daily_pay_info">
                    </div>
                </div>
            </div>
        </div>
        <div class="dp_box bg_point">
            <div class="container">
                <div class="dp_section box_pd_90">
                    <div class="dp_title_box">
                        <div class="dp_title">
                            <?=$lang_pack[7]?>
                        </div>
                    </div>
                    <div class="dp_point_area flex_r">
                        <div class="col col-4 dp_point_left">
                            <div class="dp_point_text_box first">
                                <div class="dp_sub_text">
                                    <?=$lang_pack[8]?>
                                </div>
                                <div class="dp_sub_title">
                                    <?=$lang_pack[9]?>
                                </div>
                                <div class="dp_sub_text">
                                    <?=$lang_pack[10]?>
                                </div>
                            </div>
                            <div class="dp_point_text_box">
                                <div class="dp_sub_text">
                                    <?=$lang_pack[11]?>
                                </div>
                                <div class="dp_sub_title">
                                    <?=$lang_pack[12]?>
                                </div>
                                <div class="dp_sub_text">
                                    <?=$lang_pack[13]?>
                                </div>
                            </div>
                        </div>
                        <div class="col col-4 dp_point_center">
                            <div class="dp_point_btn flex_r">
                                <?=$lang_pack[14]?>
                            </div>
                        </div>
                        <div class="col col-4 dp_point_right">
                            <div class="dp_point_text_box first">
                                <div class="dp_sub_text">
                                    <?=$lang_pack[15]?>
                                </div>
                                <div class="dp_sub_title">
                                    <?=$lang_pack[16]?>
                                </div>
                                <div class="dp_sub_text">
                                    <?=$lang_pack[17]?>
                                </div>
                            </div>
                            <div class="dp_point_text_box">
                                <div class="dp_sub_text">
                                    <?=$lang_pack[18]?>
                                </div>
                                <div class="dp_sub_title">
                                    <?=$lang_pack[19]?>
                                </div>
                                <div class="dp_sub_text">
                                    <?=$lang_pack[20]?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dp_box bg_blue">
            <div class="container">
                <div class="dp_section box_pd_150 flex_r">
                    <div class="col col-5 dp_qts_box red">
                        <div class="dp_qts_text_box">
                            <div class="dp_qts_title">
                                QTS
                            </div>
                            <div class="dp_qts_sub_title">
                                (Quant Trading System)
                            </div>
                        </div>
                        <div class="dp_qts_list_box red flex_r">
                            <ul>
                                <li>
                                    <?=$lang_pack[21]?>
                                </li>
                                <li>
                                    <?=$lang_pack[22]?>
                                </li>
                                <li>
                                    <?=$lang_pack[23]?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-2 db_qts_list_plus">
                        +
                    </div>
                    <div class="col col-5 dp_qts_box green">
                        <div class="dp_qts_text_box">
                            <div class="dp_qts_title">
                                APP
                            </div>
                            <div class="dp_qts_sub_title">
                                (AP Portal)
                            </div>
                        </div>
                        <div class="dp_qts_list_box green flex_r">
                            <ul>
                                <li>
                                    <?=$lang_pack[24]?>
                                </li>
                                <li>
                                    <?=$lang_pack[25]?>
                                </li>
                                <li>
                                    <?=$lang_pack[26]?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dp_box bg_structure">
            <div class="container">
                <div class="dp_section box_pd_100">
                    <div class="dp_title_box">
                        <div class="dp_title">
                            <?=$lang_pack[27]?>
                        </div>
                        <div class="dp_sub_text">
                            <?=$lang_pack[28]?>
                        </div>
                    </div>
                    <div class="dp_structure_area flex_r">
                        <img src="/images/<?=$lang_pack[29]?>" alt="structure_img">
                    </div>
                </div>
            </div>
        </div>
        <div class="dp_box bg_white">
            <div class="container">
                <div class="dp_section box_pd_90">
                    <div class="dp_title_box">
                        <div class="dp_title portal">
                            <?=$lang_pack[30]?>
                        </div>
                        <div class="dp_portal_select_box">
                            <span class="dp_portal_select on" data-switch="row">
                                <?=$lang_pack[31]?>
                            </span>
                            <span class="dp_portal_select" data-switch="high">
                                <?=$lang_pack[33]?>
                            </span>
                        </div>
                    </div>
                    <div class="dp_portal_area" id="row">
                        <div class="col col-8 dp_portal_img_box">
                            <div class="dp_portal_title half">
                                <?=$lang_pack[49]?>
                            </div>
                            <div class="dp_portal_title half">
                                <?=$lang_pack[50]?>
                            </div>
                            <img src="/images/<?=$lang_pack[34]?>" alt="portal_img">
                        </div>
                        <div class="col col-4 dp_portal_text_box">
                            <div class="dp_portal_title">
                                <?=$lang_pack[51]?>
                            </div>
                            <div class="dp_portal_text_box">
                                <?=$lang_pack[35]?><br>
                                <?=$lang_pack[36]?><br>
                                <?=$lang_pack[37]?>
                            </div>
                            <div class="dp_portal_text_box">
                                <?=$lang_pack[38]?>
                            </div>
                            <div class="dp_portal_text_box">
                                <?=$lang_pack[39]?>
                            </div>
                            <div class="dp_portal_text_box">
                                <?=$lang_pack[40]?>
                            </div>
                        </div>
                    </div>
                    <div class="dp_portal_area dp_portal_switch" id="high">
                        <div class="col col-8 dp_portal_img_box">
                            <div class="dp_portal_title half">
                                <?=$lang_pack[49]?>
                            </div>
                            <div class="dp_portal_title half">
                                <?=$lang_pack[50]?>
                            </div>
                            <img src="/images/<?=$lang_pack[52]?>" alt="portal_img">
                        </div>
                        <div class="col col-4 dp_portal_text_box">
                            <div class="dp_portal_title">
                                <?=$lang_pack[51]?>
                            </div>
                            <div class="dp_portal_text_box">
                                <?=$lang_pack[53]?><br>
                                <?=$lang_pack[54]?><br>
                                <?=$lang_pack[55]?>
                            </div>
                            <div class="dp_portal_text_box">
                                <?=$lang_pack[56]?>
                            </div>
                            <div class="dp_portal_text_box">
                                <?=$lang_pack[57]?>
                            </div>
                            <div class="dp_portal_text_box">
                                <?=$lang_pack[58]?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(".dp_portal_select").click(function(){
                var dataSwitch = $(this).attr('data-switch');

                $(".dp_portal_select").removeClass('on');
                $(this).addClass('on');
                $(".dp_portal_area").css('display','none');
                $("#"+dataSwitch).css('display','block');
            });
        </script>
        <div class="dp_box bg_blue">
            <div class="container">
                <div class="dp_section box_pd_90">
                    <div class="dp_title_box">
                        <div class="dp_title">
                            <?=$lang_pack[41]?>
                        </div>
                    </div>
                    <div class="dp_goal_img_box">
                        <img src="/images/goals_img.png" alt="golas_img">
                        <div class="dp_sub_text">
                            <?=$lang_pack[42]?>
                        </div>
                    </div>
                    <div class="history_box">
                        <!--<img src="/images/goal_arrow.png" alt="goal_arrow" class="goal_arrow">-->
                        <div class="top_arrow_draw"></div>
                        <div class="top_arrow"></div>
                        <div class="history_center_line"></div>
                        <div class="history_line">
                            <div class="history_line_box left">
                                <div class="history_line_content">
                                    <div class="dp_sub_text">
                                        <?=$lang_pack[43]?>
                                    </div>
                                </div>
                                <div class="division_line left"></div>
                            </div>
                        </div>
                        <div class="history_line">
                            <div class="history_line_box right">
                                <div class="history_line_content">
                                    <div class="dp_sub_text">
                                        <?=$lang_pack[44]?>
                                    </div>
                                </div>
                                <div class="division_line right"></div>
                            </div>
                        </div>
                        <div class="history_line">
                            <div class="history_line_box left">
                                <div class="history_line_content">
                                    <div class="dp_sub_text">
                                        <?=$lang_pack[45]?>
                                    </div>
                                </div>
                                <div class="division_line left"></div>
                            </div>
                        </div>
                        <div class="history_line">
                            <div class="history_line_box right">
                                <div class="history_line_content">
                                    <div class="dp_sub_text">
                                        <?=$lang_pack[46]?>
                                    </div>
                                </div>
                                <div class="division_line right"></div>
                            </div>
                        </div>
                        <div class="history_line">
                            <div class="history_line_box left">
                                <div class="history_line_content">
                                    <div class="dp_sub_text">
                                        <?=$lang_pack[47]?>
                                    </div>
                                </div>
                                <div class="division_line left"></div>
                            </div>
                        </div>
                        <div class="history_line">
                            <div class="history_line_box right">
                                <div class="history_line_content">
                                    <div class="dp_sub_text">
                                        <?=$lang_pack[48]?>
                                    </div>
                                </div>
                                <div class="division_line right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dp_box">
            <div class="container">
                <div class="dp_section box_pd_90">
                    <div class="daily_notice_img_box">
                        <img src="/images/notice.png" alt="notice">
                    </div>
                    <div class="dp_title_box">
                        <div class="dp_title margin-bottom-30" style="color: #333;">
                            <?=$lang_pack[59]?>
                        </div>
                    </div>
                    <div class="daily_notice_box">
                        <div class="daily_notice_text_box">
                            <div class="daily_notice_text">
                                <?=$lang_pack[60]?><br>
                                <?=$lang_pack[61]?><br>
                                <?=$lang_pack[62]?><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/footer.php"); ?>
