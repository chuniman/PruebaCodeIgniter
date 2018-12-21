<?php

class mPersona extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function guardar($param) {
        $campos = array(
            'name' => $param['name'],
            'LastName' => $param['lastname'],
            'email' => $param['email'],
            'age' => $param['Edad'],
            'password' => $param['password']
        );
        $this->db->insert('persona', $campos);
        return $this->db->insert_id();
    }

    public function updateEmail($param) {

        $this->db->set('email', $param['email'], FALSE);
        $this->db->where('idpersona', $param['idpersona']);
        $this->db->update('persona');
        return TRUE;
    }

    public function delete($id) {
        $this->db->where('idpersona', $id);
        $this->db->delete('persona');
        return TRUE;
    }

    public function getPersona($param) {
        $this->db->from('persona p');
        $this->db->where('p.name', $usu);
        $res = $this->db->get();

        //if ($res->num_rows() == 1) {
        // $r = $res->row();
        return $res;
        //} 
    }

    public function existePersona($param) {
        $this->db->from('persona p');
        $this->db->where('p.name', $usu);
        $res = $this->db->get();

        if ($res->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getPersonasId($param) {
        $this->db->select('p.idpersona');
        $this->db->from('persona p');
        $res = $this->db->get();
        $idPer = array();


        foreach ($res as $row) {
            $idPer[] = $row->idpersona;
        }

        //if ($res->num_rows() == 1) {
        // $r = $res->row();
        return $idPer;
        //} 
    }

}
