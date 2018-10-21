<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index($id)
    {
        // $data = array(
        //     'id' => $id
        // );
        //echo "teset";

        // $data['$result'] = $this->entidad_model->read_id($data);
        // $this->load->view('entidad/dashboard', $data);
    }

    public function profile($id)
    {

        // echo  $this->input->post('id');
        
        // $data['id'] = $this->input->get('id');
        $data['id'] = $id;

        $data['result'] = $this->entidad_model->read_id($data);
        $data['second_page'] = 'entidad/entidad_view';
        $data['id'] = $id;        
        $data['id_entidad'] = $id;
        $this->load->view('entidad/dashboard', $data);
    }
    
    public function recursos($id_entidad)
    {


        // echo  $this->input->post('id');
        
        // $data['id'] = $this->input->get('id');

        $data['result'] = $this->recursos_model->read($id_entidad);
        $data['id_entidad'] = $id_entidad;
        $data['second_page'] = 'recursos/recursos_view';
        $data['id'] = $id_entidad;
        $this->load->view('entidad/dashboard', $data);
    }
    
    public function proyectos($id_entidad)
    {


        $data['result'] = $this->proyectos_model->read($id_entidad);
        $data['id_entidad'] = $id_entidad;
        $data['second_page'] = 'proyectos/proyectos_view';
        $data['id'] = $id_entidad;
        $this->load->view('entidad/dashboard', $data);
    }
        
   public function tiempos($id_entidad)
    {


        $data['result'] = $this->proyectos_model->read($id_entidad);
        $data['id_entidad'] = $id_entidad;
        $data['second_page'] = 'tiempos/tiempos_view';
        $data['id'] = $id_entidad;
        $data['id_actividad'] = 0;
        $this->load->view('entidad/dashboard', $data);
    }
    
   public function calendar($id_entidad)
    {
        $data['result'] = '';
        $data['id_entidad'] = $id_entidad;
        $data['second_page'] = 'calendar';
        $data['id'] = $id_entidad;

        $this->load->view('entidad/dashboard', $data);
    }    
    
    
       public function reports($id_entidad)
    {
        $data['result'] = '';
        $data['id_entidad'] = $id_entidad;
        $data['second_page'] = 'reports/report_tiempo';
        $data['id'] = $id_entidad;

        $this->load->view('entidad/dashboard', $data);
    }    
               
    

  
}

/* End of file Entidad.php */
