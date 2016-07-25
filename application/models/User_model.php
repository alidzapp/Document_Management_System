<?php

class User_model extends CI_Model
{

    public $id;
    public $username;
    public $is_active;
    public $role_id;

    public function __construct()
    {
// Call the CI_Model constructor
        parent::__construct();
    }

    public function get_last_ten_entries()
    {
        $query = $this->db->get('user', 10);
        return $query->result();
    }

    public function insert_entry()
    {
        $this->username = $_POST['username']; // please read the below note
        $this->is_active = $_POST['is_active'];
        $this->role_id = $_POST['role_id'];

        $this->db->insert('user', $this);
    }

    public function update_entry()
    {
        $this->username = $_POST['username']; // please read the below note
        $this->is_active = $_POST['is_active'];
        $this->role_id = $_POST['role_id'];

        $this->db->update('user', $this, array('id' => $_POST['id']));
    }

}

?>