<?php
class reLangPack
{

    function index($lang){
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();

        $ko_array[] = "Royalty Membership Portal Platform 구축.";
        $ko_array[] = "AIDUS TOKEN을 FIAT처럼 사용하되, FIAT 이상의 혜택을 제공.";
        $ko_array[] = "AIDUS TOKEN을 <br>이용한 투자 플랫폼 ";
        $ko_array[] = "연 12% 이자 지급";
        $ko_array[] = "Daily 이자 지급";
        $ko_array[] = "무제한 투자";
        $ko_array[] = "FIAT 기준의 이자.";
        $ko_array[] = "수익율";
        $ko_array[] = "지급 수단";
        $ko_array[] = "지급일";
        $ko_array[] = "투자 제한"; // 10
        $ko_array[] = "";
        $ko_array[] = "AIDUS TOKEN (AIDUSPAY 이용시)";
        $ko_array[] = "연 수익 <span class=\"f_red\">12%</span>";
        $ko_array[] = "수익은 FIAT을 기준으로 지급";
        $ko_array[] = "12%의 이자는 FIAT 기준."; //15
        $ko_array[] = "AIDUS TOKEN 가격 변동과 무관.";
        $ko_array[] = "만기시까지 매일";
        $ko_array[] = "무제한 투자";
        $ko_array[] = "타사 암호 자산 STAKING";
        $ko_array[] = "연 수익 5%"; //20
        $ko_array[] = "토큰으로 수익 지급";
        $ko_array[] = "5% 이자는 자사 토큰으로 지급!";
        $ko_array[] = "토큰 가격의 변동에 따라 실제 수익은 변동.";
        $ko_array[] = "연단위 또는 주단위";
        $ko_array[] = "투자 제한";  //25
        $ko_array[] = "AIDUSPAY 수익은 FIAT 기준으로 지급. 토큰의 가격의 영향이 없다.";
        $ko_array[] = "AIDUS QTS 를 이용하여 별도의 안정적인 수익 발생하기에, AIDUS TOKEN 가격에 영향이 없다";
        $ko_array[] = "이자는 FIAT 기준으로 책정, ETHEREUM(향후 USDT 적용)으로 지급되어 바로 현금화가 가능.";
        $ko_array[] = "건강검진 서비스 플랫폼";
        $ko_array[] = "(향후 성형 및 치과등 비급여 항목으로 시장 확대 및 글로벌 서비스를 준비 중입니다.)"; //30
        $ko_array[] = "<span class=\"slide_circle_sub\">차병원그룹 계열사 차케어스의</span>";
        $ko_array[] = "<span class=\"slide_circle_text\">바이오케어</span>";
        $ko_array[] = "";
        $ko_array[] = "건강검진<br>플랫폼";
        $ko_array[] = "AIDUS TOKEN만을 이용하여 대한민국 차병원을 포함하여 전국 메이저 15개 대학병원 및 프리미엄 검진센터에서 최고의 우대정책과 함께 건강 검진을 받을 수 있는 서비스 플랫폼입니다."; //35
        $ko_array[] = "메비온과 차병원그룹 계열사인 차케어스의 바이오케어가 함께 구축한 건강검진 플랫폼 입니다.";
        $ko_array[] = "AIDUS TOKEN 이용시 ";
        $ko_array[] = "특별한 혜택과 할인을 제공하는 Royalty Membership <span style=\"display: inline-block;border-bottom: 2px solid;font-size:18px;\">서비스 구축 목표.</span>";
        $ko_array[] = "여행갈때, AIDUS TOKEN으로 결제시 20% 추가 할인 혜택.";
        $ko_array[] = "20% 추가 할인"; //40
        $ko_array[] = "쇼핑시에도 AIDUS TOKEN으로 결제시에만 추가 할인 혜택 ";
        $ko_array[] = "20% 추가 할인";
        $ko_array[] = "전세계 ATM을 이용하여, AIDUS TOKEN을 FIAT으로 출금";
        $ko_array[] = "20% 추가 할인";
        $ko_array[] = "<span class=\"big_text\">더</span> 편리하다. <span class=\"big_text\">더</span> 저렴하다."; //45
        $ko_array[] = "AIDUS TOKEN 을 사용해야하는 이유!";
        $ko_array[] = "1. 안정적인 고수익";
        $ko_array[] = "2. 투명성";
        $ko_array[] = "3. 안정적인 수요와 공급";
        $ko_array[] = "FOREX Margin Business에 최적화되어 수년간 안정적인 수익을 얻고 있는 QTS."; //50
        $ko_array[] = "(2019년 9월 종료/평균 24개월/8계정)";
        $ko_array[] = "평균 연 환산 수익률";
        $ko_array[] = "88.39%";
        $ko_array[] = "(2019년 10월부터 운용 중)";
        $ko_array[] = "평균 연환산 수익률"; //55
        $ko_array[] = "30% 이상";
        $ko_array[] = "<span style=\"color: #4dadb6;font-size:20px;\">QTS란?</span> &nbsp;AIDUS의 독자적인 기술로 자체 개발된 자산 운용 프로그램.";
        $ko_array[] = "운용 현황은 미국 PKF O`CONNOR DAVIES를 통해 확인 받은 후 매월 공개.";
        $ko_array[] = "PKF O`CONNOR DAVIES는 1891년도에 설립이 되어, 미국내 약 29위 규모의 회계법인입니다";
        $ko_array[] = "AIDUS QTS <br>수익률 REPORT 보기"; //60
        $ko_array[] = "PKF O`CONNOR DAVIES <br>Website 바로가기";
        $ko_array[] = "수요와 공급에 의한 안정적인 가치 형성을 위한 네트워크 구축";
        $ko_array[] = "supply_img_ko.png";
        $ko_array[] = "AIDUS TOKEN의 Fundamental";
        $ko_array[] = "main_fundmental.png"; //65
        $ko_array[] = "<b style=\"font-size: 18px;\">FIAT처럼</b> 자유롭고, <b style=\"font-size: 18px;\">FIAT보다</b> 더 나은 혜택으로<br> <span class=\"color_orange\" style=\"font-size: 18px;\">AIDUS는 세계 모든 곳의 경제 활동에 사용되는</span> 기축 통화로서 발전될 것입니다…";
        $ko_array[] = "main_fundmental_mo.png";
        $ko_array[] = "공지사항";
        $ko_array[] = "(주)메비온";
        $ko_array[] = "<span class=\"color_orange\">여행갈때, </span>"; //70
        $ko_array[] = "<span class=\"color_orange\">쇼핑할때, </span>";
        $ko_array[] = "<span class=\"color_orange\">전세계ATM, </span>";
        $ko_array[] = "<span class=\"color_aidus\">TOKEN</span>";
        $ko_array[] = "AIDUS의 CORE VALUE";




        $en_array[] = "Establishing the Royalty Membership Portal Platform";
        $en_array[] = "Using AIDUS TOKEN like FIAT, but offer benefits beyond FIAT.";
        $en_array[] = "Investment Platform <br>using AIDUS TOKEN";
        $en_array[] = "12% Interest per annum";
        $en_array[] = "Interest distributed on a daily basis";
        $en_array[] = "Unlimited investment";
        $en_array[] = "Interest on a FIAT basis";
        $en_array[] = "Yield rate";
        $en_array[] = "Payment method";
        $en_array[] = "Payment date";
        $en_array[] = "Investment restrictions"; //10
        $en_array[] = "";
        $en_array[] = "AIDUS TOKEN (When using AIDUSPAY)";
        $en_array[] = "<span class=\"f_red\">12%</span> Annualized rate of return";
        $en_array[] = "Revenue is distributed based on FIAT";
        $en_array[] = "12% interest is based on FIAT"; //15
        $en_array[] = "Irrespective of the price change of AIDUS TOKEN";
        $en_array[] = "";
        $en_array[] = "Unlimited investment";
        $en_array[] = "Other Crypto assets staking product";
        $en_array[] = "12% interest per annum";
        $en_array[] = "Revenue is paid by Token";
        $en_array[] = "5% interest is paid in the company's token";
        $en_array[] = "The actual profit is different according to the fluctuation of the token price. Actual earnings fluctuate as token prices fluctuate.";
        $en_array[] = "";
        $en_array[] = "Limited investment";
        $en_array[] = "AIDUSPAY revenue is paid on a FIAT basis. There is no influence of the token price.";
        $en_array[] = "It does not affect the price of AIDUS TOKEN because it generates a separate stable profit using AIDUS QTS.";
        $en_array[] = "Interest is settled on a FIAT basis and paid in ETHEREUM (future USDT will be applied), which can be cashed immediately.";
        $en_array[] = "Medical Checkup Service Platform";
        $en_array[] = "(We are preparing to expand our market to provide plastic surgery and dental services to users around the world.)";
        $en_array[] = "<span class=\"slide_circle_text\">Biocare</span>";
        $en_array[] = "<span class=\"slide_circle_sub\">from Cha Cares<br>a subsidiary of Cha Hospital</span>";
        $en_array[] = "";
        $en_array[] = "Medical Checkup";
        $en_array[] = "With using only Aidus Token, user can receive medical checkup with the best preferential policies at 15 major university hospitals and premium checkup centers across the nation, including South Korea's Cha Hospital.";
        $en_array[] = "Medical Checkup platform is built by Biocare of Cha Cares, a subsidiary of Mebion and Cha Hospital Group.";
        $en_array[] = "when using AIDUS TOKEN,";
        $en_array[] = "we aim to build a Royalty Membership service that provides special benefits and discounts.";
        $en_array[] = "20% additional discount when paying with AIDUS TOKEN when traveling.";
        $en_array[] = "20% additional discount";
        $en_array[] = "Additional discount only when paying with AIDUS TOKEN even when shopping";
        $en_array[] = "20% additional discount";
        $en_array[] = "With ATMs worldwide, AIDUS TOKEN is withdrawn as FIAT";
        $en_array[] = "20% additional discount";
        $en_array[] = "Better, Cheaper, More Convenient";
        $en_array[] = "These are the reasons why you should use AIDUS TOKEN";
        $en_array[] = "1. Stable high profit";
        $en_array[] = "2. Transparency";
        $en_array[] = "3. Stable supply and demand";
        $en_array[] = "QTS is optimized for FOREX Margin Business and has been making stable profits for many years.";
        $en_array[] = "(Ended in September 2019 / average 24 months / 8 accounts)";
        $en_array[] = "Average annualized return";
        $en_array[] = "88.39%";
        $en_array[] = "(Started operating from October 2019)";
        $en_array[] = "Average annualized return";
        $en_array[] = "30% or more";
        $en_array[] = "*QTS: A self-developed asset management program with unique AIDUS technology.";
        $en_array[] = "The operation status is being notarized monthly through PKF O`CONNOR DAVIES in the US and released monthly.";
        $en_array[] = "PKF O`CONNOR DAVIES was founded in 1891 and is the 29th largest accounting firm in the United States.";
        $en_array[] = "View AIDUS QTS Yield REPORT";
        $en_array[] = "Go to PKF O`CONNOR DAVIES Website";
        $en_array[] = "Build a network for stable value formation by supply and demand";
        $en_array[] = "supply_img_en.png";
        $en_array[] = "Fundamental of Aidus Token";
        $en_array[] = "main_fundmental_en.png";
        $en_array[] = "Aidus, which can be used as flexibly as Fiat, but can enjoy more benefits, <br>will become a key currency used in economic activities around the world";
        $en_array[] = "main_fundmental_mo_en.png";
        $en_array[] = "Notice";
        $en_array[] = "Mebion";
        $en_array[] = "<span class=\"color_orange\">when you travel,<br></span>";
        $en_array[] = "<span class=\"color_orange\">when you shop,<br></span>";
        $en_array[] = "<span class=\"color_orange\">Withdraw Cash at ATM using, </span>";
        $en_array[] = "<span class=\"color_aidus\">Use Token</span>";
        $en_array[] = "CORE VALUE OF AIDUS";




        $cn_array[] = "建立尊贵会员门户平台";
        $cn_array[] = "使AIDUS TOKEN能像FIAT一样灵活使用，却带来更多优惠";
        $cn_array[] = "使用AIDUS <br>TOKEN的投资平台";
        $cn_array[] = "年息12%";
        $cn_array[] = "利息按日发放";
        $cn_array[] = "无限投资";
        $cn_array[] = "利息按法定货币计算";
        $cn_array[] = "收益率";
        $cn_array[] = "付款方式";
        $cn_array[] = "付款日期";
        $cn_array[] = "投资限制";
        $cn_array[] = "";
        $cn_array[] = "AIDUS TOKEN (使用AIDUSPAY时)";
        $cn_array[] = "<span class=\"f_red\">12%</span>年化收益率";
        $cn_array[] = "收益发放是以法定货币为标准";
        $cn_array[] = "12%利息是以法定货币为准";
        $cn_array[] = "不受AIDUS TOKEN价格波动的影响";
        $cn_array[] = "";
        $cn_array[] = "无限投资";
        $cn_array[] = "其他持仓返利产品";
        $cn_array[] = "年息5%";
        $cn_array[] = "收益以代币支付";
        $cn_array[] = "5%的利息是以公司的代币去支付";
        $cn_array[] = "实际收益随代币价格的波动而不同";
        $cn_array[] = "";
        $cn_array[] = "有限投资";
        $cn_array[] = "AIDUSPAY的收入是以法定货币为基础支付的，因此不受代币价格的影响。";
        $cn_array[] = "使用AIDUS QTS产生额外的稳定收益，因此不受AIDUS TOKEN影响价格。";
        $cn_array[] = "利息按法定货币结算，以以太坊为单位支付（未来将采用USDT），可立即兑现。";
        $cn_array[] = "健康体检服务平台";
        $cn_array[] = "(我们正准备扩大市场，为全球用户提供整形外科和牙科服务。)";
        $cn_array[] = "<span class=\"slide_circle_sub\">车医院分公司 Cha Cares之</span>";
        $cn_array[] = "<span class=\"slide_circle_text\">Biocare</span>";
        $cn_array[] = "";
        $cn_array[] = "健康体检預約平台";
        $cn_array[] = "用户只需使用Aidus Token，就可以在包括韩国车医院在内的全国15家大型大学附属医院和优质体检中心享受最优惠的体检政策。";
        $cn_array[] = "健康体检平台由Mebion和车医院集团旗下的Biocare of Cha Cares共同搭建。";
        $cn_array[] = "在使用AIDUS TOKEN时，";
        $cn_array[] = "我们目标建立尊贵会员制服务，让用户可享受优惠和折扣。";
        $cn_array[] = "在旅游时使用AIDUS TOKEN支付，可享受额外八折优惠。";
        $cn_array[] = "额外八折优惠";
        $cn_array[] = "购物时使用AIDUS TOKEN付款也可享受额外折扣。";
        $cn_array[] = "额外八折优惠";
        $cn_array[] = "利用全球的ATM机，可将AIDUS TOKEN以法定货币提款。";
        $cn_array[] = "额外八折优惠";
        $cn_array[] = "更好、更便宜、更方便";
        $cn_array[] = "这就是必须使用AIDUS TOKEN的理由";
        $cn_array[] = "1. 稳定的高收益";
        $cn_array[] = "2. 透明度";
        $cn_array[] = "3. 稳定的供需";
        $cn_array[] = "QTS针对外汇保证金业务进行了优化，<br>多年来一直保持着稳定的利润。";
        $cn_array[] = "（截止2019年9月/平均24个月/8账户）";
        $cn_array[] = "平均年化收益率";
        $cn_array[] = "88.39%";
        $cn_array[] = "（从2019年10月开始运营中）";
        $cn_array[] = "平均年化收益率";
        $cn_array[] = "30%以上";
        $cn_array[] = "*QTS：自主研发的资产管理方案，采用独特的AIDUS技术。";
        $cn_array[] = "操作状态每月通过美国的PKF O'CONNOR DAVIES进行公证，每月发布一次。";
        $cn_array[] = "PKF O`CONNOR DAVIES成立于1891年，是美国第29大会计师事务所。";
        $cn_array[] = "查看AIDUS QTS<br>收益率报告";
        $cn_array[] = "进入PKF O'CONNOR DAVIES网站";
        $cn_array[] = "构建供需稳定价值形成网络";
        $cn_array[] = "supply_img_cn.png";
        $cn_array[] = "AIDUS TOKEN的基本面";
        $cn_array[] = "main_fundmental_cn.png";
        $cn_array[] = "能像FIAT般灵活使用，却能享受更多优惠的AIDUS<br>将发展成为全球各地经济活动中使用的关键货币";
        $cn_array[] = "main_fundmental_mo_cn.png";
        $cn_array[] = "通知";
        $cn_array[] = "Mebion";
        $cn_array[] = "<span class=\"color_orange\">旅游时, </span>";
        $cn_array[] = "<span class=\"color_orange\">购物时, </span>";
        $cn_array[] = "<span class=\"color_orange\">在全世界自动柜员机, </span>";
        $cn_array[] = "<span class=\"color_aidus\">TOKEN</span>";
        $cn_array[] = "AIDUS的核心价值";


        $jp_array[] = "";


        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];
    }

    function aiduspay($lang)
    {
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();

        $ko_array[] = "AIDUS만이 드릴 수 있는 최고의 서비스.";
        $ko_array[] = "AIDUS TOKEN만을 이용하여 투자 가능.";
        $ko_array[] = "연 12%의 이자를 매일 나누어 지급";
        $ko_array[] = "이자는 ETHEREUM(추후 USDT 추가 예정) 또는 AIDUS TOKEN으로 지급";
        $ko_array[] = "투명한 운용 원칙 : 미국 상위권 회계법인를 통해 확인된 보고서 공개";
        $ko_array[] = "연 12% 이자. Daily 지급";
        $ko_array[] = "FIAT 기준의 이자 지급과 무제한 투자";
        $ko_array[] = "수익률";
        $ko_array[] = "이자 지급 시기";
        $ko_array[] = "이자 지급 기준";
        $ko_array[] = "투자 제한";
        $ko_array[] = "연 12% ";
        $ko_array[] = "매일 지급";
        $ko_array[] = "FIAT(현금)";
        $ko_array[] = "무제한";
        $ko_array[] = "기존 금융권";
        $ko_array[] = "1.5~2%";
        $ko_array[] = "만기시(1년 단위)";
        $ko_array[] = "제한";
        $ko_array[] = "타 암호자산 STAKING";
        $ko_array[] = "5%";
        $ko_array[] = "다양함(주단위 또는 연단위)";
        $ko_array[] = "자사 코인 또는 토큰";
        $ko_array[] = "코인 또는 토큰의 가격 변동시 수익의 가치가 변동.";
        $ko_array[] = "AIDUSPAY만의 고유한 장점.";
        $ko_array[] = "연 12%의 고수익.";
        $ko_array[] = "Daily 수익 지급.";
        $ko_array[] = "FIAT을 이용한 이자 지급";
        $ko_array[] = "토큰으로 투자 받아서 토큰 수량을 기준으로 이자를 지급한다면, 토큰의 가격에 따라 실제 수익은 달라질 수 있습니다.";
        $ko_array[] = "하지만 AIDUSPAY는 FIAT으로 지급하여 AIDUS TOKEN 가격에 관계없이 투자하신 FIAT의 가치를 기준으로 이자가 지급됩니다";
        $ko_array[] = "무제한 투자";
        $ko_array[] = "이벤트가 아닌 상시 투자 서비스로서 제한없는 투자 활동.";
        $ko_array[] = "바로가기";
        $ko_array[] = "AIDUSPAY는 투명하고 안정적인 자산 운용을 통해, 투자자 중심의 서비스 플랫폼을 운영하고 있습니다.";
        $ko_array[] = "AIDUS QTS를 통한 기본 운용 구조";
        $ko_array[] = "AIDUS TOKEN을 이용하여 투자시 운용 구조. (AIDUSPAY의 운용 구조)";
        $ko_array[] = "aiduspay_img1.png";
        $ko_array[] = "AIDUS는 투자된 AIDUS TOKEN을 유동화 후 QTS를 이용한 자산운용을 통해 안정적인 수익을 발생";
        $ko_array[] = "해당 수익을 통하여 AIDUS(AIDUSPAY)는 투자자에게 연 12%의 수익을 매일 지급하여 드립니다.";
        $ko_array[] = "aiduspay_img1_mo.png";


        $en_array[] = "The Exclusive service that only AIDUS can offer";
        $en_array[] = "Only using AIDUS TOKEN to invest";
        $en_array[] = "12% of interest is distributed on a daily basis.";
        $en_array[] = "Interest is settled in ETHEREUM (future USDT will be applied).";
        $en_array[] = "Transparent Operation Principle: Release Reports Notarized by US Top Accounting Firms";
        $en_array[] = "12% interest per annum with daily payment";
        $en_array[] = "FIAT-based interest payments and unlimited investments";
        $en_array[] = "Yield rate";
        $en_array[] = "Interest payment period";
        $en_array[] = "Interest payment standard";
        $en_array[] = "Investment restrictions";
        $en_array[] = "12% per annum";
        $en_array[] = "Daily payment";
        $en_array[] = "FIAT (cash)";
        $en_array[] = "Unlimited";
        $en_array[] = "Other Bank";
        $en_array[] = "1.5~2%";
        $en_array[] = "At maturity (per year)";
        $en_array[] = "Limited";
        $en_array[] = "Other Crypto assets staking product";
        $en_array[] = "5%";
        $en_array[] = "Various (weekly or annual)";
        $en_array[] = "Own coin or token";
        $en_array[] = "The value of revenue changes when the price of a coin or token changes.";
        $en_array[] = "Unique advantages of AIDUSPAY";
        $en_array[] = "High profit of 12% per year";
        $en_array[] = "Daily revenue payment";
        $en_array[] = "Interest payment using FIAT";
        $en_array[] = "If an investment is accepted in Token and interest is paid based on the number of Tokens, the actual profit may vary depending on the price of the Token.";
        $en_array[] = "However, AIDUSPAY is paid in FIAT and interest is paid based on the value of the FIAT you invested regardless of the price of AIDUS TOKEN.";
        $en_array[] = "Unlimited Investment";
        $en_array[] = "Not an one-time event, this unlimited investment activity is a regular investment service.";
        $en_array[] = "Go to Site";
        $en_array[] = "AIDUSPAY operates an investor-oriented service platform through transparent and stable asset management.";
        $en_array[] = "Basic operation structure through AIDUS QTS";
        $en_array[] = "Investment structure when investing using AIDUS TOKEN. (Operation structure of AIDUSPAY)";
        $en_array[] = "aiduspay_img1_en.png";
        $en_array[] = "AIDUS generates stable profits through asset management using QTS after liquidating invested AIDUS Token.";
        $en_array[] = "With that return, AIDUS (AIDUSPAY) pays investors 12% of their annual revenue every day.";
        $en_array[] = "aiduspay_img1_mo_en.png";


        $cn_array[] = "只有AIDUS能独家提供的服务";
        $cn_array[] = "利用AIDUS TOKEN 投资";
        $cn_array[] = "每天支付12%的利息";
        $cn_array[] = "利息以以太币发放（未来将采用USDT）";
        $cn_array[] = "透明经营原则：公开美国顶级会计师事务所公证报告";
        $cn_array[] = "按日支付12%的年利率";
        $cn_array[] = "FIAT为标准的利息和无限投资";
        $cn_array[] = "收益率";
        $cn_array[] = "付息期";
        $cn_array[] = "付息标准";
        $cn_array[] = "投资限制";
        $cn_array[] = "每年12%";
        $cn_array[] = "每日付款";
        $cn_array[] = "法定货币（现金）";
        $cn_array[] = "无限";
        $cn_array[] = "其他银行";
        $cn_array[] = "1.5~2%";
        $cn_array[] = "到期时（每年）";
        $cn_array[] = "有限";
        $cn_array[] = "其他持仓返利产品";
        $cn_array[] = "5%";
        $cn_array[] = "不同（每周或每年）";
        $cn_array[] = "公司的Coin或Token";
        $cn_array[] = "当Coin或Token的价格发生变化时，收入的价值也随之改变。";
        $cn_array[] = "AIDUSPAY的独特优势";
        $cn_array[] = "每年12%的高利润";
        $cn_array[] = "每日发放收益";
        $cn_array[] = "使用FIAT发放利息";
        $cn_array[] = "如果以Token接受投资并根据Token数量支付利息，实际利润可能会因Token的价格而有所不同。";
        $cn_array[] = "但是，AIDUSPAY是以法定货币支付，所以不管AIDUS TOKEN的价格如何，都会根据所投资的法定货币价值支付利息。";
        $cn_array[] = "无限投资";
        $cn_array[] = "不是一次性的活动，这种无限投资活动是一种常规的投资服务。";
        $cn_array[] = "进入网站";
        $cn_array[] = "AIDUSPAY通过透明、稳定的资产管理，运营一个以投资者为中心的服务平台。";
        $cn_array[] = "通过AIDUS QTS的基本操作结构";
        $cn_array[] = "使用AIDUS TOKEN投资时的投资结构。(AIDUSPAY的操作结构)";
        $cn_array[] = "aiduspay_img1_cn.png";
        $cn_array[] = "AIDUS将投资的AIDUS TOKEN兑现后，通过使用QTS进行资产管理，获得稳定的收益。";
        $cn_array[] = "有了这个回报，AIDUS（AIDUSPAY）每天向投资者支付12%的年收益。";
        $cn_array[] = "aiduspay_img1_mo_cn.png";


        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];
    }

    function mebion($lang)
    {
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();


        $ko_array[] = "건강검진 서비스 플랫폼";
        $ko_array[] = "AIDUS TOKEN을 이용하여 최고의 우대정책과 함께 차병원을 비롯한 대한민국내 전국 15개의 대학병원 및 프리미엄 검진센터에서 검강검진을 받을 수 있는 서비스 플랫폼입니다.";
        $ko_array[] = "(협력 병원은 지속적으로 늘려나갈 예정)";
        $ko_array[] = "향후 비급여 항목 및 글로벌 서비스로 발전될 계획입니다.";
        $ko_array[] = "(주)메비온";
        $ko_array[] = "바로가기";
        $ko_array[] = "<span class=\"slide_circle_sub\">차병원그룹 계열사<br>차케어스의</span>";
        $ko_array[] = "<span class=\"slide_circle_text\">바이오케어</span>";
        $ko_array[] = "건강검진 플랫폼";


        $en_array[] = "Medical Checkup Service Platform";
        $en_array[] = "A service platform that provides medical checkups at 15 major university hospitals and premium checkup centers in Korea, including Cha Hospital, along with the best preferential treatment policy using AIDUS TOKEN.";
        $en_array[] = "(Cooperative hospitals will continue to increase)";
        $en_array[] = "We plan to develop into global services in the future.";
        $en_array[] = "MEBION";
        $en_array[] = "Go to Site";
        $en_array[] = "<span class=\"slide_circle_text\">Biocare</span>";
        $en_array[] = "<span class=\"slide_circle_sub\">a subsidiary of<br>Cha Cares<br>from Cha Hospital</span>";
        $en_array[] = "Medical Checkup Platform";


        $cn_array[] = "健康体检服务平台";
        $cn_array[] = "是一个服务平台，在包含韩国车医院在内的15家大型大学附属医院及优质体检中心提供体检服务，同时利用AIDUS TOKEN提供最佳的优惠政策。";
        $cn_array[] = "(合作医院将继续增加)";
        $cn_array[] = "我们计划在未来向全球服务发展。";
        $cn_array[] = "MEBION";
        $cn_array[] = "进入网站";
        $cn_array[] = "<span class=\"slide_circle_sub\">车医院分公司<br>Cha Cares之</span>";
        $cn_array[] = "<span class=\"slide_circle_text\">Biocare</span>";
        $cn_array[] = "健康体检預約平台";


        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];

    }

    function whitepaper($lang)
    {
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();


        $ko_array[] = "2020. Jan. 12 기준 QTS Season 2 평균 누적 수익률";


        $en_array[] = "Jan. 12, 2020 QTS Season 2 Average Cumulative Return";


        $cn_array[] = "2020年1月12日 QTS第二季平均累计回报率";


        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];

    }

    function qts($lang)
    {
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();


        $ko_array[] = "QTS 수익률 보고서";
        $ko_array[] = "평균 누적 수익률";
        $ko_array[] = "상세 보고서 보러가기";
        $ko_array[] = "QTS Season 2 수익률 GRAPH";
        $ko_array[] = "인증 기관 소개";
        $ko_array[] = "미국 PKF O`CONNOR DAVIES는 미국내 29위에 해당하는 회계 법인이며, 1891년도에 설립";
        $ko_array[] = "회사 규모는 500~1000명 정도가 고용되어 근무";
        $ko_array[] = "홈페이지 : https://www.pkfod.com/ ";
        $ko_array[] = "QTS 수익률 보고서";
        $ko_array[] = "등록일";
        $ko_array[] = "제목";
        $ko_array[] = "Annual IRR";
        $ko_array[] = "첨부파일";


        $en_array[] = "QTS Yield Report";
        $en_array[] = "Average cumulative return";
        $en_array[] = "Go to detailed report";
        $en_array[] = "QTS Season 2 Yield GRAPH";
        $en_array[] = "Introduction to Notary Public";
        $en_array[] = "PKF O`CONNOR DAVIES is the 29th largest accounting firm in the United States and was founded in 1891.";
        $en_array[] = "The size of the company is between 500 and 1,000 employees.";
        $en_array[] = "Homepage: https://www.pkfod.com/";
        $en_array[] = "QTS Yield Report";
        $en_array[] = "Registration Date";
        $en_array[] = "Title";
        $en_array[] = "Annual IRR";
        $en_array[] = "Attachments";


        $cn_array[] = "QTS收益率报告";
        $cn_array[] = "平均累计收益率";
        $cn_array[] = "转到详细报告";
        $cn_array[] = "QTS第二季收益曲线图";
        $cn_array[] = "公证机构介绍";
        $cn_array[] = "PKF O`CONNOR DAVIES是美国第29大会计师事务所，成立于1891年。";
        $cn_array[] = "公司的规模在500-1000名员工之间。";
        $cn_array[] = "主页：https://www.pkfod.com/";
        $cn_array[] = "QTS收益率报告";
        $cn_array[] = "登记日期";
        $cn_array[] = "标题";
        $cn_array[] = "Annual IRR";
        $cn_array[] = "附件";


        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];

    }

    function brandnews($lang)
    {
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();


        $ko_array[] = "AIDUS에 관련된 다양한 소식을 알려드립니다";


        $en_array[] = "We will inform you of various news related to AIDUS.";


        $cn_array[] = "我们将通知您有关AIDUS的各种消息。";


        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];

    }

    function notice($lang)
    {
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();


        $ko_array[] = "공지사항";
        $ko_array[] = "등록일";
        $ko_array[] = "제목";


        $en_array[] = "Notice";
        $en_array[] = "Registration Date";
        $en_array[] = "Title";


        $cn_array[] = "通知";
        $cn_array[] = "登记日期";
        $cn_array[] = "标题";


        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];

    }

    function faq($lang)
    {
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();


        $ko_array[] = "공지사항";
        $ko_array[] = "제목";


        $en_array[] = "Notice";
        $en_array[] = "Title";


        $cn_array[] = "通知";
        $cn_array[] = "标题";


        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];

    }

    function mypage($lang)
    {
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();


        $ko_array[] = "공지사항";
        $ko_array[] = "아이디";
        $ko_array[] = "현재 비밀번호";
        $ko_array[] = "새 비밀번호";
        $ko_array[] = "새 비밀번호 재입력";
        $ko_array[] = "비밀번호가 올바르지 않습니다.";
        $ko_array[] = "비밀번호에는 1개의 대문자를 필수로 포함하여 8자리의 숫자 및 영문으로 작성해 주세요";
        $ko_array[] = "비밀번호 변경하기";
        $ko_array[] = "탈퇴하기";
        $ko_array[] = "탈퇴시, 가입된 정보는 모두 삭제되며, 로그인이 불가하며, 기존 가입 정보 복구가 불가합니다.";
        $ko_array[] = "비밀번호가 올바르지 않습니다.";


        $en_array[] = "Notice";
        $en_array[] = "ID";
        $en_array[] = "Current password";
        $en_array[] = "New password";
        $en_array[] = "Re-enter new password";
        $en_array[] = "The password is incorrect.";
        $en_array[] = "Please fill in the password with 8 digits and English, including 1 uppercase letter.";
        $en_array[] = "Change password";
        $en_array[] = "Membership Withdrawal";
        $en_array[] = "Upon withdrawal, all registered information is deleted, login is not possible, and existing subscription information cannot be recovered.";
        $en_array[] = "The password is incorrect.";


        $cn_array[] = "通知";
        $cn_array[] = "ID";
        $cn_array[] = "当前密码";
        $cn_array[] = "新密码";
        $cn_array[] = "重新输入新密码";
        $cn_array[] = "密码不正确，请输入密码。";
        $cn_array[] = "请在密码中填写8位数字和英文，包括1个大写字母。";
        $cn_array[] = "更改密码";
        $cn_array[] = "退出会员";
        $cn_array[] = "退出后，所有注册信息将被删除并无法再次无法登录，现有的申购信息无法恢复。";
        $cn_array[] = "密码不正确，请输入密码。";


        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];

    }

    function sign($lang)
    {
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();


        $ko_array[] = "회원 가입 완료 후, 본 이메일 주소에 대한 인증을 거친 후 정상 로그인이 가능하오니, 정확한 이메일 주소를 입력해 주세요.";
        $ko_array[] = "성";
        $ko_array[] = "이름";
        $ko_array[] = "국가";
        $ko_array[] = "비밀번호";
        $ko_array[] = "비밀번호 재입력";
        $ko_array[] = "이용 약관에 동의합니다";
        $ko_array[] = "개인정보보호정책 약관에 동의합니다.";
        $ko_array[] = "회원 가입";
        $ko_array[] = "회원가입";


        $en_array[] = "After signing up, you will be able to log in after verifying this email address, so please enter the correct email address.";
        $en_array[] = "Family Name";
        $en_array[] = "First Name";
        $en_array[] = "Country";
        $en_array[] = "Password";
        $en_array[] = "Re-enter password";
        $en_array[] = "I agree to the terms and conditions";
        $en_array[] = "I agree to the terms of the Privacy Policy.";
        $en_array[] = "Confirm";
        $en_array[] = "Sign up";


        $cn_array[] = "注册后，您会经这电邮地址收取验证讯息，因此请输入正确的电子邮件地址。";
        $cn_array[] = "姓氏";
        $cn_array[] = "名字";
        $cn_array[] = "国家";
        $cn_array[] = "密码";
        $cn_array[] = "重新输入密码";
        $cn_array[] = "我同意条款和条件";
        $cn_array[] = "我同意隐私政策的条款。";
        $cn_array[] = "确认";
        $cn_array[] = "注册会员";


        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];

    }


    function head($lang)
    {
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();


        $ko_array[] = "로그인";
        $ko_array[] = "로그아웃";
        $ko_array[] = "공지";


        $en_array[] = "Login";
        $en_array[] = "Log out";
        $en_array[] = "Notice";


        $cn_array[] = "登录";
        $cn_array[] = "登出";
        $cn_array[] = "通知";


        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];

    }

    function login($lang)
    {
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();


        $ko_array[] = "로그인";
        $ko_array[] = "회원가입";
        $ko_array[] = "비밀번호 초기화";


        $en_array[] = "Login";
        $en_array[] = "Sign up";
        $en_array[] = "Find my password";


        $cn_array[] = "登录";
        $cn_array[] = "注册会员";
        $cn_array[] = "找回密码";


        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];

    }

    function card($lang)
    {
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();


        $ko_array[] = "AIDUSPAY란?";
        $ko_array[] = "AIDUSPAY의 운용";
        $ko_array[] = "AIDUSPAY의 활용";
        $ko_array[] = "Royalty Membership Portal Platform";
        $ko_array[] = "Royalty Membership Portal Platform 안에서는 국경과 통화의 장벽이 사라집니다.";
        $ko_array['depth'] = "AIDUS는 Royalty Membership Portal Platform 구축을 통해 <br>AIDUS TOKEN을 FIAT 처럼 사용하되, <br>FIAT 이상의 혜택을 제공하고자하는 목표를 갖고 있습니다.";
        $ko_array['depth1'] = "AIDUS는 Royalty Membership Portal Platform 구축을 통해 <br>AIDUS TOKEN을 FIAT 처럼 사용하되, <br>FIAT 이상의 혜택을 제공하고자하는 목표를 갖고 있습니다";
        $ko_array['depth2'] = "AIDUSPAY는 AIDUS TOKEN을 예치함으로서<br>예치금액의 12%를 연이자로 매월 지급하고 있습니다.<br>출금은 매월!<br>수수료는 0%<br>가장 자유로운 투자 시스템을 만나보세요.";
        $ko_array['depth3'] = "AIDUS가 개발한 Quant Trading System(QTS):<br>Big Data와 통계 분석을 바탕으로 자산 운용 프로그램,<br>FX Margin Business에 최적화 되어있습니다.<br>QTS Season 1 운용 수익 : 약 85%<br>QTS Season 2 운용 수익 : 약 79%";
        $ko_array['depth4'] = "두번받는 월급 : 매월 지급되는 이자를 또 다른 월급처럼!<br>이자는 매월 누적되어 지급됩니다. <br>매월 지급 받는 이자는 매우 다양하게 활용할 수 있습니다.";
        $ko_array['depth5'] = "메비온(http://mebion.kr)에서 건강검진 신청시 AIDUS TOKEN으로 최고의 할인 혜택을 적용받아 건강검진을 받을 수 있습니다.<br><br>메비온과 차병원그룹 계열사인 차케어스의 바이오케어가 함께 구축하는 건강검진 플랫폼으로서 차병월을 포함 전국의 대형 대학병원 및 프리미엄 검진센터에서 검진을 받을 수 있습니다.";
        $ko_array['depth6'] = "제도권 시장 : QTS를 이용한 펀드 운용.<br>싱가포르의 글로벌 자산운용사인 Ternary를 통해 펀드 등록.<br>AGF SUMMIT FUND : 등록번호 : T20VC0001L-SF002<br>Royalty Membership Platform : AIDUS TOKEN을 현금처럼 사용하면서 현금 이상의 혜택을 받는 포털 서비스 구축";

        $en_array[] = "What is AIDUSPAY?";
        $en_array[] = "Operation of AIDUSPAY";
        $en_array[] = "Application of AIDUSPAY";
        $en_array[] = "Royalty Membership Portal Platform";
        $en_array[] = "Within the Royalty Membership Portal Platform, borders and currency barriers will be overcome.";
        $en_array['depth'] = "Within the Royalty Membership Portal Platform, Aidus Token aims to become a FIAT-like token that can be used flexibly to provide even more benefits to users.";
        $en_array['depth1'] = "Within the Royalty Membership Portal Platform, Aidus Token aims to become a FIAT-like token that can be used flexibly to provide even more benefits to users.";
        $en_array['depth2'] = "AIDUSPAY is a service that by staking AIDUS TOKEN and earn 12% annualized interest rate on a monthly basis.<br>Withdraw interest every month without any service charge!<br>Subscribe AIDUSPAY Now!";
        $en_array['depth3'] = "QTS(Quant Trading System) is a program optimized for asset management programs and FX Margin Business developed by AIDUS based on Big Data and statistical analysis.<br>QTS Season 1 Operating Profit: Approximately 85%<br>QTS Season 2 Operating Profit: Approximately 79%";
        $en_array['depth4'] = "Double your salary: Receiving interest on a monthly basis like another paycheck.<br>Interest is accrued and distributed every month. The monthly interest can be used in a wide variety.";
        $en_array['depth5'] = "When AIDUS TOKEN is used as a payment on Mebion (http://mebion.kr), a medical checkup reservation platform, the best discount price will be applied.<br><br>Mebion is a service platform that provides medical checkups at 15 major university hospitals and premium checkup centers in Korea, including Cha Hospital, along with the best preferential treatment policy using AIDUS TOKEN.";
        $en_array['depth6'] = "A Private Equity Fund utilizing QTS has been launched and registrated in Singapore.<br>Name: AGF SUMMIT FUND <br>Registration number: T20VC0001L-SF002<br><br>Royalty Membership Portal Platform: Aidus Token aims to become a FIAT-like token that can be used flexibly to provide even more benefits to users.";

        $cn_array[] = "AIDUSPAY是什么？";
        $cn_array[] = "AIDUSPAY之操作";
        $cn_array[] = "灵活运用AIDUSPAY";
        $cn_array[] = "尊贵会员门户平台";
        $cn_array[] = "透过尊贵会员门户平台，将克服所有边界和货币障碍。";
        $cn_array['depth'] = "透过尊贵会员门户平台，Aidus Token目标成为像FIAT一样可灵活运用的币，为用户提供更多福利。 ";
        $cn_array['depth1'] = "透过尊贵会员门户平台，Aidus Token目标成为像FIAT一样可灵活运用的币，为用户提供更多福利。 ";
        $cn_array['depth2'] = "AIDUSPAY是一种透过AIDUS TOKEN持仓返利的服务。<br>每月发放12%固定年化收益，零手续费。<br>立刻加入AIDUSPAY!";
        $cn_array['depth3'] = "QTS（Quant Trading System）是AIDUS开发的一个系统，它基于大数据和统计分析，针对资产管理程序和外汇保证金业务进行了优化。<br>QTS第一季操作利润:约85%<br>QTS第二季操作利润:约79%";
        $cn_array['depth4'] = "加入AIDUSPAY把你的薪水翻倍！<br>按月派息，就像领另一份薪水一样。";
        $cn_array['depth5'] = "在体检预约平台Mebion(http://mebion.kr)上使用AIDUS TOKEN支付时，将享受最优惠的价格。<br><br>Mebion是以车医院为首的韩国15所主要大学医院和高级体检中心为服务平台，使用AIDUS TOKEN可享受最优惠的治疗政策。";
        $cn_array['depth6'] = "首个运用QTS操作的私募基金已在新加坡成立并注册。<br>名称：AGF SUMMIT FUND AGF SUMMIT FUND <br>登记号：T20VC0001L-SF002<br><br>尊贵会员门户平台：Aidus Token目标成为像FIAT一样可灵活运用的币，为用户提供更多福利。 ";


        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];

    }
}