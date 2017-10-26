<?php
class Model_dashboard extends CI_Model {

	function kh_bulan(){

		$user = $this->ion_auth->user()->row();
		$sekarang = date('m');
		$this->db->from('tbl_skp');
		$this->db->where('nip',$user->nip);
		$this->db->where('MONTH(tanggal)',$sekarang);
		//$bulan = date('m', strtotime($data->tanggal));
		return $this->db->count_all_results();
	} 

	function kh_tahun(){

		$user = $this->ion_auth->user()->row();
		$sekarang = date('Y');
		$this->db->from('tbl_skp');
		$this->db->where('nip',$user->nip);
		$this->db->where('YEAR(tanggal)',$sekarang);
		//$bulan = date('m', strtotime($data->tanggal));
		return $this->db->count_all_results();
	} 

	function info(){
		$query=$this->db->query("SELECT * FROM tbl_info");
		return $query->result();
	}



}
?>