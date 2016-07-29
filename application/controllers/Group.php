<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group extends CI_Controller
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
        $this->load->model('Group_model');
        $this->utilities["page_name"]="group";


    }


    public function view()
    {


        $data['query'] = $this->Group_model->get_entries(100, 0);


        $this->load->view('header');
        $this->load->view('wrapper',$this->utilities);
        $this->load->view('group/view', $data);
        $this->load->view('footer');


    }

    public function edit()
    {


        $id = $this->uri->segment('3');
        $data['query'] = $this->Group_model->get_entry_by_id($id);
        $this->load->view('header');
        $this->load->view('wrapper',$this->utilities);
        $this->load->view('group/edit', $data);
        $this->load->view('footer');


    }

    public function add()
    {


        $this->load->view('header');
        $this->load->view('wrapper',$this->utilities);
        $this->load->view('group/add');
        $this->load->view('footer');


    }

    public function edit_exec()
    {

        $data['query'] = $this->Group_model->update_entry();
        redirect('group/view');
    }

    public function add_exec()
    {

        $data['query'] = $this->Group_model->insert_entry();
        redirect('group/view');
    }

    public function delete_exec()
    {


        $id = $this->uri->segment('3');
        $data['query'] = $this->Group_model->row_delete($id);
        redirect('group/view');
    }

}
