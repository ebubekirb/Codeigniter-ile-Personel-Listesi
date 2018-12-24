<?php 

class Personel extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->model("Personel_model");

		$user = $this->session->userdata("user");

		if (!$user) {
			
			redirect(base_url());
		}
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
		$img 			= $_FILES["img_id"]["name"];

		if ($personel_ad && $email && $telefon && $departman && $adres && $img ) {
			
			$config["upload_path"] 		= "uploads/";
			$config["allowed_types"] 	= "gif|jpg|png";

			$this->load->library("upload", $config);

			if ($this->upload->do_upload("img_id")) {

				$img_id = $this->upload->data("file_name");
					
				$data = array(
					"personel_ad" 	=> $personel_ad,
					"email" 		=> $email,
					"telefon" 		=> $telefon,
					"departman" 	=> $departman,
					"adres" 		=> $adres,
					"img_id"		=> $img_id
				);

					$insert = $this->Personel_model->insert($data);

					if ($insert) {

						$alert = array(
							"title" 	=> "İşlem Başarılıdır",
							"message" 	=> "Ekleme İşlemi Başarılıdır",
							"type" 		=> "success"
						);
					}

					else{

						$alert = array(
							"title" 	=> "İşlem Başarısızdır!!",
							"message" 	=> "Ekleme İşlemi Başarısızdır",
							"type" 		=> "danger"
						);
						}

				}

				else{

					$alert = array(
						"title" 	=> "İşlem Başarısızdır!!",
						"message" 	=> "Resim yüklenirken sorun oluştu...",
						"type" 		=> "danger"
					);

				}
		}

		else{

			$alert = array(
				"title" 	=> "İşlem Başarısızdır!!",
				"message" 	=> "Lütfen boş alan bırakmayınız...",
				"type" 		=> "danger"
			);

		}

		$this->session->set_flashdata("alert", $alert);

		redirect(base_url("personel"));

	}


	public function update_form($id){

		$where = array("id" => $id);
		$personel = $this->Personel_model->get($where);
		$viewData["personel"] = $personel;
		$this->load->view("Personel_duzenle", $viewData);
	}


	public function update($id){

		$img = $_FILES["img_id"]["name"];

		if ($img) {

			$config["upload_path"] 		= "uploads/";
			$config["allowed_types"]	= "gif|png|jpg";

			$this->load->library("upload", $config);
			$upload = $this->upload->do_upload("img_id"); 

			if ($upload) {
				
				$data = array(
					"personel_ad" 	=> $this->input->post("personel_ad"),
					"email" 		=> $this->input->post("email"),
					"telefon" 		=> $this->input->post("telefon"),
					"departman" 	=> $this->input->post("departman"),
					"adres" 		=> $this->input->post("adres"),
					"img_id"		=> $this->upload->data("file_name")
				);
			}

			else{

				$alert = array(
					"title" 	=> "İşlem Başarısızdır!!",
					"message" 	=> "Upload islemi sirasinda bir problem olustu...",
					"type" 		=> "danger"
				);
			}
		}

		else{

			$data = array(
				"personel_ad" 	=> $this->input->post("personel_ad"),
				"email" 		=> $this->input->post("email"),
				"telefon" 		=> $this->input->post("telefon"),
				"departman" 	=> $this->input->post("departman"),
				"adres" 		=> $this->input->post("adres")
			);
		}

		$where = array(

			"id" => $id
		);

		
		$update = $this->Personel_model->update($where, $data);


		if ($update) {
			
			$alert = array(
				"title" 	=> "İşlem Başarılıdır",
				"message" 	=> "Güncelleme işlemi başarilidir..",
				"type" 		=> "success"
			);
		}

		else{

			$alert = array(
				"title" 	=> "İşlem Başarısızdır!!",
				"message" 	=> "Güncelleme işlemi başarisizdir..",
				"type" 		=> "danger"
			);
		}

		$this->session->set_flashdata("alert", $alert);
		redirect(base_url("personel"));
	}


	public function delete($id){

		$where = array("id" => $id);
		$delete = $this->Personel_model->delete($where);

		if ($delete) {
			
			$alert = array(
				"title" 	=> "İşlem Başarılıdır",
				"message" 	=> "Silme işlemi başarilidir..",
				"type" 		=> "success"
			);
		}

		else{

			$alert = array(
				"title" 	=> "İşlem Başarısızdır!!",
				"message" 	=> "Silme işlemi başarisizdir..",
				"type" 		=> "danger"
			);
		}

		$this->session->set_flashdata("alert", $alert);
		redirect(base_url("personel"));
	}


	public function order($field = "id", $order = "ASC"){

		$list = $this->Personel_model->order_by($field, $order);

		$viewData["list"] = $list;
		$this->load->view("Personel_liste", $viewData);
	}
}

 ?>