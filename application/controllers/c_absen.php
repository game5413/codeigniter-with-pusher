<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_absen extends CI_Controller {

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
			$this->load->view('absensi/v_absen', $data);
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
		$i = 1;
		$no = 1;
		if ( $k && $j )
		{
			$data = array(
				'kelas' => $this->m_absen->getKelas(),
				'jurusan' => $this->m_absen->getJurusan(),
				'asd' => $this->m_absen->getSiswa($k,$j),
				'i' => $i,
				'no' => $no
			);
			// $tbl = $this->table->generate($data);
			$this->load->view('absensi/v_absen', $data);
			// echo $tbl = $this->table->generate($this->m_absen->getSiswa($k,$j));
		}

		else
		{
			redirect('c_absen');
		}
	}

	public function absen()
	{
		$tgl = $this->input->post('sel_tgl_');

		if ($this->input->post('hdn_row_count') > 0)
		{
			for ($i=1; $i < $this->input->post('hdn_row_count'); $i++)
			{ 
				$nis = $this->input->post('nis_'.$i);
				$nama = $this->input->post('nama_siswa_'.$i);
				$status = $this->input->post('status_'.$i);
				$data = array(
					'nis_siswa' => $nis,
					'nama_siswa' => $nama,
					'status_absen' => $status,
					'tgl_absen' => $tgl
				);

				if ($this->db->get_where('daftar_absen', array('nis_siswa' => $nis,
					'nama_siswa' => $nama,					
					'tgl_absen' => $tgl))->result())
				{
					return TRUE;
				}

				else
				{
					// redirect('c_absen', 'location');
					// return FALSE;
					$this->db->insert('daftar_absen', $data);
				}
			}
			
			// $this->load->view('absensi/v_absen');
			redirect('c_absen', 'location');

		}
		else
		{
			// return FALSE;
			echo 'gagal';
		}
		// $jumlah = $this->input->post('hdn_row_count');
	}

}