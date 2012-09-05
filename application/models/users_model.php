<?php

class Users_model extends CI_Model{
	
	function validate(){
		$this->db->where( 'u_username', $this->input->post('username') );
		$this->db->where( 'u_password', md5( $this->input->post('password') ) );
		$query = $this->db->get('users');
	
		if($query->num_rows == 1){
			return $query->result();
		}
	}

	/* GET */
	function get_users($num, $offset){
		if(!$offset) {
			$offset = 0;
		}
		
		$query = $this->db->query("
				SELECT * FROM users 
				WHERE u_role != 'admin'
				LIMIT " . $num . " OFFSET " . $offset);
		
		if($query->num_rows != 0){
			return $query->result();
		}
	}
	
	function get_users_count(){
		$this->db->where('u_role', 'contributor');
		$query = $this->db->get('users');
		
		if($query->num_rows != 0){
			return $query->num_rows();
		}
	}
	
	function get_user_by_id($id){
		$this->db->where('u_id', $id);
		
		$query = $this->db->get('users');
		
		if($query->num_rows != 0){
			return $query->result();
		}
	}
	
	/* CREATE */
	
	function create_user($data){
		$this->db->insert('users', $data);
		return;
	}
	
	/* UPDATE */
	
	function update_user($id, $data){
		$this->db->where('u_id', $id);
		$this->db->update('users', $data);
		return;
	}
	
	/* DELETE */
}

?>