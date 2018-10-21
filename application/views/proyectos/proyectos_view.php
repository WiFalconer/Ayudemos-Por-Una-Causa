
<div class="ui list">
    <h4 class="ui dividing header"><i class='activities list icon' ></i>PROJECTS INFORMATION</h4>
  
  
    <div class="ui raised segment">    
        <a class="ui teal ribbon label">Projects</a>

<?php

    if ( count($result) < 1) {
        echo "<h3 class='large label'>&nbsp;&nbsp;&nbsp;&nbsp;NO DATA FOUND</h3>";
    }
    else {
         echo '<div class="ui three cards">';
        foreach($result as $row) {
            echo '<div class="ui card">';
            echo '<div class="content">';
            echo '<div class="header">' . $row->nombre  . '</div>';
            echo '</div>';
            echo '<div class="content">';
            echo '<div class="ui grey sub description">'. $row->descripcion . '</div>';
            echo '</div>';
            echo '<div class="content">';
            echo '<div class="ui grey tag small description">Date:&nbsp;'. $row->fecha . '</div>';
            echo '</div>';
            if ($row->tipo_actividad == 'Private')
                echo '<div class="ui red top right attached label">' .  $row->tipo_actividad .  '</div>';
            echo '<div class="extra content">';
            echo '<button class="ui button">Join Project</button>';
            echo '</div>';
            echo '</div>';

        }
        echo '</div>';
    }

?>

 </div>  
<div class="ui divider"></div>
<form class="ui form" action="<?=base_url("/proyectos/put/");?>" method="post">
    <input type='hidden' name='id_entidad' value='<?=$id_entidad;?>'>
    <div class="ui form">
        <div class="ui raised segment">
          <a class="ui blue ribbon label">New Activity</a>

        <!--<h4 class="ui dividing header">Resource Information</h4>-->
            <!--<div class="ui divider"></div>-->
            <div class="field">
                <br>
                <input type="text" id='nombre' name='nombre' placeholder="Title" size='100' maxlenth='100' >
            </div>
            <div class="field">
                <div class="ui input">
                  <input id="address" name="descripcion" type="text" name='descripcion'  placeholder="Description" >
                </div>
            </div>        
            <div class="field">
                <div class="ui left icon input">
                  <input id="fecha" type="date" name='fecha'  placeholder="Date" >
                  <i class='phone icon'></i>   
                </div>   
            </div>
            <div class="field">
                <div class="ui left icon input">
                  <select class="ui search dropdown"  name='tipo_actividad'>
                      <option value="Not Defined">Activity Type</option>
                      <option value="Open">Open</option>
                      <option value="Private">Private</option>
                      <option value="Only Members">Only Members</option>
                  </select>
                </div>
            </div>     
    
    
            <div class="ui divider"></div>
            <div class="field">
                <input type='submit' id='btnSaveProfile' class="ui primary button" value='Add New'>
            </div>
        </div>
</form>
</div>