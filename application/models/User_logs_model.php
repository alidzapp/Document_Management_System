<?php

class User_logs_model extends CI_Model
{


    public $table_name;
    public $id;
    public $oauth_provider;
    public $oauth_uid;
    public $fname;
    public $lname;
    public $email;
    public $gender;
    public $local;
    public $gpluslink;
    public $picture;
    public $created;
    public $modified;


    public function __construct()
    {
// Call the CI_Model constructor
        parent::__construct();
        $this->table_name="login_users";
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
        $this->oauth_provider = $_POST['oauth_provider']; // please read the below note
        $this->oauth_uid = $_POST['oauth_uid'];
        $this->fname = $_POST['fname'];
        $this->lname = $_POST['lname'];
        $this->email = $_POST['email'];
        $this->gender = $_POST['gender'];
        $this->local = $_POST['local'];
        $this->gpluslink = $_POST['gpluslink'];
        $this->picture = $_POST['picture'];
        $this->created = $_POST['created'];
        $this->modified = $_POST['modified'];

        $this->db->insert($this->table_name, $this);
    }

    public function update_entry()
    {
        $this->oauth_provider = $_POST['oauth_provider']; // please read the below note
        $this->oauth_uid = $_POST['oauth_uid'];
        $this->fname = $_POST['fname'];
        $this->lname = $_POST['lname'];
        $this->email = $_POST['email'];
        $this->gender = $_POST['gender'];
        $this->local = $_POST['local'];
        $this->gpluslink = $_POST['gpluslink'];
        $this->picture = $_POST['picture'];
        $this->created = $_POST['created'];
        $this->modified = $_POST['modified'];

        $this->db->update($this->table_name, $this, array('id' => $_POST['id']));
    }

}

?>