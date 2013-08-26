<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package		CodeIgniter
 * @subpackage	Rest Server
 * @category	Controller
 * @author		Phil Sturgeon
 * @link		http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Projects extends REST_Controller
{
	
    public function index_get()
{
    $this->response($this->db->get('projects')->result());
}
    function project_get()
    {
        if(!$this->get('id'))
        {
        	$this->response(NULL, 400);
        }

        $projects = $this->Project_model->get_projects( $this->get('id') );
//    	$users = array(
//			1 => array('id' => 1, 'name' => 'Some Guy', 'email' => 'example1@example.com', 'fact' => 'Loves swimming'),
//			2 => array('id' => 2, 'name' => 'Person Face', 'email' => 'example2@example.com', 'fact' => 'Has a huge face'),
//			3 => array('id' => 3, 'name' => 'Scotty', 'email' => 'example3@example.com', 'fact' => 'Is a Scott!', array('hobbies' => array('fartings', 'bikes'))),
//		);
		
    	$project = @$projects[$this->get('id')];
    	
        if($project)
        {
            $this->response($project, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'Project could not be found'), 404);
        }
    }
    
//    function user_post()
//    {
//        //$this->some_model->updateUser( $this->get('id') );
//        $message = array('id' => $this->get('id'), 'name' => $this->post('name'), 'email' => $this->post('email'), 'message' => 'ADDED!');
//        
//        $this->response($message, 200); // 200 being the HTTP response code
//    }
//    
//    function user_delete()
//    {
//    	//$this->some_model->deletesomething( $this->get('id') );
//        $message = array('id' => $this->get('id'), 'message' => 'DELETED!');
//        
//        $this->response($message, 200); // 200 being the HTTP response code
//    }
    
    function projects_get()
    {
        $projects = $this->Project_model->get_projects();
//        $users = array(
//			array('id' => 1, 'name' => 'Some Guy', 'email' => 'example1@example.com'),
//			array('id' => 2, 'name' => 'Person Face', 'email' => 'example2@example.com'),
//			3 => array('id' => 3, 'name' => 'Scotty', 'email' => 'example3@example.com', 'fact' => array('hobbies' => array('fartings', 'bikes'))),
//		);
        
        if($projects)
        {
            $this->response($projects, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'Couldn\'t find any projects!'), 404);
        }
    }


	public function send_post()
	{
		var_dump($this->request->body);
	}


	public function send_put()
	{
		var_dump($this->put('foo'));
	}
}