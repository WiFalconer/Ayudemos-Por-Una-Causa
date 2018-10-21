<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Tiempos extends CI_Controller {

    public function index()
    {
        
    }
    
    
    public function get_tiempos() {
       // $result = $this->tiempos_model->read($id_actividad);

        $id_actividad = $this->input->post('id_actividad');
        $id_entidad = $this->input->post('id_entidad');

        $data['id_entidad'] = $id_entidad;        
        $data['id_actividad'] = $id_actividad;
        $data['second_page'] = 'tiempos/tiempos_view';
        $data['result'] = "";

        $this->load->view('entidad/dashboard', $data);
    }
    
    public function get($id_entidad, $id_actividad) {
        $result = $this->tiempos_model->read($id_entidad, $id_actividad);
        
            
            $id_entidad = $this->recursos_model->create($data);
            $data['id'] = $id_entidad;
    
            $data['result'] = $this->recursos_model->read($id_entidad);
            $data['id_entidad'] = $id_entidad;
            $data['id_actividad'] = $id_actividad;
            $data['second_page'] = 'tiempos/tiempos_view';
    
            $this->load->view('entidad/dashboard', $data);
        
    }
    
    
    public function put() {
        
        $id_actividad = $this->input->post('id_actividad');
        $id_entidad = $this->input->post('id_entidad');
        $recurso = $this->input->post('recurso');
        
        if ($recurso != "Not Defined") {
            
            $data = array('recurso' => $this->input->post('recurso'),
                    'tarea' =>  $this->input->post('tarea'),
                    'horas' =>  $this->input->post('horas'),
                    'fecha' =>  $this->input->post('fecha'),
                    'id_actividad' =>  $this->input->post('id_actividad'),
                    );        
            
            $id_entidad = $this->tiempos_model->create($data, $id_entidad);
            $data['id'] = $id_entidad;
    
            $data['result'] = "";
            $data['id_entidad'] = $id_entidad;
            $data['id_actividad'] = $id_actividad;
            $data['second_page'] = 'tiempos/tiempos_view';
    
            $this->load->view('entidad/dashboard', $data);
        }
    }
    
    
}