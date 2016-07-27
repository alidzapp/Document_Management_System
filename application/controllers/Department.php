<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller
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
        $this->load->model('Department_model');
        $this->utilities["page_name"]="department";



    }


    public function view()
    {


        $data['query'] = $this->Department_model->get_entries(100, 0);

        $this->load->view('header');
        $this->load->view('wrapper', $this->utilities);
        $this->load->view('department/view', $data);
        $this->load->view('footer');


    }

    public function edit()
    {


        $id = $this->uri->segment('3');
        $data['query'] = $this->Department_model->get_entry_by_id($id);
        $this->load->view('header');
        $this->load->view('wrapper', $this->utilities);
        $this->load->view('department/edit', $data);
        $this->load->view('footer');


    }

    public function add()
    {


        $this->load->view('header');
        $this->load->view('wrapper', $this->utilities);
        $this->load->view('department/add');
        $this->load->view('footer');


    }

    public function edit_exec()
    {

        $data['query'] = $this->Department_model->update_entry();
        redirect('department/view');
    }

    public function add_exec()
    {

        $data['query'] = $this->Department_model->insert_entry();
        redirect('department/view');
    }

    public function delete_exec()
    {


        $id = $this->uri->segment('3');
        $data['query'] = $this->Department_model->row_delete($id);
        redirect('department/view');
    }

}
