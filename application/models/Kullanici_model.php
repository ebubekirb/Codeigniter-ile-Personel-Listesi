<?php 

class Kullanici_model extends CI_Model{

	public function get($where){

		$row = $this->db->where($where)->get("kullanici")->row();
		return $row;
	}
}

 ?>