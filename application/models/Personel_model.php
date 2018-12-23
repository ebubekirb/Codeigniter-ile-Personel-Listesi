<?php 

class Personel_model extends CI_Model{

	public function get_all(){

		$result = $this->db->get("personel")->result();

		return $result;
	}


	public function get($where){

		$row = $this->db->where($where)->get("personel")->row();

		return $row;
	}


	public function insert($data){

		$insert = $this->db->insert("personel", $data);

		return $insert;
	}


	public function update($id){

		// $row = $this->db->where("id", $id)->get("personel")->row();

		$viewData = new stdClass();

		$viewData->row = $row;
		$this->load->view("Personel_duzenle", $viewData);

		// return $query;
	}


	public function delete(){


	}


	public function order_by(){


	}
}

 ?>