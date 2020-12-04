<?php
class Secure {
    public function encrypt($str, $secret_key = 'neoint secret key', $secret_iv = 'neoint secret iv') {
        try {
            $key = hash('sha256', $secret_key);
            $iv = substr(hash('sha256', $secret_iv), 0, 16)    ;

            return str_replace("=", "", base64_encode(
                    openssl_encrypt($str, "AES-256-CBC", $key, 0, $iv))
            );
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function decrypt($str, $secret_key='neoint secret key', $secret_iv='neoint secret iv') {
        try {
            $key = hash('sha256', $secret_key);
            $iv = substr(hash('sha256', $secret_iv), 0, 16);

            return openssl_decrypt(
                base64_decode($str), "AES-256-CBC", $key, 0, $iv
            );
        } catch (Exception $e) {
            throw  $e;
        }
    }

    /* public function csrf_validation() {
         GLOBAL $__function;
         GLOBAL $__session;
         $function_name = "Encrypt -> csrf_validation()";

         try {
             $return_arr    = array();
             $headers = apache_request_headers();

             if(!isset($headers['X-CSRF-TOKEN'])) {
                 $return_arr = $__function -> return_values($function_name, 401, "잘못된 접근 입니다", 'ERR::CSRF_TOKEN_MISSING');
                 return $return_arr;
             }

             $csrf     = $headers['X-CSRF-TOKEN'];
             $ssid     = $__session -> __get('ENCV');
             if($csrf !== $ssid) {
                 $return_arr = $__function -> return_values($function_name, 402, "잘못된 접근 입니다", 'ERR::CSRF_NOT_MATCH_SESSION');
                 return $return_arr;
             }

             $return_arr = $__function -> return_values($function_name, 200, "성공", 'SUCCESS::CSRF_MATCH_CONFIRM');
             return $return_arr;

         } catch (Exception $e) {
             $__function -> return_values($function_name, 400, $e, 'Function Exception');
             return $return_arr;
         }
     }*/
    public function csrf_validation() {

        $return_arr = array();
        $headers = apache_request_headers();
        if(!isset($headers['x-csrf-token'])) {
            $return_arr['status']  = 400;
            $return_arr['message'] = "잘못된 접근 입니다 (ERR::CSRF ERROR#1)";

            return $return_arr;

        }
        $csrf     = $headers['x-csrf-token'];
        $csrf     = $this -> decrypt($csrf);
        $ssid     = $_SESSION['SESSID'];

        if($csrf !== $ssid) {
            $return_arr['status']  = 400;
            $return_arr['message'] = "잘못된 접근 입니다 (ERR::CSRF ERROR#2)";
            return $return_arr;
        }

        $return_arr['status'] = 200;

        return $return_arr;
    }
}
?>