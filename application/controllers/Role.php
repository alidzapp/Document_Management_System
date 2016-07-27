<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller
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
        $this->load->model('Role_model');
        $this->utilities["page_name"]="role";


    }


    public function view()
    {


        $data['query'] = $this->Role_model->get_entries(100, 0);


        $this->load->view('header');
        $this->load->view('wrapper',$this->utilities);
        $this->load->view('role/view', $data);
        $this->load->view('footer');


    }

    public function edit()
    {


        $id = $this->uri->segment('3');
        $data['query'] = $this->Role_model->get_entry_by_id($id);
        $this->load->view('header');
        $this->load->view('wrapper',$this->utilities);
        $this->load->view('role/edit', $data);
        $this->load->view('footer');


    }

    public function add()
    {


        $this->load->view('header');
        $this->load->view('wrapper',$this->utilities);
        $this->load->view('role/add');
        $this->load->view('footer');


    }

    public function edit_exec()
    {

        $data['query'] = $this->Role_model->update_entry();
        redirect('role/view');
    }

    public function add_exec()
    {

        $data['query'] = $this->Role_model->insert_entry();
        redirect('role/view');
    }

    public function delete_exec()
    {


        $id = $this->uri->segment('3');
        //$data['query'] = $this->Role_model->row_delete($id);
        redirect('role/view');
    }

}
