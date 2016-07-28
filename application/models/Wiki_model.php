<?php

class Wiki_model extends CI_Model
{


    public $id;
    public $title;
    public $content;
    public $department_id;


    public function __construct()
    {
// Call the CI_Model constructor
        parent::__construct();

    }

    public function get_last_ten_entries()
    {
        $query = $this->db->get($this->table_name, 10);
        return $query->result();
    }

    public function get_entries($limit, $offset)
    {
        if ($limit == 0 && $offset == 0) {
            $query = $this->db->get($this->config->item('wiki_table'));
        } else {
            $query = $this->db->get($this->config->item('wiki_table'), $limit, $offset);
        }
        return $query->result();
    }

    public function get_entry_by_id($id)
    {
        $query = $this->db->get_where($this->config->item('wiki_table'), array('id' => $id));
        return $query->result();
    }

    public function insert_entry()
    {

        $this->title = $this->input->post('title', true);
        $this->config->set_item('global_xss_filtering', FALSE);
        $this->content = $this->input->post('content');
        $this->config->set_item('global_xss_filtering', TRUE);
        $this->department_id = $this->input->post('department_id', true);

        $this->db->insert($this->config->item('wiki_table'), $this);
    }

    public function update_entry()
    {
        $this->id = $this->input->post('id', true);
        $this->title = $this->input->post('title', true);
        $this->config->set_item('global_xss_filtering', FALSE);
        $this->content = $this->input->post('content');
        $this->config->set_item('global_xss_filtering', TRUE);
        $this->department_id = $this->input->post('department_id', true);

        $this->db->update($this->config->item('wiki_table'), $this, array('id' => $this->id));
    }

    function row_delete($id)
    {

        $this->db->where('id', $id);
        $this->db->delete($this->config->item('wiki_table'));
    }

}

?>