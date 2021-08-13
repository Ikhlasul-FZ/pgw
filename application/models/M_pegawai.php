<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model{
	public function GetDataUser($where=""){
		$data = $this->db->query('select * from data_pegawai '.$where);
		return $data->result_array();
	}
	public function InsertData($tableName,$data){
		$spn =$this->db->insert($tableName,$data);
		return $spn;
	}
	public function UpdateData($tableName,$data,$where){
		$spn =$this->db->update($tableName,$data,$where);
		return $spn;
	}
	public function DeleteData($tableName,$where){
		$spn =$this->db->delete($tableName,$where);
		return $spn;
	}
}