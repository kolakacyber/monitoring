<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Avatar extends CI_Controller
{
    var $limit=10;
    var $offset=10;
 
    public function __construct() {

        parent::__construct();
        $this->load->model('model_avatar'); //load model mupload yang berada di folder model
        $this->load->helper(array('url')); //load helper url
 
    }
 
    public function index($page=NULL,$offset='',$key=NULL)
    {
        //$data['titel']='Upload CodeIgniter'; //varibel title
         
        //$data['query'] = $this->mupload->get_allimage(); //query dari model
         
        //$data['content']     = 'auth/avatar';
        //$data['judul']       = 'Profil';
        //$data['sub_judul']   = 'Avatar'; 

        //$this->load->view('template',$data); //tampilan awal ketika controller upload di akses
        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }

        $data['titel']='Form Upload CodeIgniter'; //varibel title
        
        $data['content']     = 'auth/avatar';
        $data['judul']       = 'Profil';
        $data['sub_judul']   = 'Avatar'; 

        //view yang tampil jika fungsi add diakses pada url
        $this->load->view('template',$data);
    }
    public function add() {

        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
         
        $data['titel']='Form Upload CodeIgniter'; //varibel title
        
        $data['content']     = 'auth/avatar';
        $data['judul']       = 'Profil';
        $data['sub_judul']   = 'Avatar'; 

        //view yang tampil jika fungsi add diakses pada url
        $this->load->view('template',$data);
        
    }
    public function insert(){

        if (!$this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
        
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/avatar/'; //path folder
        $config['allowed_types'] = 'jpg|png|gif'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 1M
        $config['max_width']  = '1024'; //lebar maksimum 1024 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
         
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'avatar' =>$gbr['file_name']
                );
 
                $this->model_avatar->get_insert($data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                redirect('profil'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('avatar'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }
}
 
/* End of file upload.php */
/* Location: ./application/controllers/upload.php */