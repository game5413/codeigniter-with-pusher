<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{

		if ($this->session->userdata('login') === TRUE)
		{
			redirect('c_main');
		}

		else
		{
			$this->load->view('v_index');
		}
	}

	public function proses_login()
	{
		$this->form_validation->set_rules('username', 'usrname', 'required');
		$this->form_validation->set_rules('password', 'pwd', 'required');

		if ($this->form_validation->run() === TRUE)
		{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			if ($go = $this->m_login->checking($username,$password))
			{
				$data = array(
					'id' => $go->id_user,
					'username' => $username,
					'akses' => $go->akses,
					'login' => TRUE
				);
				$this->session->set_userdata($data);
				// $this->load->view('v_main');
				redirect('c_main');
			}

			else
			{
				redirect('c_home');
			}
		}

		else
		{
			$this->load->view('v_index');
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url());
	}

}
