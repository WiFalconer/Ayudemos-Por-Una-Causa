{"filter":false,"title":"Tiempos_model.php","tooltip":"/application/models/Tiempos_model.php","undoManager":{"mark":40,"position":40,"stack":[[{"start":{"row":0,"column":0},"end":{"row":21,"column":2},"action":"insert","lines":["<?php","","","defined('BASEPATH') OR exit('No direct script access allowed');","","class Recursos_model extends CI_Model {","","    public function read($id_entidad) {","        $this->db->where('id_entidad', $id_entidad);","        $query = $this->db->get('recurso');","        return $query->result();","    }","","    public function create($data) {","        $this->db->insert('recurso', $data);","        ","        return $data['id_entidad'];","    }","","","}","?>"],"id":1}],[{"start":{"row":7,"column":36},"end":{"row":7,"column":37},"action":"insert","lines":[","],"id":2}],[{"start":{"row":7,"column":37},"end":{"row":7,"column":38},"action":"insert","lines":[" "],"id":3},{"start":{"row":7,"column":38},"end":{"row":7,"column":39},"action":"insert","lines":["$"]},{"start":{"row":7,"column":39},"end":{"row":7,"column":40},"action":"insert","lines":["i"]},{"start":{"row":7,"column":40},"end":{"row":7,"column":41},"action":"insert","lines":["d"]}],[{"start":{"row":7,"column":41},"end":{"row":7,"column":42},"action":"insert","lines":["_"],"id":4},{"start":{"row":7,"column":42},"end":{"row":7,"column":43},"action":"insert","lines":["t"]}],[{"start":{"row":7,"column":42},"end":{"row":7,"column":43},"action":"remove","lines":["t"],"id":5}],[{"start":{"row":7,"column":42},"end":{"row":7,"column":43},"action":"insert","lines":["a"],"id":6},{"start":{"row":7,"column":43},"end":{"row":7,"column":44},"action":"insert","lines":["c"]},{"start":{"row":7,"column":44},"end":{"row":7,"column":45},"action":"insert","lines":["t"]},{"start":{"row":7,"column":45},"end":{"row":7,"column":46},"action":"insert","lines":["i"]},{"start":{"row":7,"column":46},"end":{"row":7,"column":47},"action":"insert","lines":["v"]},{"start":{"row":7,"column":47},"end":{"row":7,"column":48},"action":"insert","lines":["i"]},{"start":{"row":7,"column":48},"end":{"row":7,"column":49},"action":"insert","lines":["a"]},{"start":{"row":7,"column":49},"end":{"row":7,"column":50},"action":"insert","lines":["d"]}],[{"start":{"row":7,"column":49},"end":{"row":7,"column":50},"action":"remove","lines":["d"],"id":7},{"start":{"row":7,"column":48},"end":{"row":7,"column":49},"action":"remove","lines":["a"]},{"start":{"row":7,"column":47},"end":{"row":7,"column":48},"action":"remove","lines":["i"]}],[{"start":{"row":7,"column":47},"end":{"row":7,"column":48},"action":"insert","lines":["i"],"id":8},{"start":{"row":7,"column":48},"end":{"row":7,"column":49},"action":"insert","lines":["d"]},{"start":{"row":7,"column":49},"end":{"row":7,"column":50},"action":"insert","lines":["a"]},{"start":{"row":7,"column":50},"end":{"row":7,"column":51},"action":"insert","lines":["d"]}],[{"start":{"row":8,"column":26},"end":{"row":8,"column":36},"action":"remove","lines":["id_entidad"],"id":9},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["i"]},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"insert","lines":["d"]},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"insert","lines":["_"]},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"insert","lines":["a"]},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"insert","lines":["c"]}],[{"start":{"row":8,"column":26},"end":{"row":8,"column":31},"action":"remove","lines":["id_ac"],"id":10},{"start":{"row":8,"column":26},"end":{"row":8,"column":38},"action":"insert","lines":["id_actividad"]}],[{"start":{"row":8,"column":42},"end":{"row":8,"column":52},"action":"remove","lines":["id_entidad"],"id":11},{"start":{"row":8,"column":42},"end":{"row":8,"column":43},"action":"insert","lines":["i"]},{"start":{"row":8,"column":43},"end":{"row":8,"column":44},"action":"insert","lines":["d"]}],[{"start":{"row":8,"column":41},"end":{"row":8,"column":44},"action":"remove","lines":["$id"],"id":12},{"start":{"row":8,"column":41},"end":{"row":8,"column":54},"action":"insert","lines":["$id_actividad"]}],[{"start":{"row":9,"column":33},"end":{"row":9,"column":40},"action":"remove","lines":["recurso"],"id":13},{"start":{"row":9,"column":33},"end":{"row":9,"column":34},"action":"insert","lines":["r"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":35},"action":"insert","lines":["e"]},{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"insert","lines":["g"]},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"insert","lines":["i"]},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"insert","lines":["s"]},{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"insert","lines":["t"]},{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"insert","lines":["r"]},{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"insert","lines":["o"]},{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"insert","lines":["t"]}],[{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"remove","lines":["t"],"id":14}],[{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"insert","lines":["_"],"id":15},{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"insert","lines":["t"]},{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"insert","lines":["i"]},{"start":{"row":9,"column":44},"end":{"row":9,"column":45},"action":"insert","lines":["e"]},{"start":{"row":9,"column":45},"end":{"row":9,"column":46},"action":"insert","lines":["m"]},{"start":{"row":9,"column":46},"end":{"row":9,"column":47},"action":"insert","lines":["p"]},{"start":{"row":9,"column":47},"end":{"row":9,"column":48},"action":"insert","lines":["o"]}],[{"start":{"row":14,"column":27},"end":{"row":14,"column":34},"action":"remove","lines":["recurso"],"id":16},{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"insert","lines":["r"]},{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"insert","lines":["e"]},{"start":{"row":14,"column":29},"end":{"row":14,"column":30},"action":"insert","lines":["g"]},{"start":{"row":14,"column":30},"end":{"row":14,"column":31},"action":"insert","lines":["i"]},{"start":{"row":14,"column":31},"end":{"row":14,"column":32},"action":"insert","lines":["s"]},{"start":{"row":14,"column":32},"end":{"row":14,"column":33},"action":"insert","lines":["t"]}],[{"start":{"row":14,"column":27},"end":{"row":14,"column":33},"action":"remove","lines":["regist"],"id":17},{"start":{"row":14,"column":27},"end":{"row":14,"column":42},"action":"insert","lines":["registro_tiempo"]}],[{"start":{"row":7,"column":24},"end":{"row":7,"column":25},"action":"insert","lines":["_"],"id":18},{"start":{"row":7,"column":25},"end":{"row":7,"column":26},"action":"insert","lines":["a"]},{"start":{"row":7,"column":26},"end":{"row":7,"column":27},"action":"insert","lines":["c"]},{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"insert","lines":["t"]},{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"insert","lines":["i"]},{"start":{"row":7,"column":29},"end":{"row":7,"column":30},"action":"insert","lines":["v"]},{"start":{"row":7,"column":30},"end":{"row":7,"column":31},"action":"insert","lines":["i"]},{"start":{"row":7,"column":31},"end":{"row":7,"column":32},"action":"insert","lines":["d"]}],[{"start":{"row":7,"column":31},"end":{"row":7,"column":32},"action":"remove","lines":["d"],"id":19}],[{"start":{"row":7,"column":31},"end":{"row":7,"column":32},"action":"insert","lines":["t"],"id":20},{"start":{"row":7,"column":32},"end":{"row":7,"column":33},"action":"insert","lines":["y"]}],[{"start":{"row":7,"column":24},"end":{"row":7,"column":33},"action":"remove","lines":["_activity"],"id":21}],[{"start":{"row":5,"column":6},"end":{"row":5,"column":20},"action":"remove","lines":["Recursos_model"],"id":22},{"start":{"row":5,"column":6},"end":{"row":5,"column":7},"action":"insert","lines":["T"]},{"start":{"row":5,"column":7},"end":{"row":5,"column":8},"action":"insert","lines":["i"]},{"start":{"row":5,"column":8},"end":{"row":5,"column":9},"action":"insert","lines":["e"]},{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["m"]},{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"insert","lines":["o"]}],[{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"remove","lines":["o"],"id":23}],[{"start":{"row":5,"column":6},"end":{"row":5,"column":10},"action":"remove","lines":["Tiem"],"id":24},{"start":{"row":5,"column":6},"end":{"row":5,"column":13},"action":"insert","lines":["Tiempos"]}],[{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"insert","lines":["_"],"id":25},{"start":{"row":5,"column":14},"end":{"row":5,"column":15},"action":"insert","lines":["m"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"insert","lines":["o"]},{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"insert","lines":["d"]},{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"insert","lines":["e"]},{"start":{"row":5,"column":18},"end":{"row":5,"column":19},"action":"insert","lines":["l"]}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"insert","lines":["$"],"id":26},{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"insert","lines":["i"]},{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"insert","lines":["d"]},{"start":{"row":15,"column":11},"end":{"row":15,"column":12},"action":"insert","lines":["_"]}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":12},"action":"remove","lines":["$id_"],"id":27},{"start":{"row":15,"column":8},"end":{"row":15,"column":19},"action":"insert","lines":["$id_entidad"]}],[{"start":{"row":15,"column":19},"end":{"row":15,"column":20},"action":"insert","lines":[" "],"id":28},{"start":{"row":15,"column":20},"end":{"row":15,"column":21},"action":"insert","lines":["="]}],[{"start":{"row":15,"column":21},"end":{"row":15,"column":22},"action":"insert","lines":[" "],"id":29},{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"insert","lines":["$"]},{"start":{"row":15,"column":23},"end":{"row":15,"column":24},"action":"insert","lines":["d"]},{"start":{"row":15,"column":24},"end":{"row":15,"column":25},"action":"insert","lines":["a"]},{"start":{"row":15,"column":25},"end":{"row":15,"column":26},"action":"insert","lines":["t"]},{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"insert","lines":["a"]}],[{"start":{"row":15,"column":27},"end":{"row":15,"column":29},"action":"insert","lines":["[]"],"id":30}],[{"start":{"row":15,"column":28},"end":{"row":15,"column":30},"action":"insert","lines":["''"],"id":31}],[{"start":{"row":15,"column":29},"end":{"row":15,"column":30},"action":"insert","lines":["i"],"id":32},{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"insert","lines":["d"]}],[{"start":{"row":15,"column":29},"end":{"row":15,"column":31},"action":"remove","lines":["id"],"id":33},{"start":{"row":15,"column":29},"end":{"row":15,"column":39},"action":"insert","lines":["id_entidad"]}],[{"start":{"row":15,"column":41},"end":{"row":15,"column":42},"action":"insert","lines":[";"],"id":34}],[{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"insert","lines":[","],"id":35}],[{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"insert","lines":[" "],"id":36},{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"insert","lines":["$"]},{"start":{"row":13,"column":35},"end":{"row":13,"column":36},"action":"insert","lines":["i"]},{"start":{"row":13,"column":36},"end":{"row":13,"column":37},"action":"insert","lines":["d"]}],[{"start":{"row":15,"column":22},"end":{"row":15,"column":41},"action":"remove","lines":["$data['id_entidad']"],"id":37},{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"insert","lines":["i"]}],[{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"remove","lines":["i"],"id":38}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":23},"action":"remove","lines":["        $id_entidad = ;"],"id":39}],[{"start":{"row":14,"column":52},"end":{"row":15,"column":0},"action":"remove","lines":["",""],"id":40}],[{"start":{"row":15,"column":15},"end":{"row":15,"column":34},"action":"remove","lines":["$data['id_entidad']"],"id":41},{"start":{"row":15,"column":15},"end":{"row":15,"column":16},"action":"insert","lines":["$"]},{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"insert","lines":["i"]},{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"insert","lines":["d"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":12,"column":0},"end":{"row":12,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1540135317432,"hash":"a2dbe39336f94f7e7b70b8669878592d592a49d9"}