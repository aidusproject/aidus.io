<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/header.php");
$sitekey   = '6LfhFZIUAAAAACB0tDhJYSfRXWusiYdq9AMdUXtK';
$lang_pack = $__lang -> signup($language);
?>
<div class="main_section sub_fund_section" style="text-align: center;">
    <div class="container">
        <div class="fund_title" style="margin-bottom:30px;">
            GLOBAL FUND. ONE COIN
        </div>
        <div class="signup_text">AIDUS</div>
    </div>
    <div class="signup_back">
        <div class="signup_box">
            <div class="signup_box_text">
                <div class="signup_box_title margin-bottom-10"><!--회원가입-->
                    <?=$lang_pack[0] ?>
                </div>
                <div class="signup_box_sub"><!--아래 입력란에 정보를 입력하여 계정을 생성하세요.-->
                    <?=$lang_pack[1] ?>
                </div>
            </div>
            <div class="signup_input_box">
                <form id="signup_frm" name="signup_frm">
                    <label class="signup_input_box_text" for="user_email"><!--이메일-->
                        <?=$lang_pack[2] ?>
                    </label>
                    <input type="email" class="user_input margin-bottom-30" name="id" id="user_email" placeholder="<?=$lang_pack[3] ?>">
                    <label class="signup_input_box_text" for="user_first"><?=$lang_pack[8] ?></label>
                    <input type="text" class="user_input margin-bottom-30" name="sur_name" id="user_first" placeholder="Last Name">
                    <label class="signup_input_box_text" for="user_name"><?=$lang_pack[6] ?></label>
                    <input type="text" class="user_input margin-bottom-30" name="last_name" id="user_name" placeholder="First Name">
                    <label class="signup_input_box_text" for="user_country"><?=$lang_pack[10] ?></label>
                    <select id="presale_citizenship" required="" class="user_input margin-bottom-30" name="citizenship">
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Åland Islands</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia, Plurinational State of</option>
                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, the Democratic Republic of the</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Côte d'Ivoire</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CW">Curaçao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands (Malvinas)</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GG">Guernsey</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard Island and McDonald Islands</option>
                        <option value="VA">Holy See (Vatican City State)</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran, Islamic Republic of</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JE">Jersey</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KP">Korea, Democratic People's Republic of</option>
                        <option <?php if($language == 'ko') echo "selected"; ?> value="KR">Korea, Republic of</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Lao People's Democratic Republic</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macao</option>
                        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia, Federated States of</option>
                        <option value="MD">Moldova, Republic of</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="ME">Montenegro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PS">Palestinian Territory, Occupied</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Réunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation</option>
                        <option value="RW">Rwanda</option>
                        <option value="BL">Saint Barthélemy</option>
                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint Lucia</option>
                        <option value="MF">Saint Martin (French part)</option>
                        <option value="PM">Saint Pierre and Miquelon</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SX">Sint Maarten (Dutch part)</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="SS">South Sudan</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syrian Arab Republic</option>
                        <option value="TW">Taiwan, Province of China</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania, United Republic of</option>
                        <option value="TH">Thailand</option>
                        <option value="TL">Timor-Leste</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                        <option value="VN">Viet Nam</option>
                        <option value="VG">Virgin Islands, British</option>
                        <option value="VI">Virgin Islands, U.S.</option>
                        <option value="WF">Wallis and Futuna</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                    <span class="signup_input_box_text_sub"><?=$lang_pack[12] ?></span>
                    <label class="signup_input_box_text" for="user_phone"><?=$lang_pack[11] ?></label>
                    <input type="text" class="user_input margin-bottom-30" name="tel_num" id="user_phone" placeholder="Telephone">
                    <label class="signup_input_box_text" for="user_pw"><?=$lang_pack[27] ?></label>
                    <span class="signup_input_box_text_sub"><?=$lang_pack[14] ?></span>
                    <input type="password" class="user_input margin-bottom-30" name="password" autocomplete="password" id="user_pw" placeholder="Password">
                    <label class="signup_input_box_text" for="user_pw_chk"><?=$lang_pack[16] ?></label>
                    <input type="password" class="user_input margin-bottom-30" name="password_re" autocomplete="password" id="user_pw_chk" placeholder="Password">
                    <div class="g-recaptcha margin-bottom-20" style="display: flex; justify-content: center;" data-sitekey="<?=$sitekey ?>"></div>
                    <div class="signup_btn_box margin-bottom-20">
                        <span class="signup_btn cursor" id="signup_btn"><?=$lang_pack[24] ?></span>
                        <span class="signup_btn close"><?=$lang_pack[25] ?></span>
                    </div>
                    <?php
                    if($language == 'cn' || $language == 'en') { ?>
                        <div class="agree_box flex_r" data-agree="pp" style="justify-content: flex-start">
                            <img id="pp_btn" src="/images/icon/check.png" alt="">
                            <label class="agree_text">
                                <?=$lang_pack[19] ?><a href="https://d2ao5bnwtor39o.cloudfront.net/pdf/Privacy_Policy_PDF/AIDUS_Privacy_Policy_<?=$lang_file ?>.pdf" target="_blank"><?=$lang_pack[20] ?></a>
                            </label>
                        </div>
                        <div class="agree_box flex_r" data-agree="tc" style="justify-content: flex-start">
                            <img id="tc_btn" src="/images/icon/check.png" alt="">
                            <label class="agree_text">
                            <?=$lang_pack[21] ?><a href="https://d2ao5bnwtor39o.cloudfront.net/pdf/Terms&Conditions_PDF/AIDUS_Terms&Conditions_<?=$lang_file ?>.pdf" target="_blank"><?=$lang_pack[22] ?></a>
                            </label>
                        </div>
                    <?php } else { ?>
                        <div class="agree_box flex_r" data-agree="pp" style="justify-content: flex-start">
                            <img id="pp_btn" src="/images/icon/check.png" alt="">
                            <label class="agree_text">
                                <a href="https://d2ao5bnwtor39o.cloudfront.net/pdf/Privacy_Policy_PDF/AIDUS_Privacy_Policy_<?=$lang_file ?>.pdf" target="_blank"><?=$lang_pack[19] ?></a> <?=$lang_pack[20] ?>
                            </label>
                        </div>
                        <div class="agree_box flex_r" data-agree="tc" style="justify-content: flex-start">
                            <img id="tc_btn" src="/images/icon/check.png" alt="">
                            <label class="agree_text"><a href="https://d2ao5bnwtor39o.cloudfront.net/pdf/Terms&Conditions_PDF/AIDUS_Terms&Conditions_<?=$lang_file ?>.pdf" target="_blank"><?=$lang_pack[21] ?></a><?=$lang_pack[22] ?>.</label>
                        </div>
                    <?php } ?>
                    <input type="hidden" name="agree_whitepp" id="agree_whitepp">
                    <input type="hidden" name="agree_tokensale" id="agree_tokensale">
                    <input type="hidden" name="type" value="put">
                </form>
                <div class="face_book_btn" id="facebook_login">
                    <span>FACEBOOK LOGIN</span>
                </div>
            </div>

        </div>
    </div>
    <div class="signup_bottom">

    </div>
