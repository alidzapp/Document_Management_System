<?php

class Role_model extends CI_Model
{

    public $table_name;
    public $id;
    public $name;




    public function __construct()
    {
// Call the CI_Model constructor
        parent::__construct();
        $this->table_name="role";
    }

    public function get_entries($limit, $offset)
    {
        $query = $this->db->get($this->table_name, $limit, $offset);
        return $query->result();
    }

    public function get_last_ten_entries()
    {
        $query = $this->db->get($this->table_name, 10);
        return $query->result();
    }

    public function get_entry_by_id($id)
    {
        $query = $this->db->get_where($this->table_name, array('id' => $id));
        return $query;
    }

    public function insert_entry()
    {
        $this->name = $_POST['name']; // please read the below note

        $this->db->insert($this->table_name, $this);
    }

    public function update_entry()
    {
        $this->name = $_POST['name']; // please read the below note

        $this->db->update($this->table_name, $this, array('id' => $_POST['id']));
    }

}

?>