<?php

class User_model extends CI_Model
{


    public $id;
    public $username;
    public $is_active;


    public function __construct()
    {
// Call the CI_Model constructor
        parent::__construct();
        $this->config->load('db_tables');
    }

    public function get_entries($limit, $offset)
    {
        $query = $this->db->get($this->config->item('user_table'), $limit, $offset);
        return $query->result();
    }

    public function get_last_ten_entries()
    {
        $query = $this->db->get($this->config->item('user_table'), 10);
        return $query->result();
    }

    public function get_entry_by_id($id)
    {
        $query = $this->db->get_where($this->config->item('user_table'), array('id' => $id));
        return $query->result();
    }

    public function get_entry_by_email($email)
    {
        $query = $this->db->get_where($this->config->item('user_table'), array('email' => $email));
        return $query->result();
    }


    public function is_duplicate()
    {

        $this->username = $this->input->post('username', true);
        $this->role_id = $this->input->post('role_id', true);
        $query = $this->db->get_where($this->config->item('user_table'), array('username' => $this->username, 'role_id' => $this->role_id));
        return $query->result();
    }

    public function insert_entry()
    {
        $this->username = $this->input->post('username', true);
        $this->role_id = $this->input->post('role_id', true);
        $this->is_active = 1;


        $this->db->insert($this->config->item('user_table'), $this);
    }

    public function update_entry()
    {
        $this->role_id = $this->input->post('role_id', true);
        $this->username = $this->input->post('username', true);
        $this->is_active = 1;

        $this->id = $this->input->post('id', true);


        $this->db->update($this->config->item('user_table'), $this, array('id' => $this->id));
    }

    function row_delete($id)
    {

        $this->db->where('id', $id);

        $row = $this->get_entry_by_id($id)[0];
        if (isset($row)) {
            $this->id = $id;
            $this->is_active = 0;
            $this->username = $row->username;
            //var_dump($row);
            //$this->db->delete($this->config->item('user_table'));
            $this->db->update($this->config->item('user_table'), $this, array('id' => $this->id));
        }
    }

    function row_activate($id)
    {

        $this->db->where('id', $id);

        $row = $this->get_entry_by_id($id)[0];
        if (isset($row)) {
            $this->id = $id;
            $this->is_active = 1;
            $this->username = $row->username;

            $this->db->update($this->config->item('user_table'), $this, array('id' => $this->id));
        }
    }

}

?>