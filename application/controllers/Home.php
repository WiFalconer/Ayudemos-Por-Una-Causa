<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data['categories'] = $this->categories_model->get_categories();

		$this->load->view('landing_page', $data);
	}
	
	public function OSFL($id) 
	{
		$data = array(
            'id' => $id
        );

        $data['result'] = $this->entidad_model->read_id($data);
        $activities = $this->proyectos_model->read($id);
        $data['activities'] = $activities;
		$this->load->view('organization_view', $data);
	}
	
	public function sign_in($id)
	{
		$data['id'] = $id;
		$this->load->view('sign_in_view', $data);
	}
	
	public function sign_up()
	{
		$this->load->view('sign_up_view');
	}
}
