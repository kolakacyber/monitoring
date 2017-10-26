<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('model_dashboard');
 
    }

	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}	

		$isi['info'] = $this->model_dashboard->info();

		$isi['content'] 	= 'dashboard';
		$isi['judul'] 		= 'Home';
		$isi['sub_judul'] 	= 'Dashboard';
		$this->load->view('template',$isi);
	}
}
