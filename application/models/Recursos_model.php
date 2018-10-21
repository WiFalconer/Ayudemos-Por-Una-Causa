<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Recursos_model extends CI_Model {

    public function read($id_entidad) {
        $this->db->where('id_entidad', $id_entidad);
        $query = $this->db->get('recurso');
        return $query->result();
    }

    public function create($data) {
        $this->db->insert('recurso', $data);
        
        return $data['id_entidad'];
    }


}
?>