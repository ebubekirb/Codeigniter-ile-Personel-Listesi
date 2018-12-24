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
                $pass = $this->input->post("pass");
                $captcha = $this->input->post("captcha");

                if (!$email || !$pass || !$captcha ) {
                        
                        $alert = array(
                                "title"         => "İşlem Başarısız",
                                "message"       => "Lütfen tüm alanları eksiksiz olarak doldurunuz!!!",
                                "type"          => "danger"
                        );
                }

                else{
                        if ($captcha == $this->session->userdata("code")) {
                                
                                // Database işlemleri
                                echo "başarılı"; die();
                        }

                        else{

                                $alert = array(
                                "title"         => "İşlem Başarısız",
                                "message"       => "Doğrulama kodunu yanlış girdiniz!!!",
                                "type"          => "danger"
                        );
                        }

                }

                $this->session->set_flashdata("alert", $alert);
                redirect(base_url("kullanici"));

        }

        public function logout(){


        }
}

 ?>