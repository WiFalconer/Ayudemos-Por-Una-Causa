<div class='content'>

<div class='cards'>
<div class="ui card">
  <div class="content">
    <div class="header">Tiempo Por Proyecto</div>
    <br>
    <div class="meta">
        <div class="ui bulleted list">
        <?php
            $res = $this->reports_model->read_tiempo($id);
            
            foreach($res as $r) {
                    echo '<div class="item">';
                    echo $r->nombre;
                    echo '&nbsp;';
                    echo $r->total_horas;
                    echo '</div>';
            }
        ?>
      <!--<span>2 days ago</span>-->
      <!--<a>Animals</a>-->
      </div>
    </div>
    <p></p>
  </div>
</div>
</div>

<div class="ui card">
  <div class="content">
    <div class="header">Cantidad de Recursos</div>
    <br>
    <div class="meta">
        <div class="ui bulleted list">
        <?php
            $res = $this->reports_model->read_tipo_recurso($id);
            
            foreach($res as $r) {
                    echo '<div class="item">';
                    echo $r->tipo_recurso;
                    echo '&nbsp;';
                    echo $r->total;
                    echo '</div>';
            }
        ?>
      <!--<span>2 days ago</span>-->
      <!--<a>Animals</a>-->
      </div>
    </div>
    <p></p>
  </div>
</div>
</div>

</div>