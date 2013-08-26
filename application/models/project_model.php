<?php
class Project_model extends CI_Model {

    

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_projects()
    {
//        return array();
        $query = $this->db->get('projects');
        return $query->result();
    }

//    function insert_entry()
//    {
//        $this->title   = $_POST['title']; // please read the below note
//        $this->content = $_POST['content'];
//        $this->date    = time();
//
//        $this->db->insert('entries', $this);
//    }
//
//    function update_entry()
//    {
//        $this->title   = $_POST['title'];
//        $this->content = $_POST['content'];
//        $this->date    = time();
//
//        $this->db->update('entries', $this, array('id' => $_POST['id']));
//    }

}