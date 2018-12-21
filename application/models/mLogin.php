<?php

class mLogin extends CI_Model {

    function login($usu, $pass) {
        $this->db->select('p.name, p.idpersona');
        $this->db->from('persona p');
        $this->db->where('p.name', $usu);
        $this->db->where('p.password', $pass);
        $res = $this->db->get();

        
        if ($res->num_rows() == 1) {
            $r = $res->row();
            $S_Usuario = array('s_idPersona' => $r->idpersona, 's_name' => $r->name);
            $this->session->set_userdata($S_Usuario);
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
