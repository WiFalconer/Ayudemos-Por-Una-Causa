{"filter":false,"title":"Proyectos.php","tooltip":"/application/controllers/Proyectos.php","undoManager":{"mark":39,"position":39,"stack":[[{"start":{"row":0,"column":0},"end":{"row":42,"column":1},"action":"insert","lines":["<?php","","","defined('BASEPATH') OR exit('No direct script access allowed');","","class Recursos extends CI_Controller {","","    public function index()","    {","        ","    }","    ","    ","    public function get_recursos($id_entidad) {","        $result = $this->recursos_model->read($id_entidad);","        ","        $data['result'] = $result;","        $data['second_page'] = 'recursos/recursos_view';","","        $this->load->view('entidad/dashboard', $data);","    }","    ","    ","    public function put() {","        $data = array('nombre' => $this->input->post('nombre'),","                'direccion' =>  $this->input->post('direccion'),","                'telefono' =>  $this->input->post('telefono'),","                'social' =>  $this->input->post('social'),","                'email' =>  $this->input->post('email'), ","                'id_entidad' =>  $this->input->post('id_entidad')","                );        ","    ","        $id_entidad = $this->recursos_model->create($data);","","        $data['result'] = $this->recursos_model->read($id_entidad);","        $data['id_entidad'] = $id_entidad;","        $data['second_page'] = 'recursos/recursos_view';","","        $this->load->view('entidad/dashboard', $data);","    }","    ","    ","}"],"id":1}],[{"start":{"row":5,"column":6},"end":{"row":5,"column":14},"action":"remove","lines":["Recursos"],"id":2},{"start":{"row":5,"column":6},"end":{"row":5,"column":7},"action":"insert","lines":["P"]},{"start":{"row":5,"column":7},"end":{"row":5,"column":8},"action":"insert","lines":["r"]},{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"insert","lines":["o"]},{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["y"]},{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"insert","lines":["e"]},{"start":{"row":5,"column":11},"end":{"row":5,"column":12},"action":"insert","lines":["c"]},{"start":{"row":5,"column":12},"end":{"row":5,"column":13},"action":"insert","lines":["t"]},{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"insert","lines":["o"]},{"start":{"row":5,"column":14},"end":{"row":5,"column":15},"action":"insert","lines":["s"]}],[{"start":{"row":13,"column":24},"end":{"row":13,"column":32},"action":"remove","lines":["recursos"],"id":3}],[{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"insert","lines":["p"],"id":4},{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"insert","lines":["r"]},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"insert","lines":["o"]},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["y"]}],[{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"insert","lines":["e"],"id":5},{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"insert","lines":["c"]},{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"insert","lines":["t"]},{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"insert","lines":["o"]},{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"insert","lines":["s"]}],[{"start":{"row":17,"column":32},"end":{"row":17,"column":40},"action":"remove","lines":["recursos"],"id":6},{"start":{"row":17,"column":32},"end":{"row":17,"column":33},"action":"insert","lines":["p"]},{"start":{"row":17,"column":33},"end":{"row":17,"column":34},"action":"insert","lines":["r"]},{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"insert","lines":["y"]},{"start":{"row":17,"column":35},"end":{"row":17,"column":36},"action":"insert","lines":["e"]},{"start":{"row":17,"column":36},"end":{"row":17,"column":37},"action":"insert","lines":["c"]},{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"insert","lines":["t"]},{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"insert","lines":["o"]},{"start":{"row":17,"column":39},"end":{"row":17,"column":40},"action":"insert","lines":["s"]}],[{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"insert","lines":["o"],"id":7}],[{"start":{"row":17,"column":42},"end":{"row":17,"column":50},"action":"remove","lines":["recursos"],"id":8},{"start":{"row":17,"column":42},"end":{"row":17,"column":43},"action":"insert","lines":["p"]},{"start":{"row":17,"column":43},"end":{"row":17,"column":44},"action":"insert","lines":["r"]},{"start":{"row":17,"column":44},"end":{"row":17,"column":45},"action":"insert","lines":["o"]},{"start":{"row":17,"column":45},"end":{"row":17,"column":46},"action":"insert","lines":["y"]},{"start":{"row":17,"column":46},"end":{"row":17,"column":47},"action":"insert","lines":["e"]},{"start":{"row":17,"column":47},"end":{"row":17,"column":48},"action":"insert","lines":["c"]}],[{"start":{"row":17,"column":42},"end":{"row":17,"column":48},"action":"remove","lines":["proyec"],"id":9},{"start":{"row":17,"column":42},"end":{"row":17,"column":51},"action":"insert","lines":["proyectos"]}],[{"start":{"row":25,"column":52},"end":{"row":25,"column":61},"action":"remove","lines":["direccion"],"id":10},{"start":{"row":25,"column":52},"end":{"row":25,"column":53},"action":"insert","lines":["d"]},{"start":{"row":25,"column":53},"end":{"row":25,"column":54},"action":"insert","lines":["e"]},{"start":{"row":25,"column":54},"end":{"row":25,"column":55},"action":"insert","lines":["c"]},{"start":{"row":25,"column":55},"end":{"row":25,"column":56},"action":"insert","lines":["r"]},{"start":{"row":25,"column":56},"end":{"row":25,"column":57},"action":"insert","lines":["i"]},{"start":{"row":25,"column":57},"end":{"row":25,"column":58},"action":"insert","lines":["p"]}],[{"start":{"row":25,"column":58},"end":{"row":25,"column":59},"action":"insert","lines":["c"],"id":11}],[{"start":{"row":25,"column":58},"end":{"row":25,"column":59},"action":"remove","lines":["c"],"id":12},{"start":{"row":25,"column":57},"end":{"row":25,"column":58},"action":"remove","lines":["p"]},{"start":{"row":25,"column":56},"end":{"row":25,"column":57},"action":"remove","lines":["i"]},{"start":{"row":25,"column":55},"end":{"row":25,"column":56},"action":"remove","lines":["r"]},{"start":{"row":25,"column":54},"end":{"row":25,"column":55},"action":"remove","lines":["c"]}],[{"start":{"row":25,"column":54},"end":{"row":25,"column":55},"action":"insert","lines":["s"],"id":13},{"start":{"row":25,"column":55},"end":{"row":25,"column":56},"action":"insert","lines":["c"]},{"start":{"row":25,"column":56},"end":{"row":25,"column":57},"action":"insert","lines":["r"]},{"start":{"row":25,"column":57},"end":{"row":25,"column":58},"action":"insert","lines":["i"]},{"start":{"row":25,"column":58},"end":{"row":25,"column":59},"action":"insert","lines":["p"]},{"start":{"row":25,"column":59},"end":{"row":25,"column":60},"action":"insert","lines":["c"]},{"start":{"row":25,"column":60},"end":{"row":25,"column":61},"action":"insert","lines":["i"]},{"start":{"row":25,"column":61},"end":{"row":25,"column":62},"action":"insert","lines":["o"]},{"start":{"row":25,"column":62},"end":{"row":25,"column":63},"action":"insert","lines":["n"]}],[{"start":{"row":25,"column":17},"end":{"row":25,"column":26},"action":"remove","lines":["direccion"],"id":14},{"start":{"row":25,"column":17},"end":{"row":25,"column":28},"action":"insert","lines":["descripcion"]}],[{"start":{"row":26,"column":17},"end":{"row":26,"column":25},"action":"remove","lines":["telefono"],"id":15},{"start":{"row":26,"column":17},"end":{"row":26,"column":18},"action":"insert","lines":["f"]},{"start":{"row":26,"column":18},"end":{"row":26,"column":19},"action":"insert","lines":["e"]},{"start":{"row":26,"column":19},"end":{"row":26,"column":20},"action":"insert","lines":["c"]},{"start":{"row":26,"column":20},"end":{"row":26,"column":21},"action":"insert","lines":["h"]},{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"insert","lines":["a"]}],[{"start":{"row":26,"column":48},"end":{"row":26,"column":56},"action":"remove","lines":["telefono"],"id":16},{"start":{"row":26,"column":48},"end":{"row":26,"column":49},"action":"insert","lines":["c"]}],[{"start":{"row":26,"column":48},"end":{"row":26,"column":49},"action":"remove","lines":["c"],"id":17}],[{"start":{"row":26,"column":48},"end":{"row":26,"column":49},"action":"insert","lines":["f"],"id":18},{"start":{"row":26,"column":49},"end":{"row":26,"column":50},"action":"insert","lines":["e"]},{"start":{"row":26,"column":50},"end":{"row":26,"column":51},"action":"insert","lines":["c"]},{"start":{"row":26,"column":51},"end":{"row":26,"column":52},"action":"insert","lines":["h"]},{"start":{"row":26,"column":52},"end":{"row":26,"column":53},"action":"insert","lines":["a"]}],[{"start":{"row":27,"column":17},"end":{"row":27,"column":23},"action":"remove","lines":["social"],"id":19},{"start":{"row":27,"column":17},"end":{"row":27,"column":18},"action":"insert","lines":["h"]},{"start":{"row":27,"column":18},"end":{"row":27,"column":19},"action":"insert","lines":["o"]},{"start":{"row":27,"column":19},"end":{"row":27,"column":20},"action":"insert","lines":["r"]},{"start":{"row":27,"column":20},"end":{"row":27,"column":21},"action":"insert","lines":["a"]}],[{"start":{"row":27,"column":47},"end":{"row":27,"column":53},"action":"remove","lines":["social"],"id":20},{"start":{"row":27,"column":47},"end":{"row":27,"column":48},"action":"insert","lines":["h"]},{"start":{"row":27,"column":48},"end":{"row":27,"column":49},"action":"insert","lines":["o"]},{"start":{"row":27,"column":49},"end":{"row":27,"column":50},"action":"insert","lines":["r"]},{"start":{"row":27,"column":50},"end":{"row":27,"column":51},"action":"insert","lines":["a"]}],[{"start":{"row":28,"column":17},"end":{"row":28,"column":22},"action":"remove","lines":["email"],"id":21},{"start":{"row":28,"column":17},"end":{"row":28,"column":18},"action":"insert","lines":["t"]},{"start":{"row":28,"column":18},"end":{"row":28,"column":19},"action":"insert","lines":["i"]},{"start":{"row":28,"column":19},"end":{"row":28,"column":20},"action":"insert","lines":["p"]},{"start":{"row":28,"column":20},"end":{"row":28,"column":21},"action":"insert","lines":["o"]},{"start":{"row":28,"column":21},"end":{"row":28,"column":22},"action":"insert","lines":["_"]},{"start":{"row":28,"column":22},"end":{"row":28,"column":23},"action":"insert","lines":["a"]},{"start":{"row":28,"column":23},"end":{"row":28,"column":24},"action":"insert","lines":["c"]},{"start":{"row":28,"column":24},"end":{"row":28,"column":25},"action":"insert","lines":["t"]},{"start":{"row":28,"column":25},"end":{"row":28,"column":26},"action":"insert","lines":["i"]}],[{"start":{"row":28,"column":26},"end":{"row":28,"column":27},"action":"insert","lines":["v"],"id":22},{"start":{"row":28,"column":27},"end":{"row":28,"column":28},"action":"insert","lines":["i"]},{"start":{"row":28,"column":28},"end":{"row":28,"column":29},"action":"insert","lines":["a"]},{"start":{"row":28,"column":29},"end":{"row":28,"column":30},"action":"insert","lines":["d"]}],[{"start":{"row":28,"column":29},"end":{"row":28,"column":30},"action":"remove","lines":["d"],"id":23},{"start":{"row":28,"column":28},"end":{"row":28,"column":29},"action":"remove","lines":["a"]}],[{"start":{"row":28,"column":28},"end":{"row":28,"column":29},"action":"insert","lines":["d"],"id":24},{"start":{"row":28,"column":29},"end":{"row":28,"column":30},"action":"insert","lines":["a"]},{"start":{"row":28,"column":30},"end":{"row":28,"column":31},"action":"insert","lines":["d"]}],[{"start":{"row":28,"column":57},"end":{"row":28,"column":62},"action":"remove","lines":["email"],"id":25},{"start":{"row":28,"column":57},"end":{"row":28,"column":58},"action":"insert","lines":["t"]},{"start":{"row":28,"column":58},"end":{"row":28,"column":59},"action":"insert","lines":["i"]},{"start":{"row":28,"column":59},"end":{"row":28,"column":60},"action":"insert","lines":["p"]},{"start":{"row":28,"column":60},"end":{"row":28,"column":61},"action":"insert","lines":["o"]},{"start":{"row":28,"column":61},"end":{"row":28,"column":62},"action":"insert","lines":["_"]}],[{"start":{"row":28,"column":57},"end":{"row":28,"column":62},"action":"remove","lines":["tipo_"],"id":26},{"start":{"row":28,"column":57},"end":{"row":28,"column":71},"action":"insert","lines":["tipo_actividad"]}],[{"start":{"row":14,"column":25},"end":{"row":14,"column":39},"action":"remove","lines":["recursos_model"],"id":28},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"insert","lines":["p"]},{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"insert","lines":["r"]},{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"insert","lines":["o"]},{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"insert","lines":["y"]}],[{"start":{"row":14,"column":25},"end":{"row":14,"column":29},"action":"remove","lines":["proy"],"id":29},{"start":{"row":14,"column":25},"end":{"row":14,"column":40},"action":"insert","lines":["proyectos_model"]}],[{"start":{"row":32,"column":29},"end":{"row":32,"column":43},"action":"remove","lines":["recursos_model"],"id":30},{"start":{"row":32,"column":29},"end":{"row":32,"column":30},"action":"insert","lines":["p"]},{"start":{"row":32,"column":30},"end":{"row":32,"column":31},"action":"insert","lines":["r"]},{"start":{"row":32,"column":31},"end":{"row":32,"column":32},"action":"insert","lines":["y"]}],[{"start":{"row":32,"column":31},"end":{"row":32,"column":32},"action":"remove","lines":["y"],"id":31}],[{"start":{"row":32,"column":29},"end":{"row":32,"column":31},"action":"remove","lines":["pr"],"id":32},{"start":{"row":32,"column":29},"end":{"row":32,"column":44},"action":"insert","lines":["proyectos_model"]}],[{"start":{"row":34,"column":33},"end":{"row":34,"column":47},"action":"remove","lines":["recursos_model"],"id":33},{"start":{"row":34,"column":33},"end":{"row":34,"column":48},"action":"insert","lines":["proyectos_model"]}],[{"start":{"row":36,"column":32},"end":{"row":36,"column":40},"action":"remove","lines":["recursos"],"id":34},{"start":{"row":36,"column":32},"end":{"row":36,"column":33},"action":"insert","lines":["p"]},{"start":{"row":36,"column":33},"end":{"row":36,"column":34},"action":"insert","lines":["r"]},{"start":{"row":36,"column":34},"end":{"row":36,"column":35},"action":"insert","lines":["o"]},{"start":{"row":36,"column":35},"end":{"row":36,"column":36},"action":"insert","lines":["y"]}],[{"start":{"row":36,"column":32},"end":{"row":36,"column":36},"action":"remove","lines":["proy"],"id":35},{"start":{"row":36,"column":32},"end":{"row":36,"column":41},"action":"insert","lines":["proyectos"]}],[{"start":{"row":36,"column":42},"end":{"row":36,"column":55},"action":"remove","lines":["recursos_view"],"id":36},{"start":{"row":36,"column":42},"end":{"row":36,"column":43},"action":"insert","lines":["p"]},{"start":{"row":36,"column":43},"end":{"row":36,"column":44},"action":"insert","lines":["r"]},{"start":{"row":36,"column":44},"end":{"row":36,"column":45},"action":"insert","lines":["o"]},{"start":{"row":36,"column":45},"end":{"row":36,"column":46},"action":"insert","lines":["y"]},{"start":{"row":36,"column":46},"end":{"row":36,"column":47},"action":"insert","lines":["e"]}],[{"start":{"row":36,"column":42},"end":{"row":36,"column":47},"action":"remove","lines":["proye"],"id":37},{"start":{"row":36,"column":42},"end":{"row":36,"column":56},"action":"insert","lines":["proyectos_view"]}],[{"start":{"row":32,"column":60},"end":{"row":33,"column":0},"action":"insert","lines":["",""],"id":38},{"start":{"row":33,"column":0},"end":{"row":33,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":33,"column":8},"end":{"row":33,"column":50},"action":"insert","lines":["        $data['id_entidad'] = $id_entidad;"],"id":39}],[{"start":{"row":33,"column":12},"end":{"row":33,"column":16},"action":"remove","lines":["    "],"id":40},{"start":{"row":33,"column":8},"end":{"row":33,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":33,"column":17},"end":{"row":33,"column":25},"action":"remove","lines":["_entidad"],"id":41}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":33,"column":8},"end":{"row":33,"column":34},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1540127096139,"hash":"bc52d2b425dcf75bafd9ee56dc406b4a9977c35b"}