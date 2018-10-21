<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Entidad extends CI_Controller {

    public function index()
    {
    $data['result'] = $this->entidad_model->read();
       // $data['main_list'] = 'entidad/entidad_list';
        $this->load->view('entidad/entidad_list', $data);
        //$this->load->view('main', $data);   
        //echo "Trabaja";
    }

    public function put() {
        
        $data = array('nombre' => $this->input->post('nombre'),
                'mision' =>  $this->input->post('mision'),
                'direccion_fisica' =>  $this->input->post('direccion'),
                'zipcode' =>  $this->input->post('zipcode'),
                'pais' =>  $this->input->post('pais'),
                'phone' =>  $this->input->post('phone'),
                'url' =>  $this->input->post('url'),
                'facebook' =>  $this->input->post('facebook'),
                'twitter' =>  $this->input->post('twitter')
                );        
                
        $id = $this->input->post('id');
    
        $id = $this->entidad_model->update($id, $data);
        
        $data = array(
            'id' => $id
        );


        $data['result'] = $this->entidad_model->read_id($data);
        $data['second_page'] = 'entidad/entidad_view';

        $this->load->view('entidad/dashboard', $data);
    }

    public function push() {

    }


    public function get_all() {
        // $data['result'] = $this->entidad_model->read();   
       
        // $this->load->view('entidad/entidad_list', $data);
        echo json_encode($this->entidad_model->read());
    }

    public function get_by_category($id) {
       echo json_encode($this->entidad_model->get_by_category($id));
    }    

    public function get_by_name($name) {
        echo json_encode($this->entidad_model->get_by_name($name));
    }   
    
    public function get_by_name_and_category($name, $category_id) {
        echo json_encode($this->entidad_model->get_by_name_and_category($name, $category_id));
    } 

    public function get_by_id($id) {
        $data = array(
            'id' => $id
        );
        $data['id_entidad'] = $id_entidad;
        $data['result'] = $this->entidad_model->read_id($data);
        $this->load->view('entidad/dashboard', $data);

    }       

    public function register_req() {
        $this->load->view('entidad/entidad_registro');        
    }
}

/* End of file Entidad.php */
