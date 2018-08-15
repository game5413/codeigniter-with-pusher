<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_main');
		require_once __DIR__.'\..\vendor\autoload.php';
	}

	public function index()
	{
		$this->load->view('v_main');
	}

	public function tambah()
	{

		$date = array(
			// 'asd' => date('y-m-d h:i:s'),
			'tgl_penjualan' => date('Y-m-d', strtotime(trim($this->input->post('tanggal')))),
			'vol_penjualan' => $this->input->post('volume')
		);
		if ($date['vol_penjualan']<=0)
		{
			return FALSE;
		}
		elseif ($this->update())
		{
			$this->db->set('vol_penjualan',  $date['vol_penjualan'] , FALSE);
			$this->db->like('tgl_penjualan', $date['tgl_penjualan']);
			var_dump($this->db->update('data_penjualan'));
			// $alert['alert'] = array(
			// 	'title' => 'Informasi!',
			// 	'text' => 'Anda berhasil mengubah data'
			// );
			// return $alert;
		}
		else
		{
			$this->m_main->input($date);
			// $alert['alert'] = array(
			// 	'title' => 'Informasi!',
			// 	'text' => 'Anda berhasil menambah data'
			// );
			// return $alert;
			// $this->cari();
		}

		// echo json_encode($date);
	}

	public function update()
	{
		$date = array(
			// 'asd' => date('y-m-d h:i:s'),
			'tgl_penjualan' => date('Y-m-d', strtotime(trim($this->input->post('tanggal')))),
			'vol_penjualan' => $this->input->post('volume')
		);

		$query = $this->db->get('data_penjualan');
		$i = 0;
		foreach ($query->result_array() as $row)
		{
			$data[$i] = array(
				$row['tgl_penjualan'],
				$row['vol_penjualan']
			);

			if(strstr($data[$i][0], $date['tgl_penjualan']))
			{
				return TRUE;
			}
			$i++;
		}
	}

	public function cari()
	{
		$pusher = new Pusher\Pusher("6ace5daedebbde288aaf", "a82e9e1b9ad3fb5d3ed8", "575092", array('cluster' => 'us2'));

		$data = array();
		$this->db->order_by('tgl_penjualan', 'ASC');
		$query = $this->db->get('data_penjualan');
		$i = 0;
		$no = 1;
		foreach ($query->result_array() as $row)
		{
			$data[$i] = array(
				'id' => $row['id_penjualan'],
				'no' => $no++,
				'tanggal' => substr($row['tgl_penjualan'], 0, 10),
				'volume' => $row['vol_penjualan']
			);

			$i++;
		}
		
		$meta = array(
			'page' => 1,
			'pages' => 1,
			'perpage' => -1,
			'total' => $i,
			'sort' => "asc",
			'field' => "tanggal"
		);
		// echo json_encode(array("data" => $data));
		$pusher->trigger('my-channel', 'my-event', array('meta' => $meta, 'data' => $data));
		
	}

	/*public function tanggal()
	{
		// $data = array();
		$this->db->order_by('tgl_penjualan', 'ASC');
		$query = $this->db->get('data_penjualan');
		$i = 0;
		foreach ($query->result_array() as $row)
		{
			// $data .= "tanggal: '".$row["tgl_penjualan"]."', volume: ".$row["vol_penjualan"].",";
			$data[$i] = substr($row['tgl_penjualan'], 0, 10);
			$i++;
		}

		echo json_encode($data);
	}
	public function volume()
	{
		$pusher = new Pusher\Pusher("6ace5daedebbde288aaf", "a82e9e1b9ad3fb5d3ed8", "575092", array('cluster' => 'us2'));

		$this->db->order_by('tgl_penjualan', 'ASC');
		$query = $this->db->get('data_penjualan');
		$i = 0;
		foreach ($query->result_array() as $row)
		{
			$data[$i] = array(
				substr($row['tgl_penjualan'], 0, 10),
				intval($row['vol_penjualan'])
			);
			$i++;
		}

		echo json_encode($data);
		$pusher->trigger('my-chart', 'my-amchart', $data);
	}*/

	public function hapus()
	{
		$data = array(
			'id_penjualan' => $this->input->post('id')
		);

		$this->m_main->hapus($data);
	}

	public function change()
	{
		$data = array(
			'id_penjualan' => $this->input->post('id'),
			'tgl_penjualan' => date('Y-m-d', strtotime(trim($this->input->post('tanggal')))),
			'vol_penjualan' => $this->input->post('volume')
		);

		$this->m_main->ubah($data);
	}

	public function go()
	{
		$pusher = new Pusher\Pusher("6ace5daedebbde288aaf", "a82e9e1b9ad3fb5d3ed8", "575092", array('cluster' => 'us2'));

		$data = array();
		$this->db->order_by('tgl_penjualan', 'ASC');
		$query = $this->db->get('data_penjualan');
		$i = 0;
		foreach ($query->result_array() as $row)
		{
			$data[$i] = array(
				'tanggal' => substr($row['tgl_penjualan'], 0, 10),
				'volume' => intval($row['vol_penjualan'])
			);
			$i++;
		}

		$pusher->trigger('my-chart', 'my-amchart', $data);
		// echo json_encode($data);
	}
	
}
