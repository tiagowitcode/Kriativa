<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>style/fontes.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>style/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/shadowbox.css" />
    <script type="text/javascript" src="<?php echo base_url();?>js/shadowbox.js"></script>
    <title><?php echo $title;?></title>
    <?php echo $meta;?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

      <!-- Google -->
  <meta itemprop="name" content="Kriativa" />
  <meta itemprop="description" content="Floricultura em Caxias do Sul - trabalhamos com arranjos florais, flores de corte, plantas para presente, plantas e mudas para jardim, entre outros acessórios."/>
  <meta itemprop="image" content="http://www.floriculturakriativa.com/style/logotipo.png"/>

    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
    <script type="text/javascript">
  Shadowbox.init({});

  $(document).ready(function(){



    $("#conheca").click(function(){

      window.location = "<?php echo base_url();?>produtos";

      return false;
    });

     $("#conheca_kriativa").click(function(){

      window.location = "<?php echo base_url();?>empresa";

      return false;
    });

    $("#formnews").submit(function(){
    
      var email = $("#emailnews").val();
      

      if(email == "") {
      
        alert("Preencha o seu email");
        return false;
      }
      vet_dados = "email=" + email;
      
          $.ajax({
            type: 'POST',
            url: "<?php echo base_url();?>newsletter/cadastra1",
            data: vet_dados,
            success: function(msg){
            
            alert(msg);
            $("#emailnews").val("");
            

                      
            }
            
          });
      
      return false;
    
    });

   var qtdSlide = $(".slide").size();
     $(".slide:first").addClass("ativo");
     box_home();
   var i = 1;

      interval = setInterval(function(){
          
        if(i >= 0 && i < qtdSlide){
          $(".slide:visible").removeClass("ativo").next(".slide").addClass("ativo");
        }else if(i == qtdSlide){

            $(".slide").removeClass("ativo");
            $(".slide:first").addClass("ativo");
            i = 1;
        }

       i++;
      },4000);

      $(".flecha_dir").click(function(){
        clearInterval(interval);

         if(i >= 0 && i < qtdSlide){

          if($(".slide:visible").next(".slide").length > 0){
            $(".slide:visible").removeClass("ativo").next(".slide").addClass("ativo");
          }else{
            $(".slide").removeClass("ativo");
            $(".slide:first").addClass("ativo");
            i = 0;
          }

          


        }else if(i == qtdSlide){

            $(".slide").removeClass("ativo");
            $(".slide:first").addClass("ativo");
            i = 0;
        }

       i++;

      });

      $(".flecha_esq").click(function(){
        clearInterval(interval);
        
         if(i == 1){
          $(".slide").removeClass("ativo");
          $(".slide:last-of-type").addClass("ativo");
        }else if(i>1 && i <qtdSlide){

          $(".slide:visible").removeClass("ativo").prev(".slide").addClass("ativo");

        }else if(i == qtdSlide){
          
            $(".slide").removeClass("ativo");
            $(".slide:first").addClass("ativo");
            i = 0;
        }

       i++;

      });

  });


function box_home(){

      var qtdBox = $(".texto_slider img").size();
      var tempo = 0.9;


      for (var i = 1; i <= qtdBox; i++) {
       
        
       $(".texto_slider img:nth-child("+i+")").css({
        "-webkit-animation-delay": +tempo+"s",
        "animation-delay": +tempo+"s"
       });

       
       tempo = tempo + 0.2;
    }
  }

  </script>
</head>
  <body>
<?php if($this->uri->segment(1) == "home" || $this->uri->segment(1) == ""){ ?>
<section class="topo">
  <div class="logo"></div>
  <div class="centro">

    <img class="bandeira_1996" src="<?php echo base_url();?>style/images/1996.png"/>
  
    <div class="topo_dir">
      <div class="telef_topo">
        <img src="<?php echo base_url();?>style/images/fone_icon.png"/>
        <p>(54) 3214.2170</p>
      </div>
      <div class="rede_social">
       <a class="fb_topo" href=""></a>
      </div>
      
    </div>
<div style="clear: both;"></div>

      <nav class="menu_esq">
        <ul>
          <li><a href="<?php echo base_url();?>">Home</a></li>
          <li><a href="<?php echo base_url();?>empresa">Empresa</a></li>
        </ul>
      </nav>


      <nav class="menu_dir">
        <ul>
          <li><a href="<?php echo base_url();?>produtos">Produtos</a></li>
          <li><a href="<?php echo base_url();?>contato">Contato</a></li>
        </ul>
      </nav>

    </div>
</section>


<div class="slider">

  <div class="centro">
    
    <div class="flechas flecha_esq"></div>
    <div class="flechas flecha_dir"></div>

    <div class="slide">
      
        <div class="produto_slider"><img src="<?php echo base_url();?>style/images/imgslide.png" /></div>

        <div class="texto_slider">
          <img src="<?php echo base_url();?>style/images/texto_slide_0.png" />
          <img src="<?php echo base_url();?>style/images/texto_slide1_1.png" />
          <img src="<?php echo base_url();?>style/images/texto_slide1_2.png" />
          <img src="<?php echo base_url();?>style/images/texto_slide1_3.png" />
          <img src="<?php echo base_url();?>style/images/conheca.png" id="conheca" />
        </div>
    </div> 

    <div class="slide">
      
        <div class="produto_slider"><img src="<?php echo base_url();?>style/images/imgslide2.png" /></div>

        <div class="texto_slider texto_slider2">
          
          <img src="<?php echo base_url();?>style/images/texto_slide2_1.png" />
          <img src="<?php echo base_url();?>style/images/texto_slide2_2.png" />
          
          <img src="<?php echo base_url();?>style/images/conheca_kriativa.png" id="conheca_kriativa" />
        </div>
    </div> 

   

   

  </div>
  
</div>

  <?php }else{ ?>

  <section class="topo">
    <div class="logo"></div>
  <div class="centro">

    <img class="bandeira_1996" src="<?php echo base_url();?>style/images/1996.png"/>
  
    <div class="topo_dir">
      <div class="telef_topo">
        <img src="<?php echo base_url();?>style/images/fone_icon.png"/>
        <p>(54) 3214.2170</p>
      </div>
      <div class="rede_social">
       <a class="fb_topo" href=""></a>
      </div>
      
    </div>
<div style="clear: both;"></div>

      <nav class="menu_esq">
        <ul>
          <li><a href="<?php echo base_url();?>">Home</a></li>
          <li><a href="<?php echo base_url();?>empresa">Empresa</a></li>
        </ul>
      </nav>


      <nav class="menu_dir">
        <ul>
          <li><a href="<?php echo base_url();?>produtos">Produtos</a></li>
          <li><a href="<?php echo base_url();?>contato">Contato</a></li>
        </ul>
      </nav>

    </div>
</section>
<?php } ?>