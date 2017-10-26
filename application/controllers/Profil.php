<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function __construct()
    {

        parent::__construct();
 
    }

	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}

		$isi['content'] 	= 'auth/profil';
		$isi['judul'] 		= 'Setting';
		$isi['sub_judul'] 	= 'Profil';

		$this->load->view('template',$isi);
	}
}
