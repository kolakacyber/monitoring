<?php
class Model_avatar extends CI_Model {
    var $tabel = 'users'; //buat variabel tabel 
 
    function __construct() {
        parent::__construct();
    }
     
    //fungsi untuk menampilkan semua data dari tabel database
    function get_allimage() {
        $this->db->from($this->tabel);
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
 
    //fungsi insert ke database
    function get_insert($data){
        $user = $this->ion_auth->user()->row();
        $this->db->where('id', $user->id);
        $this->db->update($this->tabel, $data);
        return TRUE;
    }
}
?>