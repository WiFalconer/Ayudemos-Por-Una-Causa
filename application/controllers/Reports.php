<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Tiempos extends CI_Controller {

    public function index()
    {
        
    }
    
    public function read_tiempo($id) {
        $result = $this->reports_model->read_tiempo($id);
        
        $data['result'] = $result;
        
        $this->load->view('entidad/dashboard', $data)
    }
    
    
}

?>