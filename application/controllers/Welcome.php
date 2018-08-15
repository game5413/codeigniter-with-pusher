<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function pusher()
	{
		require_once __DIR__.'\..\vendor\autoload.php';

		$pusher = new Pusher\Pusher("6ace5daedebbde288aaf", "a82e9e1b9ad3fb5d3ed8", "575092", array('cluster' => 'us2'));

		$data = array();
		$this->db->order_by('tgl_penjualan', 'ASC');
		$query = $this->db->get('data_penjualan');
		$i = 0;
		foreach ($query->result_array() as $row)
		{
			$data[$i] = array(
				substr($row['tgl_penjualan'], 0, 10),
				$row['vol_penjualan']
			);

			$i++;
		}

		$response = $pusher->trigger('aw', 'ew', array('data' => $data));

		if ($response === TRUE) {
			echo "TRUE";
		}
		else
		{
			echo "FALSE";
		}
	}
}
