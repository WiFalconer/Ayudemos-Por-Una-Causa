{"filter":false,"title":"Times.php","tooltip":"/application/controllers/Times.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":0,"column":0},"end":{"row":44,"column":1},"action":"insert","lines":["<?php","","","defined('BASEPATH') OR exit('No direct script access allowed');","","class Recursos extends CI_Controller {","","    public function index()","    {","        ","    }","    ","    ","    public function get_recursos($id_entidad) {","        $result = $this->recursos_model->read($id_entidad);","        ","        $data['result'] = $result;","        $data['second_page'] = 'recursos/recursos_view';","","        $this->load->view('entidad/dashboard', $data);","    }","    ","    ","    public function put() {","        $data = array('nombre' => $this->input->post('nombre'),","                'direccion' =>  $this->input->post('direccion'),","                'telefono' =>  $this->input->post('telefono'),","                'social' =>  $this->input->post('social'),","                'email' =>  $this->input->post('email'), ","                'tipo_recurso' =>  $this->input->post('tipo_recurso'), ","                'id_entidad' =>  $this->input->post('id_entidad')","                );        ","    ","        $id_entidad = $this->recursos_model->create($data);","        $data['id'] = $id_entidad;","","        $data['result'] = $this->recursos_model->read($id_entidad);","        $data['id_entidad'] = $id_entidad;","        $data['second_page'] = 'recursos/recursos_view';","","        $this->load->view('entidad/dashboard', $data);","    }","    ","    ","}"],"id":1}],[{"start":{"row":5,"column":6},"end":{"row":5,"column":14},"action":"remove","lines":["Recursos"],"id":2},{"start":{"row":5,"column":6},"end":{"row":5,"column":7},"action":"insert","lines":["T"]},{"start":{"row":5,"column":7},"end":{"row":5,"column":8},"action":"insert","lines":["I"]},{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"insert","lines":["m"]},{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["e"]}],[{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"remove","lines":["e"],"id":3},{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"remove","lines":["m"]},{"start":{"row":5,"column":7},"end":{"row":5,"column":8},"action":"remove","lines":["I"]}],[{"start":{"row":5,"column":7},"end":{"row":5,"column":8},"action":"insert","lines":["i"],"id":4},{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"insert","lines":["m"]},{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["e"]},{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"insert","lines":["s"]}],[{"start":{"row":13,"column":24},"end":{"row":13,"column":32},"action":"remove","lines":["recursos"],"id":5},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"insert","lines":["t"]},{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"insert","lines":["i"]},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"insert","lines":["e"]},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["m"]},{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"insert","lines":["p"]},{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"insert","lines":["o"]},{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"insert","lines":["s"]}],[{"start":{"row":14,"column":25},"end":{"row":14,"column":33},"action":"remove","lines":["recursos"],"id":6},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"insert","lines":["t"]},{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"insert","lines":["i"]},{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"insert","lines":["e"]},{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"insert","lines":["m"]},{"start":{"row":14,"column":29},"end":{"row":14,"column":30},"action":"insert","lines":["p"]},{"start":{"row":14,"column":30},"end":{"row":14,"column":31},"action":"insert","lines":["o"]},{"start":{"row":14,"column":31},"end":{"row":14,"column":32},"action":"insert","lines":["s"]}]]},"ace":{"folds":[],"scrolltop":69,"scrollleft":0,"selection":{"start":{"row":19,"column":37},"end":{"row":19,"column":37},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1540127993125,"hash":"86242f91d9d9dc7c3793f3bf49c1f35a5a3bb192"}