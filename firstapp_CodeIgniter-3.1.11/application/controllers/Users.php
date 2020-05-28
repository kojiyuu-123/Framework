<?php
class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // This line will load user model to this controller
        $this->load->model('users_model');
        
    }
    
    public function index()
	{
		$data["users"] = $this->users_model->get_users();
		
		$data["page_title"] = "ヒーリングっどプリキュア";
		
		$this->load->view('header', $data);
		
		$this->load->view('users/index', $data);
		
		$this->load->view('footer', $data);
	}
}


