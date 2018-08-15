<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_laporan');
	}

	public function index()
	{

		if ($this->session->userdata('login') === TRUE)
		{
			$data = array(
				'kelas' => $this->m_laporan->getKelas(),
				'jurusan' => $this->m_laporan->getJurusan()
			);

			$this->load->view('laporan/v_laporan', $data);
		}

		else
		{
			redirect('c_home');
		}
	}

	public function cariLaporan()
	{
		$tanggal_1 = $this->input->post('sel_tgl_1');
		$tanggal_2 = $this->input->post('sel_tgl_2');
		$kelas = $this->input->post('selbox_kelas');
		$jurusan = $this->input->post('selbox_jurusan');
		$no = 1;
		$i =1;

		if ($tanggal_1 && $tanggal_2 && $kelas && $jurusan)
		{

			$q = $this->m_laporan->getData($kelas,$jurusan,$tanggal_1,$tanggal_2);

			if ($q)
			{
				foreach ($q as $row)
				{
					$this->db->select('status_absen', 'tgl_absen');
					$string = "nis_siswa = '" . $row['nis_siswa'] . "' and nama_siswa = '" . $row['nama_siswa'] . "' and tgl_absen between '$tanggal_1' and '$tanggal_2'";
					$hadir = 0;
					$izin = 0;
					$sakit = 0;
					$alfa = 0;
					foreach ($this->db->get_where('daftar_absen', $string)->result_array() as $data)
					{
						
						// switch ($data['status_absen'])
						// {
						// 	case 'hadir':
						// 		$hadir += 1;
						// 		break;

						// 	case 'izin':
						// 		$izin += 1;
						// 		break;

						// 	case 'sakit':
						// 		$sakit += 1;
						// 		break;

						// 	case 'alfa':
						// 		$alfa += 1;
						// 		break;

						// 	default:
						// 		# Echo NULL
						// 		break;
						// }
					}
				}
				
			}

			$data = array(
				'kelas' => $this->m_laporan->getKelas(),
				'jurusan' => $this->m_laporan->getJurusan(),
				'asd' => $this->m_laporan->getData($kelas,$jurusan,$tanggal_1,$tanggal_2),
				'i' => $i,
				'no' => $no,
				'hadir' => $hadir,
				'sakit' => $sakit,
				'izin' => $izin,
				'alfa' => $alfa
			);

			// if ($this->m_absen->getLaporan($tanggal_1,$tanggal_2,$kelas,$jurusan) === NULL)
			// {
			// // $tbl = $this->table->generate($data);
			// // echo $this->table->generate($tbl);
			// 	redirect('c_laporan');
			// 	// print_r('lol');
			// }
			// else
			// {
				$this->load->view('laporan/v_laporan', $data);
			// 	// var_dump($this->m_absen->getAbsen($k,$j,$l) === FALSE);
			// }

		}

		else
		{
			redirect('c_laporan');
		}
	}

}