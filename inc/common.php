<?php
/** 공통 상수, 변수 */
header("Content-Type: text/html; charset=UTF-8");
header('P3P: CP="ALL CURa ADMa DEVa TAIa OUR BUS IND PHY ONL UNI PUR FIN COM NAV INT DEM CNT STA POL HEA PRE LOC OTC"');

date_default_timezone_set('Asia/Seoul');

if (!isset($set_time_limit)) $set_time_limit = 0;
@set_time_limit($set_time_limit);

if (isset($HTTP_POST_VARS) && !isset($_POST)) {
    $_POST   = &$HTTP_POST_VARS;
    $_GET    = &$HTTP_GET_VARS;
    $_SERVER = &$HTTP_SERVER_VARS;
    $_COOKIE = &$HTTP_COOKIE_VARS;
    $_ENV    = &$HTTP_ENV_VARS;
    $_FILES  = &$HTTP_POST_FILES;

    if (!isset($_SESSION))
        $_SESSION = &$HTTP_SESSION_VARS;
}

if( !get_magic_quotes_gpc() ) {
    if( is_array($_GET) ) {
        while( list($k, $v) = each($_GET) ) {
            if( is_array($_GET[$k]) ) {
                while( list($k2, $v2) = each($_GET[$k]) ) {
                    $_GET[$k][$k2] = addslashes($v2);
                }
                @reset($_GET[$k]);
            } else {
                $_GET[$k] = addslashes($v);
            }
        }
        @reset($_GET);
    }

    if( is_array($_POST) ) {
        while( list($k, $v) = each($_POST) ) {
            if( is_array($_POST[$k]) ) {
                while( list($k2, $v2) = each($_POST[$k]) ) {
                    $_POST[$k][$k2] = addslashes($v2);
                }
                @reset($_POST[$k]);
            } else {
                $_POST[$k] = addslashes($v);
            }
        }
        @reset($_POST);
    }

    if( is_array($_COOKIE) ) {
        while( list($k, $v) = each($_COOKIE) ) {
            if( is_array($_COOKIE[$k]) ) {
                while( list($k2, $v2) = each($_COOKIE[$k]) ) {
                    $_COOKIE[$k][$k2] = addslashes($v2);
                }
                @reset($_COOKIE[$k]);
            } else {
                $_COOKIE[$k] = addslashes($v);
            }
        }
        @reset($_COOKIE);
    }
}

function xss_clean($data){
    if(empty($data))
        return $data;
    if(is_array($data)) {
        foreach($data as $key => $value) {
            $data[$key] = xss_clean($value);
        }

        return $data;
    }

    $data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
    $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/', '$1;', $data);
    $data = preg_replace('/(&#x*[0-9A-F]+);*/i', '$1;', $data);

    if (function_exists("html_entity_decode")) {
        $data = html_entity_decode($data);
    } else {
        $trans_tbl = get_html_translation_table(HTML_ENTITIES);
        $trans_tbl = array_flip($trans_tbl);
        $data = strtr($data, $trans_tbl);
    }

    $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#i', '$1>', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#i', '$1=$2nojavascript...', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#i', '$1=$2novbscript...', $data);
    $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#', '$1=$2nomozbinding...', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
    $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#i', '$1>', $data);
    $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

    do {
        $old_data = $data;
        $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
    }
    while ($old_data !== $data);

    return $data;
}

$_GET = xss_clean($_GET);

$ext_arr = array ('PHP_SELF', '_ENV', '_GET', '_POST', '_FILES', '_SERVER', '_COOKIE', '_SESSION', '_REQUEST',
    'HTTP_ENV_VARS', 'HTTP_GET_VARS', 'HTTP_POST_VARS', 'HTTP_POST_FILES', 'HTTP_SERVER_VARS',
    'HTTP_COOKIE_VARS', 'HTTP_SESSION_VARS', 'GLOBALS');
$ext_cnt = count($ext_arr);
for ($i=0; $i<$ext_cnt; $i++) {
    if (isset($_GET[$ext_arr[$i]])) unset($_GET[$ext_arr[$i]]);
}

@extract($_GET);
@extract($_POST);
@extract($_SERVER);

#ini_set("session.use_trans_sid", 0);
#ini_set("url_rewriter.tags","");

#if (isset($SESSION_CACHE_LIMITER)) @session_cache_limiter($SESSION_CACHE_LIMITER);
#else @session_cache_limiter("no-cache, must-revalidate");

#ini_set("session.cache_expire", 14400);
#ini_set("session.gc_maxlifetime", 0);
#ini_set("session.gc_probability", 1);
#ini_set("session.gc_divisor", 100);

//카드뉴스의 링크 기능복사 때문에 get으로 lang 이 들어올 경우 쿠키 값 변경
if(!empty($_GET['lang'])){
    setcookie("lang",$_GET['lang'],time() + 60 * 10,"/");
    $_COOKIE['lang'] = $_GET['lang'];
}

/** include */
include_once $_SERVER['DOCUMENT_ROOT']."/inc/db_config.php";
include_once $_SERVER['DOCUMENT_ROOT']."/inc/ext_class.php";
include_once $_SERVER['DOCUMENT_ROOT']."/inc/ext_lib.php";
include_once $_SERVER['DOCUMENT_ROOT']."/inc/_define.php";
include_once $_SERVER['DOCUMENT_ROOT']."/inc/function.php";
ini_set("session.use_trans_sid", 0);
ini_set("url_rewriter.tags","");

if (isset($SESSION_CACHE_LIMITER)) @session_cache_limiter($SESSION_CACHE_LIMITER);
else @session_cache_limiter("no-cache, must-revalidate");

ini_set("session.cache_expire", 14400);
ini_set("session.gc_maxlifetime", 0);
ini_set("session.gc_probability", 1);
ini_set("session.gc_divisor", 100);






?>


