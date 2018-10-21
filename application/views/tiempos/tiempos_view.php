
<div class="ui list">

       <a class="ui teal ribbon label">Time Registration</a>


<div class="ui divider"></div>
<form class="ui form" action="<?=base_url("/tiempos/get_tiempos/");?>" method="post">
    <input type='hidden' name='id_entidad' value='<?=$id_entidad;?>'>

<?php

 
        echo '<div class="ui action input">';
        echo '<select class="ui search dropdown"  name="id_actividad">';
        echo '<option value="0">Not Selected</option>';
        $recur = $this->proyectos_model->read($id_entidad);
        foreach($recur as $row) {
                echo '<option value="' . $row->id . '" ' ;
                if ($row->id == $id_actividad)
                    echo " selected ";
                echo '>' . $row->nombre . '</option>';
        }
        echo '</select>';
        echo '<button class="ui button">Search</button>';
        echo '</div>'
        
        
    
?>
    
</form>

<?php


 if ($id_actividad > 0) {
     
     ?>
     <br>
    <div>
        
    
<table class="ui single line table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Task</th>
      <th>Date</th>
      <th>Hours</th>
    </tr>
  </thead>
   <tbody>

        <?php 
        
                  
            $res = $this->tiempos_model->read($id_entidad, $id_actividad);
            // if (count($res) > 0) {
                foreach($res as $row) {
                    echo '<tr>';
                    echo '<td>'.  $row->recurso . '</td>';
                    echo '<td>'.  $row->tarea . '</td>';
                    echo '<td>'.  $row->fecha . '</td>';
                    echo '<td>'.  $row->horas . '</td>';
                    echo '</tr>';
                }
            // }

        
        ?>
          </tbody>
        </table>
        
    </div>
    <br>
<form class="ui form" action="<?=base_url("/tiempos/put/");?>" method="post">

    <input type='hidden' name='id_entidad' value='<?=$id_entidad;?>'>
    <input type='hidden' name='id_actividad' value='<?=$id_actividad;?>'>
    <div class="ui form">
        <div class="ui raised segment">
          <a class="ui blue ribbon label">Timesheet Registration</a>

        <!--<h4 class="ui dividing header">Resource Information</h4>-->
            <!--<div class="ui divider"></div>-->
            <div class="field">
                <label>Resource</label>
                  <select class="ui search dropdown"  name='recurso'>
                      <option value="Not Defined">Not Defined</option>
                      <?php
                        $res = $this->recursos_model->read($id_entidad);
                        foreach($res as $row) {
                            echo '<option value="' . $row->nombre . '">' . $row->nombre . '</option>';
                        }
                        echo '</select>';                        
                      ?>
                  </select>
                
            </div>                
            <div class="field">
                <div class="ui left icon input">
                  <input id="tarea" name="tarea" type="text"  placeholder="Activity Description" >
                </div>
            </div>        
            <div class="field">
                <div class="ui left icon input">
                  <input id="fecha" type="date" name='fecha'  placeholder="Date" >
                  <i class='facebook icon'></i>   
                </div>
            </div>                
            <div class="field">
                <div class="ui left icon input">
                  <input id="horas" type="hour" name='horas'  placeholder="Hour" >
                  <i class='clock outline icon'></i>   
                </div>   
            </div>

    
            <div class="ui divider"></div>
            <div class="field">
                <input type='submit' id='btnSaveProfile' class="ui primary button" value='Add New'>
            </div>
        </div>
    </form>

</div>

<?php
     }

?>
