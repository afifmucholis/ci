<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
		$data['barang'] = array (array('1','bejo','tas kecil'),
							array('2', 'beni', 'barang curian'));
		$this->load->view('daftarBarang', $data);
	}

	public function tambah(){
		$this->load->view('tambah');
	}
}
