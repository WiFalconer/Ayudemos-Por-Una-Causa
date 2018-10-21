<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model {

    public function get_categories()
    {
        $query = $this->db->get('categoria');
        return $query->result();
    }
}

/* End of file Categories_model.php */


?>