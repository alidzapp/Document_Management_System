<?php

class Group_model extends CI_Model
{


    public $id;
    public $name;




    public function __construct()
    {
// Call the CI_Model constructor
        parent::__construct();
        $this->config->load('db_tables');

    }

    public function get_entries($limit, $offset)
    {
        $query = $this->db->get($this->config->item('group_table'), $limit, $offset);
        return $query->result();
    }

    public function get_last_ten_entries()
    {
        $query = $this->db->get($this->config->item('group_table'), 10);
        return $query->result();
    }

    public function get_entry_by_id($id)
    {
        $query = $this->db->get_where($this->config->item('group_table'), array('id' => $id));
        return $query->result();
    }

    public function insert_entry()
    {
        $this->name =$this->input->post('name', true);

        $this->db->insert($this->config->item('group_table'), $this);
    }

    public function update_entry()
    {
        $this->name = $this->input->post('name', true);
        $this->id = $this->input->post('id', true);

        $this->db->update($this->config->item('group_table'), $this, array('id' => $this->id));
    }
    function row_delete($id)
    {

        $this->db->where('id', $id);
        $this->db->delete($this->config->item('group_table'));
    }

}

?>