</div>
<script>
    $("#signup_btn").click(function(){

        var email       = "";
        var emailRegex  = /^[0-9a-zA-Z_\-.]+@[0-9a-zA-Z_\-]+(\.[0-9a-zA-Z_\-]+){1,2}$/;
        var pwLoc       = $("#user_pw");
        var pw          = pwLoc.val();
        var num         = pw.search(/[0-9]/g);
        var eng         = pw.search(/[a-z]/ig);
        var spe         = pw.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);
        var pwChkLoc    = $("#user_pw_chk");
        var pwChk       = pwChkLoc.val();
        var numChk      = pwChk.search(/[0-9]/g);
        var engChk      = pwChk.search(/[a-z]/ig);
        var speChk      = pwChk.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);

        if(!chkSubmit($("#user_email"), "<?=$lang_pack[3] ?>")) {
            return false;
        } else if(!emailRegex.test($("#user_email").val())){
            alert("<?=$lang_pack[4] ?>");
            $("#user_email").focus();
            return false;
        } else if(!chkSubmit($("#user_first"), "<?=$lang_pack[9] ?>")) {
            return false;
        } else if(!chkSubmit($("#user_name"), "<?=$lang_pack[7] ?>")) {
            return false;
        } else if(!chkSubmit($("#user_phone"), "<?=$lang_pack[12] ?>")) {
            return false;
        } else if(!chkSubmit($("#user_pw"), "<?=$lang_pack[15] ?>")) {
            return false;
        } else if(!chkSubmit($("#user_pw_chk"), "<?=$lang_pack[17] ?>")) {
            return false;
        } else if(pw.length < 10 || pw.length > 20){
            alert("<?=$lang_pack[14] ?>");
            pwLoc.focus();
            return false;
        } else if(pw.search(/₩s/) != -1){
            alert("<?=$lang_pack[15] ?>");
            pwLoc.focus();
            return false;
        } else if( (num < 0 && eng < 0) || (eng < 0 && spe < 0) || (spe < 0 && num < 0) ){
            alert("<?=$lang_pack[14] ?>");
            pwLoc.focus();
            return false;
        } else if(pwChk.length < 10 || pwChk.length > 20){
            alert("<?=$lang_pack[14] ?>");
            pwChkLoc.focus();
            return false;
        } else if(pwChk.search(/₩s/) != -1){
            alert("<?=$lang_pack[17] ?>");
            pwChkLoc.focus();
            return false;
        } else if( (numChk < 0 && engChk < 0) || (engChk < 0 && speChk < 0) || (speChk < 0 && numChk < 0) ){
            alert("<?=$lang_pack[14] ?>");
            pwChkLoc.focus();
            return false;
        } else if($("#user_pw").val() != $("#user_pw_chk").val()){
            alert("<?=$lang_pack[18] ?>");
            return false;
        } else if($("#agree_whitepp").val() == ''){
            alert("<?=$lang_pack[19] ?><?=$lang_pack[20] ?>");
            return false;
        } else if($("#agree_tokensale").val() == '') {
            alert("<?=$lang_pack[21] ?><?=$lang_pack[22] ?>");
            return false;
        } else if (grecaptcha.getResponse() == ""){
            alert("Please Check CapCha");
            return false;
        } else {
            var form = $("#signup_frm").serialize();

            $.ajax({
                url: "/ajax/ajax.user.php",
                type: "post",
                data : form,
                dataType: "json",
                headers: { "X-CSRF-TOKEN": $("meta[name='csrf']").attr("content") },
                async: true,
                error: function (e) {
                },
                success: function (result) {
                    if(result == 101){
                        alert("<?=$lang_pack[5] ?>");
                    }else if(result == 102){
                        alert("<?=$lang_pack[4] ?>");
                    }else if(result == 109){
                        alert("<?=$lang_pack[18] ?>");
                    }else if(result == 112){
                        alert("SignUp Failed..");
                    }else if(result == 200){
                        location.href='/login.php';
                    }
                }
            });
        }
    });

    $(".agree_box").click(function(){
        var dataAgree = $(this).attr('data-agree');
        if($(this).hasClass('on')){
            $(this).find('img').attr('src','/images/icon/check.png');
            $(this).removeClass('on');
            if(dataAgree == 'pp'){
                $("#agree_whitepp").val('');
            }else{
                $("#agree_tokensale").val('');
            }
        }else{
            $(this).find('img').attr('src','/images/icon/check_on.png');
            $(this).addClass('on');
            if(dataAgree == 'pp'){
                $("#agree_whitepp").val('Y');
            }else{
                $("#agree_tokensale").val('Y');
            }
        }
    });

    $('#facebook_login').on('click', function() {
        alert("now working yet");
    });
    $(".user_input").keydown(function(k){
        if(k.keyCode == 13){
            $("#signup_btn").click();
        }
    });

</script>
<?php
include_once ("{$_SERVER['DOCUMENT_ROOT']}/inc/footer.php");
?>

