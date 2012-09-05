<?php

class Register extends CI_Controller{
	
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
		$this->load->view('register');
	}
	
	private function add(){
		
		if($this->input->post('iscustomer') == "Customer"){
			$iscustomer = true;
		}
		

		if($this->input->post('iscustomer') == "Customer"){
			$iscustomer = true;
		}
		
		//data passing for database entry
		$data1 = array(
					'u_username' => $this->input->post('username'),
					'u_password' => $this->input->post('password'),
					'u_fname' => $this->input->post('fname'),
					'u_mname' => $this->input->post('mname'),
					'u_lname' => $this->input->post('lname'),
					'u_email' => $this->input->post('email'),
					'u_phonenumber' => $this->input->post('pnum'),
					'u_mobilenumber' => $this->input->post('mnum'),
					'u_gender' => $this->input->post('gender'),
				);
		
		$data2 = array(
					''
				);
	}
	
}

?>