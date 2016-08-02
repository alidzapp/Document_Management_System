<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mydms extends CI_Controller
{


    public $utilities = array();

    function __construct()
    {
        parent::__construct();
        session_start();
        $this->load->helper('url');
        if (!isset($_SESSION['google_data'])) {
            redirect('/login/', 'location');
        }
        $this->utilities["page_name"] = "main";

    }

    public function view()
    {


        $this->load->view('header');
        $this->load->view('wrapper', $this->utilities);
        $this->load->view('user');
        $this->load->view('footer');


    }

    public function user_list()
    {


        $this->load->view('header');
        $this->load->view('wrapper', $this->utilities);
        $this->load->view('user_list');
        $this->load->view('footer');


    }

}
