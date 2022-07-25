<?php

require_once './vendor/autoload.php';

$clientId = '186687095439-017gj3omqq9gds17gb46novmr1rtfpp2.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUrl = 'http://localhost/chat/login.php';

$client = new Google_Client();
$client->setClientId($clientId);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUrl);
$client->addScope('profile');
$client->addScope('email');

if(isset($_GET['code'])){

    $token = $client->fetchAuthToken($_GET['code']);
    // $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    // $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    // Getting user profile
    $gauth = new Google_Service_Oauth2($client);
    $google_info = $gauth->userinfo->get();
    $email = $google_info->email;
    $name = $google_info->name;

    echo "Welcome '.$name.', you are registed to this email: '.$email.'";

}else{
    echo '<a href="'.$client->createAuthUrl().'">Login with Google</a>';
}


?>