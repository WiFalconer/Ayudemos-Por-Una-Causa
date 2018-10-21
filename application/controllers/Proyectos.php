<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Proyectos extends CI_Controller {

    public function index()
    {
        
    }
    
    
    public function get_proyectos($id_entidad) {
        $result = $this->proyectos_model->read($id_entidad);
        
        $data['result'] = $result;
        $data['second_page'] = 'proyectos/proyectos_view';

        $this->load->view('entidad/dashboard', $data);
    }
    
    
    public function put() {
        $data = array('nombre' => $this->input->post('nombre'),
                'descripcion' =>  $this->input->post('descripcion'),
                'fecha' =>  $this->input->post('fecha'),
                'hora' =>  $this->input->post('hora'),
                'tipo_actividad' =>  $this->input->post('tipo_actividad'), 
                'id_entidad' =>  $this->input->post('id_entidad')
                );        
    
        $id_entidad = $this->proyectos_model->create($data);
        $data['id'] = $id_entidad;

        $data['result'] = $this->proyectos_model->read($id_entidad);
        $data['id_entidad'] = $id_entidad;
        $data['second_page'] = 'proyectos/proyectos_view';

        $this->load->view('entidad/dashboard', $data);
    }
    
    
}