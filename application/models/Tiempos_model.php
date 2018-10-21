<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Tiempos_model extends CI_Model {

    public function read($id_entidad, $id_actividad) {
        $this->db->where('id_actividad', $id_actividad);
        $query = $this->db->get('registro_tiempo');
        return $query->result();
    }

    public function create($data, $id) {
        $this->db->insert('registro_tiempo', $data);
        return $id;
    }


}
?>