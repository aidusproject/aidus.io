<?php
class langPack {

    function wallet($lang) {
        $lang_array = array();
        $ko_array   = array();
        $en_array   = array();
        $cn_array   = array();
        $jp_array   = array();

        $ko_array[] = "MY WALLET";
        $ko_array[] = "입/출금 내역 조회 및 AIDUS를 출금할 수 있습니다.";
        $ko_array[] = "입/출금 내역";
        $ko_array[] = "내 토큰현황";

        $ko_array[] = "입금";
        $ko_array[] = "출금";
        $ko_array[] = "전환";

        $ko_array[] = "요청";
        $ko_array[] = "실패";
        $ko_array[] = "완료";

        $ko_array[] = "";

        $ko_array[] = "현재 보유중인";
        $ko_array[] = "* 현재 보유하고 계신 AIDUS의 총 수량";

        $ko_array[] = "출금신청";

        $ko_array[] = "지금까지";
        $ko_array[] = "보상받은";
        $ko_array[] = "* Token Sale 기간동안 입금하신 전체 AIDUS 수량";

        $ko_array[] = "지금까지";
        $ko_array[] = "출금한";
        $ko_array[] = "* Token Sale 기간동안 출금하신 전체 AIDUS 수량";

        $ko_array[] = "지금까지";
        $ko_array[] = "기부한";
        $ko_array[] = "* Token Sale 기간동안 입금하신 전체 ETH 수량";

        $ko_array[] = "상태";
        $ko_array[] = "종류";
        $ko_array[] = "수량";
        $ko_array[] = "입/출금 내역이 없습니다.";

        $en_array[] = "MY WALLET";
        $en_array[] = "You can browse the deposit/withdrawal records and withdraw your AIDUS.";
        $en_array[] = "Deposit/Withdrawal Records";
        $en_array[] = "My TOKEN Status";

        $en_array[] = "Deposit";
        $en_array[] = "Withdrawal";
        $en_array[] = "Exchange";

        $en_array[] = "Request";
        $en_array[] = "Failed";
        $en_array[] = "Complete";

        $en_array[] = "";

        $en_array[] = "Current AIDUS Balance";
        $en_array[] = "* Current Total Balance of Your AIDUS";

        $en_array[] = "Withdrawal Request";

        $en_array[] = "Current";
        $en_array[] = "Compensated";
        $en_array[] = "* Total AIDUS Quantity deposited during the Token Sale period";

        $en_array[] = "Current";
        $en_array[] = "Withdrawn";
        $en_array[] = "* Total AIDUS Quantity withdrawn during the Token Sale period";

        $en_array[] = "Current";
        $en_array[] = "Donated";
        $en_array[] = "* Total ETH Quantity donated during the Token Sale period";

        $en_array[] = "Status";
        $en_array[] = "Category";
        $en_array[] = "Quantity";
        $en_array[] = "There is no deposit/withdrawal record.";

        $cn_array[] = "MY WALLET";
        $cn_array[] = "可查询充币/提币明细，可提取AIDUS。";
        $cn_array[] = "充币/提币明细";
        $cn_array[] = "我的资产";

        $cn_array[] = "充币";
        $cn_array[] = "提币";
        $cn_array[] = "转换";

        $cn_array[] = "提出请求";
        $cn_array[] = "失败";
        $cn_array[] = "完成";

        $cn_array[] = "";

        $cn_array[] = "目前持有的";
        $cn_array[] = "* 目前所持有的AIDUS总量";

        $cn_array[] = "提出提币要求";

        $cn_array[] = "至今为止";
        $cn_array[] = "获得的";
        $cn_array[] = "* Token Sale期间充的所有AIDUS数量";

        $cn_array[] = "至今为止";
        $cn_array[] = "提取的";
        $cn_array[] = "* Token Sale期间提的所有AIDUS数量";

        $cn_array[] = "至今为止";
        $cn_array[] = "捐献的";
        $cn_array[] = "* Token Sale期间充的所有ETH数量";

        $cn_array[] = "状态";
        $cn_array[] = "种类";
        $cn_array[] = "数量";
        $cn_array[] = "没有充币/提币明细。";

        $jp_array[] = "MY WALLET";
        $jp_array[] = "入/出金の内訳の照会およびAIDUSを出金することができます。";
        $jp_array[] = "入/出金内訳";
        $jp_array[] = "Myのコイン確認";

        $jp_array[] = "入金";
        $jp_array[] = "出金";
        $jp_array[] = "転換";

        $jp_array[] = "要請";
        $jp_array[] = "失敗";
        $jp_array[] = "完了";

        $jp_array[] = "";

        $jp_array[] = "現在保有中の";
        $jp_array[] = "* 現在保有AIDUSの総数量";

        $jp_array[] = "出勤申請";

        $jp_array[] = "今まで";
        $jp_array[] = "補償された";
        $jp_array[] = "* Token Sale 期間中振り込んだ全体のAIUS数量";

        $jp_array[] = "今まで";
        $jp_array[] = "出金した";
        $jp_array[] = "* Token Sale 期間中出金された全体のAIDUS数量";

        $jp_array[] = "今まで";
        $jp_array[] = "寄付した";
        $jp_array[] = "* Token Sale 期間中振り込まれた全体のETH数量";

        $jp_array[] = "状態";
        $jp_array[] = "種類";
        $jp_array[] = "数量";
        $jp_array[] = "入/出金の内訳がありません。";


        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];
    }
    function wallet_2($lang) {
        $lang_array = array();
        $ko_array   = array();
        $en_array   = array();
        $cn_array   = array();
        $jp_array   = array();

        $ko_array[] = "암호를 입력해 주세요";
        $ko_array[] = "주소";
        $ko_array[] = "인출 주소를 입력하십시오";
        $ko_array[] = "인출액";
        $ko_array[] = "인출 수량을 입력하십시오";
        $ko_array[] = "보유량을 초과하였습니다.";
        $ko_array[] = "인출 최소량은 1AIDUS 입니다.";
        $ko_array[] = "AIDUS 출금 요청이 완료되었습니다. <br>예금 인출 기록 페이지에서 상태를 확인하십시오.";
        $ko_array[] = "확인";
        $ko_array[] = "취소";
        $ko_array[] = "일치하는 정보가 없습니다.";


        $en_array[] = "Input password";
        $en_array[] = "Withdraw address";
        $en_array[] = "please type in your withdrawal address";
        $en_array[] = "Withdraw amount";
        $en_array[] = "please type in your withdrawal quantity";
        $en_array[] = "Over Maximum quantity";
        $en_array[] = "The minimum quantity for withdrawal is 1 AIDUS";
        $en_array[] = "AIDUS withdrawal request has completed. <br>Please check on the status at your <br>deposit withdrawal records page";
        $en_array[] = "Confirm";
        $en_array[] = "Cancel";
        $en_array[] = "There is no account with the given information.";


        $cn_array[] = "输入口令";
        $cn_array[] = "退出地址";
        $cn_array[] = "请键入退出地址";
        $cn_array[] = "提款额";
        $cn_array[] = "请键入您的提款数量";
        $cn_array[] = "超过最大金额";
        $cn_array[] = "提款的最低数量是1 AIDUS";
        $cn_array[] = "AIDUS出纳申请完成。 请在取款记录页面确认状态。";
        $cn_array[] = "确认";
        $cn_array[] = "取消";
        $cn_array[] = "没有找到一致的信息。";


        $jp_array[] = "暗号を入力してください。";
        $jp_array[] = "住所";
        $jp_array[] = "引き落とし先を入力してください";
        $jp_array[] = "引き落とし金額";
        $jp_array[] = "取り消し数量を入力してください";
        $jp_array[] = "最大額を超えて";
        $jp_array[] = "取り消しは最低1回AIDUSです。";
        $jp_array[] = "AIDUS 出国禁止要請が完了した。 預金引き出し記録ページで状態を確認してください。";
        $jp_array[] = "確認";
        $jp_array[] = "キャンセル";
        $jp_array[] = "一致する情報がありません。";

        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];
    }

    function home($lang) {

        $lang_array = array();
        $ko_array   = array();
        $en_array   = array();
        $cn_array   = array();
        $jp_array   = array();

        //index top
        $ko_array[] = "국경, 시간, 통화의 제약을 극복하고 AIDUS TOKEN을 통해 자유로운 해외 펀드 가입이 가능한";
        $ko_array[] = "탈중앙화 글로벌 펀드 마켓 플레이스";

        $cn_array[] = "克服国境、时间、货币的限制 通过AIDUS TOKEN 构建可自由买入海外基金的";
        $cn_array[] = "去中心化全球基金市场平台";

        $jp_array[] = "国境、時間、通貨の制約を克服して AIDUS TOKENを通じて 自由な海外ファンド加入が可能な";
        $jp_array[] = "脱中央化グローバルファンドマーケットプレイス";

        $en_array[] = "Free access to foreign fund portfolios is facilitated through the AIDUS TOKEN that would overcome various limitations from border, time, and currency";
        $en_array[] = "Decentralized Global Fund Market";

        //index fundPlatform
        $ko_array[] = "펀드 플랫폼";
        $ko_array[] = "독자적인 QTS를 기반으로 고수익 자산운용이 가능한";
        $ko_array[] = "탈중앙화 글로벌 펀드 마켓 플랫폼 (ADFP) 운영";

        $cn_array[] = "去中心化基金平台";
        $cn_array[] = "利用独家QTS操作，经营实现高收益资产管理的";
        $cn_array[] = "去中心化全球基金市场平台 (ADFP) ";

        $en_array[] = "Decentralized Fund Platform";
        $en_array[] = "Operation of Decentralized Global Fund Market Platform (ADFP) ";
        $en_array[] = "that can enable high profit asset management through the proprietary QTS";

        $jp_array[] = "脱中央化ファンドプラットフォーム";
        $jp_array[] = "独自のQTSを基盤に高収益の資産運用が可能な";
        $jp_array[] = "脱中央化グローバルファンドマーケットプラットフォーム(ADFP)運営";
        //index fundPlatform2

        $ko_array[] = "투자자";
        $ko_array[] = "AIDUS D-Fund Platform";
        $ko_array[] = "자산운용사";
        $ko_array[] = "SMART QTS";

        $en_array[] = "Investor";
        $en_array[] = "AIDUS D-Fund Platform";
        $en_array[] = "Asset Management Companies";
        $en_array[] = "SMART QTS";

        $cn_array[] = "投资者";
        $cn_array[] = "AIDUS D-Fund Platform";
        $cn_array[] = "资产管理公司";
        $cn_array[] = "SMART QTS";

        $jp_array[] = "投資者";
        $jp_array[] = "AIDUS D-Fund Platform";
        $jp_array[] = "資産運用会社";
        $jp_array[] = "SMART QTS";

        $ko_array[] = "Smart QTS";
        $ko_array[] = "다년간 축적된 BIG DATA를 토대로 지속적, 안정적 수익률 ";
        $ko_array[] = "운영이 가능한 자동화 펀드 트레이드 시스템";

        $cn_array[] = "Smart QTS";
        $cn_array[] = "累积多年的大数据为基础";
        $cn_array[] = "可获得稳定收益率的自动化交易系统";

        $en_array[] = "Smart QTS";
        $en_array[] = "Automatic fund trading system that can enable continuous and safe yield rate ";
        $en_array[] = "through big data that has been accumulated for several years";

        $jp_array[] = "Smart QTS";
        $jp_array[] = "長年蓄積されたBIG DATAを基に持続的、安定的な収益率 ";
        $jp_array[] = "運営が可能な自動化ファンドトレードシステム";

        $ko_array[] = "AIDUS QTS 수익률";
        $ko_array[] = "자산운용 수익률";
        $ko_array[] = "미국 PKF O`CONNOR DAVIES 수익률 인증";
        $ko_array[] = "3년 평균 수익률";

        $cn_array[] = "AIDUS QTS 収益率";
        $cn_array[] = "全球首屈一指的<br>AIDUS QTS收益率";
        $cn_array[] = "由美国PKF O`CONNOR DAVIES认证";
        $cn_array[] = "三年平均收益率";

        $en_array[] = "Asset management Yield Rate";
        $en_array[] = "AIDUS QTS Yield Rate";
        $en_array[] = "Certified By U.S.A PKF O`CONNOR DAVIES";
        $en_array[] = "Three-year Average Yield Rate";

        $jp_array[] = "AIDUS QTS 收益率";
        $jp_array[] = "資産運用 收益率";
        $jp_array[] = "米国のPKF O'CONNOR DAVIESによる認定";
        $jp_array[] = "3年平均収益率";

        $ko_array[] = "QTS의 수익률 GRAPH";
        $ko_array[] = "GRAPH";
        $ko_array[] = "Barron`s TOP100 Hedge FUND 3년 평균 수익률";
        $ko_array[] = "수익률 리포트 상세 보기";

        $cn_array[] = "QTS収益率图表";
        $cn_array[] = "图表";
        $cn_array[] = "巴伦百强对冲基金3年平均收益率为";
        $cn_array[] = "了解更多有关收益率的报告";

        $en_array[] = "QTS Yield Rate GRAPH";
        $en_array[] = "GRAPH";
        $en_array[] = "Barron's Top 100 Hedge Fund three-year average yield";
        $en_array[] = "View more details about the Yield Rate Report";

        $jp_array[] = "QTS 収益率グラフ";
        $jp_array[] = "グラフ";
        $jp_array[] = "Barron’s Top100 Hedge Fund 3年平均収益率";
        $jp_array[] = "収益率レポートの詳細を確認";

        $ko_array[] = "꾸준한 AIDUS <br>TOKEN의 가치상승";
        $ko_array[] = "꾸준한 수요와 공급이 존재 안정적인 가치 상승";
        $ko_array[] = "AIDUS TOKEN 가치 상승";
        $ko_array[] = "aidus_value.png";

        $cn_array[] = "持续的AIDUS <br>TOKEN的价值上升";
        $cn_array[] = "持续的需求和供给存在/稳定的价值上升。";
        $cn_array[] = "AIDUS TOKEN 价值上升";
        $cn_array[] = "aidus_value_cn.png";

        $en_array[] = "Rising value of steady <br>AIDUS TOKEN";
        $en_array[] = "Steady demand and supply exist / Stable value increase.";
        $en_array[] = "Rising Value of AIDUS TOKEN";
        $en_array[] = "aidus_value_en.png";

        $jp_array[] = "安定したAIDUS <br>TOKENの価値上昇";
        $jp_array[] = "しっかりした需要と供給が存在/安定的に価値上昇。";
        $jp_array[] = "AIDUS TOKEN 価値上昇";
        $jp_array[] = "aidus_value_jp.png";

        $ko_array[] = "adfp_in.png";
        $ko_array[] = "국경 통화 장벽이 없는 ADFP";
        $ko_array[] = "AIDUS TOKEN을 이용하여 전세계 펀드 상품 가입";

        $cn_array[] = "adfp_in_cn.png";
        $cn_array[] = "ADFP没有边境货币障碍";
        $cn_array[] = "利用AIDUS TOKEN注册全球基金商品";

        $en_array[] = "adfp_in_en.png";
        $en_array[] = "ADFP without border currency barriers";
        $en_array[] = "Join Global Fund Products with \"AIDUS TOKEN\"";

        $jp_array[] = "adfp_in_jp.png";
        $jp_array[] = "国境を越えた障壁のないADFP";
        $jp_array[] = "AIDUS TOKENを利用して、世界中のファンド商品登録";

        $ko_array[] = "QTS Report Season 1 종료";
        $ko_array[] = "평균 누적 수익률 : ";
        $ko_array[] = "평균 운용 기간 : ";
        $ko_array[] = "37개월";
        $ko_array[] = "SEASON2 곧 시작 예정";
        $ko_array[] = "QTS Report Season 1 종료";
        $ko_array[] = "AIDUSPAY 출시전 수익률 안정화";
        $ko_array[] = "QTS 업데이트";
        $ko_array[] = "곧 더나은 SEASON2가 시작됩니다.";
        $ko_array[] = "SEASON1 결과";
        $ko_array[] = "평균 누적 수익률";
        $ko_array[] = "평균 운용 기간";
        $ko_array[] = "37개월";
        $ko_array[] = "SEASON2 곧 시작 예정";
        $ko_array[] = "SEASON2의 QTS의 수익률도 <br><span style=\"color: #009e5a;font-size: 24px;\">미국 PKF O`CONNOR DAVIES</span>를<br> 통해 공증 받을 예정입니다.";

        $en_array[] = "QTS Report<br>Season 1 has ended.";
        $en_array[] = "Average Cumulative Return :<br>";
        $en_array[] = "Average operating period :<br>";
        $en_array[] = "37 months";
        $en_array[] = "SEASON 2 Coming Soon";
        $en_array[] = "QTS Report Season 1 has ended.";
        $en_array[] = "Showing the stability of yield before launching AIDUSPAY.";
        $en_array[] = "QTS Update";
        $en_array[] = "SEASON 2 will begin really soon.";
        $en_array[] = "SEASON 1 Results";
        $en_array[] = "Average Cumulative Return";
        $en_array[] = "Average operating period";
        $en_array[] = "37 months";
        $en_array[] = "SEASON 2 Coming Soon";
        $en_array[] = "The return on QTS in SEASON 2 will also be notarized through <br><span style=\"color: #009e5a;font-size: 24px;\">PKF O`CONNOR DAVIES in the U.S.</span>";

        $cn_array[] = "第一季QTS报告经已结束。";
        $cn_array[] = "平均累计收益 : ";
        $cn_array[] = "平均管理期 : ";
        $cn_array[] = "37个月";
        $cn_array[] = "第二季即将开始。";
        $cn_array[] = "第一季QTS报告经已结束。";
        $cn_array[] = "在推出AIDUSPAY前，证明了其稳定性。";
        $cn_array[] = "QTS更新";
        $cn_array[] = "第二季即将开始。";
        $cn_array[] = "第一季结果。";
        $cn_array[] = "平均累计收益";
        $cn_array[] = "平均管理期";
        $cn_array[] = "37个月";
        $cn_array[] = "第二季即将开始。";
        $cn_array[] = "第二季的QTS回报也将通过美国的<br><span style=\"color: #009e5a;font-size: 24px;\">PKF O'Connor Davies</span><br>获得公证。";

        $jp_array[] = "QTS Report<br>Season 1 has ended.";
        $jp_array[] = "Average Cumulative Return :<br>";
        $jp_array[] = "Average operating period :<br>";
        $jp_array[] = "37 months";
        $jp_array[] = "SEASON 2 Coming Soon";
        $jp_array[] = "QTS Report Season 1 has ended.";
        $jp_array[] = "Showing the stability of yield before launching AIDUSPAY.";
        $jp_array[] = "QTS Update";
        $jp_array[] = "SEASON 2 will begin really soon.";
        $jp_array[] = "SEASON 1 Results";
        $jp_array[] = "Average Cumulative Return";
        $jp_array[] = "Average operating period";
        $jp_array[] = "37 months";
        $jp_array[] = "SEASON 2 Coming Soon";
        $jp_array[] = "The return on QTS in SEASON 2 will also be notarized through <br><span style=\"color: #009e5a;font-size: 24px;\">PKF O`CONNOR DAVIES in the U.S.</span>";

        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];

    }
    function whyaidus($lang) {

        $lang_array = array();
        $ko_array   = array();
        $en_array   = array();
        $cn_array   = array();
        $jp_array   = array();

        $ko_array[] = "Why Aidus";
        $ko_array[] = "독자적인 QTS를 기반으로 고수익 자산운용이 가능한";
        $ko_array[] = "탈중앙화 글로벌 펀드 마켓 플랫폼 (ADFP) 운영";

        $en_array[] = "Why Aidus";
        $en_array[] = "Operation of Decentralized Global Fund Market Platform (ADFP)";
        $en_array[] = "that can enable high profit asset management through the proprietary QTS";

        $cn_array[] = "Why Aidus";
        $cn_array[] = "运营以独家QTS为基础可实现高收益资产管理的";
        $cn_array[] = "去中心化全球基金市场平台(ADFP)";

        $jp_array[] = "Why Aidus";
        $jp_array[] = "独自のQTSを基盤に高収益の資産運用が可能な ";
        $jp_array[] = "脱中央化グローバルファンドマーケットプラットフォーム(ADFP)運営";

        $ko_array[] = "AIDUS TOKEN";
        $ko_array[] = "토큰 펀드멘털을 보유한 단일 기축 통화";
        $ko_array[] = "펀드멘털 보유 가치 보장 토큰";
        $ko_array[] = "자체 QTS를 통한 ICO 기금 자산 운용, 운용 수익과 토큰 가치 상승 효과를 동시에";
        $ko_array[] = "펀드 마켓 기반 단일 기축, 실증통화";
        $ko_array[] = "가입, 환전, 청산을 위한 단일 통화 운용";

        $en_array[] = "AIDUS TOKEN";
        $en_array[] = "Single fiat currency with the base of TOKEN fundamental";
        $en_array[] = "Guarantee on the Fundamental Value";
        $en_array[] = "ICO Asset Management through QTS Simultaneous Profits from Asset Management and Increase in the TOKEN Value";
        $en_array[] = "Real Currency";
        $en_array[] = "Single Currency on the Fund Market Operation of Single Currency for Signing, Exchange, and Redemptio";

        $cn_array[] = "AIDUS TOKEN";
        $cn_array[] = "具备TOKEN基本面对单一关键货币";
        $cn_array[] = "具备基本面的保障价值的TOKEN";
        $cn_array[] = "通过内部QTS管理ICO获得的资金 可期待管理收益和TOKEN升值双丰收";
        $cn_array[] = "以基金市场为基础的单一关键、实证货币";
        $cn_array[] = "为买入卖出基金、汇兑而运作单一货币";

        $jp_array[] = "AIDUS TOKEN";
        $jp_array[] = "コインファンドメンタルを保有した単一基軸通貨";
        $jp_array[] = "ファンドメンタルの保有価値保障コイン";
        $jp_array[] = "自体QTSを通じたICO基金資産運用運用収益とコインの価値上昇効果を同時に期待できる。";
        $jp_array[] = "ファンドマーケットベースの単一基軸、実証通貨";
        $jp_array[] = "加入、両替、清算のための単一通貨運用";

        $ko_array[] = "Smart QTS";
        $ko_array[] = "고수익 솔루션 제공 독자 개발 QTS";
        $ko_array[] = "독자 개발 QTS 제공";
        $ko_array[] = "FOREX Trading 기반 QTS 개발 완료";
        $ko_array[] = "플랫폼 가입 자산운영사에 QTS 제공";
        $ko_array[] = "안정적 고수익 펀드 상품 설계 가능";

        $en_array[] = "SMART QTS";
        $en_array[] = "QTS, proprietary high profit solution";
        $en_array[] = "Proprietary QTS on the Platform";
        $en_array[] = "FOREX Trading-based QTS fully Developed";
        $en_array[] = "QTS is Provided to AMCs within the Platform";
        $en_array[] = "Safe and High-Profit Fund Portfolios can be Designed";

        $cn_array[] = "智能QTS";
        $cn_array[] = "独家开发高收益方案QTS";
        $cn_array[] = "提供独家开发的QTS";
        $cn_array[] = "完成以FOREX交易为基础的QTS";
        $cn_array[] = "加入平台的资产管理公司提供QTS";
        $cn_array[] = "可设计稳定、高收益的基金产品";

        $jp_array[] = "Smart QTS";
        $jp_array[] = "高収益のソリューション提供　独自開発QTS";
        $jp_array[] = "独自開発QTS提供";
        $jp_array[] = "FOREX TradingベースQTS開発完了";
        $jp_array[] = "プラットフォーム加入資産運営社にQTS提供";
        $jp_array[] = "安定的高収益、ファンド商品設計可能";

        $ko_array[] = "Decentralized Fund Market";
        $ko_array[] = "투자자 친화적인 글로벌 펀딩 슈퍼마켓";
        $ko_array[] = "보다 자유로운 글로벌 펀드 가입 ";
        $ko_array[] = "자유로운 펀드 가입, 인증";
        $ko_array[] = "검증된 펀드 정보 제공";
        $ko_array[] = "투자자 수수료 부담 최소화";
        $ko_array[] = "플래폼 무료 이용";
        $ko_array[] = "투자자의 환전 청산 수수료율 부담 최소화";

        $en_array[] = "Decentralized Fund Market";
        $en_array[] = "Investor-friendly global funding market";
        $en_array[] = "Free Access in Signing into Global Funds";
        $en_array[] = "Free Access in Signing and Authenticating in Funds";
        $en_array[] = "Providing Verified Fund Information";
        $en_array[] = "Minimum Fees charged to Investors";
        $en_array[] = "Free Usage of Platform";
        $en_array[] = "Minimum Fees to Investors for Exchange and Redemption";

        $cn_array[] = "Decentralized Fund Market";
        $cn_array[] = "投资者友好型全球基金超级市场";
        $cn_array[] = "轻松自如买入全球基金";
        $cn_array[] = "自由买入基金，轻松获得认证";
        $cn_array[] = "提供可靠的基金信息 ";
        $cn_array[] = "将投资者手续费负担降至最低";
        $cn_array[] = "免费适用平台 ";
        $cn_array[] = "将投资者汇兑、卖出基金手续费负担降至最低";

        $jp_array[] = "Decentralized Fund Market";
        $jp_array[] = "投資者向けのグローバル、ファンディングスーパーマーケット";
        $jp_array[] = "より自由なグローバルファンド加入";
        $jp_array[] = "自由なファンド加入、認証";
        $jp_array[] = "検証されたファンド情報提供";
        $jp_array[] = "投資者の手数料負担の最小化";
        $jp_array[] = "プラットフォーム無料利用";
        $jp_array[] = "投資者の両替、清算の手数料負担の最小化";

        $ko_array[] = "디지털자산운용 생태계 선도";
        $ko_array[] = "자산운용시장을 혁신할 수 있는 AIDUS 생태계 전략";
        $ko_array[] = "디지털자산 운용시장 생태계 구축";
        $ko_array[] = "글로벌 컨소시엄 구축 디지털 자산 운용 특성화 도시 공동 육성";
        $ko_array[] = "생태계 육성 펀드 운용";
        $ko_array[] = "혁신 기술 및 스타트업 육성 (인큐베이팅)";

        $en_array[] = "Leading the digital asset management ecosystem";
        $en_array[] = "AIDUS ecosystem strategy that will innovate the asset management market";
        $en_array[] = "Establishment of Digital Asset Management Ecosystem";
        $en_array[] = "Establishment of Global Consortium Co-Operation of Digital Asset Management City District";
        $en_array[] = "Management of Ecosystem Development Fund";
        $en_array[] = "Development of Innovative Technologies & Start-up (Incubating)";

        $cn_array[] = "引领数码资产管理生态系统";
        $cn_array[] = "可创新资产管理市场的AIDUS生态系统战略";
        $cn_array[] = "构建数码资产管理市场生态系统";
        $cn_array[] = "构建全球联盟培养带有全球数码资产管理特色的城市 ";
        $cn_array[] = "管理培育生态系统基金";
        $cn_array[] = "培育创新技术及初创企业（孵化）";

        $jp_array[] = "デジタル資産運用の生態系の先導";
        $jp_array[] = "資産運用市場を革新できるAIDUSの生態系戦略";
        $jp_array[] = "デジタル資産運用市場の生態系構築";
        $jp_array[] = "グローバル・コンソーシアムの構築デジタル資産運用特性化、都市共同育成";
        $jp_array[] = "生態系育成ファンド運用";
        $jp_array[] = "革新技術及びスタートアップの育成(Incubating)";

        $ko_array[] = "AIDUS 토큰의 활용";
        $ko_array[] = "펀드마켓 플랫폼을 통해 펀드를 가입 사용하며, 펀드의 운영 수익과";
        $ko_array[] = "AIDUS 토큰의 가치 상승으로 인한 양방향 수익 창출";

        $en_array[] = "Utilization of AIDUS TOKEN";
        $en_array[] = "Generation of two-way profits from fund management performance and increase of";
        $en_array[] = "AIDUS TOKEN value through fund signing and usage on the Fund Market Platform";

        $cn_array[] = "AIDUS Token的应用";
        $cn_array[] = "通过基金市场平台买入基金时使用该Token，基金的管理收益及";
        $cn_array[] = "AIDUS Token的升值可带来双丰收";

        $jp_array[] = "AIDUSコインの活用";
        $jp_array[] = "ファンドマーケットプラットフォームを通じてファンドを加入,使用できる。ファンド";
        $jp_array[] = "の運営収益とAIDUSコインの価値上昇による双方向の収益創出";

        $ko_array[] = "AIDUS 토큰 핵심 차별화";
        $ko_array[] = "QTS 자산운용을 통한 세계 최초 펀드멘털 기반 토큰";
        $ko_array[] = "펀드 가입 및 청산을 위한 기축 통화";
        $ko_array[] = "펀드멘털";
        $ko_array[] = "안정적 펀드멘털 기반을 가진 토큰";
        $ko_array[] = "(가치 Zero가 될 수 없는 토큰)";
        $ko_array[] = "AIDUS  ICO 유치 금액 중 50%의 예산을 독자 개발한 QTS를 활용한 자체 자산운용을 통해 ICO 유치금액 수준의 안정적인 토큰 펀드멘털 확보 목표";

        $en_array[] = "AIDUS TOKEN Differentiation Strategy";
        $en_array[] = "World's first fundamental-based TOKEN through the QTS asset management";
        $en_array[] = "Single currency for fund signing and redemption";
        $en_array[] = "Fundamentals";
        $en_array[] = "TOKEN that is based on the safe fundamentals";
        $en_array[] = "(TOKEN that can never be zero in value)";
        $en_array[] = "50% of the ICO asset volume shall be managed by the proprietary QTS with an aim to secure safe fundamentals equivalent to the entire ICO asset volume";

        $cn_array[] = "AIDUS Token核心特色";
        $cn_array[] = "引入QTS资产管理，成为世界第一个具基本面的Token";
        $cn_array[] = "用于买入卖出基金的关键货币";
        $cn_array[] = "基本面";
        $cn_array[] = "具备稳定基本面的Token";
        $cn_array[] = "（价值不会为零的Token）";
        $cn_array[] = "AIDUS 通过ICO获得的金额中，50%的金额 通过独家开发的QTS系统进行管理确保与ICO获得金额相当的稳定Token基本面";

        $jp_array[] = "AIDUSコイン主要差別化";
        $jp_array[] = "QTS資産運用を通じた世界初ファンドメンタルベースコイン";
        $jp_array[] = "ファンド加入及び清算のための基軸通貨";
        $jp_array[] = "ファンドメンタル";
        $jp_array[] = "安定的ファンドメンタル基盤を持つコイン";
        $jp_array[] = "(価値がZeroになれないコイン)";
        $jp_array[] = "AIDUS ICO誘致金額のうち50%の予算を独自開発のQTSを活用した独自の資産運用を通じてICO誘致金額水準の安定的なコインファンドメンタル確保を目標";

        $ko_array[] = "가치";
        $ko_array[] = "투자 실물경제에 쓰이는 실증 토큰";
        $ko_array[] = "(적용 펀드 운영 규모에 따라 커지는 토큰 가치)";
        $ko_array[] = "자산 운용 수익 + 토큰 상승 가치 (2중 효과) 플랫폼 가입 펀드 규모가 커질수록 토큰 사용 규모가 함께 성장하기 때문에 플랫폼 자산운용 규모가 성장에 따라 지속적인 토큰가치를 기대할 수 있는 토큰";

        $ko_array[] = "성장 잠재력";
        $ko_array[] = "세계 3대 기축 통화 지향";
        $ko_array[] = "(ADFP 자산운용 규모 확대 기반)";
        $ko_array[] = "단일 시장으로 세계 최대 시장에서의 기축통화";

        $en_array[] = "Value";
        $en_array[] = "Real currency that is used for investment in real economy";
        $en_array[] = "(TOKEN value will increase as per the fund management volume increases)";
        $en_array[] = "Asset management performance + increase in the TOKEN value(two-way profit) The bigger the fund volume in the platform will be, the bigger the TOKEN usage volume. Thus, as per continuous growth of fund volume in the platform, TOKEN value will also continuously grow in the market";

        $en_array[] = "Growth Potential";
        $en_array[] = "Aiming to the world's top 3 currencies";
        $en_array[] = "(Expansion of the ADFP asset management volume)";
        $en_array[] = "Single currency to be used in the single largest market in the entire world";

        $cn_array[] = "价值";
        $cn_array[] = "投资于实物经济的实证Token";
        $cn_array[] = "（根据适用基金运作规模，Token价值也随之升高）";
        $cn_array[] = "资产管理收益 + Token升值收益 （双重效果） 随着加入平台的基金规模变大TOKEN的使用规模也会随之扩大随着平台资产管理规模扩大可期待TOKEN持续升值";

        $cn_array[] = "增长潜力";
        $cn_array[] = "志在成为全球三大关键货币之一";
        $cn_array[] = "(以扩大ADFP资产管理规模为基础)";
        $cn_array[] = "作为单一市场全球最大市场的关键货币";

        $jp_array[] = "価値";
        $jp_array[] = "投資実体経済に使われる実証コイン";
        $jp_array[] = "(適用ファンド運営規模によって大きくなるコイン価値)";
        $jp_array[] = "資産運用収益+コインの上昇の価値(二重の効果)プラットフォーム加入、ファンドの規模が大きくなるほどコイン使用の規模も一緒に成長するため。プラットフォーム資産運用規模が成長する事にによって持続的なコインの価値が期待できるコイン";

        $jp_array[] = "成長潜在力";
        $jp_array[] = "世界3代の基軸通貨志向";
        $jp_array[] = "(ADFP資産運用規模拡大基盤)";
        $jp_array[] = "単一市場として世界最大市場での基軸通貨";

        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];
    }
    function platform($lang) {

        $lang_array = array();
        $ko_array   = array();
        $en_array   = array();
        $cn_array   = array();
        $jp_array   = array();

        $ko_array[] = "AIDUS 탈중앙화 펀드 플랫폼";
        $ko_array[] = "독자적인 QTS를 기반으로 고수익 자산운용이 가능한";
        $ko_array[] = "탈중앙화 글로벌 펀드 마켓 플랫폼(ADFP) 운영";

        $en_array[] = "AIDUS Decentralized Fund Platform";
        $en_array[] = "Operation of Decentralized Global Fund Market Platform (ADFP)";
        $en_array[] = "that can enable high profit asset management through the proprietary QTS";

        $cn_array[] = "AIDUS去中心化基金平台";
        $cn_array[] = "运营以独家QTS为基础可实现高收益资产管理的";
        $cn_array[] = "去中心化全球基金市场平台(ADFP)";

        $jp_array[] = "AIDUS脱中央化ファンドプラットフォーム";
        $jp_array[] = "独自のQTSを基盤に高収益の資産運用が可能な ";
        $jp_array[] = "脱中央化グローバルファンドマーケットプラットフォーム(ADFP)運営";

        $ko_array[] = "WHITE PAPER";
        $ko_array[] = "AIDUS를 더 자세히 알고싶다면?";

        $en_array[] = "WHITE PAPER";
        $en_array[] = "Do you wish to know more about the AIDUS?";

        $cn_array[] = "WHITE PAPER";
        $cn_array[] = "欲了解AIDUS更多详情";

        $jp_array[] = "WHITE PAPER";
        $jp_array[] = "AIDUSに関してもっと詳しく知りたいですか?";

        $ko_array[] = "D-Fund Market Platform 핵심 차별화";
        $ko_array[] = "세계적인 펀드 회사의  수익률을  뛰어 넘는 세계 최고의  펀드를<br>AIDUS TOKEN으로만 손쉽게 가입할 수 있는 ‘글로벌 펀드 슈퍼마켓’";

        $en_array[] = "Core Differences in D-Fund Market Platform";
        $en_array[] = "‘Global Fund Supermarket’ that generate higher profit rates than that of the world renowned<br> fund management firms as well as highly accessible only through the AIDUS TOKEN";

        $cn_array[] = "D-Fund Market Platform核心特色";
        $cn_array[] = "超越全球顶级基金公司的收益率AIDUS TOKEN在手<br>即可轻松自如买入世界顶级基金'全球基金超级市场'";

        $jp_array[] = "D-Fund Market Platformの主要差別化";
        $jp_array[] = "世界的なファンド会社の収益率を超える世界最高のファンドを<br>AIDUS TOKENだからこそ簡単に加入できる'グローバルファンド・スーパーマーケット'";

        $ko_array[] = "D-Fund Market";
        $ko_array[] = "블록체인 기반 탈중앙화 펀드 마켓";
        $ko_array[] = "(보안, 다이렉트 펀드 가입)";
        $ko_array[] = "블록체인 기반의 혁신적인 탈중앙화펀드 슈퍼마켓 강력한 보안 (인증, 거래, 토큰 보관 등) IPFS(Interplanetary File System) 기술 기반 공동인증 시스템(개인 정보 보호 강화)";
        $ko_array[] = "투자자 중심";
        $ko_array[] = "글로벌 투자 편의성 강화 투명하고 검증된 펀드 정보";
        $ko_array[] = "(플랫폼 무료 이용)";
        $ko_array[] = "환전 수수료, 환율 리스크 최소화 토큰 기반 투자로 글로벌 펀드의 자유로운 이용 자산운용사 및 펀드에 대한 투명한 정보 제공 세계적 공증 기관의 운용 정보 인증 블록체인 기술 기반 보안성 강화";
        $ko_array[] = "Smart Contract";
        $ko_array[] = "빠르고 정확한 펀드 이용";
        $ko_array[] = "(Smart Contract 기반 펀드 이용)";
        $ko_array[] = "Smart Contract 기반으로 펀드의 인증, 가입, 환전, 청산 등의 절차를 투명하고, 빠르고, 정확하게 실행 가능";

        $en_array[] = "D-Fund Market";
        $en_array[] = "Blockchain-based Decentralized Fund Market";
        $en_array[] = "(Security, Direct Fund signing)";
        $en_array[] = "Blockchain-based innovative decentralized fund supermarket Powerful security features (authentication, transaction, TOKEN storage and etc.) IPFS (Interplanetary File System) technologies Co-authentication system (strengthening private information protection)";

        $en_array[] = "Investor-oriented services";
        $en_array[] = "Convenient global investment Transparent and verified fund information";
        $en_array[] = "(free usage of platform)";
        $en_array[] = "Minimum exchange fee and minimum exchange rate risk Free access to global funds through TOKEN-based investment Transparent information on the AMCs and funds Authentication of management performance data through world renowned notarization agencies Security enhancement through Blockchain-based technologies";

        $en_array[] = "SMART Contract";
        $en_array[] = "Fast and accurate access to funds";
        $en_array[] = "(SMART Contract-based fund operation)";
        $en_array[] = "SMART Contract-based authentication, signing, exchange, and redemption of the funds, which are all transparent, fast, and accurately applied";

        $cn_array[] = "D-Fund Market";
        $cn_array[] = "以区块链为基础的去中心化基金市场";
        $cn_array[] = "(安全，直接买入基金）";
        $cn_array[] = "以区块链为基础的创新型去中心化基金超级市场强有力的安全机制（认证、交易、保管TOKEN等）以IPFS（Interplanetary File System）技术为基础共同认证系统（加强保护个人信息）";

        $cn_array[] = "以投资者为中心";
        $cn_array[] = "加强全球投资便利性透明可靠的基金信息";
        $cn_array[] = "(免费使用平台)";
        $cn_array[] = "汇兑手续费、汇兑风险降至最低以TOKEN为基础的投资，可自由买入全球基金提供关于资产管理公司及基金透明可靠的信息由全球公证机构认证管理信息以区块链为基础加强安全性";

        $cn_array[] = "智能合约";
        $cn_array[] = "买入卖出基金轻松快捷";
        $cn_array[] = "(以智能合约为基础买入卖出基金)";
        $cn_array[] = "以智能合约为基础透明、快捷、准确执行基金的认证、买入、汇兑、卖出等流程";

        $jp_array[] = "D-Fund Market";
        $jp_array[] = "ブロックチェーン基盤の脱中央化ファンド・マーケット";
        $jp_array[] = "(セキュリティ、ダイレクトファンド加入)";
        $jp_array[] = "ブロックチェーン基盤の革新的な脱中央化ファンド・スーパーマーケット強力なセキュリティ(認証、取引、コイン保管など)IPFS(Interplanetary File System)技術基盤共同認証システム(個人情報保護強化)";

        $jp_array[] = "投資者中心";
        $jp_array[] = "グローバル投資便宜性強化透明かつ検証されたファンド情報";
        $jp_array[] = "(プラットフォーム無料利用)";
        $jp_array[] = "両替手数料、為替リスクの最小化コイン基盤投資で自由にグローバルファンドを利用資産運用会社及びファンドに関する透明な情報提供 世界的公証機関の運用の情報認証ブロックチェーン技術基盤のセキュリティー強化";

        $jp_array[] = "Smart Contract";
        $jp_array[] = "迅速かつ正確なファンドを利用";
        $jp_array[] = "(Smart Contract基盤のファンドを利用)";
        $jp_array[] = "Smart Contractベースにファンドの認証、加入、両替、清算などの手続きを 透明で、早く、正確に実行可能";

        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];
    }
    function qts($lang) {

        $lang_array = array();
        $ko_array   = array();
        $en_array   = array();
        $cn_array   = array();
        $jp_array   = array();

        $ko_array[] = "수익률 상세 리포트";
        $ko_array[] = "인증절차";

        $en_array[] = "Detail Report on Yield Rate";
        $en_array[] = "Authentication Process";

        $cn_array[] = "收益率详情报告";
        $cn_array[] = "认证流程";

        $jp_array[] = "収益率詳細レポート";
        $jp_array[] = "認証手続き";

        $ko_array[] = "인증기관";
        $ko_array[] = "변호사 사무실 지명";
        $ko_array[] = "허재혁 변호사";

        $en_array[] = "Authentication Agency";
        $en_array[] = "Law Firm Ji-myeong";
        $en_array[] = "LAWYER JAE-HYEOK, HUH";

        $cn_array[] = "认证机构及流程";
        $cn_array[] = "律师事务所지명";
        $cn_array[] = "허재혁律师";

        $jp_array[] = "認証機関及び手続き";
        $jp_array[] = "弁護士事務所「指名」";
        $jp_array[] = "ホジェヒョク弁護士";

        $ko_array[] = "세무법인";
        $ko_array[] = "글로벌 공정";

        $en_array[] = "Taxation Service Firm ";
        $en_array[] = "GLOBAL GONGJEONG";

        $cn_array[] = "税务法人";
        $cn_array[] = "全球공정";

        $jp_array[] = "税務法人";
        $jp_array[] = "グローバル公正";

        $ko_array[] = "AIDUS QTS Report 작성";
        $ko_array[] = "법률사무소 지명과 세무법인 공정으로 전달";
        $ko_array[] = "인증기관 -<br> AIDUS와 동일한 META4를 이용";
        $ko_array[] = "인증기관 -<br> 모든 계정에 대해서 총 누적 Balance 확인";
        $ko_array[] = "AIDUS에게 확인서 전달";
        $ko_array[] = "인증서 수령 후 게시";

        $en_array[] = "Submission of AIDUS QTS Report";
        $en_array[] = "Transfer of Report to Law firm Ji-myeong <br> Taxation Service Firm Global Gongjeong";
        $en_array[] = "Authentication Agency :<br> Using the META4 identical with AIDUS";
        $en_array[] = "Authentication Agency :<br> Confirmation on the total balance of every account";
        $en_array[] = "Transfer of Authentication Report to AIDUS";
        $en_array[] = "Receipt of Authentication Report and Publishing";

        $cn_array[] = "编写AIDUS QTS报告";
        $cn_array[] = "交予律师事务所지명<br>也税务法人공정";
        $cn_array[] = "认证机构 - <br>使用与AIDUS相同的META4";
        $cn_array[] = "认证机构 - <br>确认所有账号的总累计余额";
        $cn_array[] = "将确认书交予AIDUS";
        $cn_array[] = "获得认证书后公布";

        $jp_array[] = "AIDUS QTS Report作成";
        $jp_array[] = "法律事務所の指名と税務法人「公正」に配信";
        $jp_array[] = "認証機関 - <br>AIDUSと同一のMETA4を利用";
        $jp_array[] = "認証機関 - <br>すべてのアカウントに対しての総累積Balance確認";
        $jp_array[] = "AIDUSに確認書配信";
        $jp_array[] = "認証書受領後の掲示";

        $ko_array[] = "인증절차";
        $ko_array[] = "AIDUS에서 META4(IronFX, LandFX)을 이용하여";
        $ko_array[] = "AIDUS QTS Report 작성 ";

        $ko_array[] = "작성된 REPORT는 법률사무소 지명으로 전달";
        $ko_array[] = "작성된 REPORT는 세무법인 공정으로 전달";

        $ko_array[] = "법률사무소 지명에서 AIDUS와 동일한 META4(IRON FX, LANDFX)를 를 이용하여 AIDUS가 운용중인 전체 계정을 직접 로그인";
        $ko_array[] = "세무법인 공정에서 AIDUS와 동일한 META4(IRON FX, LANDFX)를 를 이용하여 AIDUS가 운용중인 전체 계정을 직접 로그인";

        $ko_array[] = "법률사무소 지명에서 AIDUS QTS REPORT의 모든 계정에 대해서 총 누적 Balance 확인";
        $ko_array[] = "세무법인 공정에서 AIDUS QTS REPORT의 모든 계정에 대해서 총 누적 Balance 확인";

        $ko_array[] = "AIDUS QTS Report 실적 확인 후 AIDUS에게 확인서 전달";
        $ko_array[] = "AIDUS QTS Report 실적 확인 후 AIDUS에게 확인서 전달";

        $ko_array[] = "AIDUS 는 인증서 수령 후 게시";

        $en_array[] = "Authentication procedure";
        $en_array[] = "AIDUS shall be using the META4(IronFX, LandFX)";
        $en_array[] = " to submit AIDUS QTS Report";

        $en_array[] = "Transfer of Report to Law firm Ji-myeong";
        $en_array[] = "Transfer of Report to Taxation Service Firm Global Gongjeong";

        $en_array[] = "Law Firm Ji-myeong shall be using the same META4(IRON FX, LAND FX) to log in to every account currently managed by AIDUS";
        $en_array[] = "Taxation Service Firm Global Gongjeong shall be using the same META4(IRON FX, LAND FX) to log in to every account currently managed by AIDUS";


        $en_array[] = "Law Firm Ji-myeong shall be confirming the total balance of every account on AIDUS QTS REPORT";
        $en_array[] = "Taxation Service Firm Global Gongjeong shall be confirming the total balance of every account on AIDUS QTS REPORT";

        $en_array[] = "After confirming the performance specified in the AIDUS QTS Report, the authetication report shall be transferred to AIDUS";
        $en_array[] = "After confirming the performance specified in the AIDUS QTS Report, the authetication report shall be transferred to AIDUS";

        $en_array[] = "After the receipt of the authentication report, AIDUS shall be publishing the report";

        $cn_array[] = "认证流程";
        $cn_array[] = "AIDUS通过META4(IronFX, LandFX)";
        $cn_array[] = "编写AIDUS QTS报告";

        $cn_array[] = "所编写报告交予律师事务所지명";
        $cn_array[] = "所编写报告交予税务法人全球공정";

        $cn_array[] = "律师事务지명使用与AIDUS相同的META4(IRON FX, LANDFX)亲自登录AIDUS管理的所有账号";
        $cn_array[] = "税务法人공정使用与AIDUS相同的META4(IRON FX, LANDFX)亲自登录AIDUS管理的所有账号";

        $cn_array[] = "律师事务所지명确认AIDUS QTS 报告上所有账号的总累计余额";
        $cn_array[] = "税务法人공정确认AIDUS QTS 报告上所有账号的总累计余额";

        $cn_array[] = "确认AIDUS QTS报告业绩后交予AIDUS确认书";
        $cn_array[] = "确认AIDUS QTS报告业绩后交予AIDUS确认书";

        $cn_array[] = "AIDUS获得认证书后公布";

        $jp_array[] = "認証手続き";
        $jp_array[] = "AIDUSでMETA4(IronFX、LandFX)";
        $jp_array[] = "を利用してAIDUS QTS Report作成";
        $jp_array[] = "作成されたREPORTは法律事務所指名に伝達";
        $jp_array[] = "作成されたREPORTは税務法人「公正」に伝達";
        $jp_array[] = "法律事務所の「地名」からAIDUSと同一のMETA4(IRON FX、LANDFX)を利用してAIDUSが運用している全体アカウントに直接ログイン";
        $jp_array[] = "税務法人「公正」でAIDUSと同一のMETA4(IRON FX、LANDFX)をを利用してAIDUSが運用している全体アカウントに直接ログイン";
        $jp_array[] = "法律事務所「地名」でAIDUS QTS REPORTのすべてのアカウントに対しての総累積Balance確認";
        $jp_array[] = "税務法人「公正」でAIDUS QTS REPORTのすべてのアカウントに対しての総累積Balance確認";
        $jp_array[] = "AIDUS QTS Reportの実績を確認した後AIDUSに確認書配信";
        $jp_array[] = "AIDUS QTS Reportの実績を確認した後AIDUSに確認書配信";
        $jp_array[] = "AIDUSは認証書を受領した後、掲示";

        $ko_array[] = "인증 상세설명";
        $ko_array[] = "1.AIDUS QTS 실적 리포트 작성";
        $ko_array[] = "<p>AIDUS가 운용 중인 전체 계좌</p><p> 3268274, 59516, 59517, 67971, 68199</p><p> 70366, 2711267, 83165에 대하여, </p><p>리포트 작성 동영상과 같은 방법으로 Report를 작성합니다.</p>";
        $ko_array[] = "※ 추후 운용 계정은 추가 될 수 있습니다.";
        $ko_array[] = "2.보고서 전달";
        $ko_array[] = "작성된 보고서는 매주 법률사무소 지명과 세무법인 공정측으로 전달하여  실적에 대한 확인 요청.";
        $ko_array[] = "3. AIDUS QTS 실적 리포트 인증";
        $ko_array[] = "법률사무소 지명과, 세무법인 공정은, AIDUS의 운용 계정의 로그인 정보를 이용하여, 각 계정에 직접 로그인 후, 1번 절차 AIDUS와 동일한 절차를 통하여 각 운용 계정의 전체 누적 Balance를 확인합니다. 확인된 Balance와 AIDUS측에서 제시된 보고서의 Balance가 일치함을 확인 후에 확인서를 발급합니다.";
        $ko_array[] = "4. AIDUS QTS 실적 리포트 게시";
        $ko_array[] = "작성된 보고서는 매주 법률사무소 지명과 세무법인 공정측으로 전달하여  실적에 대한 확인 요청.";
        $ko_array[] = "AIDUS QTS 실적 리포트 이중 Cross Check";
        $ko_array[] = "세무법인 공정";
        $ko_array[] = "AIDUS Report";
        $ko_array[] = "법률사무소 지명";
        $ko_array[] = "AIDUS는 QTS 의 실적 Report 결과에 대하여, 투명성과 신뢰를 위해 두 곳의 검증된 기관인 법률사무소 지명, 세무법인 공정의 철저한 확인을 받고 있습니다.";
        $ko_array[] = "AIDUS의 QTS를 이용하여 발생한 총 Balance 금액은 Meta4 프로그램을 통한 결과와 AIDUS가 제시한 리포트가 정확하게 일치함을 확인 받고 있습니다.";

        $en_array[] = "Detail information on Authentication";
        $en_array[] = "1. AIDUS QTS Performance Report";
        $en_array[] = "<p>Report on every account currently under the AIDUS management</p><p>including 3268274, 59516, 59517, 67971, 68199</p><p> 70366, 2711267,83165 shall be submitted as per</p><p> the method explained in the video clip.</p>";
        $en_array[] = "※ There can be addition to the number of management accounts.";
        $en_array[] = "2. Hand over of Report";
        $en_array[] = "Submitted report shall be transferred to the Law Firm Ji-myeong and Taxation Service Firm Gongjeong every week along with request of confirmation on the performance.";
        $en_array[] = "3. Authentication of AIDUS QTS Performance Report";
        $en_array[] = "Law Firm Ji-myeong and Taxation Service Firm Gongjeong shall be logging into the accounts under AIDUS management using the access information to the accounts and shall be confirming the total balance of each different account as per the same method by AIDUS in the step 1. Balance shall be confirmed whether it is identical with the AIDUS report, and once confirmed, the authentication report will be issued.";
        $en_array[] = "4. Publishing of AIDUS QTS Performance Report";
        $en_array[] = "Submitted report shall be transferred to the Law Firm Ji-myeong and Taxation Service Firm Gongjeong every week along with request of confirmation on the performance.";
        $en_array[] = "AIDUS QTS Performance Report Cross Check";
        $en_array[] = "Taxation Service Firm GLOBAL GONGJEONG";
        $en_array[] = "AIDUS Report";
        $en_array[] = "Law Firm Ji-myeong";
        $en_array[] = "QTS Performance Report data by the AIDUS goes through a thorough authentication process by two different agencies, the Law Firm Ji-myeong and Taxation Service Firm Gongjeong to provide transparency and trust.";
        $en_array[] = "Total balance figure after the management by the QTS shall be confirmed by comparing the figure between the Meta4 program figure and AIDUS report figure.";

        $cn_array[] = "认证详情说明";
        $cn_array[] = "1.编写 AIDUS QTS 业绩报告";
        $cn_array[] = "<p>AIDUS正在管理的所有账号对</p><p>3268274, 59516, 59517, 67971, 68199</p><p> 70366, 2711267, 83165，</p><p>如编写报告视频的方式编写报告。</p>";
        $cn_array[] = "※ 日后管理的账号可能会增加。";
        $cn_array[] = "2. 提交报告";
        $cn_array[] = "编写的报告每周提交给律师事务所지명与税务法人공정，提出确认业绩的要求。";
        $cn_array[] = "3. 认证AIDUS QTS业绩报告 ";
        $cn_array[] = "律师事务所지명与税务法人공정通过AIDUS管理账号的登录信息，直接登录到每个账号，通过第一个流程中AIDUS所执行的流程，确认管理账号的整体累计余额 。若确认的余额与AIDUS提出的报告一致，则发行确认书。";
        $cn_array[] = "4. 公布AIDUS QTS业绩报告";
        $cn_array[] = "编写的报告每周提交给律师事务所지명与税务法人공정，提出确认业绩的要求。";
        $cn_array[] = "AIDUS QTS业绩报告交互验证核实";
        $cn_array[] = "税务法人공정";
        $cn_array[] = "AIDUS 报告";
        $cn_array[] = "律师事务所지명";
        $cn_array[] = "AIDUS将QTS的业绩报告的结果提交于已获得验证的两家机构——律师事务所지명与税务法人공정，接受彻底的核对验证，以确保透明性与可信度。";
        $cn_array[] = "AIDUS使用QTS而发生的总余额，由两家机构确认通过Meta4 程序得到结果与AIDUS给出的报告完全一致。";

        $jp_array[] = "認証詳細説明";
        $jp_array[] = "1.AIDUS QTSの業績リポート作成";
        $jp_array[] = "<p>AIDUSが運用している全体口座</p><p>3268274、59516、59517、67971、68199</p><p>70366、2711267、83165</p><p>について、レポート作成動画と同じ方法でReportを作成します。</p>";
        $jp_array[] = "※今後運用アカウントは追加される可能性もあります。";
        $jp_array[] = "2.報告書配信";
        $jp_array[] = "作成された報告書は毎週法律事務所の指名と税務法人「公正」側に伝達し、実績に対する確認要請。";
        $jp_array[] = "3.AIDUS QTS業績リポート認証";
        $jp_array[] = "法律事務所指名と、税務法人公正は、AIDUSの運用のアカウントのログイン情報を利用して、各勘定に直接ログイン後、1度の手続きAIDUSと同一の手続きを通じて各運用サイトの全体累積Balanceを確認します。確認されたBalanceとAIDUS側で提示された報告書のBalanceが一致することを確認した後、確認書を発給します。";
        $jp_array[] = "4.AIDUS QTS業績リポートの掲示";
        $jp_array[] = "作成された報告書は毎週法律事務所の指名と税務法人「公正」側に伝達し、実績に対する確認要請。";
        $jp_array[] = "AIDUS QTS業績リポート二重Cross Check";
        $jp_array[] = "税務法人 「公正」";
        $jp_array[] = "AIDUS Report";
        $jp_array[] = "法律事務所 [指名]";
        $jp_array[] = "AIDUSはQTSの実績Reportの結果については、透明性と信頼性のため、検証された機関である法律事務所「「地名」、税務法人「公正」の徹底した確認を受けています。";
        $jp_array[] = "AIDUSのQTSを利用して発生した総Balance金額はMeta4プログラムを通じた結果とAIDUSが提示したレポートが正確に一致していることを確認します。";

        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];
    }
    function signup($lang) {
        $lang_array = array();
        $ko_array   = array();
        $en_array   = array();
        $cn_array   = array();
        $jp_array   = array();

        $ko_array[] = "회원가입";
        $ko_array[] = "아래 입력란에 정보를 입력하여 계정을 생성하세요.";

        $ko_array[] = "이메일";
        $ko_array[] = "이메일 주소를 입력하세요.";
        $ko_array[] = "이메일 주소를 다시 입력하세요.(예: aaaaa@aidus.io)";
        $ko_array[] = "사용할 수 없는 이메일 입니다.";

        $ko_array[] = "이름";
        $ko_array[] = "이름을 입력하세요.";

        $ko_array[] = "성";
        $ko_array[] = "성을 입력하세요.";

        $ko_array[] = "국가";
        $ko_array[] = "전화번호";
        $ko_array[] = "국가 번호를 포함한 전화번호를 입력하세요.";
        $ko_array[] = "전화번호를 입력하세요.";

        $ko_array[] = "비밀번호 (영문/숫자/특수문자 2가지 조합, 10~20)";
        $ko_array[] = "비밀번호를 입력하세요.";

        $ko_array[] = "비밀번호 재입력";
        $ko_array[] = "비밀번호를 재입력하세요.";
        $ko_array[] = "비밀번호가 일치하지 않습니다.";

        $ko_array[] = "WhitePaper";
        $ko_array[] = "에 동의합니다.";
        $ko_array[] = "Token Sale Agreement";
        $ko_array[] = "에 동의합니다.";

        $ko_array[] = "동의에 체크하세요.";

        $ko_array[] = "회원가입";
        $ko_array[] = "취소";

        $ko_array[] = "AIDUS 회원가입을 환영합니다. 가입시 입력한 이메일로 인증 메일을 발송하였습니다. 이메일을 확인하여 인증을 완료하면, 이메일(아이디)가 활성화되어 ICO참여가 가능합니다.";
        $ko_array[] = "비밀번호";


        $en_array[] = "Sign up";
        $en_array[] = "Create your account by filling up the information in the below blanks";

        $en_array[] = "e-mail";
        $en_array[] = "Please type your e-mail address";
        $en_array[] = "Please type your e-mail address.(ex: aaaaa@aidus.io)";
        $en_array[] = "Can not use this e-mail address";

        $en_array[] = "Name";
        $en_array[] = "Please type your name";

        $en_array[] = "Surname";
        $en_array[] = "Please type your surname";

        $en_array[] = "Country";
        $en_array[] = "Telephone";
        $en_array[] = "Please type your telephone number including country code";
        $en_array[] = "Please type your telephone number";

        $en_array[] = "Password (English/number/symbol - 2 combination, 10-20 letters)";
        $en_array[] = "Please type your password";

        $en_array[] = "Re-type Password";
        $en_array[] = "Please re-type your password";
        $en_array[] = "Password and confirm password does not match";

        $en_array[] = "I agree to the";
        $en_array[] = "Whitepaper";
        $en_array[] = "I agree to the";
        $en_array[] = "Token Sale Agreement";

        $en_array[] = "Please check in the agreement box";

        $en_array[] = "Sign up";
        $en_array[] = "Cancel";

        $en_array[] = "Verification email has been sent to the email address written in the sign up page.Once email verification has been completed, email(ID) will be activated for your participation in the ICO.";
        $en_array[] = "Password";

        $cn_array[] = "注册会员";
        $cn_array[] = "请填入如下信息，创建账号。";

        $cn_array[] = "电子邮箱";
        $cn_array[] = "请输入电子邮箱地址。";
        $cn_array[] = "请重新输入电子邮箱地址。(例: aaaaa@aidus.io)";
        $cn_array[] = "无法使用该电子邮箱";

        $cn_array[] = "名字";
        $cn_array[] = "请输入名字。";

        $cn_array[] = "姓";
        $cn_array[] = "请输入姓。";

        $cn_array[] = "国家";
        $cn_array[] = "电话号码";
        $cn_array[] = "请输入包括国家代码的电话号码。";
        $cn_array[] = "请输入电话号码";

        $cn_array[] = "密码 （英文/数字/特殊符号其中起码两种组合，10~20）";
        $cn_array[] = "请输入密码";

        $cn_array[] = "重新输入密码";
        $cn_array[] = "请重新输入密码。";
        $cn_array[] = "所输密码不一致。";

        $cn_array[] = "同意";
        $cn_array[] = "Whitepaper。";
        $cn_array[] = "同意";
        $cn_array[] = "Token Sale Agreement。";

        $cn_array[] = "请在同意栏打勾";

        $cn_array[] = "注册会员";
        $cn_array[] = "取消";

        $cn_array[] = "欢迎注册为AIDUS的会员。已向注册时输入的电子邮箱发送邮件。确认邮件，完成认证，邮箱（ID）将被激活，可参与ICO。";
        $cn_array[] = "密码";

        $jp_array[] = "会員登録";
        $jp_array[] = "下記の入力欄に情報を入力してアカウントをつくってください。";

        $jp_array[] = "メール";
        $jp_array[] = "メールアドレスを入力してください。";
        $jp_array[] = "メールアドレスを再度入力してください。(例:aaaaa@aidus.io)";
        $jp_array[] = "使用できないメールアドレスです。";

        $jp_array[] = "名前";
        $jp_array[] = "名前を入力してください。";

        $jp_array[] = "姓";
        $jp_array[] = "姓を入力してください。";

        $jp_array[] = "国";
        $jp_array[] = "電話番号";
        $jp_array[] = "国番号を入れて電話番号を入力してください。";
        $jp_array[] = "電話番号を入力してください。";

        $jp_array[] = "暗証番号(英語/数字/記号　2つの組合、10~20)";
        $jp_array[] = "暗証番号を入力してください。";

        $jp_array[] = "暗証番号の再入力";
        $jp_array[] = "暗証番号を再入力してください。";
        $jp_array[] = "暗証番号が一致しません。";

        $jp_array[] = "Whitepaper";
        $jp_array[] = "に同意します。";
        $jp_array[] = "Token Sale Agreement";
        $jp_array[] = "に同意します。";

        $jp_array[] = "同意にチェックしてください。";

        $jp_array[] = "会員登録";
        $jp_array[] = "キャンセル";

        $jp_array[] = "AIDUS会員登録ありがとうございます。登録時入力したメールアドレスに認証メールを発送しました。電子メールを確認して認証を完了すると、電子メール(ID)が活性化されてICO参加が可能になります。";
        $jp_array[] = "暗証番号";

        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];
    }
    function login($lang) {
        $lang_array = array();
        $ko_array   = array();
        $en_array   = array();
        $cn_array   = array();
        $jp_array   = array();

        $ko_array[] = "로그인";
        $ko_array[] = "서비스 이용을 위해서는 로그인이 필요합니다.";
        $ko_array[] = "이메일";
        $ko_array[] = "이메일 주소를 입력하세요.";
        $ko_array[] = "비밀번호";
        $ko_array[] = "비밀번호를 입력하세요.";
        $ko_array[] = "이메일 또는 비밀번호가 틀렸습니다.";
        $ko_array[] = "토큰 구매에 참여하실 수 없습니다.참여 자격에 대한 문의는 고객센터 이메일로 주시면 답변 드리겠습니다.";
        $ko_array[] = "등록하신 계정(이메일)의 인증메일을 확인하지 않았습니다.이메일을 확인하여 인증해주세요.";
        $ko_array[] = "회원이 아니신가요?";
        $ko_array[] = "회원가입";
        $ko_array[] = "비밀번호를 잊어버리셨나요?";
        $ko_array[] = "비밀번호 찾기";
        $ko_array[] = "비밀번호 기억하기";
        $ko_array[] = "일치하는 정보가 없습니다";

        $en_array[] = "Log-in";
        $en_array[] = "Log-in is needed in order to use the services.";
        $en_array[] = "e-mail";
        $en_array[] = "Please type your e-mail address";
        $en_array[] = "Password";
        $en_array[] = "Please type in your password";
        $en_array[] = "Email or password is incorrect.";
        $en_array[] = "You cannot participate in the Token Sale. For inquiries regarding participation requirement, please kindly send your inquiry to the customer center e-mail address.";
        $en_array[] = "For inquiries regarding participation requirement, please kindly send your inquiry to the customer center e-mail address.";
        $en_array[] = "Are you not our members yet? ";
        $en_array[] = "Sign up";
        $en_array[] = "Have you forgot your password?";
        $en_array[] = "Find my password";
        $en_array[] = "Remember your Password";
        $en_array[] = "There is no account with the given information.";

        $cn_array[] = "登录";
        $cn_array[] = "使用服务，需要登录";
        $cn_array[] = "电子邮箱";
        $cn_array[] = "请输入电子邮箱地址";
        $cn_array[] = "密码";
        $cn_array[] = "请输入密码。";
        $cn_array[] = "电子邮箱或密码错误。";
        $cn_array[] = "不能购买Token。关于参与资格相关资讯，请发邮件至客服中心，我们将提供答复。";
        $cn_array[] = "您没有确认注册帐号（电子邮箱）的认证邮件。请通过确认邮件来认证。";
        $cn_array[] = "不是会员吗？";
        $cn_array[] = "注册会员";
        $cn_array[] = "忘记了密码？";
        $cn_array[] = "找回密码";
        $cn_array[] = "保存密码";
        $cn_array[] = "没有找到一致的信息.";

        $jp_array[] = "ログイン";
        $jp_array[] = "サービス利用のためには、ログインが必要です。";
        $jp_array[] = "メール";
        $jp_array[] = "メールアドレスを入力してください。";
        $jp_array[] = "パスワード";
        $jp_array[] = "パスワードを入力してください。";
        $jp_array[] = "メールアドレスまたはパスワードが違います。";
        $jp_array[] = "トークンの購買に参加できません。参加資格に関するお問い合わせはお客様センター電子メールまでご連絡ください。";
        $jp_array[] = "登録したアカウント(メールアドレス)が認証されていません。";
        $jp_array[] = "会員登録してください。";
        $jp_array[] = "会員登録";
        $jp_array[] = "パスワードを忘れてしまいましたか?";
        $jp_array[] = "パスワードを探す";
        $jp_array[] = "パスワードを保存する";
        $jp_array[] = "一致する情報がありません.";

        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];

    }
    function password($lang) {
        $lang_array = array();
        $ko_array   = array();
        $en_array   = array();
        $cn_array   = array();
        $jp_array   = array();

        $ko_array[] = "비밀번호 찾기";
        $ko_array[] = "아래 정보를 입력하면 임시비밀번호가 발송됩니다.";
        $ko_array[] = "이메일";
        $ko_array[] = "이메일 주소를 입력하세요.";
        $ko_array[] = "일치하는 정보가 없습니다.";
        $ko_array[] = "이메일로 임시비밀번호가 발송되었습니다.임시비밀번호로 로그인 후 비밀번호를 변경하시기 바랍니다.";
        $ko_array[] = "확인";
        $ko_array[] = "취소";

        $en_array[] = "Find my password";
        $en_array[] = "Please fill out below information, and temporary password will be sent.";
        $en_array[] = "e-mail";
        $en_array[] = "Please type your e-mail address";
        $en_array[] = "There is no account with the given information.";
        $en_array[] = "Temporary password has been sent to your email address.Please log-in using your temporary password, and change your password.";
        $en_array[] = "Confirm";
        $en_array[] = "Cancel";

        $cn_array[] = "找回密码";
        $cn_array[] = "输入如下信息则将发送临时密码";
        $cn_array[] = "电子邮箱";
        $cn_array[] = "请输入电子邮箱地址。";
        $cn_array[] = "没有找到一致的信息。";
        $cn_array[] = "临时密码已发送至电子邮箱。请使用临时密码登录后修改密码";
        $cn_array[] = "确认";
        $cn_array[] = "取消";

        $jp_array[] = "パスワードを探す";
        $jp_array[] = "下記の情報を入力すると仮パスワードが送信されます。";
        $jp_array[] = "メール";
        $jp_array[] = "メールアドレスを入力してください。";
        $jp_array[] = "一致する情報がありません。";
        $jp_array[] = "メールで仮パスワードが発送されました。仮パスワードでログイン後、パスワードを変更してください。";
        $jp_array[] = "確認";
        $jp_array[] = "キャンセル";

        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];
    }

    function findPassword($lang) {
        $lang_array = array();
        $ko_array   = array();
        $en_array   = array();
        $cn_array   = array();
        $jp_array   = array();

        $ko_array[] = "비밀번호 찾기";
        $ko_array[] = "이메일을 입력해 주세요";
        $ko_array[] = "기존 비밀번호";
        $ko_array[] = "신규 비밀번호";
        $ko_array[] = "신규 비밀번호 재입력";
        $ko_array[] = "이메일";
        $ko_array[] = "확인";
        $ko_array[] = "취소";
        $ko_array[] = "[AIDUS]임시 비밀번호가 발급되었습니다.";
        $ko_array[] = "기존 비밀번호를 입력하세요.";
        $ko_array[] = "기존 비밀번호가 일치하지 않습니다.";
        $ko_array[] = "신규 비밀번호를 입력하세요.";
        $ko_array[] = "신규 비밀번호를 재입력하세요.";
        $ko_array[] = "신규 비밀번호가 일치하지 않습니다.";

        $en_array[] = "Find password";
        $en_array[] = "Input your E-mail";
        $en_array[] = "Current Password";
        $en_array[] = "New Password";
        $en_array[] = "New Password Retype";
        $en_array[] = "E-mail";
        $en_array[] = "Confirm";
        $en_array[] = "Cancel";
        $en_array[] = "[AIDUS]Temporary password has been provided.";
        $en_array[] = "Input current password";
        $en_array[] = "Current password is not matched";
        $en_array[] = "Input new password";
        $en_array[] = "Input new password retype";
        $en_array[] = "new password is not matched";

        $cn_array[] = "查找口令";
        $cn_array[] = "输入您的电子邮件";
        $cn_array[] = "原有密码";
        $cn_array[] = "新密码";
        $cn_array[] = "输入新密码";
        $cn_array[] = "电子邮箱";
        $cn_array[] = "确认";
        $cn_array[] = "取消";
        $cn_array[] = "[AIDUS]已发送临时密码。";
        $cn_array[] = "请输入原有密码";
        $cn_array[] = "原有密码不一致。";
        $cn_array[] = "请输入新密码。";
        $cn_array[] = "请重新输入新密码。";
        $cn_array[] = "新密码不一致。";

        $jp_array[] = "パスワードを見つける";
        $jp_array[] = "電子メールを入力する";
        $jp_array[] = "既存パスワード";
        $jp_array[] = "新規パスワード";
        $jp_array[] = "新規パスワード再入力";
        $jp_array[] = "メール";
        $jp_array[] = "確認";
        $jp_array[] = "キャンセル";
        $jp_array[] = "[AIDUS]の臨時暗証番号が発給されました。";
        $jp_array[] = "既存パスワードを入力してください。";
        $jp_array[] = "既存パスワードが一致しません。";
        $jp_array[] = "新規パスワードを入力してください。";
        $jp_array[] = "新規パスワードを再入力してください。";
        $jp_array[] = "新規パスワードが一致しません。";

        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];
    }
    function dp_pay($lang){
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();

        $ko_array[] = "아이더스페이(AP)";
        $ko_array[] = "아이더스페이란";
        $ko_array[] = "암호화폐인 AIDUS TOKEN을 AP사업주체에 투자하고";
        $ko_array[] = "연 12%의 투자 이자를 매일 매일 지급 받는 세계 최초로 데일리 이자를 지급 받는 프로젝트임.";
        $ko_array[] = "매일 지급 받는 투자 이자는 FIAT이나 그날 시세에 따라 AIDUS TOKEN으로 출금할 수 있음.";
        $ko_array[] = "향후 글로벌 카드사인 VISA CARD나 MASTER CARD와 제휴하여 글로벌 어디에서 든 이용할 수 있도록 함.";
        $ko_array[] = "daily_pay_info.png";
        $ko_array[] = "사업특징";
        $ko_array[] = "고수익";
        $ko_array[] = "은행 적금보다 높은 수익";
        $ko_array[] = "투자 수익 월 1% (연리 12%)";
        $ko_array[] = "참신함";
        $ko_array[] = "매일 매일 입금되는 수입";
        $ko_array[] = "(획기적) 암호화폐로 지금까지 없었던 Daily 수입";
        $ko_array[] = "아이더스페이 사업";
        $ko_array[] = "편리성";
        $ko_array[] = "암호화폐 투자 활용";
        $ko_array[] = "AIDUS 토큰을 투자 수단으로 활용 (새로운 투자방식)";
        $ko_array[] = "안정성";
        $ko_array[] = "투자자의 투자 보호를 위한 에스크로";
        $ko_array[] = "(투자 토큰 보호) 선순위 물량의 2배만큼 AIDUS TOKEN 에스크로";
        $ko_array[] = "세계 적인 수익률 : 연평균 87% 수익";
        $ko_array[] = "안정성 : 글로벌 외환 위기에서도 이익 실현";
        $ko_array[] = "투명성 : 북미28위 글로벌 회계법인 PKF 공증";
        $ko_array[] = "투자자 자산 이력관리 · 운용 TOOL";
        $ko_array[] = "원하는 시점에 언제든 출금 기능";
        $ko_array[] = "투자자 지갑 연동, 향후 Debit Card 연동";
        $ko_array[] = "사업구도";
        $ko_array[] = "투자 수익 월 1%(연리 12%)";
        $ko_array[] = "structure_img.png";
        $ko_array[] = "포털 운용 예시";
        $ko_array[] = "AIDUS TOKEN 시세 높을 때";
        $ko_array[] = "portal_img_high.png";
        $ko_array[] = "AIDUS TOKEN 시세 낮을 때";
        $ko_array[] = "portal_img_high.png";
        $ko_array[] = "※ 12일간의 ‘지급이자’ USD 1,200을 벌었습니다.";
        $ko_array[] = "12일간의 ‘AIDUS TOKEN’의 합계는 1,100 AIDUS입니다.";
        $ko_array[] = "투자자는 ‘AIDUS TOKEN’의 현재 시세와 ‘지급이자’를 비교하여 유리한 출금을 선택할 수 있습니다.";
        $ko_array[] = "※ 누적된 AIDUS TOKEN은 1,100 AID로 현재 시세 USD 2.0을 매칭하면 USD 2,200이란 계산이 됩니다.";
        $ko_array[] = "이 경우 Fiat(지급이자)보다 AIDUS TOKEN이 USD +1,000 높기 때문에 AIDUS 출금이 유리합니다.";
        $ko_array[] = "출금된 AIDUS는 거래소에서 거래하게 됩니다.";
        $ko_array[] = "사업 목표 및 기대효과";
        $ko_array[] = "AIDUS TOKEN 가치 상승";
        $ko_array[] = "투자하는 만큼 희소성이 높아지는 AIDUS TOKEN";
        $ko_array[] = "1%라도 더 높은 이윤을 추구하는 경제 인구 만족";
        $ko_array[] = "누구도 모방할 수 없는 비즈니스 모델";
        $ko_array[] = "시중 금리보다 높고 안정적인 투자 소득";
        $ko_array[] = "실 생활에 사용되는 AIDUS TOKEN";
        $ko_array[] = "매일매일 입금되는 투자 이익";
        $ko_array[] = "출금 신청 정보";
        $ko_array[] = "APF 운영 현황";
        $ko_array[] = "투자자 출금 선택 : 무엇이 유리할까요?";
        $ko_array[] = "portal_img.png";
        $ko_array[] = "※ 12일간의 ‘지급이자’ USD 1,200을 벌었습니다.";
        $ko_array[] = "12일간의 ‘AIDUS TOKEN’의 합계는 1,400 AIDUS입니다.";
        $ko_array[] = "투자자는 ‘AIDUS TOKEN’의 현재 시세와 ‘지급이자’를 비교하여 유리한 출금을 선택할 수 있습니다.";
        $ko_array[] = "※ 누적된 AIDUS TOKEN은 1,400 AIDUS로 현재 시세 USD 0.5을 매칭하면 USD 700이란 계산이 됩니다.";
        $ko_array[] = "이 경우 Fiat(지급이자)보다 AIDUS TOKEN이 USD - 500 낮기 때문에 Fiat 출금이 유리합니다.";
        $ko_array[] = "출금된 AIDUS는 거래소에서 거래하게 됩니다.";
        $ko_array[] = "AIDUS TOKEN의 끝없는 가치 상승 이유";
        $ko_array[] = "투자자의 수요 : 고수익 QTS 펀드 상품 가입을 위해 AIDUS 구매.";
        $ko_array[] = "자산운용사의 수요 : QTS 펀드 상품 수익을 돌려주기 위해 AIDUS 구매.";
        $ko_array[] = "한정된 공급량내에서 수요가 끊임없이 증가하여 AIDUS 가치는 상승.";
        $ko_array[] = "AIDUS PAY : <span class=\"dp_top_sub_text_red\">AIDUS</span>만을 이용한 투자 상품";
        $ko_array[] = "※ 투자자보호차원 - AIDUS TOKEN 투자수량의 2배, 에스크로";
        $ko_array[] = "※ QTS 적용, 3배 더 안정적인 운용으로 투자이익 <span class=\"dp_top_sub_text_red\">연12% 보장</span>!";



        $en_array[] = "AidusPay(AP)";
        $en_array[] = "What is AidusPay";
        $en_array[] = "Invest AIDUS TOKEN, the cryptocurrency in the AP project entity";
        $en_array[] = "It is the world's first daily interest payment with an annual investment rate of 12%.";
        $en_array[] = "Daily interest pAIDUS can be withdrawn to FIAT or to AIDUS TOKEN according to the market price of that day.";
        $en_array[] = "We will partner with VISA or MASTERCARD, global card companies, to make it available anywhere in the world.";
        $en_array[] = "daily_pay_info_en.png";
        $en_array[] = "Business Features";
        $en_array[] = "High profit";
        $en_array[] = "Profits are higher than bank savings";
        $en_array[] = "Investment interest 1% per month (12% per year)";
        $en_array[] = "New";
        $en_array[] = "Profits are given daily";
        $en_array[] = "Daily income given with cryptocurrency";
        $en_array[] = "AidusPay Business";
        $en_array[] = "Convenience";
        $en_array[] = "Utilizing Cryptocurrency to invest";
        $en_array[] = "(A new investment method)<br>Use AIDUS TOKENs as an investment tool";
        $en_array[] = "Stability";
        $en_array[] = "Escrow to protect the investors";
        $en_array[] = "(To protect the Investment Token)<br>AIDUS TOKEN escrow at twice the priority volume";
        $en_array[] = "Outstanding return rate : 87% of annual average return";
        $en_array[] = "Stability : Gaining profit despite the global FX crisis";
        $en_array[] = "Transparency : Certification from PKF, the Top 28th Global accounting firm in North America";
        $en_array[] = "Investor asset management · Management tool";
        $en_array[] = "Ability to withdraw funds at any time";
        $en_array[] = "Connect with investor's wallet, and connect with Debit card in the future";
        $en_array[] = "Business Structure";
        $en_array[] = "Investment interest 1% per month (12% per year)";
        $en_array[] = "structure_img_en.png";
        $en_array[] = "Portal Operation Example";
        $en_array[] = "When the price of AIDUS TOKEN is high";
        $en_array[] = "portal_img_high_en.png";
        $en_array[] = "When the price of AIDUS TOKEN is low";
        $en_array[] = "portal_img_high_en.png";
        $en_array[] = "※ We earned total amount of USD 1,200  interest pAIDUS for 12 days.";
        $en_array[] = "The sum of 'AIDUS TOKEN' for 12 days is 1,100  AIDUS.";
        $en_array[] = "Investors can choose a favorable withdrawal by  comparing the current rate of 'AIDUS TOKEN' to  the 'interest paid'.";
        $en_array[] = "※ The cumulative AIDUS TOKEN is 1,100 AIDUS, and  if you match the current market price of USD  2.0, it will be calculated as USD 2,200.";
        $en_array[] = "In this case, it is better to choose AIDUS TOKEN  since it is USD 1,000 higher then Fiat.";
        $en_array[] = "The withdrawn AIDUS will be traded on the exchange.";
        $en_array[] = "Business Goals and Expectations";
        $en_array[] = "The value of AIDUS TOKEN rises";
        $en_array[] = "AIDUS TOKEN increases the scarcity as you invest";
        $en_array[] = "Satisfy those who seek for higher profits";
        $en_array[] = "Higher and more stable investment income than market interest rate";
        $en_array[] = "Business models that nobody can imitate";
        $en_array[] = "Investment income deposited daily";
        $en_array[] = "AIDUS TOKEN which can be used in real life";


        $en_array[] = "Withdrawal Application Form";
        $en_array[] = "APF Management Status";
        $en_array[] = "Investor withdrawal options: Which would be more advantageous?";
        $en_array[] = "portal_img_en.png";
        $en_array[] = "※ We earned total amount of USD 1,200  interest pAIDUS for 12 days.";
        $en_array[] = "The sum of 'AIDUS TOKEN' for 12 days is 1,400  AIDUS.";
        $en_array[] = "Investors can choose a favorable withdrawal by  comparing the current rate of 'AIDUS TOKEN' to  the 'interest paid'.";
        $en_array[] = "※ The cumulative AIDUS TOKEN is 1,400 AIDUS and  it is calculated as USD 700 when matching the  current market price of USD 0.5.";
        $en_array[] = "In this case, it is better to choose FIAT since it  is USD 500 higher then AIDUS TOKEN.";
        $en_array[] = "The withdrawn AIDUS will be traded on the exchange.";
        $en_array[] = "Reasons for the endless rise in value of AIDUS TOKEN";
        $en_array[] = "Investor demand: AIDUS purchase for subscription to high-yield QTS fund products.";
        $en_array[] = "Demand from asset management companies: Buy AIDUS to return revenue from QTS fund products.";
        $en_array[] = "Demand continues to grow within a limited supply, increasing the value of the AIDUS";
        $en_array[] = "AIDUS PAY: Investment products with only <span class=\"dp_top_sub_text_red\">AIDUS</span>!";
        $en_array[] = "※ To protect investors, double the amount of AIDUS TOKEN will be held in escrow";
        $en_array[] = "※ 3 times more stable operation with QTS ensures 12% annual return on investment";


        $cn_array[] = "AidusPay(AP)";
        $cn_array[] = "何谓 AidusPay？";
        $cn_array[] = "将数字货币AIDUS TOKEN投资到AP业务主体";
        $cn_array[] = "这是全球首个每年支付12%投资利息的项目";
        $cn_array[] = "每日支付的投资利息可以FIAT或当天的行情以AIDUS TOKEN提款";
        $cn_array[] = "将与全球信用卡公司VISA CARD或MASTER CARD合作,让用户可以在全球任何地方使用";
        $cn_array[] = "daily_pay_info_cn.png";
        $cn_array[] = "项目特色";
        $cn_array[] = "高收益";
        $cn_array[] = "收益高于银行存款";
        $cn_array[] = "投资收益每月1% (年息 12%)";
        $cn_array[] = "崭新";
        $cn_array[] = "每天都得到收入";
        $cn_array[] = "利用数字货币，每天都会得到收入";
        $cn_array[] = "AidusPay 项目";
        $cn_array[] = "便利";
        $cn_array[] = "利用数字货币投资";
        $cn_array[] = "利用AIDUS TOKEN作为新的投资手段";
        $cn_array[] = "安全";
        $cn_array[] = "为保障投资者，将交由第三方托管";
        $cn_array[] = "(保障投资TOKEN)<br>将两倍量的AIDUS TOKEN交由第三方托管";
        $cn_array[] = "全球性的收益率：年平均87%的收益";
        $cn_array[] = "稳定性：在全球外汇危机中实现利益";
        $cn_array[] = "透明度：得到北美第28位全球会计师事务所PKF公证";
        $cn_array[] = "投资者资产管理/操作工具";
        $cn_array[] = "能够随时提取资金";
        $cn_array[] = "可与投资者的钱包联动，日后也可与Debit Card联动";
        $cn_array[] = "项目结构";
        $cn_array[] = "投资收益每月1% (年息 12%)";
        $cn_array[] = "structure_img_cn.png";
        $cn_array[] = "门户操作实例";
        $cn_array[] = "当AIDUS TOKEN的市价高时";
        $cn_array[] = "portal_img_high_cn.png";
        $cn_array[] = "当AIDUS TOKEN的市价低时";
        $cn_array[] = "portal_img_high_cn.png";
        $cn_array[] = "※12天内总共赚了1200美金的利息。";
        $cn_array[] = "12天的AIDUS TOKEN数量总共是1100个。";
        $cn_array[] = "投资者可以选择将 AIDUS现在的价格与利息比较，选择较有优势的然后提款。";
        $cn_array[] = "※ 累积的AIDUS TOKEN为1100AIDUS，现价为美金2元，总计美金2200元。";
        $cn_array[] = "在这情况下，AIDUS TOKEN比法定货币（利息）较有优势。";
        $cn_array[] = "提款AIDUS后，可在交易所进行交易。";
        $cn_array[] = "业务目标和期望";
        $cn_array[] = "AIDUS TOKEN 价值上升";
        $cn_array[] = "投资越多，AIDUS TOKEN将会变的更稀有";
        $cn_array[] = "能够满足追求高利润的经济人口";
        $cn_array[] = "无人能模仿的商业模式";
        $cn_array[] = "投资收益高于市场利率，确保有稳定的收入";
        $cn_array[] = "在实际生活中能够使用的AIDUS TOKEN";
        $cn_array[] = "每天都会获得投资收益";
        //$cn_array[] = "AIDUS TOKEN不断升值的原因";
        $cn_array[] = "提款申请资料";
        //$cn_array[] = "投资者需求:为购买高收益QTS基金产品购买AID。";
        $cn_array[] = "APF操作现况";
        //$cn_array[] = "资产管理公司的需求:为返还QTS基金产品收益购买AID。";
        $cn_array[] = "投资者在提款时，可以选择对自己有优势的提款方式。";
        $cn_array[] = "在有限的供应量内需求不断增长 AIDUS值上升";


        $cn_array[] = "提款申请资料";
        $cn_array[] = "APF 管理现况";
        $cn_array[] = "投资者在提款时会选择对他们有优势的选项";
        $cn_array[] = "portal_img_cn.png";
        $cn_array[] = "※12天内总共赚了1200美金的利息。";
        $cn_array[] = "12天的AIDUS TOKEN数量总共是1400个。";
        $cn_array[] = "AIDUS TOKEN将持续不断升值的理由";
        $cn_array[] = "投资者：为认购高回报QTS基金产品而购买AIDUS TOKEN。";
        $cn_array[] = "资产管理公司:为归还投资者QTS基金产品收益而购买AIDUS TOKEN 。";
        $cn_array[] = "由于在有限的数量中需求不断地增加，因此AIDUS TOKEN的价值会一直提升。";
        $cn_array[] = "AIDUS PAY :只可透过用 <span class=\"dp_top_sub_text_red\">AIDUS TOKEN</span>投资";
        $cn_array[] = "※ 为保障投资者，将会把所投资的AIDUS TOKEN 两倍的数量交由第三方托管";
        $cn_array[] = "※ 透过QTS技术三倍稳定地操作，确保每年12%的投资回报率";


        $jp_array[] = "AidusPay(AP)";
        $jp_array[] = "AidusPayとは。(AP : Aidus Payments)";
        $jp_array[] = "AIDUS TOKENをAP事業主体に投資して";
        $jp_array[] = "年12%の投資利子が毎日支給される世界初デイリー利子が支給されるプロジェクトである。";
        $jp_array[] = "毎日もらえる 投資利子は FIATまたは その日の相場でAIDUS TOKENで出金する事ができる。";
        $jp_array[] = "今後,グローバルカード会社であるVISACARDやMASTERCARDと連携し,世界どこからでも利用できるようになる。";
        $jp_array[] = "daily_pay_info_jp.png";
        $jp_array[] = "事業特徴";
        $jp_array[] = "高収益";
        $jp_array[] = "銀行預金より高い収益";
        $jp_array[] = "投資収益月 1% (年利子 12%)";
        $jp_array[] = "斬新性";
        $jp_array[] = "毎日入金される収入";
        $jp_array[] = "(画期的)今までなかった暗号化肺Daily輸入";
        $jp_array[] = "AidusPay 事業";
        $jp_array[] = "便利性";
        $jp_array[] = "暗号貨幣投資活用";
        $jp_array[] = "AIDUSトークンを投資手段として活用(新しい投資方式";
        $jp_array[] = "安全性";
        $jp_array[] = "投資家の投資保護のためのエスクロ";
        $jp_array[] = "(投資トークン保護) 先順位物量の2倍まで AIDUS TOKENエスクロ";
        $jp_array[] = "世界的な収益率:年平均87%の収益";
        $jp_array[] = "安定性:グローバル金融危機でも利益を実現";
        $jp_array[] = "透明性:北米28位、グローバル会計法人PKF公証";
        $jp_array[] = "投資者資産履歴管理·運用 TOOL";
        $jp_array[] = "いつでもどこでも出金可能";
        $jp_array[] = "投資家の財布を連動,今後のDebit Cardと連動";
        $jp_array[] = "事業構図";
        $jp_array[] = "投資収益月 1% (年利子 12%)";
        $jp_array[] = "structure_img_jp.png";
        $jp_array[] = "ポータル運用の例";
        $jp_array[] = "AIDUS TOKEN 相場が 高い時";
        $jp_array[] = "portal_img_high_jp.png";
        $jp_array[] = "AIDUS TOKEN 相場が 低い時";
        $jp_array[] = "portal_img_high_jp.png";
        $jp_array[] = "※12日間の‘支給利子’USD 1,200をを貰いました。";
        $jp_array[] = "12日間の'AIDUS TOKEN'の合計は1,100 AIDUSです。";
        $jp_array[] = "投資家は“AIDUS TOKEN”の現在の相場と“支給利子”を 比べ,有利な引出方法を選択することができます。";
        $jp_array[] = "※累積されたAIDUS TOKENは1,100 AIDUSで現在の相場 USD 2.0をマッチングすると、 USD 2,200という計 算になります。";
        $jp_array[] = "この場合Fiat（支給利子）よりAIDUS TOKENが USD +1,000高いためAIDUS出金が有利です。";
        $jp_array[] = "引き出されたAIDUSは取引所で取引することになります。";

        $jp_array[] = "事業目標及び期待効果";
        $jp_array[] = "AIDUS TOKEN 価値上昇";
        $jp_array[] = "投資をすればするほど希少性が高まる AIDUS TOKEN";
        $jp_array[] = "1%でも高い利子を追求する経済人口を満足させる";
        $jp_array[] = "市場金利より高くて安定的な投資所得が得られる";
        $jp_array[] = "だれも真似できないビジネスモデル";
        $jp_array[] = "毎日入金される投資利益";
        $jp_array[] = "実際に生活で使用できる AIDUS TOKEN";

        
        $jp_array[] = "出金申請情報";
        $jp_array[] = "APF 運営現況";
        $jp_array[] = "投資者出金選択 : 何が有利ですか？";
        $jp_array[] = "portal_img_jp.png";
        $jp_array[] = "※12日間の‘支給利子’USD 1,200をを貰いました。";
        $jp_array[] = "12日間の'AIDUS TOKEN'の合計は1,400 AIDUS。";
        $jp_array[] = "投資家は“AIDUS TOKEN”の現在の相場と“支給利子”を 比べ,有利な引出方法を選択することができます。";
        $jp_array[] = "※累積されたAIDUS TOKENは1,400 AIDUSで現在の相場 USD 0.5をマッチングすると、USD 700という計算 になります。";
        $jp_array[] = "この場合Fiat（支給利子）よりAIDUS TOKENが USD-500低いためFiat出金が有利です。";
        $jp_array[] = "引き出されたAIDUSは取引所で取引することになります。";
        $jp_array[] = "AIDUS TOKENの果てしない価値上昇の理由";
        $jp_array[] = "投資家の需要:高収益QTSファンド商品加入のためにAIDUS購買。";
        $jp_array[] = "資産運用会社の需要:QTSファンド商品の収益を返すためにAIDUS購買。";
        $jp_array[] = "限られた供給量内で需要が絶えず増加し,AIDUS価値は上昇";
        $jp_array[] = "AIDUS PAY:<span class=\"dp_top_sub_text_red\">AIDUS</span>のみを利用した投資商品!";
        $jp_array[] = "※ 投資者保護のため AIDUS TOKEN 投資数量の 2 倍までエスクロ";
        $jp_array[] = "※ 3 倍安定的な運用システム QTS で投資収益 12% 保障可能";



        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];
    }

    function aidus_pay_pop($lang){

        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();

        $ko_array[] = "첫 상품 AIDUS PAY";
        $ko_array[] = "2019년 <span class=\"ap_pay_pop_sm_title ap_pay_color\">3분기 출시</span> 예정";
        $ko_array[] = "세계최초";
        $ko_array[] = "연 12% 투자이자 지급";
        $ko_array[] = "투자 이자 매일 지급";
        $ko_array[] = "더 보기";

        $en_array[] = "First Product AIDUS PAY";
        $en_array[] = "Will be released in <span class=\"ap_pay_pop_sm_title ap_pay_color\">3Q</span> 2019";
        $en_array[] = "the first in the world";
        $en_array[] = "12% annual investment guaranteed";
        $en_array[] = "daily payment of investment interest";
        $en_array[] = "See more";

        $cn_array[] = "的首个商品 AIDUS PAY";
        $cn_array[] = "预计2019年<span class=\"ap_pay_pop_sm_title ap_pay_color\">3Q</span>上市";
        $cn_array[] = "世界首例";
        $cn_array[] = "12%的年投资利息保障";
        $cn_array[] = "投资利息每天支付";
        $cn_array[] = "仔细看";

        $jp_array[] = "初商品 AIDUS PAY";
        $jp_array[] = "2019年<span class=\"ap_pay_pop_sm_title ap_pay_color\">3Q</span>発売予定";
        $jp_array[] = "世界初";
        $jp_array[] = "年12%の投資であり、保障";
        $jp_array[] = "投資利息,毎日支給";
        $jp_array[] = "詳細を見る";

        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];
    }
    function aidus_reserve_form($lang){
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();

        $ko_array['top'][] = "아이더스 페이 <span>사전 가입</span> 이벤트";
        $ko_array['top'][] = "아이더스 토큰 가격 현 시세와 상관없이";
        $ko_array['top'][] = "USD0.06 무조건 보장";
        $ko_array['content'][] = "1.STEP";
        $ko_array['content'][] = "AIDUS TOKEN을 아래 지갑 주소로 전달 해주세요.";
        $ko_array['content'][] = "사전가입 WALLET ADDRESS에 전달된 AIDUS TOKEN 수량 * USD0.06의 금액으로 AIDUS PAY 정식 가입.";
        $ko_array['content'][] = "AIDUSPAY(aiduspay.com)는 2019년 3Q이내 런칭 예정.";
        $ko_array['content'][] = "주의 : 본 Wallet Address로는 AIDUS TOKEN만 전달 가능. 다른 화폐 전달 시 AIDUS는 책임을 지지 않습니다.<br>중요: 1인당 참여 수량은 30,000~1,000,000AIDUS 입니다.";
        $ko_array['content'][] = "2.STEP";
        $ko_array['content'][] = "신청 정보 입력    (아래 정보가 일치할 경우에만 사전 가입에 정상 참여가 가능합니다)";
        $ko_array['content'][] = "TX HASH";
        $ko_array['content'][] = "AIDUS TOKEN 전달 후 입금 확인을 위해 정확한 TX HASH를 입력해 주세요";
        $ko_array['content'][] = "SENDER'S WALLET ADDRESS";
        $ko_array['content'][] = "AIDUS TOKEN을 보내신 지갑 주소를 정확하게 입력해 주세요";
        $ko_array['content'][] = "AIDUS 수량";
        $ko_array['content'][] = "보내주신 AIDUS TOKEN 수량을 입력해 주세요.";
        $ko_array['content'][] = "2차 사전가입이벤트 참여";
        $ko_array['content'][] = "3.STEP";
        $ko_array['content'][] = "참여 내역";
        $ko_array['content'][] = "이벤트 안내";
        $ko_array['content'][] = "AIDUSPAY(aiduspay.com) 사전 가입 이벤트에 참여에 감사드립니다.";
        $ko_array['content'][] = "사전 가입 이벤트에 참여하신 AIDUS TOKEN은 AIDUS PAY출시 후 정식 가입 목적으로 사용됩니다.";
        $ko_array['content'][] = "AIDUS PAY 정식 출시 후 사전가입이벤트에 참여하신 수량 * USD0.06 투자 금액으로 가입되며, 투자 수익 12% 또한 해당 투자 금액으로 책정됩니다.";
        $ko_array['content'][] = "사전가입이벤트에 참여 후 해제는 언제든 가능하며, 관리자 확인 후 최초 전송한 지갑 주소(SEND Wallet)으로 환불처리 됩니다.";
        $ko_array['content'][] = "사전가입이벤트 참여 후 관리자에 의해 입금이 정상적으로 확인되면 정상으로 상태가 변경되며 업무일 기준 24시간 이내 처리될 예정입니다.";
        $ko_array['content'][] = "사전가입 이벤트 참여시 입금 및 환불에 대한 문의는 info@aidus.io로 문의하여 주시면 확인 후 회신 드리겠습니다.";
        $ko_array['info'][] = '정상';
        $ko_array['info'][] = '취소요청';
        $ko_array['info'][] = '대기';
        $ko_array['info'][] = '취소대기';
        $ko_array['info'][] = '취소철회';
        $ko_array['info'][] = '취소완료';
        $ko_array['pop'][] = '1. 아이더스페이 사전 가입 참여시 투자된 AIDUS TOKEN은 <br><br> 아이더스페이 출시후 (aiduspay.com) 최소 USD0.06의 가격으로 가입됩니다.<br><br>';
        $ko_array['pop'][] = '만약 아이더스페이 출시 후 사전 가입자 가입시 아이더스 토큰 가격이 <br><br> USD0.06 초과시, 더 높은 가격으로 가입됩니다.<br><br><br>';
        $ko_array['pop'][] = '2. 아이더스페이 사전 가입 철회는 언제든지 가능하며, 사전가입 철회 후, <br><br>재가입은 불가합니다.<br><br>';
        $ko_array['pop'][] = '1인당 참여 수량은 30,000~1,000,000AIDUS 입니다. <br><br>';
        $ko_array['pop'][] = '참여 수량을 확인해 주세요.';
        $ko_array['pop'][] = '취소 신청시, 관리자가 가입 이메일 주소로 본인 확인 절차를 거친 후 투자하신 토큰은 지급 됩니다.<br><br><br>';
        $ko_array['pop'][] = '별도의 환불 수수료는 없습니다.<br><br>환불을 꼭 하시겠습니까?';
        $ko_array['pop'][] = '로그인 후 이용가능합니다.';
        $ko_array['pop'][] = '취소 철회 하시겠습니까?';
        $ko_array['pop'][] = 'AIDUS PAY 사전 가입 이벤트 안내';
        $ko_array['pop'][] = '가입완료 되었습니다.';
        $ko_array['btn'][] = '가입하기';
        $ko_array['btn'][] = '취소';
        $ko_array['btn'][] = '닫기';
        $ko_array['btn'][] = '가입 취소하기';
        $ko_array['btn'][] = '철회 취소하기';

        $en_array['top'][] = "AidusPay Pre-registration Event";
        $en_array['top'][] = "Regardless of the Aidus Token's current price";
        $en_array['top'][] = "Guaranteed USD 0.06<br>for Pre-registrants";
        $en_array['content'][] = "STEP 1";
        $en_array['content'][] = "Please send the AIDUS TOKEN to the wallet address below.";
        $en_array['content'][] = "The amount of Aidus token quantity delivered to the WALLET ADDRESS * minimum USD0.06 will be reflected as the investment amount in AidusPay. ";
        $en_array['content'][] = "AidusPay(aiduspay.com) will be released in Q3 2019";
        $en_array['content'][] = "CAUTION: Only AIDUS TOKEN can be delivered with this Wallet Address. AIDUS is not responsible for other currency transfers.<br>Important: Registration amount is 30,000AIDUS ~ 1,000,000AIDUS.";
        $en_array['content'][] = "STEP 2";
        $en_array['content'][] = "Enter your application information (You can participate pre-registration only if the information below matches)";
        $en_array['content'][] = "TX HASH";
        $en_array['content'][] = "Please enter the correct TX HASH to confirm the deposit after delivering AIDUS TOKEN.";
        $en_array['content'][] = "SEND WALLET ADDRESS";
        $en_array['content'][] = "Please enter the exact address of the wallet you sent AIDUS TOKEN.";
        $en_array['content'][] = "AIDUS quantity";
        $en_array['content'][] = "Please enter your AIDUS TOKEN quantity.";
        $en_array['content'][] = "Click to participate 2nd Pre-registration Event";
        $en_array['content'][] = "STEP 3";
        $en_array['content'][] = "Participation History";
        $en_array['content'][] = "Event guidance";
        $en_array['content'][] = "Thank you for participating in the AidusPay(aiduspay.com) Pre-registration Event.";
        $en_array['content'][] = "The AidusPay pre-registration Aidus Token will be used for the purpose of investing in Aidus.";
        $en_array['content'][] = "After the release of the AidusPay, the amount of Aidus token quantity * minimum USD0.06 will be reflected as the investment amount in AidusPay. ";
        $en_array['content'][] = "You can always cancel after participating in the pre-registration event. After checking with the administrator, you will be refunded to the original sent wallet (SEND Wallet).";
        $en_array['content'][] = "After the participation in the pre-registration event, if the payment is confirmed by the administrator, the status will change to success and will be processed within 24 hours based on the business days.";
        $en_array['content'][] = "Please contact info@aidus.io for inquiries about deposit and refund when participating in the pre-registration event.";
        $en_array['info'][] = "Success";
        $en_array['info'][] = "Cancellation request";
        $en_array['info'][] = "Pending";
        $en_array['info'][] = "Pending Cancellation";
        $en_array['info'][] = "withdraw cancellation";
        $en_array['info'][] = "Cancellation Complete";
        $en_array['pop'][] = "1, AIDUS TOKEN invested in the Pre-registration Event will be considered <br>minimum USD0.06 after the release of the AIDUS PAY(aiduspay.com).<br><br><br>";
        $en_array['pop'][] = "If the price rises over USD0.06 after the release of the AIDUS PAY, those who <br> pre-registered will be subscribed at the higher price.<br><br><br>";
        $en_array['pop'][] = "2. You can always cancel the pre-registration. However, it is impossible to re-<br>register after you withdraw your pre-registration.<br><br>";
        $en_array['pop'][] = "Important: Registration amount is 30,000AIDUS ~ 1,000,000AIDUS.<br><br>";
        $en_array['pop'][] = "Please Check your amount";
        $en_array['pop'][] = "When you apply for cancellation, you will receive the token that your administrator has invested in following the verification process with your subscription email address.<br>";
        $en_array['pop'][] = "There is no additional refund fee.<br><br>Are you sure you want a refund?";
        $en_array['pop'][] = "Please Login";
        $en_array['pop'][] = "Are you sure you want to withdraw the cancellation?";
        $en_array['pop'][] = "AidusPay Pre-registration event guide";
        $en_array['pop'][] = "Sign up completed";
        $en_array['btn'][] = "Sign up";
        $en_array['btn'][] = "Cancel";
        $en_array['btn'][] = "Close";
        $en_array['btn'][] = "Confirm";
        $en_array['btn'][] = "withdraw cancellation";

        $cn_array['top'][] = "AidusPay早鸟注册活动";
        $cn_array['top'][] = "无论Aidus Token的当前行情如何";
        $cn_array['top'][] = "保证0.06美元的价格";
        $cn_array['content'][] = "步骤1";
        $cn_array['content'][] = "请将Aidus Token发送到下面的钱包地址。";
        $cn_array['content'][] = "发送至钱包地址的Aidus Token数量*最少0.06美元的投资金额将反映在AidusPay中";
        $cn_array['content'][] = "AidusPay(aiduspay.com)将于2019年第三季度上线。";
        $cn_array['content'][] = "注意：此钱包只接受AIDUS TOKEN。 AIDUS将不会对任何其他货币转账承担任何责任。<br>重要提示：参与数量 30,000~1,000,000AIDUS。";
        $cn_array['content'][] = "步骤2";
        $cn_array['content'][] = "输入您的申请信息（只有以下信息匹配时，您才能参加早鸟注册）";
        $cn_array['content'][] = "TX HASH";
        $cn_array['content'][] = "为确认汇款，请在转账后输入正确的TX HASH值。";
        $cn_array['content'][] = "发送钱包地址";
        $cn_array['content'][] = "请正确输入您发送AIDUS TOKEN的地址。";
        $cn_array['content'][] = "AIDUS数量";
        $cn_array['content'][] = "请输入您的AIDUS TOKEN数量。";
        $cn_array['content'][] = "点击参加二次早鸟注册活动";
        $cn_array['content'][] = "步骤3";
        $cn_array['content'][] = "参加记录";
        $cn_array['content'][] = "活动指引";
        $cn_array['content'][] = "感谢您参加AidusPay(aiduspay.com)早鸟注册活动。";
        $cn_array['content'][] = "所有在早鸟注册的Aidus Token将用于投资Aidus。";
        $cn_array['content'][] = "在AidusPay正式上线后，Aidus Token数量*最少0.06美元的投资金额将反映在AidusPay中。";
        $cn_array['content'][] = "您可以在参加早鸟注册活动后随时取消。经管理员核对后，AIDUS TOKEN会被退回到最初发送的钱包地址（SEND Wallet)进行退款处理。";
        $cn_array['content'][] = "参加早鸟注册活动后，一旦管理员确认收款，状态就会变为“成功”，并将在24小时内（以工作日为标准）进行处理。";
        $cn_array['content'][] = "参加早鸟注册活动时，有关存款和退款的查询，请联系info@aidus.io。";
        $cn_array['info'][] = "成功";
        $cn_array['info'][] = "申请取消";
        $cn_array['info'][] = "待处理";
        $cn_array['info'][] = "取消待定";
        $cn_array['info'][] = "撤回取消";
        $cn_array['info'][] = "完成取消";
        $cn_array['pop'][] = "1, 一旦AIDUS PAY(aiduspay.com)上线，在早鸟注册活动时所投资的AIDUS TOKEN，<br>";
        $cn_array['pop'][] = "都会被反映为最低0.06美元。<br><br><br>AIDUS PAY上线后，如果价格上升超过0.06美元，参加早鸟注册活动的用户将以更高的价格认购。<br><br><br>";
        $cn_array['pop'][] = "2. 您可在任何时候取消认购AIDUS PAY早鸟注册活动，但一旦取消后无法重新注册。<br>";
        $cn_array['pop'][] = "重要提示：参与数量 30,000~1,000,000AIDUS。<br><br>";
        $cn_array['pop'][] = "请检查您的金额。<br>";
        $cn_array['pop'][] = "当您申请注销的时候,您将收到您的管理员在验证过程中所投资的凭据。<br>";
        $cn_array['pop'][] = "没有额外的退款手续费。<br><br>你确定要退款吗?";
        $cn_array['pop'][] = "Please Login";
        $cn_array['pop'][] = "您确定要撤回取消吗？";
        $cn_array['pop'][] = "AidusPay早鸟注册活动指南";
        $cn_array['pop'][] = "加入完毕";
        $cn_array['btn'][] = "注册";
        $cn_array['btn'][] = "取消";
        $cn_array['btn'][] = "关闭";
        $cn_array['btn'][] = "确定";
        $cn_array['btn'][] = "撤回取消";

        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];
    }
    function aidus_reserve($lang){
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();

        $ko_array[] = "아이더스 페이 2차 <span>사전 가입</span> 이벤트";
        $ko_array[] = "아이더스 토큰 가격 현 시세와 상관없이";
        $ko_array[] = "USD0.06 무조건 보장";
        $ko_array[] = "AIDUS 토큰 가격 보장!!";
        $ko_array[] = "아이더스페이 사전 가입 이벤트 참여시 현 시세와 관계 없이 아이더스 페이 출시 (2019년 3Q 예정) 후 최소 USD0.06 무조건 보장.";
        $ko_array[] = "보장 방법 :";
        $ko_array[] = "AIDUS PAY 출시 (2019년 3Q 예정) 후";
        $ko_array[] = "AIDUS PAY에 투자되는 AIDUS TOKEN 가격을 1AIDUS=최소 USD0.06 가격으로 가입 자격 부여";
        $ko_array[] = "AIDUS PAY 가입 자격 부여.";
        $ko_array[] = "아이더스 페이 사전 가입자.";
        $ko_array[] = "아이더스 페이 일반 가입자.";
        $ko_array[] = "구매 수량";
        $ko_array[] = "구매 단가";
        $ko_array[] = "구매 금액";
        $ko_array[] = "가격 보장";
        $ko_array[] = "아이더스페이 투자금액";
        $ko_array[] = "연이자 12%";
        $ko_array[] = "1AIDUS = USD0.013 (July.2.2019기준 가격)";
        $ko_array[] = "1AIDUS = USD0.013 (July.2.2019기준 가격)";
        $ko_array[] = "해당사항 없음.";
        $ko_array[] = "USD7,200 (4.6배)";
        $ko_array[] = "(02.Jul.2019 TOKENmarketcap. 가격 USD0.013 기준)";
        $ko_array[] = "사전 가입자 총 수익!  4.6배이상    >   일반 가입자";
        $ko_array[] = "본 사전가입자에게만 적용되는 아이더스의 특별한 이벤트입니다. ";
        $ko_array[] = "단 사전 가입 이벤트 참여는 30,000~1,000,000AIDUS 이상 참여 가능합니다.<br><br><span style='color:#ff0000;font-size:16px;'>이벤트 참여 안내<br>2019년 7월 25일 15:00 ~ 2019년 8월 15일 14:59 S.Korea 기준<br>총 모금 수량 : 20,000,000AIDUS<br>참여 조건 : 1인당 최소 30,000~최대 1,000,000AIDUS</span>";
        $ko_array[] = "사전가입 이벤트 참여 AIDUS TOKEN 수량 20,000,000 AIDUS 도달시 사전 예고 없이 종료 될 수 있습니다.";
        $ko_array[] = "아이더스 페이란?";
        $ko_array[] = "아이더스 토큰만을 이용하여 가입 가능한 아이더스의 최초의 투자 상품입니다.";
        $ko_array[] = "아이더스 페이 가입시, 투자 금액 기준 연 12% 이자가 매일 지급되며, 연 12% 기준은 최초 가입시 금액을 기준으로 책정됩니다.";
        $ko_array[] = "해당 아이더스 페이는 2019년 3Q에 출시될 예정입니다.";
        $ko_array[] = "aidus_pay_btn.png";
        $ko_array[] = "이벤트 참여";
        $ko_array[] = "1.아이더스 페이 출시 당시 AIDUS TOKEN 가격이 USD0.06 이상이 되면 어떻게 되나요?";
        $ko_array[] = "아이더스가 보장하는USD0.06 은 최소 보장 수치입니다. ";
        $ko_array[] = "아이더스 토큰 가격이 USD0.07이 된다면 USD0.07 가격으로 가입됩니다.";
        $ko_array[] = "2.사전 가입 이벤트 참여 후 아이더스 페이 가입은 어떻게 하나요?";
        $ko_array[] = "아이더스 페이 상품 출시 이후에 홈페이지 안내 및 이메일 통보를 드릴 예정이오니 해당 이메일을 참고하세요";
        $ko_array[] = "3. 사전 가입 후 취소는 가능한가요? ";
        $ko_array[] = "취소 또한 가능합니다. ";
        $ko_array[] = "취소 요청을 하게 되면 관리자가 확인 후 취소처리 됩니다.";
        $ko_array[] = "취소 당시, 아이더스에서 동결을 해제하게 되며, 취소 후 아이더스 토큰을 원하시는 지갑으로 이동 가능합니다.";
        $ko_array[] = "예를 들어 아이더스 토큰 가격이 급등하여 거래소 매매를 원하실 경우에 취소 신청 가능합니다.";
        $ko_array[] = "4. 거래소 매수 가격에 상관없나요?";
        $ko_array[] = "네 사전가입 이벤트 참여자들에게는 매수 가격에 상관없이 최소 USD0.06을 보장하여 드립니다.";
        $ko_array[] = "이벤트 안내";
        $ko_array[] = "아이더스 페이 사전 가입 이벤트는, 회원 가입이후 참여 가능.";
        $ko_array[] = "아이더스 페이 사전 가입 후, 아이더스 토큰 충전시, 아이더스 페이 출시시까지 동결됩니다.";
        $ko_array[] = "아이더스 페이 출시 후 아이더스 페이 사전가입하신 아이더스 토큰은 아이더스 투자 목적으로 이용됩니다.";
        $ko_array[] = "아이더스 페이 상품 출시 이후, 아이더스 토큰 수량 *최소 USD0.06의 투자금액으로 아이더스 페이에 반영됩니다.";
        $ko_array[] = "아이더스 페이의 연 12% 이자 적용 기준은 사전가입시 (입금한 아이더스 토큰 수량*최소 USD0.06) 금액 기준입니다.";
        $ko_array[] = "아이더스 페이 사전 가입 및 중도해지 또는 환매시, 원금은 아이더스 페이 사전가입시 지급한 아이더스 토큰 수량을 그대로 돌려드립니다. ";
        $ko_array[] = "즉 아이더스 페이 사전 가입당시 1,000,000AIDUS를 입금하셨다면 중도해지 당시 시세와 관계없이 1,000,000AIDUS 를 돌려드립니다.";
        $ko_array[] = "최소 참여 수량: 30,000AIDUS";
        $ko_array[] = "이벤트 종료: 사전가입 이벤트 참여 AIDUS TOKEN 수량 20,000,000 AIDUS 도달시 사전 예고 없이 종료 될 수 있습니다.";
        $ko_array[] = "1,000,000AIDUS";
        $ko_array[] = "1,000,000AIDUS";
        $ko_array[] = "USD 13,000";
        $ko_array[] = "USD 13,000";
        $ko_array[] = "USD 0.06";
        $ko_array[] = "USD 60,000";
        $ko_array[] = "USD 13,000";
        $ko_array[] = "USD 1,560";

        $en_array[] = "AidusPay 2nd Pre-registration Event";
        $en_array[] = "Regardless of the Aidus Token's current price";
        $en_array[] = "Guaranteed USD 0.06 for Pre-registrants";
        $en_array[] = "Guaranteed AIDUS TOKEN Price !!";
        $en_array[] = "When participating in the pre-registration event of AidusPay,<br>regardless of the current market price,<br>minimum USD 0.06 guaranteed after the release of AidusPay (scheduled to be 3Q in 19)";
        $en_array[] = "How to guarantee? ";
        $en_array[] = "<span style='font-size:20px;'>After AidusPay is released (scheduled for Q3 2019)</span>";
        $en_array[] = "AIDUS TOKEN invested in AidusPay is eligible for 1AIDUS = minimum USD USD0.06 price";
        $en_array[] = "Qualify to join AidusPay";
        $en_array[] = "AidusPay Pre-registration User";
        $en_array[] = "AidusPay general user";
        $en_array[] = "Quantity purchased";
        $en_array[] = "Purchase Unit Price";
        $en_array[] = "Purchase amount";
        $en_array[] = "Price Guaranteed";
        $en_array[] = "AidusPay Investment amount";
        $en_array[] = "Annual interest 12%";
        $en_array[] = "1AIDUS = USD0.013 (Based on July 2, 2019)";
        $en_array[] = "1AIDUS = USD0.013 (Based on July 2, 2019)";
        $en_array[] = "Not applicable.";
        $en_array[] = "(4.6 times) USD1,560";
        $en_array[] = "(July 2, 2019 TOKENmarketcap. Price based on USD0.013)";
        $en_array[] = "Pre-registration user's total revenue! 4.6 times or more> general user";
        $en_array[] = "This event is only available to users who participate in AidusPay pre-registration.";
        $en_array[] = "However, only more than 30,000~1,000,000 AIDUS is possible to participate in the pre-registration event.<br><br><span style='color: #ff0000;font-size:16px;'>Event Participation Notice<br>July 25, 2019 15:00 ~ August 15, 2019 14:59 (GMT+9)<br>Total fundraising: 20,000,000AIDUS<br>Participation conditions: Minimum 30,000 to maximum 1,000,000AIDUS per person</span>";
        $en_array[] = "When the pre-registration Event AIDUS TOKEN Quantity of 20,000,000 is reached, it may be terminated without prior notice.";
        $en_array[] = "What is AidusPay？";
        $en_array[] = "AidusPay is the first investment product of Aidus to subscribe with only using the Aidus Token.";
        $en_array[] = "When you subscribe AidusPay, you will receive an annual interest of 12% based on your investment amount.";
        $en_array[] = "AidusPay will be released in Q3 of 2019.";
        $en_array[] = "aidus_pay_btn_en.png";
        $en_array[] = "Join the event";
        $en_array[] = "1. What happens if the price of AIDUS TOKEN becomes USD0.06 or higher at the time of AidusPay release?";
        $en_array[] = "USD0.06 is the minimum guaranteed value by Aidus.";
        $en_array[] = "If the Aidus token price is USD0.07, it will be subscribed at USD0.07 price.";
        $en_array[] = "2. How do I subscribe for AidusPay after joining the pre-registration event?";
        $en_array[] = "We will send you homepage information and e-mail notification after the AidusPay release.";
        $en_array[] = "3. Is it possible to cancel after pre-registration?";
        $en_array[] = "Cancellation is possible.";
        $en_array[] = "If you make a cancellation request, it will be canceled after confirmation by the administrator.";
        $en_array[] = "When you request to cancel, Aidus Team will unfreeze the token. After cancellation, you can move the Aidus Token to any wallet of your choice";
        $en_array[] = "For example, you can cancel your order if you want to sell to the exchange because the price of the Aidus tokens has risen.";
        $en_array[] = "4. Does it matter the exchange price?";
        $en_array[] = "Regardless of the purchase price, we will guarantee a minimum of USD0.06 for the participants of the pre-registration events.";
        $en_array[] = "Event guidance";
        $en_array[] = "You can participate in the AidusPay pre-registration event after you sign up.";
        $en_array[] = "After signing up for the AidusPay pre-registration, the amount of Aidus Token you charge will be frozen until AidusPay is released. ";
        $en_array[] = "After the release of the AidusPay, the AidusPay pre-registration Aidus Token will be used for the purpose of investing in Aidus.";
        $en_array[] = "After the release of the AidusPay, the amount of Aidus token quantity *minimum USD0.06 will be reflected as the investment amount in AidusPay. ";
        $en_array[] = "The 12% interest rate is based on the amount of pre-registration (amount of Aidus tokens deposited * minimum USD0.06 ).";
        $en_array[] = "At the time of subscription, early termination or redemption, the principal of the Aidus Token will be returned the same amount when you subscribe the AidusPay pre-registration.";
        $en_array[] = "If you deposit 1,000,000 AIDUS at the time of signing up for the AidusPay subscription, you will be given 1,000,000 AIDUS at the time of cancellation regardless of quotation.";
        $en_array[] = "Minimum Participation Amount: 30,000AIDUS";
        $en_array[] = "The End of the event: When the AIDUS TOKEN Quantity of 20,000,000 is reached, the pre-registration event may be terminated without prior notice.";
        $en_array[] = "1,000,000AIDUS";
        $en_array[] = "1,000,000AIDUS";
        $en_array[] = "USD 13,000";
        $en_array[] = "USD 13,000";
        $en_array[] = "USD0.06";
        $en_array[] = "USD60,000";
        $en_array[] = "USD13,000";
        $en_array[] = "USD1,560";

        $cn_array[] = "AidusPay 二次 早鸟注册活动";
        $cn_array[] = "无论Aidus Token的当前行情如何";
        $cn_array[] = "早鸟注册时得到0.06美元的价格保证";
        $cn_array[] = "保证AIDUS Token 价格!!";
        $cn_array[] = "参与AidusPay早鸟注册活动时，不论当时行情如何，当AidusPay正式上线时（预定于19年第三季度），得到最小USD0.06的价格保证。";
        $cn_array[] = "保证方法";
        $cn_array[] = "<span style='font-size: 24px;'>AidusPay上线（定于2019年第三季度）</span>";
        $cn_array[] = "投资在AidusPay的AIDUS TOKEN都一律计算为最低USD0.06美元的价格";
        $cn_array[] = "有资格加入AidusPay";
        $cn_array[] = "AidusPay早鸟注册用户";
        $cn_array[] = "AidusPay普通用户";
        $cn_array[] = "购买数量";
        $cn_array[] = "购买单价";
        $cn_array[] = "购买金额";
        $cn_array[] = "价格保证";
        $cn_array[] = "AidusPay投资金额";
        $cn_array[] = "年利率12%";
        $cn_array[] = "1AIDUS=0.013美元（以2019年7月2日为标准）";
        $cn_array[] = "1AIDUS=0.013美元（以2019年7月2日为标准）";
        $cn_array[] = "不适用。";
        $cn_array[] = "7200美元（4.6倍）";
        $cn_array[] = "（2019年7月2日，TOKENMarketCap.价格 0.013美元为标准）";
        $cn_array[] = "早鸟注册用户总收入！4.6倍或以上>普通用户";
        $cn_array[] = "本活动的对象只适用于参与AidusPay早鸟注册的用户。";
        $cn_array[] = "本早鸟注册活动的最少参加额为30,000~1,000,000AIDUS以上。<br><br><span style='color: #ff0000;font-size:16px;'>活动参加通知<br>2019年7月25日15:00～2019年8月15日14:59（GMT+9）<br>筹资总额：20,000,000 AIDUS<br>参加条件：每人最少30,000至最多1,000,000AIDUSUS</span>";
        $cn_array[] = "活动结束：本公司有权在参与早鸟注册活动的AIDUS TOKEN数量达到20,000,000以上时终止本活动，恕不另行通知。";
        $cn_array[] = "何谓AidusPay？";
        $cn_array[] = "AidusPay是Aidus第一个只使用Aidus Token认购的投资产品。";
        $cn_array[] = "当您认购AidusPay时，根据您的投资金额，将获得12%的年利息。";
        $cn_array[] = "AidusPay将于2019年第三季度上线。";
        $cn_array[] = "aidus_pay_btn_cn.png";
        $cn_array[] = "参与活动";
        $cn_array[] = "1.如果AIDUS TOKEN的行情在AidusPay上线后上涨超过USD0.06，价格会有变动吗？";
        $cn_array[] = "USD0.06是最低价格保证。";
        $cn_array[] = "如果AIDUS Token行情上涨到USD0.07，则将以USD0.07认购。";
        $cn_array[] = "2.参与早鸟注册活动后如何认购AidusPay？";
        $cn_array[] = "AidusPay正式上线后，我们会向您发送主页信息和电子邮件通知。";
        $cn_array[] = "3.早鸟注册后可以取消吗？";
        $cn_array[] = "是可以取消的。";
        $cn_array[] = "如果您提出取消请求，将在管理员确认后取消。";
        $cn_array[] = "在取消后，将会解除对Aidus Token的冻结。 之后您可以将Aidus Token自由转账到其他的钱包里。";
        $cn_array[] = "例如，因Aidus Token的行情暴涨，您想出售到交易所，在这情况下可以取消订单。";
        $cn_array[] = "4.交易所买入价钱是否重要？";
        $cn_array[] = "无论购买价格如何，我们将为参加早年注册活动的参与者提供最低0.06美元的担保。";
        $cn_array[] = "活动指引";
        $cn_array[] = "您可以在注册后参加AidusPay早鸟注册活动。";
        $cn_array[] = "参加早鸟注册活动后，直到AidusPay正式上线为止，所有被充值的AIDUS TOKEN将会被冻结。";
        $cn_array[] = "在AidusPay正式上线后，所有在早鸟注册的Aidus Token将用于投资Aidus。";
        $cn_array[] = "在AidusPay正式上线后，Aidus Token数量*最少0.06美元的投资金额将反映在AidusPay中。";
        $cn_array[] = "AidusPay的12%年利率是以早鸟注册时（存入的Aidus Token数量*最低0.06美元）的金额为标准。";
        $cn_array[] = "AidusPay早鸟注册、中途撤销或者赎回时，将会退还在活动前支付的同等数量的Aidus Token。";
        $cn_array[] = "即是如果您在AidusPay早鸟注册时存入1,000,000个AIDUS，不论当时的行情如何，我们将在取消时向您归还1,000,000 AIDUS。";
        $cn_array[] = "最低参与数量：30,000AIDUS";
        $cn_array[] = "活动结束：本公司有权在参与早鸟注册活动的AIDUS TOKEN数量达到20,000,000以上时终止本活动，恕不另行通知。";
        $cn_array[] = "1,000,000AIDUSUS";
        $cn_array[] = "1,000,000AIDUSUS";
        $cn_array[] = "13000美元";
        $cn_array[] = "13000美元";
        $cn_array[] = "0.06美元";
        $cn_array[] = "60000美元";
        $cn_array[] = "13000美元";
        $cn_array[] = "1560美元";

        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];
    }
    function preRegistrants($lang){
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();

        $ko_array[] = "사전가입 이벤트";
        $ko_array[] = "AIDUS TOKEN 가격";
        $ko_array[] = "최소<br>USD0.06<br>보장";
        $ko_array[] = "2019년 7월 19일 오후3시<br>S.KOREA 기준";
        $ko_array[] = "사전가입이벤트 참여 후, 신청 안하신 분들은 로그인 후 신청서를 작성해 꼭 작성해 주세요.";
        $ko_array[] = "작성하기";
        $ko_array[] = "사전가입이벤트 참여 하였으나 참여가 종료되어 Etherscan.io 등에서 전송결과가 Fail로 나오는 경우 해당 거래소 고객센터에 문의해 주시기 바랍니다.";
        $ko_array[] = "아이더스페이 2차 사전가입 이벤트";
        //$ko_array[] = "단.6분만에 1차 사전 가입 이벤트<br>종료.";
        $ko_array[] = "15:00 정각 곧 시작합니다.";
        $ko_array[] = "2차 사전가입<br>2019년 7월 25일 15:00";
        $ko_array[] = "총 20,000,000AIDUS 선착순.<br>USD0.06<br> 가격 보장";
        $ko_array[] = "※ 1차 사전가입 이벤트 참여시, 신청서 미작성하신 분은 꼭 신청서를 작성해 주세요.<br><br>신청서 작성 요령은 신청 페이지에서 1차때 전달할때 생성된 TX Hash와 지갑주소 및 수량을 입력 후 참여하시면 됩니다.";
        $ko_array[] = "이벤트 종료<br>2시간 13분<br>20,086,106.89AIDUS<br>참가<br>100.4% 달성";
        $ko_array[] = "1차 2차 사전가입이벤트에 참여해주신 많은 분들께 진심으로 감사드립니다.";

        $en_array[] = "PRE-REGISTRATION EVENT";
        $en_array[] = "AIDUS TOKEN Price";
        $en_array[] = "Min.<br>Guaranteed<br>USD0.06";
        $en_array[] = "19. July. 2019<br>14:00(GMT+8:00)";
        $en_array[] = "If you don't apply after participating in the pre-registration event, please complete the application form after logging in.";
        $en_array[] = "participating";
        $en_array[] = "If you participated in the pre-registration event, but the result of the transmission is sent by mail at Etherscan.io and so on, please contact the customer center of the exchange.";
        $en_array[] = "The 2nd Pre-registration Event";
        //$en_array[] = "The 1st Pre-registration Event of  ended in 6 minutes.";
        $en_array[] = "Ready Start at 14:00(GMT+8:00)";
        $en_array[] = "July 25, 2019 15:00";
        $en_array[] = "Total 20,000,000AIDUS<br>Guaranteed USD0.06";
        $en_array[] = "※ When participating in the first pre-registration event, please fill out the application form if you have not completed the application.<br><br>Please fill in the TX Hash, Wallet address and quantity on the application page.";
        $en_array[] = "Event Ended in 2 hours and 13 minutes<br>20,086,106.89 AIDUS pre-registrated<br>Achieved 100.4%";
        $en_array[] = "Thank you for participating in the first and the second event.";

        $cn_array[] = "早鸟注册活动";
        $cn_array[] = "AIDUS TOKEN Price";
        $cn_array[] = "保证<br>0.06美元<br>的价格";
        $cn_array[] = "19日 7月 2019年<br>14:00(GMT+8:00)";
        $cn_array[] = "参与预先加入活动后,未申请者请登录后填写申请表,务必填写";
        $cn_array[] = "填写";
        $cn_array[] = "参与预先加入活动,但参与终止,在 Etherscan.io等网站传送结果为Fail时,请咨询相关交易所客服中心。";
        $cn_array[] = "第二回早鸟注册活动";
        //$cn_array[] = "第一回早鸟注册活动在开始后短短6分钟内售罄。";
        $cn_array[] = "Ready Start at 14:00(GMT+8:00)";
        $cn_array[] = "第二回早鸟注册活动<br>2019年7月25日15:00(GMT+8:00)";
        $cn_array[] = "总共20,000,000AIDUS,<br>先到先得<br>享有0.06美元<br>价格保证";
        $cn_array[] = "※ 参加第一回早鸟注册活动而未填写申请表的人士，请尽快填写申请表。<br><br>请在申请页面填写发送TX Hash、<br>钱包地址和数量。";
        $cn_array[] = "活动在2小时13分钟内售罄<br>20,086,106.89 AIDUS 参加活动<br>达到100.4%";
        $cn_array[] = "感谢您参加第一次和第二次活动。";


        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];
    }

    function open_popup($lang)
    {
        $lang_array = array();
        $ko_array = array();
        $en_array = array();
        $cn_array = array();
        $jp_array = array();

        $ko_array[] = "금융의 틀을 깨다";
        $ko_array[] = "연 12% 이자";
        $ko_array[] = "Daily 이자 지급";
        $ko_array[] = "무제한 투자";
        $ko_array[] = "FIAT 기준의 이자";
        $ko_array[] = "연 12% 이자!";//5
        $ko_array[] = "AIDUSPAY 자세히보기";
        $ko_array[] = "오늘 하루 안 보기";

        $en_array[] = "Break the Frame of Finance";
        $en_array[] = "12% annual interest";
        $en_array[] = "Interest paid on a daily basis";
        $en_array[] = "Unlimited investment";
        $en_array[] = "Interest on FIAT basis.";
        $en_array[] = "12% annual interest";
        $en_array[] = "Go to AIDUSPAY";
        $en_array[] = "Do not show this today.";


        $cn_array[] = "揭开金融的新一页";
        $cn_array[] = "12%年化利息";
        $cn_array[] = "按日分配利息";
        $cn_array[] = "无限制投资";
        $cn_array[] = "以FIAT为标准的利息";
        $cn_array[] = "12%年化利息!";
        $cn_array[] = "立即到AIDUSPAY";
        $cn_array[] = "今天不再显示";


        $jp_array[] = "Break the Frame of Finance";
        $jp_array[] = "12% annual interest";
        $jp_array[] = "Interest paid on a daily basis";
        $jp_array[] = "Unlimited investment";
        $jp_array[] = "Interest on FIAT basis.";
        $jp_array[] = "Go to AIDUSPAY";
        $jp_array[] = "Do not show this today.";

        $lang_array['en'] = $en_array;
        $lang_array['ko'] = $ko_array;
        $lang_array['cn'] = $cn_array;
        $lang_array['jp'] = $jp_array;

        return $lang_array[$lang];
    }
}
?>