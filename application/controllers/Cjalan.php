<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Cjalan extends CI_Controller
{
    var $limit=10;
    var $offset=10;
 
    public function __construct() {
        parent::__construct();
        $this->load->model('mjalan'); //load model mupload yang berada di folder model
        $this->load->helper(array('url')); //load helper url
 
    }
 
    public function index($page=NULL,$offset='',$key=NULL)
    {

        if (!$this->ion_auth->logged_in())
        {
          redirect('auth/login', 'refresh');
        }

        $data['content'] = 'backend/jalan/vjalan';
        $data['judul']='Upload'; //varibel title
        $data['sub_judul']='Jalan'; //varibel title 

        $data['query'] = $this->mjalan->get_allimage(); //query dari model
         
        $this->load->view('template',$data); //tampilan awal ketika controller jalan di akses
    }

    //############ TAMBAHAN KU ############
    public function jalan_kolaka()
    {
        $isi['data'] = $this->mjalan->get_allimage();
        $isi['sub_judul']   = 'jalan';
        $this->load->view('frontend/jalan_kolaka',$isi);
    }
    //############ BATAS TAMBAHAN KU ############

    public function add() {

        if (!$this->ion_auth->logged_in())
        {
          redirect('auth/login', 'refresh');
        }      
         
        $data['content'] = 'backend/jalan/fjalan';
        $data['judul']='Upload'; //varibel title
        $data['sub_judul']='Gambar'; //varibel title 
         
        //view yang tampil jika fungsi add diakses pada url
        $this->load->view('template',$data);
        
    }

    public function insert(){

        if (!$this->ion_auth->logged_in())
        {
          redirect('auth/login', 'refresh');
        }

        $this->load->library('upload');
        $nmfile = "jalan_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/gambar/jalan'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
         
        if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'nm_gbr' =>$gbr['file_name'],
                  'tipe_gbr' =>$gbr['file_type'],
                  'nama_gbr' =>$this->input->post('textnama'),
                  'jenis' =>$this->input->post('jenis'),
                  'kondisi' =>$this->input->post('kondisi'),
                  'panjang' =>$this->input->post('panjang'),
                  'lokasi' =>$this->input->post('lokasi'),
                  'kecamatan' =>$this->input->post('kecamatan'),
                  'kelurahan' =>$this->input->post('kelurahan'),
                  'ket_gbr' =>$this->input->post('textket')
                   
                );
 
                $this->mjalan->get_insert($data); //akses model untuk menyimpan ke database
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                redirect('cjalan'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                redirect('cjalan/add'); //jika gagal maka akan ditampilkan form upload
            }
        }
    }

    /* untuk menangani edit gambar */
   public function edit(){

        if (!$this->ion_auth->logged_in())
        {
          redirect('auth/login', 'refresh');
        }

        $data['content'] = 'backend/jalan/fejalan';
        $data['judul']='Upload'; //varibel title
        $data['sub_judul']='Edit Gambar'; //varibel title 

        $idgbr=$this->input->get('idgbr'); //mengambil variabel get idgbr dari url
        $where=array('id'=>$idgbr); //array where query untuk menampilkan gambar per id
        $data['row'] = $this->mjalan->get_byimage($where);   //query dari model ambil per id
   
        //utk form edit nya, saya tambahkan sebuah view bernama feupload.php
        $this->load->view('template',$data);
   }
 
   //untuk menangani proses upload gambar yang di edit
   public function update(){
 
      if (!$this->ion_auth->logged_in())
      {
        redirect('auth/login', 'refresh');
      }

       $this->load->library('upload');// library dapat di load di fungsi , di autoload atau di construc nya tinggal pilih salah satunya
       $nmfile = "jalan_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $path   = './assets/gambar/jalan/'; //path folder
       $config['upload_path'] = $path; //variabel path untuk config upload
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '2048'; //maksimum besar file 2M
       $config['max_width']  = '1288'; //lebar maksimum 1288 px
       $config['max_height']  = '768'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
       $this->upload->initialize($config);
 
       $idgbr      = $this->input->post('kode'); /* variabel id gambar */
       $filelama   = $this->input->post('filelama'); /* variabel file gambar lama */
 
       if($_FILES['filefoto']['name'])
       {
           if ($this->upload->do_upload('filefoto'))
           {
               $gbr = $this->upload->data();
               $data = array(
                 'nm_gbr' =>$gbr['file_name'],
                 'tipe_gbr' =>$gbr['file_type'],
                 'nama_gbr' =>$this->input->post('textnama'),
                 'jenis' =>$this->input->post('jenis'),
                 'kondisi' =>$this->input->post('kondisi'),
                 'panjang' =>$this->input->post('panjang'),
                 'lokasi' =>$this->input->post('lokasi'),
                 'kecamatan' =>$this->input->post('kecamatan'),
                 'kelurahan' =>$this->input->post('kelurahan'),
                 'ket_gbr' =>$this->input->post('textket')
 
               );
 
               @unlink($path.$filelama);//menghapus gambar lama, variabel dibawa dari form
 
               $where =array('id'=>$idgbr); //array where query sebagai identitas pada saat query dijalankan
               $this->mjalan->get_update($data,$where); //akses model untuk menyimpan ke database
 
               $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Edit dan Upload gambar berhasil !!</div></div>"); //pesan yang muncul jika berhasil diupload pada session flashdata
               redirect('cjalan'); //jika berhasil maka akan ditampilkan view vupload
 
           }else{  /* jika upload gambar gagal maka akan menjalankan skrip ini */
               $er_upload=$this->upload->display_errors(); /* untuk melihat error uploadnya apa */
               //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
               $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal edit dan upload gambar !! ".$er_upload."</div></div>");
               redirect('cjalan/edit'); //jika gagal maka akan ditampilkan form upload
           }
       }else{ /* jika file foto tidak ada maka query yg dijalankan adalah skrip ini  */
 
           $data = array(
               // 'ket_gbr' =>$this->input->post('textket')
                 'nama_gbr' =>$this->input->post('textnama'),
                 'jenis' =>$this->input->post('jenis'),
                 'kondisi' =>$this->input->post('kondisi'),
                 'panjang' =>$this->input->post('panjang'),
                 'lokasi' =>$this->input->post('lokasi'),
                 'kecamatan' =>$this->input->post('kecamatan'),
                 'kelurahan' =>$this->input->post('kelurahan'),
                 'ket_gbr' =>$this->input->post('textket')
           );
 
           $where =array('id'=>$idgbr); //array where query sebagai identitas pada saat query dijalankan
           $this->mjalan->get_update($data,$where); //akses model untuk menyimpan ke database
 
           $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Berhasil edit, Gambar tidak ada diupload !!</div></div>");
           redirect('cjalan'); /* jika berhasil maka akan kembali ke home upload */
       }
   }
 
   /* fungsi untuk menangani proses hapus */
   public function hapus(){

      if (!$this->ion_auth->logged_in())
      {
        redirect('auth/login', 'refresh');
      }
          
       /* variabel di deklarasikan */
       $idgbr  = $this->input->post('kode'); /* variabel id gambar */
 
       /* query menampilkan gambar dibuat dulu agar gambarnya dihapus sebelum dihapus dari database */
       $path= './assets/gambar/jalan';
       $ardel  = array('id'=>$idgbr);
       $rowdel = $this->mjalan->get_byimage($ardel);
 
       /* file gambar dihapus dari folder */
       @unlink($path.$rowdel->nm_gbr);
 
       /* query hapus dilanjutkan ke model get_delete */
       $this->mjalan->get_delete($ardel); //karna array where querynya sama, maka saya langsung include saja $ardel
 
       $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Berhasil hapus data Gambar dan file gambar dari folder !!</div></div>");
       redirect('cjalan'); /* jika berhasil maka akan kembali ke home upload */
   }

}
 
/* End of file cjalan.php */
/* Location: ./application/controllers/cjalan.php */
