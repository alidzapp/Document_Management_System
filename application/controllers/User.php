<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{


    public  $utilities=array();

    function __construct()
    {
        parent::__construct();
        session_start();
        $this->load->helper('url');
        if (!isset($_SESSION['google_data'])) {
            redirect('/login/', 'location');
        }
        $this->load->model('User_model');
        $this->utilities["page_name"]="user";


    }


    public function view()
    {


        $data['query'] = $this->User_model->get_entries(100, 0);


        $this->load->view('header');
        $this->load->view('wrapper',$this->utilities);
        $this->load->view('user/view', $data);
        $this->load->view('footer');


    }

    public function edit()
    {


        $id = $this->uri->segment('3');
        $data['query'] = $this->User_model->get_entry_by_id($id);
        $this->load->view('header');
        $this->load->view('wrapper',$this->utilities);
        $this->load->view('user/edit', $data);
        $this->load->view('footer');


    }

    public function add()
    {


        $this->load->view('header');
        $this->load->view('wrapper',$this->utilities);
        $this->load->view('user/add');
        $this->load->view('footer');


    }

    public function edit_exec()
    {

        $data['query'] = $this->User_model->update_entry();
        redirect('user/view');
    }

    public function add_exec()
    {

        $data['query'] = $this->User_model->insert_entry();
        redirect('user/view');
    }

    public function delete_exec()
    {


        $id = $this->uri->segment('3');
        $data['query'] = $this->User_model->row_delete($id);
        redirect('user/view');
    }

}