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


	}


	public function update_form(){


	}


	public function update(){


	}


	public function delete(){


	}


	public function order(){


	}
}

 ?>