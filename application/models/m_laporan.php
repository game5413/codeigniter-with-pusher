<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

	public function getData($kelas,$jurusan,$tgl1,$tgl2)
	{
		$this->db->distinct();
		$this->db->order_by('nama_siswa', 'ASC');
		$q = $this->db->get_where('v_laporan', array('id_kelas' => $kelas, 'id_jurusan' => $jurusan));

		if ($q->num_rows() > 0)
		{
			return $q->result_array();
		}

		else
		{
			return FALSE;
		}
	}

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
}