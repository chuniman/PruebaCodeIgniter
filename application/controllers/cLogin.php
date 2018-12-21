<?php

class cLogin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('mLogin');
    }

    public function index() {
        $this->load->view('vLogin');
    }

    public function ingresar() {
        $this->load->model('mLogin');
        $this->load->library('encrypt');

        $usu = $this->input->post('name-persona');
        $pass = sha1($this->input->post('pass-persona'));
        $res = $this->mLogin->login($usu, $pass);
        if ($res) {
            $this->load->view('vPersona');
        } else {
            $this->load->view('vLogin');
            echo "usuario no existente";
        }
    }

}
