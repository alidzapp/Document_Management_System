<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mydms extends CI_Controller {


    function __construct(){
        parent::__construct();
        session_start();
        $this->load->helper('url');
        if(!isset($_SESSION['google_data'])){
            redirect('/login/', 'location');
        }

    }

    public function view()
    {

            $title="SCL : Document Management System :Docs";

            $data['title'] = ucfirst($title); // Capitalize the first letter

            $this->load->view('header', $data);
            $this->load->view('account');
            $this->load->view('google_login');
            $this->load->view('footer', $data);


    }

}
