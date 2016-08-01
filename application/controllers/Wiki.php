<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wiki extends CI_Controller
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
        $this->load->model('Wiki_model');

        $this->load->model('Department_model');

        $this->utilities["page_name"] = "wiki";


    }


    public function view()
    {

        $department_array = array();
        foreach ($_SESSION["authenticator"] as $privilige) {
            array_push($department_array, $privilige["department"]);

        }


        $data['departments'] = $this->Department_model->get_entry_by_ids($department_array);

        $data['query'] = $this->Wiki_model->get_entries(0, 0, $department_array);


        $this->load->view('header');
        $this->load->view('wrapper', $this->utilities);
        $this->load->view('wiki/view', $data);
        $this->load->view('footer');


    }


    public function add()
    {

        $department_array = array();
        foreach ($_SESSION["authenticator"] as $privilige) {
            array_push($department_array, $privilige["department"]);

        }


        $data['departments'] = $this->Department_model->get_entry_by_ids($department_array);

        //$data['departments'] = $this->Department_model->get_entries(1000, 0);


        $this->load->view('header');
        $this->load->view('wrapper', $this->utilities);
        $this->load->view('wiki/add', $data);
        $this->load->view('footer');


    }

    public function viewwiki()
    {


        $department_array = array();
        foreach ($_SESSION["authenticator"] as $privilige) {
            array_push($department_array, $privilige["department"]);

        }


        $data['departments'] = $this->Department_model->get_entry_by_ids($department_array);

        $id = $this->uri->segment('3');
        $data['query'] = $this->Wiki_model->get_entry_by_id($id);


        $this->load->view('header');
        $this->load->view('wrapper', $this->utilities);
        $this->load->view('wiki/viewwiki', $data);
        $this->load->view('footer');


    }

    public function edit()
    {


        $department_array = array();
        foreach ($_SESSION["authenticator"] as $privilige) {
            array_push($department_array, $privilige["department"]);

        }


        $data['departments'] = $this->Department_model->get_entry_by_ids($department_array);

        $id = $this->uri->segment('3');
        $data['query'] = $this->Wiki_model->get_entry_by_id($id);

        $this->load->view('header');
        $this->load->view('wrapper', $this->utilities);
        $this->load->view('wiki/edit', $data);
        $this->load->view('footer');


    }

    public function edit_exec()
    {

        $data['query'] = $this->Wiki_model->update_entry();
        redirect('wiki/viewwiki/' . $_POST["id"]);
    }

    public function add_exec()
    {

        $inserted_id = $this->Wiki_model->insert_entry();
        redirect('wiki/viewwiki/' . $inserted_id);
    }

    public function delete_exec()
    {


        $id = $this->uri->segment('3');
        $data['query'] = $this->Wiki_model->row_delete($id);
        redirect('wiki/view');
    }

}
