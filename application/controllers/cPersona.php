<?php

class cPersona extends CI_Controller {

    function _construct() {
        parent::__construct();
        $this->load->model('mPersona');
        $this->load->library('encrypt');

        if (!$this->session->userdata('s_idPersona')) {
            redirect('cLogin');
        }
    }

    public function index() {
        $this->load->view('vPersona');
    }

    public function guardarPersona() {
        //echo "entro al metodo guardar";

        $this->load->library('encrypt');
        $param['name'] = $this->input->post('name-persona');
        $param['lastname'] = $this->input->post('lastname-persona');
        $param['email'] = $this->input->post('email-persona');
        $param['Edad'] = $this->input->post('Edad-persona');
        $param['password'] = sha1($this->input->post('pass-persona'));

        if ($param['name'] == null || $param['email'] == null || $param['password'] == null) {
            redirect('cLogin');
        }

        $this->load->model('mPersona');

        $lastId = $this->mPersona->guardar($param);

        echo "se agrego la Persona con id $lastId";

        $this->load->view('vPersona');
    }

    public function borrarPersona() {

        $idpersona = $this->input->post('id-persona');
        if ($idpersona == null) {
            redirect('cPersona');
        }
        $this->load->model('mPersona');

        if ($this->mPersona->existePersona($idpersona)) {
            echo " no existe $idpersona";
            return;
        }
        $this->mPersona->delete($idpersona);

        echo "se elimino $idpersona";
    }

}
