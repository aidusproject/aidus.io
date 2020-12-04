<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
if($language == 'jp'){
    $language = 'en';
}
$lang_pack = $__lang -> aidus_reserve($language);
?>

<div class="main_section dp_top_section">
    <div class="dp_full_box">
        <style></style>
        <div class="aidus_top_back" style="flex-direction: column">
            <div class="reserve_logo_title">
                <?=$lang_pack[0]?>
            </div>
            <div class="reserve_logo_text">
                <?=$lang_pack[1]?>
            </div>
            <img src="/images/reserve_logo.png" alt="reserve_logo">
            <div class="reserve_logo_btn">
                <?=$lang_pack[2]?>
            </div>
        </div>
        <div class="aidus_pay_back_box">
            <div class="reserve_logo_title">
                <?=$lang_pack[3]?>
            </div>
            <div class="reserve_logo_back_text">
                <?=$lang_pack[4]?>
            </div>
            <div class="img_box">
                <?=$lang_pack[6]?>
            </div>

            <div class="reserve_back_ul_box">
                <div class="reserve_back_ul_title">
                    <?=$lang_pack[5]?>
                </div>
                <ul>
                    <li>· <?=$lang_pack[7]?></li>
                    <li>· <?=$lang_pack[8]?></li>
                </ul>
            </div>
        </div>
        <div class="aidus_pay_box">
            <div class="container">
                <div class="aidus_pay_tab_box">
                    <div class="aidus_tab_title_box">
                        <div class="aidus_tab_top_line">

                        </div>
                        <div class="aidus_tab_line_box left">
                            <div class="aidus_tab_line">
                                <?=$lang_pack[11]?>
                            </div>
                            <div class="aidus_tab_line">
                                <?=$lang_pack[12]?>
                            </div>
                            <div class="aidus_tab_line">
                                <?=$lang_pack[13]?>
                            </div>
                            <div class="aidus_tab_line">
                                <?=$lang_pack[14]?>
                            </div>
                            <div class="aidus_tab_line aidus_pay_back">
                                <?=$lang_pack[15]?>
                            </div>
                            <div class="aidus_tab_line aidus_pay_back">
                                <?=$lang_pack[16]?>
                            </div>
                        </div>
                    </div>
                    <div class="aidus_tab_content_box">
                        <div class="aidus_tab_top_line">
                            <?=$lang_pack[9]?>
                        </div>
                        <div class="aidus_tab_line_box aidus_content_right">
                            <div class="aidus_tab_line">
                                <?=$lang_pack[54]?>
                            </div>
                            <div class="aidus_tab_line">
                                <?=$lang_pack[17]?>
                            </div>
                            <div class="aidus_tab_line">
                                <?=$lang_pack[56]?>
                            </div>
                            <div class="aidus_tab_line">
                                <?=$lang_pack[58]?>
                            </div>
                            <div class="aidus_tab_line aidus_pay_back">
                                <?=$lang_pack[59]?>
                            </div>
                            <div class="aidus_tab_line aidus_pay_back">
                                USD 7,200 <?=$lang_pack[20]?>
                            </div>
                        </div>
                    </div>
                    <div class="aidus_tab_title_box tab_hidden">
                        <div class="aidus_tab_top_line">

                        </div>
                        <div class="aidus_tab_line_box aidus_title_left">
                            <div class="aidus_tab_line">
                                <?=$lang_pack[11]?>
                            </div>
                            <div class="aidus_tab_line">
                                <?=$lang_pack[12]?>
                            </div>
                            <div class="aidus_tab_line">
                                <?=$lang_pack[13]?>
                            </div>
                            <div class="aidus_tab_line">
                                <?=$lang_pack[14]?>
                            </div>
                            <div class="aidus_tab_line aidus_pay_back">
                                <?=$lang_pack[15]?>
                            </div>
                            <div class="aidus_tab_line aidus_pay_back">
                                <?=$lang_pack[16]?>
                            </div>
                        </div>
                    </div>
                    <div class="aidus_tab_content_box">
                        <div class="aidus_tab_top_line">
                            <?=$lang_pack[10]?>
                        </div>
                        <div class="aidus_tab_line_box right">
                            <div class="aidus_tab_line">
                                <?=$lang_pack[55]?>
                            </div>
                            <div class="aidus_tab_line">
                                <?=$lang_pack[18]?>
                            </div>
                            <div class="aidus_tab_line">
                                <?=$lang_pack[57]?>
                            </div>
                            <div class="aidus_tab_line">
                                <?=$lang_pack[19]?>
                            </div>
                            <div class="aidus_tab_line aidus_pay_back">
                                <?=$lang_pack[60]?>
                            </div>
                            <div class="aidus_tab_line aidus_pay_back">
                                <?=$lang_pack[61]?>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .aidus_pay_text_box{
                        padding:15px 20px;
                    }
                    .aidus_pay_text{
                        font-size:16px;
                        line-height: 1.6;
                        font-weight:300;
                    }
                    .aidus_pay_area{
                        width:100%;
                        overflow: hidden;
                    }
                    .aidus_pay_info_box{
                        width:calc(100% - 160px);
                        float: left;
                        color: #ff0000;
                    }
                    .aidus_pay_info_title{
                        font-size:48px;
                        padding-bottom:20px;
                    }
                    .aidus_pay_btn_box{
                        float: left;
                        width:160px;
                        height:160px;
                    }
                    .aidus_pay_btn_box img{
                        width:100%;
                    }
                    .aidus_pay_info_box ul{
                        padding-left:25px;
                    }
                    .aidus_pay_info_box li{
                        font-size:16px;
                        line-height: 1.6;
                    }
                    .aidus_pay_event_btn{
                        font-size:20px;
                        color: #fff;
                        display: flex;
                        justify-content:center;
                        align-items: center;
                        width:250px;
                        height:60px;
                        margin:0 auto;
                        background-color: #161a39;
                        margin-bottom:50px;
                        cursor: pointer;
                    }
                    .aidus_pay_sub_text{
                        font-size:20px;
                        padding-bottom:30px;
                        word-break: break-word;
                    }
                    @media (max-width: 768px){
                        .aidus_pay_info_title,.aidus_pay_sub_text{
                            text-align: center;
                        }
                        .aidus_pay_info_box{
                            width:100%;
                        }
                        .aidus_pay_area{
                            display: flex;
                            flex-direction: column;
                            justify-content:center;
                            align-items: center;
                        }
                        .aidus_pay_btn_box{
                            margin-top:50px;
                        }
                    }
                </style>
                <div class="aidus_pay_text_box">
                    <div class="aidus_pay_text pd_b_60">
                        <?=$lang_pack[21]?><br>
                        <?=$lang_pack[22]?><br>
                        <?=$lang_pack[23]?> <?=$lang_pack[24]?><br>
                    </div>
                </div>
                <div class="aidus_pay_area pd_b_50">
                    <div class="aidus_pay_info_box">
                        <div class="aidus_pay_sub_text" style="color: #333;">
                            <?=$lang_pack[25]?>
                        </div>
                        <div class="aidus_pay_info_title">
                            <?=$lang_pack[26]?>
                        </div>
                        <ul>
                            <li><?=$lang_pack[27]?></li>
                            <li><?=$lang_pack[28]?></li>
                            <li><?=$lang_pack[29]?></li>
                        </ul>
                    </div>
                    <div class="aidus_pay_btn_box">
                        <a href="/daily_pay.php">
                            <img src="/images/<?=$lang_pack[30]?>" alt="aidus_pay_btn">
                        </a>
                    </div>
                </div>
                <div class="aidus_pay_event_btn" id="aidus_pay_event_btn">
                    <?=$lang_pack[31]?>
                </div>
                <style>
                    .aidus_pay_qna_box{
                        width:100%;
                        overflow: hidden;
                        margin-top:50px;
                        margin-bottom:50px;
                    }
                    .aidus_qna_title{
                        font-size:36px;
                        padding-bottom:30px;
                    }
                    .aidus_pay_q_box{
                        font-size:18px;
                        min-height:50px;
                        padding:16px;
                        background-color: #fff;
                    }
                    .aidus_pay_a_box{
                        padding: 25px 35px;
                        font-size: 18px;
                        line-height: 1.6;
                        font-weight:300;
                    }
                    .aidus_pay_a_box.event{
                        padding-left: 15px;
                    }
                </style>
                <div class="aidus_pay_qna_box">
                    <div class="aidus_qna_title">
                        FAQ
                    </div>
                    <div class="aidus_pay_q_box">
                        <?=$lang_pack[32]?>
                    </div>
                    <div class="aidus_pay_a_box">
                        <?=$lang_pack[33]?><br>
                        <?=$lang_pack[34]?><br>
                    </div>
                    <div class="aidus_pay_q_box">
                        <?=$lang_pack[35]?>
                    </div>
                    <div class="aidus_pay_a_box">
                        <?=$lang_pack[36]?>
                    </div>
                    <div class="aidus_pay_q_box">
                        <?=$lang_pack[37]?>
                    </div>
                    <div class="aidus_pay_a_box">
                        <?=$lang_pack[38]?> <?=$lang_pack[39]?><br>
                        <?=$lang_pack[40]?><br>
                        <?=$lang_pack[41]?><br>
                    </div>
                    <div class="aidus_pay_q_box">
                        <?=$lang_pack[42]?>
                    </div>
                    <div class="aidus_pay_a_box">
                        <?=$lang_pack[43]?>
                    </div>
                </div>
                <div class="aidus_pay_qna_box">
                    <div class="aidus_qna_title">
                        <?=$lang_pack[44]?>
                    </div>
                    <div class="aidus_pay_q_box">
                        <?=$lang_pack[45]?>
                    </div>
                    <div class="aidus_pay_a_box event">
                        <?=$lang_pack[46]?>
                    </div>
                    <div class="aidus_pay_q_box">
                        <?=$lang_pack[47]?>
                    </div>
                    <div class="aidus_pay_a_box event">
                        <?=$lang_pack[48]?>
                    </div>
                    <div class="aidus_pay_q_box">
                        <?=$lang_pack[49]?>
                    </div>
                    <div class="aidus_pay_a_box event">
                        <?=$lang_pack[50]?>
                    </div>
                    <div class="aidus_pay_q_box">
                        <?=$lang_pack[51]?>
                    </div>
                    <div class="aidus_pay_a_box event">
                        <?=$lang_pack[52]?><br>
                        <?=$lang_pack[53]?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/footer.php"); ?>
<script>
    $("#aidus_pay_event_btn").click(function(){
        location.href='/pay_reserve_form.php';
       
    });
</script>