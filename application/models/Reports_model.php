<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Reports_model extends CI_Model {


    public function read_tiempo($id) {
        $this->db->where('id_entidad', $id);
        $query = $this->db->get('v_horas_actividad');
        
        return $query->result();
    }
    
    
    public function read_tipo_recurso($id) {
        $this->db->where('id_entidad', $id);
        $query = $this->db->get('v_cant_recursos');
        
        return $query->result();
    }    

}

?>