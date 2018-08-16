<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_main extends CI_Model {

	public function input($data)
	{
		$this->db->insert('data_penjualan', $data);
		return $this->db->insert_id();
	}

	public function hapus($data)
	{
		$this->db->where($data);
		echo $this->db->delete('data_penjualan');
	}

	public function ubah($data)
	{
		$this->db->set('tgl_penjualan', $data['tgl_penjualan']);
		$this->db->set('vol_penjualan', $data['vol_penjualan'], FALSE);
		$this->db->where('id_penjualan', $data['id_penjualan']);
		echo $this->db->update('data_penjualan');
	}
}