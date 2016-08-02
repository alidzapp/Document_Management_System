<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        session_start();
        $this->load->helper('url');

    }

    public function index()
    {

        if (isset($_SESSION['google_data'])) {
            redirect('/mydms/view');
        } else {
            $data = array();
            if (isset($_GET["Message"])) {
                $data["Message"] = $_GET["Message"];
            }
            $this->load->view('login', $data);
        }

    }

}
