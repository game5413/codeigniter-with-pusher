<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_absen extends CI_Model {

	public function getKelas()
	{
		$kueri = $this->db->get('daftar_kelas');

		return $kueri->result_array();
	}
	
	public function getJurusan()
	{
		$kueri = $this->db->get('daftar_jurusan');

		return $kueri->result_array();
	}

	public function getSiswa($kelas,$jurusan)
	{
		$this->db->order_by('nama_siswa', 'ASC');
		$kueri = $this->db->get_where('daftar_siswa', array('id_kelas' => $kelas, 'id_jurusan' => $jurusan));

		if ($kueri->num_rows() > 0)
		{
			return $kueri->result_array();
		}

		else
		{
			return FALSE;
		}
	}

	public function getAbsen($kelas,$jurusan,$tanggal)
	{
		$this->db->order_by('nama_siswa', 'ASC');
		$kueri = $this->db->get_where('v_log_absen', array('id_kelas' => $kelas, 'id_jurusan' => $jurusan, 'tgl_absen' => $tanggal, 'status_absen !=' => 'hadir'));

		if ($kueri->num_rows() > 0)
		{
			return $kueri->result_array();
		}

		else
		{
			return FALSE;
		}
	}

}