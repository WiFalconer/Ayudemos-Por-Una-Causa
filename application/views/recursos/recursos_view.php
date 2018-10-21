
<div class="ui list">
    <!--<h4 class="ui dividing header"><i class='address book icon' ></i>Resource Information</h4>-->

<!--<h2 class="ui  header segment">-->
<!--  <div class="content">-->
<!--     Resources Information-->
<!--  </div>-->
<!--</h2>-->
       <a class="ui teal ribbon label">Resources Information</a>

    <div class="ui raised segment">    
        <a class="ui teal ribbon label">Resources</a>


        <div class="ui three cards">
<?php

    if ( count($result) < 1) {
        echo "<br><h3 class='large label'>&nbsp;&nbsp;&nbsp;&nbsp;NO DATA FOUND</h3>";
    }
    else {
        $ctr = 0;
        foreach($result as $row) {
            echo '<div class="card">';
                echo '<div class="content">';
                echo '<img class="right floated mini ui image" src="https://via.placeholder.com/150/92c952">';

                echo '<div class="header">' . $row->nombre . '</div>';
                echo '<div class="meta">' . $row->tipo_recurso  .  '</div>';
                echo '<div class="description">' . $row->email . '</div>';
                echo '</div>';
            // echo '</div>';
                echo '<div class="extra content">';
                echo '<div class="ui two buttons">';
                echo '<div class="ui basic green button">Edit</div>';
                echo '<div class="ui basic red button">Delete</div>';
                echo '</div>';
            echo '</div></div>';
                    
        }
        
    }

?>
</div>
</div>
<div class="ui divider"></div>
<form class="ui form" action="<?=base_url("/recursos/put/");?>" method="post">
    <input type='hidden' name='id_entidad' value='<?=$id_entidad;?>'>
    <div class="ui form">
        <div class="ui raised segment">
          <a class="ui blue ribbon label">New Resource</a>
          <h4 class="ui dividing header">Personal Information</h4>


        <!--<h4 class="ui dividing header">Resource Information</h4>-->
            <!--<div class="ui divider"></div>-->
            <div class="field">
                <label>Resource</label>
                <input type="text" id='nombre' name='nombre' placeholder="Name" size='100' maxlenth='100' >
            </div>
           <div class="field">
                  <select class="ui search dropdown"  name='tipo_recurso'>
                      <option value="Not Defined">Job Type</option>
                      <option value="Staff Member">Staff Member</option>
                      <option value="Board Member">Board Member</option>
                      <option value="Volunteer">Volunteer</option>
                  </select>
                
            </div>                
            <h4 class="ui dividing header">Contact Information</h4>
            <div class="field">
                <div class="ui left icon input">
                  <input id="address" name="direccion" type="text" name='direccion'  placeholder="Address" >
                 <i class="address book icon"></i> 
                </div>
            </div>        
            <div class="field">
                <div class="ui left icon input">
                  <input id="telefono" type="text" name='telefono'  placeholder="Phone" >
                  <i class='phone icon'></i>   
                </div>   
            </div>
            <h4 class="ui dividing header">Social Information</h4>
            <div class="field">
                <div class="ui left icon input">
                  <input id="social" type="text" name='social'  placeholder="Facebook page" >
                  <i class='facebook icon'></i>   
                </div>
            </div>        
            <div class="field">
                <div class="ui left icon input">
                  <input id="email" type="text" name='email' placeholder="Email" >
                  <i class='envelope icon'></i>
                </div>
            </div>     
            <div class="field">
                <div class="ui left icon input">
                  <input id="url_foto" type="file" name='url_foto' placeholder="Image File" >
                  <i class='id badge outline icon'></i>
                </div>
            </div>             
    
    
            <div class="ui divider"></div>
            <div class="field">
                <input type='submit' id='btnSaveProfile' class="ui primary button" value='Add New'>
            </div>
        </div>
</form>
</div>