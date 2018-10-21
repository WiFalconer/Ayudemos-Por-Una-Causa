<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Tiempos extends CI_Controller {

    public function index()
    {
        
    }            
    
    public function calendar($id_entidad) {
            $data['result'] = '';
            $data['id_entidad'] = $id_entidad;

            $data['second_page'] = 'calendar';
    
            $this->load->view('entidad/dashboard', $data);
    }
    
    
    
    
}