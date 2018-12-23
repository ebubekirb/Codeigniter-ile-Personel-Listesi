<?php 

class Personel extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->model("Personel_model");
	}

	public function index(){

		$list = $this->Personel_model->get_all();

		$viewData["list"] = $list;

		$this->load->view("Personel_liste", $viewData);
	}


	public function insert_form(){

		$this->load->view("Personel_ekle");
	}


	public function insert(){

		$personel_ad 	= $this->input->post("personel_ad");
		$email 			= $this->input->post("email");
		$telefon 		= $this->input->post("telefon");
		$departman 		= $this->input->post("departman");
		$adres 			= $this->input->post("adres");

		$data = array(

			"personel_ad" 	=> $personel_ad,
			"email" 		=> $email,
			"telefon" 		=> $telefon,
			"departman" 	=> $departman,
			"adres" 		=> $adres
		);

		$insert = $this->Personel_model->insert($data);

		if ($insert) {
			
			echo "Ekleme işlemi başarilidir.. Personel listesine dönmek için <a href='".base_url()."'>tiklayiniz<?a>";
		}

		else{

			echo "Ekleme işlemi başarisizdir.. Personel listesine dönmek için <a href='".base_url()."'>tiklayiniz<?a>";
		}
	}


	public function update_form($id){

		$where = array("id" => $id);
		$personel = $this->Personel_model->get($where);
		$viewData["personel"] = $personel;
		$this->load->view("Personel_duzenle", $viewData);
	}


	public function update($id){

		$where = array(

			"id" => $id
		);


		$data = array(

			"personel_ad" 	=> $this->input->post("personel_ad"),
			"email" 		=> $this->input->post("email"),
			"telefon" 		=> $this->input->post("telefon"),
			"departman" 	=> $this->input->post("departman"),
			"adres" 		=> $this->input->post("adres")
		);

		$update = $this->Personel_model->update($where, $data);


		if ($update) {
			
			echo "Güncelleme işlemi başarilidir.. Personel listesine dönmek için <a href='".base_url()."'>tiklayiniz<?a>";
		}

		else{

			echo "Güncelleme işlemi başarisizdir.. Personel listesine dönmek için <a href='".base_url()."'>tiklayiniz<?a>";
		}
	}


	public function delete(){


	}


	public function order(){


	}
}

 ?>