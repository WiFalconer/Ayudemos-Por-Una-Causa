<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Proyectos_model extends CI_Model {

    public function read($id_entidad) {
        $this->db->where('id_entidad', $id_entidad);
        $query = $this->db->get('actividades');
        return $query->result();
    }

    public function create($data) {
        $this->db->insert('actividades', $data);
        
        return $data['id_entidad'];
    }


}
?>