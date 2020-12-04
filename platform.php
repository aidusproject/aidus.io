<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
$lang_pack = $__lang -> platform($language);
?>
<div class="main_section sub_fund_section" style="text-align: center;" id="fund">
    <div class="container">
        <div class="fund_title">
            <!--AIDUS 펀드 플랫폼-->
            <?=$lang_pack[0] ?>
        </div>
        <br>
        <span class="fund_text_area">
            <span class="fund_text_sub margin-bottom-10"><!--독자적인 QTS를 기반으로 고수익 자산운용이 가능한-->
                <?=$lang_pack[1] ?></span>
            <br>
            <span class="fund_text_main"><!--탈중앙화 글로벌 펀드 마켓 플랫폼(ADFP) 운영-->
                <?=$lang_pack[2] ?></span>
        </span>
    </div>
</div>
<div class="main_section fund_blue_back">
    <div class="container">
        <div class="fund_back_title">
            AIDUS D-Fund Platform
        </div>
    </div>
</div>
<div class="main_section fund_detail">
    <div class="container">
        <div class="row">
            <div class="col col-12 fund_detail_img">
                <img src="/images/fund_platform_<?=$locale?>.png" width="100%" id="fund_platform_img">
            </div>
        </div>
    </div>
</div>
<div class="main_section sub_fund_section bg-grey" id="paper">
    <div class="container">
        <div class="sub_fund_title margin-bottom-10">
            <!--WHITE PAPER-->
            <?=$lang_pack[3] ?>
        </div>
        <div class="sub_fund_text">
            <!--AIDUS를 더 자세히 알고싶다면?-->
            <?=$lang_pack[4] ?>
        </div>
        <div class="sub_country">
            <a href="https://aidus-staging.s3.ap-northeast-2.amazonaws.com/pdf/White_Paper_PDF/AIDUS_white_paper_ver1.3.2_eng.pdf" target="_blank" title="Whitepaper" class="btn_whitepaper">
                <span class="flex_r sub_country_btn">
                <img src="/images/icon/en_icon.png">
                <span>English</span>
            </span>
            </a>
            <a href="https://aidus-staging.s3.ap-northeast-2.amazonaws.com/pdf/White_Paper_PDF/AIDUS_white_paper_ver1.3.2_chn.pdf" title="Whitepaper" target="_blank" class="btn_whitepaper">
                <span class="flex_r sub_country_btn">
                <img src="/images/icon/ch_icon.png">
                <span>China</span>
            </span>
            </a>
            <a href="https://aidus-staging.s3.ap-northeast-2.amazonaws.com/pdf/White_Paper_PDF/AIDUS_white_paper_ver1.3.2_jap.pdf" target="_blank" title="Whitepaper" class="btn_whitepaper">
               <span class="flex_r sub_country_btn">
                <img src="/images/icon/jp_icon.png">
                <span>Japan</span>
            </span>
            </a>
            <a href="https://aidus-staging.s3.ap-northeast-2.amazonaws.com/pdf/White_Paper_PDF/AIDUS_white_paper_ver1.3.2_kor.pdf" target="_blank" title="Whitepaper" class="btn_whitepaper">
                <span class="flex_r sub_country_btn">
                    <img src="/images/icon/kr_icon.png">
                    <span>Korea</span>
                </span>
            </a>
        </div>
    </div>
</div>
<div class="main_section sub_fund_section" style="text-align: center;" id="market">
    <div class="container">
        <div class="fund_title">
           <!-- D-Fund Market Platform 핵심 차별화-->
            <?=$lang_pack[5] ?>
        </div>
        <br>
        <span class="fund_text_area">
            <span class="fund_text_sub"><!--세계적인 펀드 회사의 수익률을 뛰어 넘는 세계 최고의 펀드를<br>
            AIUDS COIN으로만 손쉽게 가입할 수 있는 ‘글로벌 펀드 슈퍼마켓’-->
                <?=$lang_pack[6] ?></span>
        </span>
        <div class="row fund_desc">
            <div class="col col-4 fund_resize_area">
                <div class="fund_desc_img margin-bottom-20">
                    <img src="/images/fund_platform_1.png">
                </div>
                <div class="fund_desc_title margin-bottom-10">
                    <!--D-Fund Market-->
                    <?=$lang_pack[7] ?>
                </div>
                <div class="fund_desc_sub font-blue">
                    <!--블록체인 기반 탈중앙화 펀드 마켓-->
                    <?=$lang_pack[8] ?>
                </div>
                <div class="fund_desc_sub">
                    <!--(보안, 다이렉트 펀드 가입)-->
                    <?=$lang_pack[9] ?>
                </div>
                <div class="fund_desc_text">
                    <!--블록체인 기반의 혁신적인 탈중앙화 펀드슈퍼마켓<br>
                    강력한 보안 ( 인증, 거래, 코인 보관 등 )<br>
                    IPFS ( Interplanetary File System ) 기술 기반<br>
                    공동인증 시스템( 개인 정보 보호 강화 )<br>-->
                    <?=$lang_pack[10] ?>
                </div>
            </div>
            <div class="col col-4 fund_resize_area fund_desc_center">
                <div class="fund_desc_img margin-bottom-10">
                    <img src="/images/fund_platform_2.png">
                </div>
                <div class="fund_desc_title margin-bottom-10">
                    <?=$lang_pack[11] ?>
                    <!--투자자 중심-->
                </div>
                <div class="fund_desc_sub font-blue">
                    <?=$lang_pack[12] ?>
                    <!--글로벌 투자 편의성 강화 투명하고 검증된 펀드 정보-->
                </div>
                <div class="fund_desc_sub">
                    <?=$lang_pack[13] ?>
                    <!--(플랫폼 무료 이용)-->
                </div>
                <div class="fund_desc_text">
                    <?=$lang_pack[14] ?>
                    <!--환전 수수료, 환율 리스크 최소화 코인 기반 투자로 글로벌 펀드의<br>
                    자유로운 이용 자산운용사 및 펀드에 대한 투명한 정보 제공<br>
                    세계적 공증 기관의 운용 정보 인증 블록체인 기술 기반 보안성 강화<br>-->
                </div>
            </div>
            <div class="col col-4 fund_resize_area">
                <div class="fund_desc_img margin-bottom-10">
                    <img src="/images/fund_platform_3.png">
                </div>
                <div class="fund_desc_title margin-bottom-10">
                    <!--SMART Contract-->
                    <?=$lang_pack[15] ?>
                </div>
                <div class="fund_desc_sub font-blue">
                    <!--빠르고 정확한 펀드 이용-->
                    <?=$lang_pack[16] ?>
                </div>
                <div class="fund_desc_sub">
                    <!--(SMART Contract 기반 펀드 이용)-->
                    <?=$lang_pack[17] ?>
                </div>
                <div class="fund_desc_text">
                    <!--SMART Contract 기반으로 펀드의 인증, 가입, 환전, 청산 등의<br>
                    절차를 투명하고, 빠르고, 정확하게 실행 가능<br>-->
                    <?=$lang_pack[18] ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var locale = "<?=$locale?>";
    if($(window).width() < 768){
        $("#fund_platform_img").attr('src','/images/fund_platform_mo_'+locale+'.png');
    }
    $(window).resize(function(){
        if($(window).width() < 768){
            $("#fund_platform_img").attr('src','/images/fund_platform_mo_'+locale+'.png');
        }else{
            $("#fund_platform_img").attr('src','/images/fund_platform_'+locale+'.png');
        }
    });
</script>
<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/footer.php");
?>
