<?php

class Access_control_model extends CI_Model
{

    public $table_name;

    public $id;
    public $user_id;
    public $role_id;
    public $department_id;


    public function __construct()
    {
// Call the CI_Model constructor
        parent::__construct();
        $this->config->load('db_tables');
    }

    public function get_entries($limit, $offset)
    {
        $query = $this->db->get($this->config->item('access_control_table'), $limit, $offset);
        return $query->result();
    }

    public function get_entry_by_id($id)
    {
        $query = $this->db->get_where($this->config->item('access_control_table'), array('id' => $id));
        return $query->result();
    }

    public function get_last_ten_entries()
    {
        $query = $this->db->get($this->config->item('access_control_table'), 10);
        return $query->result();
    }

    public function insert_entry()
    {
        $this->user_id = $this->input->post('user_id', true);
        $this->role_id = $this->input->post('role_id', true);
        $this->department_id = $this->input->post('department_id', true);

        $this->db->insert($this->config->item('access_control_table'), $this);
    }

    public function update_entry()
    {
        $this->id = $this->input->post('id', true);
        $this->user_id = $this->input->post('user_id', true);
        $this->role_id = $this->input->post('role_id', true);
        $this->department_id = $this->input->post('department_id', true);

        $this->db->update($this->config->item('access_control_table'), $this, array('id' => $this->id));
    }

    function row_delete($id)
    {

        $this->db->where('id', $id);
        $this->db->delete($this->config->item('user_table'));
    }

}

?>