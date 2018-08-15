<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_main2 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_main'); 
		require_once __DIR__.'\..\vendor\autoload.php';
	}

	public function index()
	{
		$this->load->view('v_main2');
	}

	/*public function get()
	{
		$date = array(
			date('Y-m-d', strtotime(trim('08/10/2018'))),
			10
		);
		// $value = 10;
		$query = $this->db->get('data_penjualan');
		$i = 0;
		foreach ($query->result_array() as $row)
		{
			$data[$i] = array(
				$row['tgl_penjualan'],
				$row['vol_penjualan']
			);

			if(strstr($data[$i][0], $date[0]))
			{
				$this->db->set('vol_penjualan', 'vol_penjualan+' . $date[1] . '', FALSE);
				$this->db->where('tgl_penjualan', $row['tgl_penjualan'], $date);
				$this->db->update('data_penjualan');
			}
			else
			{
				echo 'qwe';
			}
			$i++;
			// if ($row['tgl_penjualan'] === $date)
			// {
			// 	$this->db->set('vol_penjualan', 'vol_penjualan+' . $value . '', FALSE);
			// 	$this->db->where('tgl_penjualan', $date);
			// 	$this->db->update('data_penjualan');
			// }
			// 
			// if (strstr($row['tgl_penjualan'], $date[0]))
			// {
			// }
		}
	}*/

	public function cari()
	{
		$pusher = new Pusher\Pusher("6ace5daedebbde288aaf", "a82e9e1b9ad3fb5d3ed8", "575092", array('cluster' => 'us2'));

		$query = $this->db->get('data_penjualan');
		$i = 0;
		foreach ($query->result_array() as $row)
		{
			$data[$i] = array(
				'RecordID' => intval($row['id_penjualan']),
				'tanggal' => substr($row['tgl_penjualan'], 0, 10),
				'volume' => intval($row['vol_penjualan'])
			);

			$i++;
		}

		$meta = array(
			'page' => 1,
			'pages' => 10,
			'perpage' => 5,
			'total' => $i,
			'sort' => "asc",
			'field' => "tanggal"
		);

		
		echo json_encode(array('meta' => $meta, 'data' => $data));
		// $pusher->trigger('my-channel', 'my-event2', array('meta' => $meta, 'data' => $data));
	}
}
