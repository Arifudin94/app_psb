<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {


	//Periksa Login Admin
	function login_admin($username,$password)
	{
		$auth = array(
			'username' => $username,
			'password' => $password
			);
		
		$query = $this->db->get_where('admin',$auth);
		if($query->num_rows() > 0) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	//Periksa Login User
	function login_user($email,$password)
	{
		$cek_user = array(
			'email' => $email,
			'password' => $password
			);
		$query = $this->db->get_where('data_calon',$cek_user);
		if ($query->num_rows() > 0) {
			return $query->row_array();
		}
		else {
			return FALSE;
		}
	}

}

/* End of file model_login.php */
/* Location: ./application/models/model_login.php */