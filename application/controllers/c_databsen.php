<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_databsen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_absen');
	}

	public function index()
	{

		if ($this->session->userdata('login') === TRUE)
		{
			$data = array(
				'kelas' => $this->m_absen->getKelas(),
				'jurusan' => $this->m_absen->getJurusan()
			);
			$this->load->view('absensi/v_databsen', $data);
		}

		else
		{
			redirect('c_home');
		}
	}

	public function cari()
	{
		$k = $this->input->post('selbox_kelas');
		$j = $this->input->post('selbox_jurusan');
		$l = $this->input->post('sel_tgl_');
		$i = 1;
		$no = 1;
		if ( $k && $j && $l )
		{
			$data = array(
				'kelas' => $this->m_absen->getKelas(),
				'jurusan' => $this->m_absen->getJurusan(),
				'asd' => $this->m_absen->getAbsen($k,$j,$l),
				'i' => $i,
				'no' => $no
			);

			if ($this->m_absen->getAbsen($k,$j,$l) === FALSE)
			{
			// $tbl = $this->table->generate($data);
			// echo $this->table->generate($tbl);
				redirect('c_databsen');
				// print_r('lol');
			}
			else
			{
				$this->load->view('absensi/v_databsen', $data);
				// var_dump($this->m_absen->getAbsen($k,$j,$l) === FALSE);
			}
			// $stat = 'hadir';
			// $b = $this->db->get_where('v_log_absen', array('id_kelas' => $k, 'id_jurusan' => $j, 'tgl_absen' => $l));
		}

		else
		{
			redirect('c_databsen');
		}
	}

}