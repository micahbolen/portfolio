<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->model('Project_model');
        $data['projects'] = $this->Project_model->get_projects();
        
        $this->load->helper('url');
        $this->load->view('welcome_message', $data);
    }

}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */