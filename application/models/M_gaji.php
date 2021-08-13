<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gaji extends CI_Model{
	public function GetDataGaji($where=""){
		$data = $this->db->query('select * from data_gaji '.$where);
		return $data->result_array();
	}
	public function InsertDataa($tableName,$data){
		$spn =$this->db->insert($tableName,$data);
		return $spn;
	}
	public function UpdateDataa($tableName,$data,$where){
		$spn =$this->db->update($tableName,$data,$where);
		return $spn;
	}
	public function DeleteDataa($tableName,$where){
		$spn =$this->db->delete($tableName,$where);
		return $spn;
	}
	function JoinAllTable(){
		$this->db->select('*');
		$this->db->from('tbl_buku b');
		$this->db->join('tbl_pengunjung u', 'u.id_buku = b.id_buku');
		$query=$this->db->get();
		return $query->result_array();
	}
}