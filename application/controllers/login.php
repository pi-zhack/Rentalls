<?php

class Login extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->is_logged_in();
	}
	//checks if the user is already logged in
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
	
		if(isset($is_logged_in) && $is_logged_in === true){
			//redirect('welcome');
		}
	}
	
	public function index(){
		$css[0] = '';
		$scripts[0] = '';
		
		$this->load->view('login');
	}
	
	function validate_credentials(){
		$this->load->model('users_model');
		$query = $this->users_model->validate();
	
		if($query){
			
			$data = array(
					'u_id' => $query[0]->u_id,
					'username' => $this->input->post('username'),
					'is_logged_in' => true
			);
			
			$this->session->set_userdata($data);
			redirect('welcome');
		}
		else{
			redirect('login?fail=1');
		}
	}
}

?>