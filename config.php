<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '992715144010-nblabqfucupv3qii6unui1l220j2ii50.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'Z0P70eTYhAw6uoaFVtn_h8-p'; //Google CLIENT SECRET
$redirectUrl = 'http://mydms.com/';  //return url (url to script)
$homeUrl = 'http://mydms.local/';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('mydms');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>
