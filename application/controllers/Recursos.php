<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Recursos extends CI_Controller {

    public function index()
    {
        
    }
    
    
    public function get_recursos($id_entidad) {
        $result = $this->recursos_model->read($id_entidad);
        
        $data['result'] = $result;
        $data['second_page'] = 'recursos/recursos_view';

        $this->load->view('entidad/dashboard', $data);
    }
    
    
    public function put() {
        $data = array('nombre' => $this->input->post('nombre'),
                'direccion' =>  $this->input->post('direccion'),
                'telefono' =>  $this->input->post('telefono'),
                'social' =>  $this->input->post('social'),
                'email' =>  $this->input->post('email'), 
                'tipo_recurso' =>  $this->input->post('tipo_recurso'), 
                'id_entidad' =>  $this->input->post('id_entidad')
                );        
    
        $id_entidad = $this->recursos_model->create($data);
        $data['id'] = $id_entidad;

        $data['result'] = $this->recursos_model->read($id_entidad);
        $data['id_entidad'] = $id_entidad;
        $data['second_page'] = 'recursos/recursos_view';

        $this->load->view('entidad/dashboard', $data);
    }
    
    
}