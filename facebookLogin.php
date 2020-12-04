<?php
include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/common.php");
$__cf->error_report(1);
include_once("{$_SERVER['DOCUMENT_ROOT']}/inc/vendor/autoload.php");
session_start();
$fb = new Facebook\Facebook([
    'app_id' => '2151228811605258',
    'app_secret' => 'b6d338718c3f55a7286c86997d3e289c',
    'default_graph_version' => 'v2.2',
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // optional

try {
    if (isset($_SESSION['facebook_access_token'])) {
        $accessToken = $_SESSION['facebook_access_token'];
    } else {
        $accessToken = $helper->getAccessToken();
    }
} catch (Facebook\Exceptions\FacebookResponseException $e) { // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) { // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}
if (isset($accessToken)) {
    if (isset($_SESSION['facebook_access_token'])) {
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    } else {    // getting short-lived access token
        $_SESSION['facebook_access_token'] = (string)$accessToken;
        $oAuth2Client = $fb->getOAuth2Client();
        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
        $_SESSION['facebook_access_token'] = (string)$longLivedAccessToken;
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }
    if (isset($_GET['code'])) {
        header('Location: ./');
    }
    try {
        $profile_request = $fb->get('/me?fields=name,first_name,last_name,email');
        $profile = $profile_request->getGraphNode()->asArray();
    } catch (Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        session_destroy();

        header("Location: ./");
        exit;
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }
    print_r($profile);
} else {
    $loginUrl = $helper->getLoginUrl('http://aidweb.neoint.co.kr/facebookCallback.php', $permissions);
    echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
}
?>