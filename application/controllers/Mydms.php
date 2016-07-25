<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mydms extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        session_start();
        $this->load->helper('url');
        if (!isset($_SESSION['google_data'])) {
            redirect('/login/', 'location');
        }

    }

    public function view()
    {

        $title = "SCL : Document Management System :Docs";

        /*$query = $this->db->query("select * from login_logs;");

        $count = $query->num_rows();

        var_dump($query->result());
        if ($query->result()) {
            $data['title'] = $query->result()[0]->email;
        }*/

        $this->load->model('User_model');

        $data['query'] = $this->User_model->get_last_ten_entries();


        $data['title'] = "data";

        $this->load->view('header', $data);
        $this->load->view('account');
        $this->load->view('google_login');
        $this->load->view('footer', $data);


    }

}
