<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_group extends CI_Controller
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
        $this->load->model('User_group_model');
        $this->load->model('User_model');

        $this->load->model('Group_model');

        $this->utilities["page_name"] = "user_group";


    }


    public function view()
    {


        $group_id = $this->uri->segment('3');
        $data['query'] = $this->User_group_model->get_entries_joined($group_id);
        $group = $this->Group_model->get_entry_by_id($group_id);

        $data['group']=$group[0];

        $this->load->view('header');
        $this->load->view('wrapper', $this->utilities);
        $this->load->view('user_group/view', $data);
        $this->load->view('footer');


    }


    public function add()
    {


        $data['users'] = $this->User_model->get_entries(1000, 0);

        $group_id = $this->uri->segment('3');
        $group = $this->Group_model->get_entry_by_id($group_id);
        $data['group']=$group[0];

        $this->load->view('header');
        $this->load->view('wrapper', $this->utilities);
        $this->load->view('user_group/add', $data);
        $this->load->view('footer');


    }

    public function add_exec()
    {
        //

        try {
            $data['query'] = $this->User_group_model->insert_entry();
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        } finally {
            redirect('user_group/view/'.$_POST["group_id"]);
        }

    }

    public function delete_exec()
    {


        $id = $this->uri->segment('3');


        $user_group= $this->User_group_model->get_entry_by_id($id);

        $data['query'] = $this->User_group_model->row_delete($id);
        redirect('user_group/view/'.$user_group->group_id);
    }

}
