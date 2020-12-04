<?php
class API {

    /** Encrypt Functions */
    function getEncrypt($string) {
        GLOBAL $__cf;

        $return_arr = array();
        if(empty($string)) {
            $return_arr['status']  = 100;
            $return_arr['message'] = "parameters are empty";

            return $return_arr;
        } else {
            $encrypt_string = $__cf -> Encrypt($string);
            if(empty($encrypt_string)) {
                $return_arr['status']  = 101;
                $return_arr['message'] = "encrypt function error";

                return $return_arr;
            }
            $return_arr['status']  = 200;
            $return_arr['string']  = $encrypt_string;
            return $return_arr;
        }
    }
    function getDecrypt($encrypt_string) {
        GLOBAL $__cf;

        $return_arr = array();
        if(empty($encrypt_string)) {
            $return_arr['status']  = 100;
            $return_arr['message'] = "parameters are empty";
        } else {
            $decrypt_string = $__cf -> Decrypt($encrypt_string);
            if(empty($decrypt_string)) {
                $return_arr['status']  = 101;
                $return_arr['message'] = "encrypt param is wrong";
            } else {
                $return_arr['status'] = 200;
                $return_arr['string'] = $decrypt_string;
            }
        }

        return $return_arr;
    }
    function getQtsInfo(){
        GLOBAL $mysqli;

        $return_arr = [];

        $sql = "select round(avg(yield),2) as irr,round(avg(yield_2),2) as yield, yield_2_date from qts group by date_format(yield_2_date, '%Y%m') order by yield_2_date asc";
        $res = $mysqli -> query($sql);
        while($row = $res -> fetch_object()){
            array_push($return_arr,$row);
        }
        return $return_arr;
    }
    function getYieldList() {
        GLOBAL $mysqli;

        $return_arr = [];

        $sql = "select yield_2, yield_2_date from qts group by yield_2_date order by yield_2_date asc";
        $res = $mysqli -> query($sql);
        $xarr = [];
        $yarr = [];
        while($row = $res -> fetch_object()) {
            $xarr[] = str_replace(' 00:00:00', '',$row -> yield_2_date );
            $yarr[] = str_replace("%",'',$row -> yield_2);
        }

        $return_arr['x_axis'] = $xarr;
        $return_arr['y_axis'] = $yarr;

        return $return_arr;
    }
    function getYieldList_2() {
        GLOBAL $mysqli;

        $return_arr = [];

        $sql = "select yield_2, yield_2_date from qts where reg_date > '2019-10-01' group by yield_2_date order by yield_2_date asc";
        $res = $mysqli -> query($sql);
        $xarr = [];
        $yarr = [];
        while($row = $res -> fetch_object()) {
            $xarr[] = str_replace(' 00:00:00', '',$row -> yield_2_date );
            $yarr[] = str_replace("%",'',$row -> yield_2);
        }

        $return_arr['x_axis'] = $xarr;
        $return_arr['y_axis'] = $yarr;

        return $return_arr;
    }
    /** User Functions */
    function getUser($encrypt_seq) {
        GLOBAL $__cf;
        GLOBAL $mysqli;

        $return_arr = array();

        if (!isset($encrypt_seq) || empty($encrypt_seq)) {
            $return_arr['status'] = 100;
            $return_arr['message'] = "required parameters are empty";
        } else {
            $decrypt_user_seq = $__cf -> Decrypt($encrypt_seq);
            if (empty($decrypt_user_seq)) {
                $return_arr['status'] = 101;
                $return_arr['message'] = "parameters are wrong";
            } else {
                $sql = "select id, 
                               last_name, 
                               sur_name, 
                               tel_num, 
                               reg_date, 
                               citizenship,
                               user_role_seq,
                               agree_whitepp,
                               agree_tokensale,
                               forget_password,
                               receive_wallet_address, 
                               user_status 
                          from user 
                         where seq = {$decrypt_user_seq}";
                $res = $mysqli -> query($sql);
                $cnt = $res -> num_rows;
                if (!$res || $cnt !== 1) {
                    $return_arr['status'] = 102;
                    $return_arr['message'] = "user is not exist";
                } else {
                    $return_arr['status'] = 200;
                    $return_arr['data'] = $res->fetch_assoc();
                }
            }
        }

        return $return_arr;
    }
    function putUser($array) {
        GLOBAL $mysqli;
        GLOBAL $__enc;
        GLOBAL $__cf;

        $return_arr = array();

        if(is_array($array)) {

            $id                     = "";
            $last_name              = "";
            $sur_name               = "";
            $tel_num                = "";
            $citizenship            = "";
            $password               = "";
            $password_re            = "";

            $agree_whitepp          = "";
            $agree_tokensale        = "";

            $authentication_key     = "";

            $user_role_seq          = 1;
            $forget_password        = "N";
            $receive_wallet_address = "N";
            $user_status            = "00";

            $id                     = trim($array['id']);
            $last_name              = trim($array['last_name']);
            $sur_name               = trim($array['sur_name']);
            $tel_num                = trim($array['tel_num']);
            $citizenship            = trim($array['citizenship']);
            $password               = trim($array['password']);
            $password_re            = trim($array['password_re']);
            $agree_whitepp          = trim($array['agree_whitepp']);
            $agree_tokensale        = trim($array['agree_tokensale']);

            if(empty($id) || $id == '') {
                $return_arr['status']    = 100;
                $return_arr['message'] = "id is required";
                return $return_arr;
            } else {
                $sql = "select count(*) as cnt from user where id = '{$id}'";
                $res = $mysqli -> query($sql);
                $row = $res -> fetch_object();
                $cnt = $row -> cnt;
                if($cnt > 0) {
                    $return_arr['status']    = 101;
                    $return_arr['message'] = "same id is exist {$id}";
                    return $return_arr;
                } else {

                    $id_check = preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $id);

                    if(!$id_check) {
                        $return_arr['status']    = 102;
                        $return_arr['message'] = "Id is not email format";
                        return $return_arr;
                    }


                    if (empty($last_name) || $last_name == '') { //required
                        $return_arr['status']    = 103;
                        $return_arr['message'] = "last name is required";

                        return $return_arr;
                    }

                    if (empty($sur_name) || $sur_name == '') { //required
                        $return_arr['status']    = 104;
                        $return_arr['message'] = "sur name is required";

                        return $return_arr;
                    }

                    if (empty($tel_num) || $tel_num == '') { //required
                        $return_arr['status']    = 105;
                        $return_arr['message'] = "tel number is required";

                        return $return_arr;
                    }

                    if (empty($citizenship) || $citizenship == '') { //required
                        $return_arr['status']    = 106;
                        $return_arr['message'] = "citizenship is required";

                        return $return_arr;
                    }

                    $citizenship_country = $__cf -> code_to_country(strtoupper($citizenship));

                    if(empty($citizenship_country) ||$citizenship_country == '') {
                        $return_arr['status']    = 114;
                        $return_arr['message'] = "citizenship code is not correct";

                        return $return_arr;
                    }

                    if (empty($password) || $password == '') { //required
                        $return_arr['status']    = 107;
                        $return_arr['message'] = "password is required";

                        return $return_arr;
                    }

                    if (empty($password_re) || $password_re == '') { //required
                        $return_arr['status']    = 108;
                        $return_arr['message'] = "password retype is required";

                        return $return_arr;
                    }

                    if ($password !== $password_re) {
                        $return_arr['status']    = 109;
                        $return_arr['message'] = "password retype must same value of password";

                        return $return_arr;
                    }

                    if (empty($agree_whitepp) || $agree_whitepp == '' || $agree_whitepp !== 'Y') {
                        $return_arr['status']    = 110;
                        $return_arr['message'] = "must agree whitepp";

                        return $return_arr;
                    }

                    if (empty($agree_tokensale) || $agree_tokensale == '' || $agree_tokensale !== 'Y') {
                        $return_arr['status']    = 111;
                        $return_arr['message'] = "must agree tokensale";

                        return $return_arr;
                    }

                    $password           = $__enc -> encode($password);
                    $authentication_key = $__enc -> encode($id);

                    $sql = "insert user 
                               set id                       = '{$id}', 
                                   last_name                = '{$last_name}', 
                                   sur_name                 = '{$sur_name}', 
                                   tel_num                  = '{$tel_num}',
                                   reg_date                 =  now(),
                                   citizenship              = '{$citizenship}',
                                   password                 = '{$password}',
                                   authentication_key       = '{$authentication_key}',
                                   user_role_seq            =  {$user_role_seq},
                                   agree_whitepp            = '{$agree_whitepp}',
                                   agree_tokensale          = '{$agree_tokensale}',
                                   forget_password          = '{$forget_password}',
                                   receive_wallet_address   = '{$receive_wallet_address}',
                                   user_status              = '{$user_status}' 
                                   ";
                    $res = $mysqli -> query($sql);
                    if(!$res) {
                        $return_arr['status']    = 112;
                        $return_arr['message'] = "db insert is failed";
                        return $return_arr;
                    } else {
                        $return_arr['status']    = 200;
                        return $return_arr;
                    }
                }
            }

        } else {
            $return_arr['status']    = 113;
            $return_arr['message'] = "params must array";

            return $return_arr;
        }
    }
    function updateUser($array) {
        GLOBAL $__cf;
        GLOBAL $mysqli;
        GLOBAL $__enc;

        $return_arr = array();

        if(is_array($array)) {
            $encrypt_seq = $array['encrypt_seq'];
            if(!isset($encrypt_seq) || empty($encrypt_seq)) {
                $return_arr['code']    = 100;
                $return_arr['message'] = "required param(encrypt_seq) is not exist";
                return $return_arr;
            } else {
                $seq  = $__cf -> Decrypt($encrypt_seq);
                $_set = array();

                $last_name              = "";
                $sur_name               = "";
                $citizenship            = "";
                $tel_num                = "";
                $user_role_seq          = "";
                $agree_whiteapp         = "";
                $agree_tokensale        = "";
                $forget_password        = "";
                $receive_wallet_address = "";
                $user_status            = "";
                $user_password          = "";

                $last_name              = trim($array['last_name']);
                $sur_name               = trim($array['sur_name']);
                $citizenship            = trim($array['citizenship']);
                $tel_num                = trim($array['tel_num']);
                $user_role_seq          = trim($array['user_role_seq']);
                $agree_whiteapp         = trim($array['agree_whiteapp']);
                $agree_tokensale        = trim($array['agree_tokensale']);
                $forget_password        = trim($array['forget_password']);
                $receive_wallet_address = trim($array['receive_wallet_address']);
                $user_status            = trim($array['user_status']);
                $user_password          = trim($array['user_password']);

                if($last_name !== '') {
                    $_set[] = "last_name = '{$last_name}'";
                }
                if($sur_name !== '') {
                    $_set[] = "sur_name = '{$sur_name}'";
                }
                if($citizenship !== '') {
                    $_set[] = "citizenship = '{$citizenship}'";
                }
                if($tel_num !== '') {
                    $_set[] = "tel_num = '{$tel_num}'";
                }
                if($user_role_seq !== '') {
                    $_set[] = "user_role_seq = {$user_role_seq}";
                }
                if($agree_whiteapp !== '') {
                    $_set[] = "agree_whiteapp = '{$agree_whiteapp}'";
                }
                if($agree_tokensale !== '') {
                    $_set[] = "agree_tokensale = '{$agree_tokensale}'";
                }
                if($forget_password !== '') {
                    $_set[] = "forget_password = '{$forget_password}'";
                }
                if($receive_wallet_address !== '') {
                    $_set[] = "receive_wallet_address = '{$receive_wallet_address}'";
                }
                if($user_status !== '') {
                    $_set[] = "$user_status = '{$user_status}'";
                }

                if(count($_set) == 0) {
                    $return_arr['status']    = 101;
                    $return_arr['message'] = "update params are empty";
                    return $return_arr;

                } else {
                    $_set_string = implode(",",$_set);

                    if(empty($user_password) || $user_password == "") {
                        $return_arr['status']  = 104;
                        $return_arr['message'] = "password is empty";

                        return $return_arr;
                    } else {

                        $sql = "select password from user where seq = {$seq}";
                        $res = $mysqli -> query($sql);
                        $row = $res -> fetch_object();
                        $password = $row -> password;

                        $password_check = $__enc -> matches($user_password, $password);

                        if(!$password_check) {
                            $return_arr['status']  = 105;
                            $return_arr['message'] = "password is not correct";

                            return $return_arr;
                        }

                    }

                    $sql = "update user set {$_set_string} where seq = {$seq}";
                    $res = $mysqli -> query($sql);
                    if(!$res) {
                        $return_arr['status']    = 102;
                        $return_arr['message'] = "db update filed";
                        return $return_arr;

                    } else {
                        $return_arr['status']    = 200;
                        return $return_arr;
                    }
                }
            }
        } else {
            $return_arr['status']    = 103;
            $return_arr['message'] = "params must array";
            return $return_arr;
        }
    }

    /** User Actions */
    function getWalletAddress($encrypt_seq) {
        GLOBAL $__cf;

        $return_arr = array();

        if (empty($encrypt_seq) || $encrypt_seq == "") {
            $return_arr['status']  = 100;
            $return_arr['message'] = "encrypt sequence is empty";

            return $return_arr;
        }

        $seq = $__cf -> Decrypt($encrypt_seq);
        if(empty($seq) || $seq == "") {
            $return_arr['status']  = 101;
            $return_arr['message'] = "sequence is not correct";

            return $return_arr;
        }

        $url   = "/api/address";
        $param = $url . "?userSeq=" . $seq;


        $result = $this -> getCurl($param);

        $error_message = "";
        $address       = "";

        if(!isset($result -> address)) {
            $error_message = $result -> message;

            $return_arr['status'] = 102;
            $return_arr['message'] = $error_message;

            return $return_arr;

        } else {
            $address = $result -> address;

            $return_arr['status']  = 200;
            $return_arr['wallet_address'] = $address;

            return $return_arr;
        }

    }
    function getWalletInout($array) {
        GLOBAL $__cf;

        $return_arr = array();

        $enc_seq    = $array['encrypt_sequence'];
        $page       = $array['page'];
        $type       = $array['type'];
        $status     = $array['status'];

        $url        = "/api/inout";

        $seq_res    = $this -> getDecrypt($enc_seq);
        if($seq_res['status'] !== 200) {
            $return_arr['status']  = 102;
            $return_arr['message'] = "encrypt_sequence param is wrong";
            return $return_arr;
        } else {
            $seq = $seq_res['string'];
        }

        if(empty($seq) || $seq == '') {
            $return_arr['status']  = 100;
            $return_arr['message'] = "user seq is required";

            return $return_arr;
        }


        if(empty($page) || $page <= 0) {
            $page = 1;
        }

        $params = "userSeq=" . $seq . "&page=" . $page;

        if($type !== '') {
           $params .= "&type=" . $type;
        }

        if($status !== '') {
            $params .= "&status=" . $status;
        }

        $result = $this -> postCurl($url, $params);


        if(isset($result -> message)) {
            $return_arr['status']  = 101;
            $return_arr['message'] = "API Error -> " . $result -> message;
            return $return_arr;
        }

        $data_array = array();

        $total_cnt  = $result -> totalCnt;
        $total_page = $result -> totalPage;

        $return_arr['status']     = 200;
        $return_arr['total_cnt']  = $total_cnt;
        $return_arr['total_page'] = $total_page;

        foreach($result -> result as $key => $value) {
            $sub_arr = array();
            $sub_arr['seq']          = $value -> seq;
            $sub_arr['txid']         = $value -> txid;
            $sub_arr['amount']       = $value -> amount;
            $sub_arr['block_number'] = $value -> block_number;
            $sub_arr['create_date']  = $value -> create_date;
            $sub_arr['status']       = $value -> status;
            $sub_arr['type']         = $value -> type;
            $sub_arr['dt_format']    = $value -> dt_format;

            $data_array[] = $sub_arr;
        }

        $return_arr['data'] = $data_array;

        return $return_arr;

    }
    function getCoinInfo($encrypt_seq) {
        GLOBAL $__cf;

        $return_arr = array();

        if (empty($encrypt_seq) || $encrypt_seq == "") {
            $return_arr['status']  = 100;
            $return_arr['message'] = "encrypt sequence is empty";
            return $return_arr;
        }

        $seq = $__cf -> Decrypt($encrypt_seq);
        if(empty($seq) || $seq == "") {
            $return_arr['status']  = 101;
            $return_arr['message'] = "sequence is not correct";
            return $return_arr;
        }

        $url   = "/api/info";

        $param = $url . "?userSeq=" . $seq;
        $result = $this -> getCurl($param);

        $eth_deposit  = 0;
        $aid_exchange = 0;
        $aid_withdraw = 0;
        $aid_balance  = 0;

        $eth_deposit  = $result -> eth_deposit;
        $aid_exchange = $result -> aid_exchange;
        $aid_withdraw = $result -> aid_withdraw;
        $aid_balance  = $result -> aid_balance;

        $return_arr['status']       = 200;
        $return_arr['eth_deposit']  = $eth_deposit;
        $return_arr['aid_exchange'] = $aid_exchange;
        $return_arr['aid_withdraw'] = $aid_withdraw;
        $return_arr['aid_balance']  = $aid_balance;

        return $return_arr;

    }
    function withdrawCoin($array) {
        GLOBAL $__cf;

        $return_arr = array();

        $enc_user_seq = 0;
        $amount       = 0;
        $to_address   = "";

        if(isset($array['enc_user_seq'])) {
            $enc_user_seq = trim($array['enc_user_seq']);
        }
        if(isset($array['amount'])) {
            $amount       = trim($array['amount']);
        }
        if(isset($array['to_address'])) {
            $to_address   = trim($array['to_address']);
        }

        if(empty($enc_user_seq) || $enc_user_seq == '') {
            $return_arr['status']  = 100;
            $return_arr['message'] = "Encrypt user sequence is empty";
            return $return_arr;
        }
        if(empty($amount) || $amount == '') {
            $return_arr['status']  = 101;
            $return_arr['message'] = "Amount is empty";
            return $return_arr;
        }
        if(empty($to_address) || $to_address == '') {
            $return_arr['status']  = 102;
            $return_arr['message'] = "to_address is empty";
            return $return_arr;
        }

        $decrypt_res = $this -> getDecrypt($enc_user_seq);
        if($decrypt_res['status'] !== 200) {
            $return_arr['status']  = 103;
            $return_arr['message'] = "Decrypt user sequence error - status : " . $decrypt_res['status'] . ", error => " . $decrypt_res['message'];
            return $return_arr;
        }

        $user_seq    = $decrypt_res['string'];
        $post_param  = "userSeq="     . $user_seq;
        $post_param .= "&to_address=" . $to_address;
        $post_param .= "&amount="     . $amount;

        $post_uri    = "/api/withdraw";
        $post_res    = $this -> postCurl($post_uri, $post_param);

        $post_status = intval($post_res -> error);
        if($post_status == 0) {
            $return_arr['status'] = 200;
            return $return_arr;
        } else {
            switch ($post_status) {
                case 1000 :
                    $return_arr['status']  = 104;
                    $return_arr['message'] = "api error => status[1000], user seq error";
                    break;
                case 2000 :
                    $return_arr['status']  = 105;
                    $return_arr['message'] = "api error => status[2000], to_address is empty";
                    break;
                case 3000 :
                    $return_arr['status']  = 106;
                    $return_arr['message'] = "api error => status[3000], to_address is wrong";
                    break;
                case 4000 :
                    $return_arr['status']  = 107;
                    $return_arr['message'] = "api error => status[4000], amount is wrong";
                    break;
                case 5000 :
                    $return_arr['status']  = 108;
                    $return_arr['message'] = "api error => status[5000], less than minimum amount";
                    break;
                case 6000 :
                    $return_arr['status']  = 109;
                    $return_arr['message'] = "api error => status[6000], over maximum amount";
                    break;
            }
            return $return_arr;
        }

    }
    function withdrawPasswordCheck($enc_id, $password) {
        GLOBAL $mysqli;
        GLOBAL $__enc;

        $return_arr = array();

        $id = "";

        if(empty($password) || $password == '') {
            $return_arr['status']  = 100;
            $return_arr['message'] = "Password is empty";
            return $return_arr;
        }
        if(empty($enc_id) || $enc_id == '') {
            $return_arr['status']  = 101;
            $return_arr['message'] = "Encrypt Id is empty";
            return $return_arr;
        }

        $id_dec_result = $this -> getDecrypt($enc_id);
        $id_dec_status = $id_dec_result['status'];
        if($id_dec_status !== 200) {
            $return_arr['status']  = 102;
            $return_arr['message'] = "Decrypt user id failed - decrypt status = [" . $id_dec_result['status'] ."], error => " . $id_dec_result['message'];
            return $return_arr;
        }

        $id = $id_dec_result['string'];

        $sql = "select count(*) as cnt, password from user where id = '{$id}'";
        $res = $mysqli -> query($sql);
        if(!$res) {
            $return_arr['status']  = 103;
            $return_arr['message'] = "Sql error - select user count check error";
            return $return_arr;
        }
        $row = $res -> fetch_object();
        $cnt = $row -> cnt;
        $pw  = $row -> password;
        if($cnt !== '1') {
            $return_arr['status']  = 104;
            $return_arr['message'] = "ID [" . $id . "] not exist";
            return $return_arr;
        }

        $match_res = $__enc -> matches($password, $pw);

        if(!$match_res) {
            $return_arr['status']  = 105;
            $return_arr['message'] = "password is not corret";
            return $return_arr;
        }

        $return_arr['status']  = 200;
        return $return_arr;
    }

    /** get out sources */
    function getCurl($url) {
        $url = "http://52.79.242.240" . $url;
        $auth_key = "Basic E3YRZ8fEm6IBus7";

        $header_data   = [];
        $header_data[] = 'content-type: application/x-www-form-urlencoded';
        $header_data[] = 'accept:application/json';
        $header_data[] = 'Authorization:'.$auth_key;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_ENCODING, "UTF-8");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header_data);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $curl_result = curl_exec ($ch);
        curl_close($ch);

        return json_decode($curl_result);
    }
    function postCurl($url, $post_data) {
        $url = "http://52.79.242.240" . $url;
        $auth_key = "Basic E3YRZ8fEm6IBus7";

        $header_data   = [];
        $header_data[] = 'content-type: application/x-www-form-urlencoded';
        $header_data[] = 'accept:application/json';
        $header_data[] = 'Authorization:'.$auth_key;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_ENCODING, "UTF-8");
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $curl_result = curl_exec ($ch);
        curl_close($ch);

        return json_decode($curl_result);
    }

    /** Auth Functions */
    function authLogin($array) {
        GLOBAL $mysqli;
        GLOBAL $__enc;
        GLOBAL $__cf;
        GLOBAL $__sess;

        $return_arr = array();

        $user_id = "";
        $user_pw = "";

        if(isset($array['user_id'])) {
            $user_id = trim($array['user_id']);
        }

        if(isset($array['user_password'])) {
            $user_pw = trim($array['user_password']);
        }

        if(empty($user_id) || $user_id == '') {
            $return_arr['status']  = 100;
            $return_arr['message'] = "user id is empty";

            return $return_arr;
        }

        if(empty($user_pw) || $user_pw == '') {
            $return_arr['status']  = 101;
            $return_arr['message'] = "user password is empty";

            return $return_arr;
        }

        $sql = "select seq, password, forget_password from user where id = '{$user_id}'";
        $res = $mysqli -> query($sql);
        $cnt = $res -> num_rows;
        if($cnt < 1) {
            $return_arr['status']  = 102;
            $return_arr['message'] = "user id is not exist";

            return $return_arr;
        } else if ($cnt > 1) {
            $return_arr['status']  = 103;
            $return_arr['message'] = "duplicate id is exist";

            return $return_arr;
        }

        if(!$res) {
            $return_arr['status']  = 104;
            $return_arr['message'] = "db select error (sql error)";

            return $return_arr;
        }

        $row                    = $res -> fetch_object();
        $sel_seq                = $row -> seq;
        $sel_password           = $row -> password;
        $forget_password        = $row -> forget_password;

        $password_check = $__enc -> matches($user_pw, $sel_password);

        if(!$password_check) {
            $return_arr['status']  = 105;
            $return_arr['message'] = "password not correct => " . $user_pw;

            return $return_arr;
        } else {
            $enc_seq = $__enc -> encode($sel_seq);
            $__sess -> __set("AIDSEQ",  $__cf -> Encrypt($sel_seq));
            $__sess -> __set("AIDAUTH", $__cf -> Encrypt($user_id));

            $session_seq = $_SESSION['AIDSEQ'];
            $session_id  = $_SESSION['AIDAUTH'];

            if(empty($session_seq) || empty($session_id)) {
                $return_arr['status']  = 106;
                $return_arr['message'] = "session insert error";

                return $return_arr;
            }

            $return_arr['status'] = 200;
            $return_arr['data'] = array (
                "sess_seq"   => $session_seq,
                "sess_id"    => $session_id,
                "reset_pass" => $forget_password
            );

            return $return_arr;

        }

    }
    function authLogout() {
        GLOBAL $__sess;
        $__sess -> __unset('AIDSEQ');
        $__sess -> __unset('AIDAUTH');

        $return_arr = array();
        $return_arr['status'] = 200;

        return $return_arr;
    }
    function authCheck($array) {
        GLOBAL $mysqli;

        $return_arr = array();

        if(!isset($array['AIDAUTH'])) {
            $return_arr['status'] = 100;
            $return_arr['message'] = "AIDAUTH is not defined";
            return $return_arr;
        }

        if(!isset($array['AIDSEQ'])) {
            $return_arr['status'] = 101;
            $return_arr['message'] = "AIDSEQ is not defined";
            return $return_arr;
        }

        $enc_id  = $array['AIDAUTH'];
        $enc_seq = $array['AIDSEQ'];

        if(empty($enc_id) || $enc_id == '') {
            $return_arr['status'] = 102;
            $return_arr['message'] = "user id is empty";
            return $return_arr;
        }

        if(empty($enc_seq) || $enc_seq == '') {
            $return_arr['status'] = 103;
            $return_arr['message'] = "Sequence is empty";
            return $return_arr;
        }

        $seq_res = $this -> getDecrypt($enc_seq);
        $id_res  = $this -> getDecrypt($enc_id);

        if($id_res['status'] == 200) {
            $id = $id_res['string'];
        } else {
            $return_arr['status'] = 104;
            $return_arr['message'] = "decrypt error - check api getDecrypt error status check => " . $id_res['status'] . " : " . $id_res['message'];
            return $return_arr;
        }

        if($seq_res['status'] == 200) {
            $seq = $seq_res['string'];
        } else {
            $return_arr['status'] = 105;
            $return_arr['message'] = "decrypt error - check api getDecrypt error status check => " . $seq_res['status'] . " : " . $seq_res['message'];
            return $return_arr;
        }

        if(empty($id) || $id == '') {
            $return_arr['status'] = 106;
            $return_arr['message'] = "user id is empty";
            return $return_arr;
        }

        if(empty($seq) || $seq == '') {
            $return_arr['status'] = 107;
            $return_arr['message'] = "Sequence is empty";
            return $return_arr;
        }

        $sql = "select count(*) as cnt from user where id = '{$id}' and seq = {$seq}";
        $res = $mysqli -> query($sql);
        $row = $res -> fetch_object();
        $cnt = $row -> cnt;

        if($cnt !== '1') {
            $return_arr['status'] = 108;
            $return_arr['message'] = "User is not exist or multiple user error";
            return $return_arr;
        }

        $return_arr['status']  = 200;
        return $return_arr;

    }

    /** Board Functions */
    function getFaq($array) {
        GLOBAL $mysqli;

        $return_arr = array();

        $page       = 1;
        $page_size  = 10;
        $locale     = "";
        $total_cnt  = 0;
        $total_page = 0;
        $order_by   = "desc";

        if (isset($array['page'])) {
            $page = $array['page'];
        }

        if (isset($array['page_size'])) {
            $page_size = $array['page_size'];
        }

        if (isset($array['locale'])) {
            $locale = $array['locale'];
        }

        if (isset($array['order_by'])) {
            $order_by  = $array['order_by'];
        }

        $limit_start = ($page - 1) * $page_size;
        $limit_end   = $page_size;

        $sql     = "select a.seq, 
                           a.title,
                           a.locale, 
                           a.contents, 
                           a.reg_date, 
                           a.reg_admin_seq,
                           b.name as reg_admin_name  
                      from faq   as a
           left outer join admin as b on b.seq  = a.reg_admin_seq where 1
                       ";
        $cnt_sql = "select count(*) as cnt from faq where 1 ";

        if($locale !== "") {
            $locale = strtolower($locale);
            $locale_array = array("en", "kr", "cn", "jp");
            if(!in_array($locale, $locale_array)) {
                $return_arr['status']  = 100;
                $return_arr['message'] = "locale information is wrong";

                return $return_arr;
            }
            $where_arr[] = " and locale = '{$locale}' ";
        }

        if($order_by !== "desc") {
            if($order_by !== "asc") {
                $return_arr['status']  = 101;
                $return_arr['message'] = "order by is wrong";

                return $return_arr;
            }
            $order = " order by seq {$order_by} ";
        } else {
            $order = " order by seq desc ";
        }

        $where_sql = implode(" ",$where_arr);
        $sql      .= $where_sql . $order;
        $cnt_sql  .= $where_sql . $order;

        if($page_size !== 0) {
            $sql  .= "limit {$limit_start} , {$limit_end}";
        }

        $res       = $mysqli -> query($sql);
        $cnt_res   = $mysqli -> query($cnt_sql);

        if(!$cnt_res) {
            $return_arr['code']    = 102;
            $return_arr['message'] = "db count select error";

            return $return_arr;
        } else {
            $total_cnt_row = $cnt_res -> fetch_assoc();
            $total_cnt     = $total_cnt_row['cnt'];
        }

        if(!$res) {
            $return_arr['code']    = 103;
            $return_arr['message'] = "db select error";

            return $return_arr;
        } else {
            $data_arr = array();
            while($row = $res -> fetch_assoc()) {
                $data_arr[] = $row;
            }

            if($page_size !== 0) {
                $total_page = ceil($total_cnt / $page_size);
            } else {
                $total_page = 1;
                $page_size  = $total_cnt;
            }

            $return_arr['code']         = 200;
            $return_arr['total_cnt']    = $total_cnt;
            $return_arr['total_page']   = $total_page;
            $return_arr['current_cnt']  = $page_size;
            $return_arr['current_page'] = $page;
            $return_arr['data']         = $data_arr;

            return $return_arr;
        }

    }
    function getFaqDetail($seq) {
        GLOBAL $mysqli;

        $return_arr = array();

        if(!isset($seq)) {
            $return_arr['status']  = 100;
            $return_arr['message'] = "seq number is required";

            return $return_arr;
        }

        $sql     = "select a.seq, 
                           a.title,
                           a.locale, 
                           a.contents, 
                           a.reg_date, 
                           a.reg_admin_seq,
                           b.name as reg_admin_name  
                      from faq   as a
           left outer join admin as b on b.seq  = a.reg_admin_seq 
                     where a.seq = {$seq}";

        $res       = $mysqli -> query($sql);

        if(!$res) {
            $return_arr['status']  = 101;
            $return_arr['message'] = "db select error";

            return $return_arr;
        } else {
            $row = $res -> fetch_assoc();

            if(empty($row)) {
                $return_arr['status']  = 102;
                $return_arr['message'] = "This seq ({$seq}) is not exist";

                return $return_arr;
            }

            $return_arr['status'] = 200;
            $return_arr['data']   = $row;

            return $return_arr;
        }
    }
    function getQts($array) {
        GLOBAL $mysqli;

        $return_arr = array();

        $page       = 1;
        $page_size  = 10;
        $locale     = "";
        $total_cnt  = 0;
        $total_page = 0;
        $order_by   = "desc";

        if (isset($array['page'])) {
            $page      = $array['page'];
        }

        if (isset($array['page_size'])) {
            $page_size = $array['page_size'];
        }

        if (isset($array['locale'])) {
            $locale    = $array['locale'];
        }

        if (isset($array['order_by'])) {
            $order_by  = $array['order_by'];
        }

        $limit_start = ($page - 1) * $page_size;
        $limit_end   = $page_size;

        $sql = "select a.seq, 
                       a.title, 
                       a.locale, 
                       a.yield,
                       a.reg_date, 
                       a.reg_admin_seq,
                       c.name as reg_admin_name, 
                       b.seq as attach_seq,
                       b.source_file_name as attach_source_file_name,
                       b.file_name as attach_file_name,
                       b.file_path as attach_file_path
                  from qts    as a
       left outer join attach as b on a.seq = b.reference_seq and b.business_code = 'QTS'
       left outer join admin  as c on c.seq  = a.reg_admin_seq where 1 ";

        $cnt_sql = "select count(*) as cnt from qts where 1 ";

        $where_arr = [];

        if($locale !== "") {
            $locale = strtolower($locale);
            $locale_array = array("en", "kr", "cn", "jp");
            if(!in_array($locale, $locale_array)) {
                $return_arr['status']  = 100;
                $return_arr['message'] = "locale information is wrong";

                return $return_arr;
            }
            $where_arr[] = " and locale = '{$locale}' ";
        }

        if($order_by !== "desc") {
            if($order_by !== "asc") {
                $return_arr['status']  = 101;
                $return_arr['message'] = "order by is wrong";

                return $return_arr;
            }
            $order = " order by seq {$order_by} ";
        } else {
            $order = " order by seq desc ";
        }

        $where_sql = implode(" ",$where_arr);
        $sql      .= $where_sql . $order;
        $cnt_sql  .= $where_sql . $order;

        if($page_size !== 0) {
            $sql .= "limit {$limit_start} , {$limit_end}";
        }

        $res       = $mysqli -> query($sql);
        $cnt_res   = $mysqli -> query($cnt_sql);

        if(!$cnt_res) {
            $return_arr['code']    = 102;
            $return_arr['message'] = "db count select error";

            return $return_arr;
        } else {
            $total_cnt_row = $cnt_res -> fetch_assoc();
            $total_cnt     = $total_cnt_row['cnt'];
        }

        if(!$res) {
            $return_arr['code']    = 103;
            $return_arr['sql']     = $sql;
            $return_arr['message'] = "db select error";

            return $return_arr;
        } else {
            $data_arr = array();
            while($row = $res -> fetch_assoc()) {
                $data_arr[] = $row;
            }

            if($page_size !== 0) {
                $total_page = ceil($total_cnt / $page_size);
            } else {
                $total_page = 1;
                $page_size  = $total_cnt;

            }

            $return_arr['code']         = 200;
            $return_arr['total_cnt']    = $total_cnt;
            $return_arr['total_page']   = $total_page;
            $return_arr['current_cnt']  = $page_size;
            $return_arr['current_page'] = $page;
            $return_arr['data']         = $data_arr;

            return $return_arr;
        }
    }
    function getQtsDetail($seq) {
        GLOBAL $mysqli;

        $return_arr = array();

        if(!isset($seq)) {
            $return_arr['status']  = 100;
            $return_arr['message'] = "seq number is required";

            return $return_arr;
        }

        $sql = "select a.seq, 
                       a.title, 
                       a.locale, 
                       a.yield,
                       a.reg_date, 
                       a.reg_admin_seq,
                       c.name as reg_admin_name, 
                       b.seq as attach_seq,
                       b.source_file_name as attach_source_file_name,
                       b.file_name as attach_file_name,
                       b.file_path as attach_file_path
                  from qts    as a
       left outer join attach as b on a.seq = b.reference_seq and b.business_code = 'QTS'
       left outer join admin  as c on c.seq  = a.reg_admin_seq where a.seq = {$seq}";

        $res       = $mysqli -> query($sql);

        if(!$res) {
            $return_arr['status']  = 101;
            $return_arr['message'] = "db select error";

            return $return_arr;
        } else {
            $row = $res -> fetch_assoc();

            if(empty($row)) {
                $return_arr['status']  = 102;
                $return_arr['message'] = "This seq ({$seq}) is not exist";

                return $return_arr;
            }

            $return_arr['status'] = 200;
            $return_arr['data']   = $row;

            return $return_arr;
        }
    }
    function getNewsPrevNext($seq, $board_type, $lang){
        GLOBAL $mysqli;

        $where = "";

        if($board_type == "news"){
            $where = " and news_type = 'NEWS'";
        }

        $prev_sql = "select max(seq) as prev_idx from {$board_type} where seq < '{$seq}' and locale = '{$lang}' {$where}";
        $prev_res = $mysqli -> query($prev_sql);
        $prev_row = $prev_res -> fetch_object();

        $next_sql = "select min(seq) as next_idx from {$board_type} where seq > '{$seq}' and locale = '{$lang}' {$where}";
        $next_res = $mysqli -> query($next_sql);
        $next_row = $next_res -> fetch_object();

        $return_arr = array();
        $return_arr['prev_seq'] = $prev_row -> prev_idx;
        $return_arr['next_seq'] = $next_row -> next_idx;

        return $return_arr;
    }
    function getMovie($locale){
        GLOBAL $mysqli;

        $return_arr = array();

        $sql = "select a.seq, 
                       a.news_type, 
                       a.title, 
                       a.locale, 
                       a.cover_type, 
                       a.cover_url, 
                       a.reg_date 
                  from news as a where 1
                   and news_type = 'MOVIE'
                   and locale = '{$locale}'
              order by seq desc
               ";
        $res = $mysqli -> query($sql);
        while($row = $res -> fetch_assoc()){
            $return_arr[] = $row;
        }

        return $return_arr;

    }
    function getNews($array) {
        GLOBAL $mysqli;

        $return_arr = array();

        $page       = 1;
        $page_size  = 11;
        $locale     = "";
        $news_type  = "";
        $order_by   = "desc";
        $total_cnt  = 0;
        $total_page = 0;

        if(isset($array['page'])) {
            $page = $array['page'];
        }
        if(isset($array['page_size'])) {
            $page_size = $array['page_size'];
        }
        if(isset($array['locale'])) {
            $locale = $array['locale'];
        }
        if(isset($array['news_type'])) {
            $news_type = trim($array['news_type']);
            $news_type = strtoupper($news_type);
        }
        if(isset($array['order_by'])) {
            $order_by  = trim($array['order_by']);
            $order_by  = strtolower($order_by);
        }

        $limit_start = ($page -1 ) * $page_size;
        $limit_end   = $page_size;

        $sql = "select a.seq, 
                       a.news_type, 
                       a.title, 
                       a.locale, 
                       a.cover_type, 
                       a.cover_url, 
                       a.reg_date 
                  from news as a where 1 ";
        $cnt_sql = "select count(*) as cnt from news where 1 ";

        $where_arr = [];

        if($locale !== "") {
            $locale = strtolower($locale);
            $locale_array = array("en", "kr", "cn", "jp");
            if(!in_array($locale, $locale_array)) {
                $return_arr['status']  = 100;
                $return_arr['message'] = "locale information is wrong";

                return $return_arr;
            }
            $where_arr[] = " and locale = '{$locale}' ";
        }

        if($news_type !== "") {
            $news_type_array = array("MEET", "MOVIE", "NEWS");
            if(!in_array($news_type, $news_type_array)) {
                $return_arr['status']  = 101;
                $return_arr['message'] = "news type is wrong";

                return $return_arr;
            }
            $where_arr[]   = " and news_type = '{$news_type}' ";
        }

        if($order_by !== "desc") {
            if($order_by !== "asc") {
                $return_arr['status']  = 102;
                $return_arr['message'] = "order by is wrong";

                return $return_arr;
            }
            $order = " order by seq {$order_by} ";
        } else {
            $order = " order by seq desc ";
        }

        $where_sql = implode(" ",$where_arr);
        $sql      .= $where_sql . $order;
        $cnt_sql  .= $where_sql . $order;

        if($page_size !== 0) {
            $sql       .= " limit {$limit_start} , {$limit_end}";
        }

        $res       = $mysqli -> query($sql);
        $cnt_res   = $mysqli -> query($cnt_sql);

        if(!$cnt_res) {
            $return_arr['status']  = 103;
            $return_arr['sql']     = $cnt_sql;
            $return_arr['message'] = "db count select error";

            return $return_arr;
        } else {
            $total_cnt_row = $cnt_res -> fetch_assoc();
            $total_cnt     = $total_cnt_row['cnt'];
        }

        if(!$res) {
            $return_arr['status']  = 104;
            $return_arr['message'] = "db select error";

            return $return_arr;
        } else {
            $data_arr = array();
            while($row = $res -> fetch_assoc()) {
                $data_arr[] = $row;
            }

            if($page_size !== 0) {
                $total_page = ceil($total_cnt / $page_size);
            } else {
                $total_page = 1;
                $page_size  = $total_cnt;
            }

            $return_arr['status']       = 200;
            $return_arr['total_cnt']    = $total_cnt;
            $return_arr['total_page']   = $total_page;
            $return_arr['current_cnt']  = $page_size;
            $return_arr['current_page'] = $page;
            $return_arr['data']         = $data_arr;

            return $return_arr;
        }
    }
    function getNewsDetail($seq) {
        GLOBAL $mysqli;

        $return_arr = array();

        if(!isset($seq)) {
            $return_arr['status']  = 100;
            $return_arr['message'] = "seq number is required";

            return $return_arr;
        }

        $sql = "select a.seq, 
                       a.news_type, 
                       a.title, 
                       a.locale, 
                       a.contents, 
                       a.cover_type, 
                       a.cover_url, 
                       a.reg_date, 
                       a.reg_admin_seq,
                       c.name as reg_admin_name, 
                       b.seq as attach_seq,
                       b.source_file_name as attach_source_file_name,
                       b.file_name as attach_file_name,
                       b.file_path as attach_file_path
                  from news as a
       left outer join attach as b on a.seq = b.reference_seq and b.business_code = 'NEWS'
       left outer join admin  as c on c.seq = a.reg_admin_seq where a.seq = {$seq}";

        $res       = $mysqli -> query($sql);

        if(!$res) {
            $return_arr['status']  = 101;
            $return_arr['message'] = "db select error";

            return $return_arr;
        } else {
            $row = $res -> fetch_assoc();

            if(empty($row)) {
                $return_arr['status']  = 102;
                $return_arr['message'] = "This seq ({$seq}) is not exist";

                return $return_arr;
            }

            $return_arr['status'] = 200;
            $return_arr['data']   = $row;

            return $return_arr;
        }
    }
    function getNewsLink($array) {
        GLOBAL $mysqli;

        $return_arr = array();

        $page       = 1;
        $page_size  = 24;
        $order_by   = "desc";
        $total_cnt  = 0;
        $total_page = 0;

        if (isset($array['page'])) {
            $page = $array['page'];
        }

        if (isset($array['page_size'])) {
            $page_size = $array['page_size'];
        }

        if(isset($array['order_by'])) {
            $order_by  = trim($array['order_by']);
            $order_by  = strtolower($order_by);
        }

        $limit_start = ($page - 1) * $page_size;
        $limit_end   = $page_size;

        $sql     = "select seq, 
                           link, 
                           status, 
                           reg_date, 
                           title, 
                           description, 
                           image_link 
                      from news_link where status = 'Y' ";
        $cnt_sql = "select count(*) as cnt from news_link where status = 'Y' ";

        $order = "";
        if($order_by !== "desc") {
            if($order_by !== "asc") {
                $return_arr['status']  = 100;
                $return_arr['message'] = "order by is wrong";

                return $return_arr;
            }
            $order = " order by seq {$order_by} ";
        } else {
            $order = " order by seq desc ";
        }
        $sql .= $order;

        if($page_size !== 0) {
            $sql .= "limit {$limit_start} , {$limit_end}";
        }

        $res       = $mysqli -> query($sql);
        $cnt_res   = $mysqli -> query($cnt_sql);

        if(!$cnt_res) {
            $return_arr['code']    = 101;
            $return_arr['message'] = "db count select error";

            return $return_arr;
        } else {
            $total_cnt_row = $cnt_res -> fetch_assoc();
            $total_cnt     = $total_cnt_row['cnt'];
        }

        if(!$res) {
            $return_arr['code']    = 102;
            $return_arr['message'] = "db select error";

            return $return_arr;
        } else {
            $data_arr = array();
            while($row = $res -> fetch_assoc()) {
                $data_arr[] = $row;
            }

            if($page_size !== 0) {
                $total_page = ceil($total_cnt / $page_size);
            } else {
                $total_page = 1;
                $page_size  = $total_cnt;
            }

            $return_arr['status']       = 200;
            $return_arr['total_cnt']    = $total_cnt;
            $return_arr['total_page']   = $total_page;
            $return_arr['current_cnt']  = $page_size;
            $return_arr['current_page'] = $page;
            $return_arr['data']         = $data_arr;

            return $return_arr;
        }
    }

    /** Mail Functions */
    function mailSend($array) {
        GLOBAL $__mail;
        GLOBAL $mysqli;
        GLOBAL $__cf;

        $return_arr = array();

        $receiver  = $array['receiver'];
        $type      = $array['type'];
        $lang      = $array['lang'];

        $host_url  = _MAIN_URL_;

        if(!isset($receiver) || empty($receiver)) {
            $return_arr['status']    = 100;
            $return_arr['message'] = "receiver must not empty";

            return $return_arr;
        }

        if(!isset($type) || empty($type)) {
            $return_arr['status']    = 101;
            $return_arr['message'] = "type must not empty";

            return $return_arr;
        }

        if(!isset($lang) || empty($lang)) {
            $lang = "en";
        }

        if(!$type == 'temppassword') {
            $receiver_res = $this -> getDecrypt($receiver);
            if ($receiver_res['status'] == 200) {
                $receiver = $receiver_res['string'];
            } else {
                $return_arr['status'] = 109;
                $return_arr['message'] = "decrypt error - check api getDecrypt error status check => " . $receiver_res['status'] . " : " . $receiver_res['message'];
                return $return_arr;
            }
        }

        $sql = "select count(*) as cnt, authentication_key from user where id = '{$receiver}'";
        $res = $mysqli -> query($sql);
        $row = $res -> fetch_object();
        $cnt = $row -> cnt;

        if($cnt !== "1") {
            $return_arr['status']    = 102;
            $return_arr['message'] = "user email is not correct";

            return $return_arr;
        }

        $authentication_key = $row -> authentication_key;

        $mail_host      = 'smtp.gmail.com';
        $mail_user_name = "info@aidus.io";
        $mail_password  = "0818aidusmin@";

        $type_check = false;
        $lang_check = false;

        if($type == 'signin' || $type == 'temppassword' || $type == 'walletaddress') {
            $type_check = true;
        }
        if($lang == 'en' || $lang == 'ko' || $lang == 'cn' || $lang == 'jp') {
            $lang_check = true;
        }
        if($lang_check == false) {
            $return_arr['status']    = 103;
            $return_arr['message'] = "parameter lang is wrong";
            return $return_arr;
        } else if ($type_check == false) {
            $return_arr['status']    = 104;
            $return_arr['message'] = "parameter type is wrong";
            return $return_arr;
        }

        if($type == 'signin') {
            $auth_url = $host_url . "/authentication_check.php?auth_string=" . $authentication_key;
        } else if ($type == 'temppassword') {
            $temp_password_result = $this -> makeTempPassword($receiver);
            if($temp_password_result['status'] == 200) {
                $temp_password = $temp_password_result['temp_password'];
            } else {
                $return_arr['status']  = 105;
                $return_arr['message'] = 'make_temp_password_error - [' . $temp_password_result['message'] . "] " . $temp_password_result['message'];
                return $return_arr;
            }
        } else if ($type == 'walletaddress') {
            $sql = "select seq from user where id = '{$receiver}'";
            $res = $mysqli -> query($sql);
            $row = $res -> fetch_object();
            $seq = $row -> seq;
            $enc_seq = $__cf -> Encrypt($seq);
            $wallet_address_result = $this -> getWalletAddress($enc_seq);
            if($wallet_address_result['status'] == 200) {
                $wallet_address = $wallet_address_result['wallet_address'];
            } else {
                $return_arr['status']  = 106;
                $return_arr['message'] = 'wallet_address_error - [' . $wallet_address_result['message'] . "] " . $wallet_address_result['message'];
                return $return_arr;
            }
        }

        ob_start();
        include($_SERVER['DOCUMENT_ROOT']."/inc/mail_form/". $lang . "/{$type}.php");
        $mail_content = ob_get_clean();

        if(empty($mail_content)) {
            $return_arr['status']  = 107;
            $return_arr['message'] = "mail content is empty";
            return $return_arr;
        }

        try {
            $__mail -> IsSMTP();
            //$__mail -> SMTPDebug = 1;
            $__mail -> SMTPAuth    = true;
            $__mail -> SMTPSecure  = 'tls';
            $__mail -> Port        = 587;
            $__mail -> Host        = $mail_host;
            $__mail -> Username    = $mail_user_name;
            $__mail -> Password    = $mail_password;

            $__mail -> ContentType = "text/html";
            $__mail -> CharSet     = "UTF-8";

            $__mail -> setFrom($mail_user_name);
            $__mail -> addAddress($receiver);
            $__mail -> addReplyTo($mail_user_name);

            $__mail -> IsHTML(true);
            $__mail -> Subject = 'Aidus Mail Service';
            $__mail -> Body    = $mail_content;
            //$__mail -> AltBody = 'This is the body in plain text for non-HTML mail clients';

            $__mail -> send();

            $return_arr['status'] = 200;

            return $return_arr;

        } catch (Exception $e) {
            $return_arr['status'] = 108;
            $return_arr['message'] = "Mail Sent Error - " . $__mail -> ErrorInfo;
        }
    }
    function contactUs($array) {
        GLOBAL $__mail;

        $return_arr = array();

        $sender   = "";
        $contents = "";

        if(isset($array['sender'])) {
            $sender   = trim($array['sender']);
        }
        if(isset($array['contents'])) {
            $contents = trim($array['contents']);
        }
        if(empty($sender) || $sender == '') {
            $return_arr['status']    = 100;
            $return_arr['message'] = "sender is empty";
            return $return_arr;
        }
        if(empty($contents) || $contents == '') {
            $return_arr['status']    = 101;
            $return_arr['message'] = "contents is empty";
            return $return_arr;
        }

        /*$sender_res = $this -> getDecrypt($sender);

        if($sender_res['status'] == 200) {
            $sender   = $sender_res['string'];
        } else {
            $return_arr['status'] = 102;
            $return_arr['message'] = "decrypt error - check api getDecrypt error status check => " . $sender_res['status'] . " : " . $sender_res['message'];
            return $return_arr;
        }*/

        $mail_host      = 'smtp.gmail.com';
        $mail_user_name = "info@aidus.io";
        $mail_password  = "infoaidus0422";

        try {
            $__mail -> IsSMTP();
            //$__mail -> SMTPDebug = 1;
            $__mail -> SMTPAuth    = true;
            $__mail -> SMTPSecure  = 'tls';
            $__mail -> Port        = 587;
            $__mail -> Host        = $mail_host;
            $__mail -> Username    = $mail_user_name;
            $__mail -> Password    = $mail_password;

            $__mail -> ContentType = "text/html";
            $__mail -> CharSet     = "UTF-8";

            $__mail -> addReplyTo($sender);
            $__mail -> addAddress($mail_user_name);
            $__mail -> setFrom($mail_user_name);

            $__mail -> IsHTML(true);
            $__mail -> Subject = 'AIDUS User Contact Mail';
            $__mail -> Body    = "Sender : " . $sender . $contents;
            //$__mail -> AltBody = 'This is the body in plain text for non-HTML mail clients';

            $__mail -> send();

            $return_arr['status'] = 200;
            $return_arr['sender'] = $sender;

            return $return_arr;

        } catch (Exception $e) {
            $return_arr['status'] = 103;
            $return_arr['message'] = "Mail Sent Error - " . $__mail -> ErrorInfo;

            return $return_arr;
        }
    }

    /** password Functions */
    function makeTempPassword($user_id) {
        GLOBAL $mysqli;
        GLOBAL $__cf;
        GLOBAL $__enc;

        $return_arr = array();

        $sql = "select count(*) as cnt from user where id = '{$user_id}'";
        $res = $mysqli -> query($sql);
        $row = $res -> fetch_object();
        $cnt = $row -> cnt;
        if($cnt !== '1') {
            $return_arr['status']  = 100;
            $return_arr['message'] = "user is not exist";

            return $return_arr;
        }

        $make_password = $__cf  -> randString(10);
        $enc_password  = $__enc -> encode($make_password);

        $sql = "update user set password = '{$enc_password}', forget_password = 'Y' where id = '{$user_id}'";
        $res = $mysqli -> query($sql);
        if($res) {
            $return_arr['status']        = 200;
            $return_arr['temp_password'] = $make_password;
            return $return_arr;
        } else {
            $return_arr['status']  = 101;
            $return_arr['message'] = "update sql error";
            return $return_arr;
        }
    }
    function updatePassword($array) {
        GLOBAL $mysqli;
        GLOBAL $__enc;

        $return_arr = array();

        $enc_id    = trim($array['enc_id']);
        $user_pw   = trim($array['current_password']);
        $update_pw = trim($array['update_password']);

        if(empty($enc_id)   || $enc_id == '') {
            $return_arr['status']  = 100;
            $return_arr['message'] = "Encoded id is required";
            return $return_arr;
        }

        if(empty($user_pw)   || $user_pw == '') {
            $return_arr['status']  = 101;
            $return_arr['message'] = "Current password is required";
            return $return_arr;
        }

        if(empty($update_pw) || $update_pw == '') {
            $return_arr['status']  = 102;
            $return_arr['message'] = "Update password id is required";
            return $return_arr;
        }

        $id_res = $this -> getDecrypt($enc_id);

        if($id_res['status'] == 200) {
            $user_id   = $id_res['string'];
        } else {
            $return_arr['status'] = 103;
            $return_arr['message'] = "decrypt error - check api getDecrypt error status check => " . $id_res['status'] . " : " . $id_res['message'];
            return $return_arr;
        }

        $sql = "select count(*) as cnt, password from user where id = '{$user_id}'";
        $res = $mysqli -> query($sql);
        $row = $res -> fetch_object();
        $cnt = $row -> cnt;
        if($cnt !== '1') {
            $return_arr['status']  = 104;
            $return_arr['message'] = "user is not exist";
            return $return_arr;
        }

        $db_password = $row -> password;
        $password_check = $__enc -> matches($user_pw, $db_password);
        if(!$password_check) {
            $return_arr['status']  = 105;
            $return_arr['message'] = "user current password is wrong";
            return $return_arr;
        }

        $encode_password = $__enc -> encode($update_pw);

        $sql = "update user set password = '{$encode_password}', forget_password = 'N' where id = '{$user_id}'";
        $res = $mysqli -> query($sql);
        if(!$res) {
            $return_arr['status']  = 106;
            $return_arr['message'] = "sql error (db update failed)";
            return $return_arr;
        } else {
            $return_arr['status']  = 200;
            return $return_arr;
        }

    }
    function aiudsPayJoin($array, $hash ,$addr, $aid_cnt){
        GLOBAL $mysqli;
        GLOBAL $__api;

        $return_arr = array();

        if(!isset($array['AIDAUTH'])) {
            $return_arr['status'] = 100;
            return $return_arr;
        }

        if(!isset($array['AIDSEQ'])) {
            $return_arr['status'] = 101;
            return $return_arr;
        }

        $enc_id  = $array['AIDAUTH'];
        $enc_seq = $array['AIDSEQ'];
        $wallet_addr = '';
        $aid_coin = 0;

        $wallet_addr = $addr;
        $aid_coin = $aid_cnt;
        $tx_hash = $hash;

        //유저 정보
        $user_info = $__api -> getUser($enc_seq);
        if($user_info['status'] == 200){
            $user_info = $user_info['data'];
        }else{
            $return_arr['status'] = 103;

            return $return_arr;
        }

        $sql = "insert into reserve_list 
                        set id = '{$user_info['id']}',
                            last_name = '{$user_info['last_name']}', 
                            sur_name  = '{$user_info['sur_name']}', 
                            reg_date  = now(), 
                            user_status = '00', 
                            wallet_address = '{$wallet_addr}',
                            aid_cnt = '{$aid_coin}',
                            citizenship = '{$user_info['citizenship']}',
                            tx_hash = '{$tx_hash}'
                        ";

        $res = $mysqli -> query($sql);
        if($res){
            $return_arr['status'] = 200;
        }else{
            $return_arr['status'] = 104;
        }

        return $return_arr;
    }
    function aiudsPayInfo($array){
        GLOBAL $__cf;
        GLOBAL $mysqli;

        $return_arr = array();
        $data_arr   = array();

        if(!isset($array['AIDAUTH'])) {
            $return_arr['status'] = 100;
            return $return_arr;
        }

        $enc_id  = $array['AIDAUTH'];
        $decrypt_user_id = $__cf -> Decrypt($enc_id);
        $sql = "select * from reserve_list where id = '{$decrypt_user_id}' ";
        $res = $mysqli -> query($sql);
        if($res){
            if($res -> num_rows > 0){
                while($rec = $res -> fetch_assoc()){
                    $rec['seq'] = $__cf -> Encrypt($rec['seq']);
                    array_push($data_arr,$rec);
                }
                /*$rec = $res -> fetch_assoc();
                $return_arr = $rec;*/
                $return_arr['data'] = $data_arr;
                $return_arr['status'] = 200;
                //$return_arr['user_status'] = $rec['user_status'];
            }else{
                $return_arr['status'] = 201;
            }
        }else{
            $return_arr['status'] = 100;
        }

        return $return_arr;
    }
    function aiudsPayCancel($array,$seq){
        GLOBAL $__cf;
        GLOBAL $mysqli;

        $return_arr = array();

        if(!isset($array['AIDAUTH'])) {
            $return_arr['status'] = 100;
            return $return_arr;
        }

        $enc_id  = $array['AIDAUTH'];
        $decrypt_user_id = $__cf -> Decrypt($enc_id);
        $sql = "update reserve_list set user_status = '02', terminate_date = now() where id = '{$decrypt_user_id}' and seq = {$seq}";
        $res = $mysqli -> query($sql);
        if($res){
            $return_arr['status'] = 200;
        }else{
            $return_arr['status'] = 100;
        }

        return $return_arr;
    }
    function aiudsPayCancelWithdrawal($array,$seq){
        GLOBAL $__cf;
        GLOBAL $mysqli;

        $return_arr = array();

        if(!isset($array['AIDAUTH'])) {
            $return_arr['status'] = 100;
            return $return_arr;
        }

        $enc_id  = $array['AIDAUTH'];
        $decrypt_user_id = $__cf -> Decrypt($enc_id);
        $sql = "update reserve_list set user_status = '01', terminate_date = now() where id = '{$decrypt_user_id}' and seq = {$seq}";
        $res = $mysqli -> query($sql);
        if($res){
            $return_arr['status'] = 200;
        }else{
            $return_arr['status'] = 100;
        }

        return $return_arr;
    }

    function getBrand($array) {
        GLOBAL $mysqli;

        $return_arr = array();

        $page       = 1;
        $page_size  = 11;
        $locale     = "";
        $news_type  = "";
        $order_by   = "desc";
        $total_cnt  = 0;
        $total_page = 0;

        if(isset($array['page'])) {
            $page = $array['page'];
        }
        if(isset($array['page_size'])) {
            $page_size = $array['page_size'];
        }
        if(isset($array['locale'])) {
            $locale = $array['locale'];
        }
        if(isset($array['news_type'])) {
            $news_type = trim($array['news_type']);
            $news_type = strtoupper($news_type);
        }
        if(isset($array['order_by'])) {
            $order_by  = trim($array['order_by']);
            $order_by  = strtolower($order_by);
        }

        $limit_start = ($page -1 ) * $page_size;
        $limit_end   = $page_size;

        $sql = "select a.seq, 
                       a.news_type, 
                       a.title, 
                       a.locale, 
                       a.cover_type, 
                       a.cover_url, 
                       a.reg_date 
                  from brand_news as a where 1 ";
        $cnt_sql = "select count(*) as cnt from brand_news where 1 ";

        $where_arr = [];

        if($locale !== "") {
            $locale = strtolower($locale);
            $locale_array = array("en", "kr", "cn", "jp");
            if(!in_array($locale, $locale_array)) {
                $return_arr['status']  = 100;
                $return_arr['message'] = "locale information is wrong";

                return $return_arr;
            }
            $where_arr[] = " and locale = '{$locale}' ";
        }

        if($news_type !== "") {
            $news_type_array = array("BRAND");
            if(!in_array($news_type, $news_type_array)) {
                $return_arr['status']  = 101;
                $return_arr['message'] = "news type is wrong";

                return $return_arr;
            }
            $where_arr[]   = " and news_type = '{$news_type}' ";
        }

        if($order_by !== "desc") {
            if($order_by !== "asc") {
                $return_arr['status']  = 102;
                $return_arr['message'] = "order by is wrong";

                return $return_arr;
            }
            $order = " order by seq {$order_by} ";
        } else {
            $order = " order by seq desc ";
        }

        $where_sql = implode(" ",$where_arr);
        $sql      .= $where_sql . $order;
        $cnt_sql  .= $where_sql . $order;

        if($page_size !== 0) {
            $sql       .= " limit {$limit_start} , {$limit_end}";
        }

        $res       = $mysqli -> query($sql);
        $cnt_res   = $mysqli -> query($cnt_sql);

        if(!$cnt_res) {
            $return_arr['status']  = 103;
            $return_arr['sql']     = $cnt_sql;
            $return_arr['message'] = "db count select error";

            return $return_arr;
        } else {
            $total_cnt_row = $cnt_res -> fetch_assoc();
            $total_cnt     = $total_cnt_row['cnt'];
        }

        if(!$res) {
            $return_arr['status']  = 104;
            $return_arr['message'] = "db select error";

            return $return_arr;
        } else {
            $data_arr = array();
            while($row = $res -> fetch_assoc()) {
                $data_arr[] = $row;
            }

            if($page_size !== 0) {
                $total_page = ceil($total_cnt / $page_size);
            } else {
                $total_page = 1;
                $page_size  = $total_cnt;
            }

            $return_arr['status']       = 200;
            $return_arr['total_cnt']    = $total_cnt;
            $return_arr['total_page']   = $total_page;
            $return_arr['current_cnt']  = $page_size;
            $return_arr['current_page'] = $page;
            $return_arr['data']         = $data_arr;

            return $return_arr;
        }
    }

    function getBrandDetail($seq) {
        GLOBAL $mysqli;

        $return_arr = array();

        if(!isset($seq)) {
            $return_arr['status']  = 100;
            $return_arr['message'] = "seq number is required";

            return $return_arr;
        }

        $sql = "select a.seq, 
                       a.news_type, 
                       a.title, 
                       a.locale, 
                       a.contents, 
                       a.cover_type, 
                       a.cover_url, 
                       a.reg_date, 
                       a.reg_admin_seq,
                       c.name as reg_admin_name, 
                       b.seq as attach_seq,
                       b.source_file_name as attach_source_file_name,
                       b.file_name as attach_file_name,
                       b.file_path as attach_file_path
                  from brand_news as a
       left outer join attach as b on a.seq = b.reference_seq and b.business_code = 'BRAND'
       left outer join admin  as c on c.seq = a.reg_admin_seq where a.seq = {$seq}";

        $res       = $mysqli -> query($sql);

        if(!$res) {
            $return_arr['status']  = 101;
            $return_arr['message'] = "db select error";

            return $return_arr;
        } else {
            $row = $res -> fetch_assoc();

            if(empty($row)) {
                $return_arr['status']  = 102;
                $return_arr['message'] = "This seq ({$seq}) is not exist";

                return $return_arr;
            }

            $return_arr['status'] = 200;
            $return_arr['data']   = $row;

            return $return_arr;
        }
    }

}

?>