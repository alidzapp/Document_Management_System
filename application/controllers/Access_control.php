<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access_control extends CI_Controller
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
        $this->load->model('Access_control_model');
        $this->load->model('User_model');

        $this->load->model('Department_model');

        $this->utilities["page_name"] = "access_control";


    }


    public function view()
    {


        $data['query'] = $this->Access_control_model->get_entries_joined();


        $this->load->view('header');
        $this->load->view('wrapper', $this->utilities);
        $this->load->view('access_control/view', $data);
        $this->load->view('footer');


    }


    public function add()
    {


        $data['users'] = $this->User_model->get_entries(1000, 0);
        $data['departments'] = $this->Department_model->get_entries(1000, 0);

        $this->load->view('header');
        $this->load->view('wrapper', $this->utilities);
        $this->load->view('access_control/add', $data);
        $this->load->view('footer');


    }

    public function add_exec()
    {

        try {
            $data['query'] = $this->Access_control_model->insert_entry();
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        } finally {
            redirect('access_control/view');
        }

    }

    public function delete_exec()
    {


        $id = $this->uri->segment('3');
        $data['query'] = $this->Access_control_model->row_delete($id);
        redirect('access_control/view');
    }

}
