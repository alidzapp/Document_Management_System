<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");


class Logout extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        session_start();
        $this->load->helper('url');

    }

    public function index()
    {



        $clientId = '992715144010-nblabqfucupv3qii6unui1l220j2ii50.apps.googleusercontent.com'; //Google CLIENT ID
        $clientSecret = 'Z0P70eTYhAw6uoaFVtn_h8-p'; //Google CLIENT SECRET
        $redirectUrl = 'http://mydms.com/';  //return url (url to script)



        $gClient = new Google_Client();
        $gClient->setApplicationName('mydms');
        $gClient->setClientId($clientId);
        $gClient->setClientSecret($clientSecret);
        $gClient->setRedirectUri($redirectUrl);

        $google_oauthV2 = new Google_Oauth2Service($gClient);


        //if (array_key_exists('logout', $_GET)) {
            unset($_SESSION['token']);
            unset($_SESSION['google_data']); //Google session data unset
            $gClient->revokeToken();
            session_destroy();
            redirect('/login/', 'location');
        //}


    }

}
