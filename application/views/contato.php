<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript">

  

  function initialize() {
        var mapOptions = {
          zoom: 16,
          center: new google.maps.LatLng(-29.164640200000004, -51.18413109999999),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map_canvas'),
                                      mapOptions);

        var image = '<?php echo base_url();?>style/images/adress.png';
        var myLatLng = new google.maps.LatLng(-29.164640200000004, -51.18413109999999);
        var beachMarker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: image
        });
      }
  $(document).ready(function(){
      initialize();
  });
  
    </script>


<div class="fundo">
    <div class="bg_sobre">
      <div class="centro">
        <h1>ENTRE EM <span>CONTATO</span></h1>
        <ul>
          <li><a href="">INICIO&nbsp; ></a></li>
          <li>&nbsp; CONTATO</li>
        </ul>
      </div>
    </div>
    <div class="centro">
      <div class="div_endereco">
        <p>Rua Marechal Floriano, 434<br/>Centro - Caxias do Sul - RS</p>
      </div>

      <div class="div_telef">
        <p>(54)3214.2170</p>
      </div>

      <div class="div_horario">
        <h3>Horário de Atendimento</h3>
        <p>De seg a sex das 09h as 19:30h<br/>
        Sábados : 2 primeiros do mês ,das 09h as 16h<br/>
        2 últimos do mês das 09h as 13h<br/>
        Domingos :Abrimos somente em datas especiais.
        </p>
      </div>
    
        <div class="formulario">
          <form method="post" action="">
            <input required type="text" name="nome" placeholder="Nome"/>
            <input required type="text" name="email" placeholder="E-mail"/>
            <input type="text" name="fone" placeholder="Fone"/>
            <input type="text" name="assunto" placeholder="Assunto"/>
            <textarea required name="mensagem" placeholder="Mensagem"></textarea>
            
             <input type="submit" value="ENVIAR"/>
          </form>
        </div>
  </div>
  <div id="map_canvas" style="width:100%; height:450px; position:relative; z-index:9; top:45px;"></div>
</div>
