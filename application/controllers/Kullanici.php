<?php 

class Kullanici extends CI_Controller{

        public function index(){

	$this->load->helper("captcha");

	$vals = array(
        'word'          => '',
        'img_path'      => 'captcha_images/',
        'img_url'       => base_url("captcha_images"),
        'font_path'     => 'fonts/corbel.ttf',
        'img_width'     => '150',
        'img_height'    => 40,
        'expiration'    => 7200,
        'word_length'   => 5,
        'font_size'     => 20,
        'img_id'        => 'myCap',
        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

        // White background and border, black text and red grid
        'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
        )
        );

        	$captcha = create_captcha($vals);

        	$viewData["captcha"] = $captcha["image"];

                $this->session->set_flashdata("code", $captcha["word"]);
        	$this->load->view("Login_form", $viewData);
        }

        public function login(){

                $email = $this->input->post("email");
                $sifre = $this->input->post("sifre");
                $captcha = $this->input->post("captcha");

                if (!$email || !$sifre || !$captcha ) {
                        
                        $alert = array(
                                "title"         => "İşlem Başarısız",
                                "message"       => "Lütfen tüm alanları eksiksiz olarak doldurunuz!!!",
                                "type"          => "danger"
                        );
                }

                else{
                        if ($captcha == $this->session->userdata("code")) {
                                
                                $where = array(

                                        "email"        => $email,
                                        "sifre"         => md5($sifre)
                                );

                                $this->load->model("Kullanici_model");
                                $row = $this->Kullanici_model->get($where);

                                if ($row) {
                                        
                                        redirect("personel");
                                }

                                else{

                                        $alert = array(
                                        "title"         => "İşlem Başarısız",
                                        "message"       => "Böyle bir kullanıcı bulunamadı!!!",
                                        "type"          => "danger"
                                );
                                }
                        }

                        

                        else {

                                $alert = array(
                                "title"         => "İşlem Başarısız",
                                "message"       => "Doğrulama kodunu yanlış girdiniz!!!",
                                "type"          => "danger"
                        );
                        }

                        $this->session->set_flashdata("alert", $alert);

                }

                $this->session->set_flashdata("alert", $alert);
                redirect(base_url("kullanici"));

        }

        public function logout(){


        }
}

 ?>