<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function checking($username,$password)
	{
		$kueri=$this->db->get_where('daftar_user', array('username' => $username, 'password' => $password), 1, 0);

		if ($kueri->num_rows() > 0)
		{
			$qq = $kueri->row();
			return $qq;
		}
		else
		{
			return FALSE;
		}
	}

	public function getUserData()

	{
		$userData = $this->session->userdata();

		return $userData;
	}
	
}