<?php 

class Personel extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->model("Personel_model");
	}

	public function index(){

		$list = $this->Personel_model->get_all();

		print_r($list);

		$this->load->view("Personel_liste");
	}


	public function insert_form(){


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