<form class="ui form" action="<?=base_url("/entidad/put/");?>" method="post">
    <input type='hidden' id='id' name='id' value='<?=$rec->id;?>'>
    <div class="ui form">
        <h1 class="ui header"><i class='info icon'></i>INFORMATION</h1>
        <div class="ui divider"></div>
        <div class="field">
            <label>Organization</label>
            <input type="text" id='nombre' name='nombre' placeholder="Name" size='100' maxlenth='100' value='<?=$rec->nombre;?>'>
        </div>
        <div class="field">
            <label>Mission</label>
            <textarea id='mision' name='mision' cols='100' rows='4' placeholder='Statement' ><?=$rec->mision;?></textarea>
        </div>
        <h4 class="ui dividing header">Contact Information</h4>
        <div class="field">
            <div class="ui left icon input">
              <input id="address" name="direccion" type="text" name='direccion'  placeholder="Address" value='<?=$rec->direccion_fisica;?>'>
             <i class="address book icon"></i> 
            </div>
        </div>        
        <div class='fields'>
            <div class="four wide field">
                <input id="zipcode" type="text" name='zipcode' placeholder="Zip Code" value='<?=$rec->zipcode;?>'>
            </div>     
            <div class="twelve wide field">
                <input id="pais" type="text" name='pais' placeholder="Country" value='<?=$rec->pais;?>'>
            </div>            
        </div>
        <div class="field">
            <div class="ui left icon input">
              <input id="phone" type="text" name='phone'  placeholder="Phone" value='<?=$rec->phone;?>'>
              <i class='phone icon'></i>   
            </div>   
        </div>
        <h4 class="ui dividing header">Social Information</h4>
        <div class="field">
            <div class="ui left icon input">
              <input id="facebook" type="text" name='facebook'  placeholder="Facebook page" value='<?=$rec->facebook;?>'>
              <i class='facebook icon'></i>   
            </div>
        </div>        
        <div class="field">
            <div class="ui left icon input">
              <input id="twitter" type="text" name='twitter' placeholder="Twitter page" value='<?=$rec->twitter;?>'>
              <i class='twitter icon'></i>
            </div>
        </div>     
        <div class="field">
            <div class="ui left icon input">
              <input id="uurl" type="text" name='uurl' placeholder="Web Page URL" value='<?=$rec->url;?>'>
              <i class='desktop icon'></i>
            </div>
        </div>           
    </div>
    <br>

    <div class="field">
        <input type='submit' id='btnSaveProfile' class="ui primary button" value='Save'>
    </div>
</form>

<script>
    //$('#btnSaveProfile').click(function() {
        
     
        
//    });
    
    
    
</script>