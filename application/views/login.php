<?php

include("config.php");
include("includes/functions.php");


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//var_dump($Session);


if (isset($_REQUEST['code'])) {
    $gClient->authenticate();
    $_SESSION['token'] = $gClient->getAccessToken();
    header('Location: ' . filter_var($redirectUrl, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
    $gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
    $userProfile = $google_oauthV2->userinfo->get();
    //DB Insert
    $gUser = new Users();
    //$gUser->checkUser('google', $userProfile['id'], $userProfile['given_name'], $userProfile['family_name'], $userProfile['email'], $userProfile['gender'], $userProfile['locale'], $userProfile['link'], $userProfile['picture']);


    /// create the session
    $_SESSION['google_data'] = $userProfile; // Storing Google User Data in Session

    $_SESSION['token'] = $gClient->getAccessToken();
    if ($gUser->isUserAuthenticatedForSystemUse($userProfile['email'])) {
        header("location: index.php");
    } else {
        header("location:/logout?Message=NOT_AUTHORISED");
    }
} else {
    $authUrl = $gClient->createAuthUrl();
}

if (isset($authUrl)) {
    if (isset($Message) && $Message == "NOT_AUTHORISED") {
        echo '<div style="text-align: center"><a href="' . $authUrl . '"><img src="/na.jpg" alt=""/></a></div>';
    }
    echo '<div style="text-align: center"><a href="' . $authUrl . '"><img src="/glogin.png" alt=""/></a></div>';
} else {
    echo '<div><a href="logout.php?logout">Logout</a></div>';
}


?>
