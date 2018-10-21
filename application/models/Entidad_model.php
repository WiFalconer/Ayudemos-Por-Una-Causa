<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Entidad_model extends CI_Model {

    public function create($object) {
        $this->db->insert('entidad', $object);        
    }

    public function read() {
        $query = $this->db->get('entidad');
        return $query->result();
    }

    public function update($id, $data) {
        
           $this->db->where('id', $id);
           $this->db->update('entidad', $data);   
          
           return $id;
    }    

    public function delete($id) {
        $this->db->where('id', $id);        
        $this->db->delete('entidad');        
    }       
    
    // Others Functions

    public function read_id($data) {
        // print_r($data);
        $this->db->where($data);          
        $query = $this->db->get('entidad');
        return $query->row();
    }    
    
    public function get_by_category($id)
    {
        $this->db->where('categoria_id', $id);
        return $this->db->get('entidad_por_categoria')->result();
    }
    
    public function get_by_name($name)
    {
        $this->db->like('nombre', $name);
        return $this->db->get('entidad')->result();
    }
    
    public function get_by_name_and_category($name, $category_id)
    {
        $this->db->like('nombre', $name);
        $this->db->where('categoria_id', $category_id);
        return $this->db->get('entidad_por_categoria')->result();
    }
}

/* End of file Entidad_model.php */


?>