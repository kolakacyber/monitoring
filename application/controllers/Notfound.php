<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notfound extends CI_Controller {

	public function index()
	{
		
		$isi['content'] 	= 'errors/tampil_notfound';
		$isi['judul'] 		= '404';
		$isi['sub_judul'] 	= 'Halaman tidak ditemukan';

		//$this->output->set_status_hearder('404');
		$this->load->view('template',$isi);
	}
}