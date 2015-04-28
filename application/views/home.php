<section class="conteudo_home">
  <div class="fundo">
  <div class="centro">
     <div class="div_box_flores">

        <div class="box_info">
         <a class="link_box" href=""></a>
         <div class="image_box">
           <img src="<?php echo base_url();?>style/images/img1.jpg"/>
           <div class="div_absolute"></div>
        </div>
        <div class="detalhes_box">
           <h2>CESTAS PARA PRESENTE</h2>
           <p>Presenteie quem você gosta
           com lindas cestas para presente!</p> 
          <a class="saiba_mais" href=""></a>
        </div>
       </div>

               <div class="box_info">
         <a class="link_box" href=""></a>
         <div class="image_box">
           <img src="<?php echo base_url();?>style/images/categoria2.jpg"/>
           <div class="div_absolute"></div>
        </div>
        <div class="detalhes_box">
           <h2>ARRANJOS DE FLORES</h2>
           <p>Presenteie quem você gosta
           com lindas cestas para presente!</p> 
          <a class="saiba_mais" href=""></a>
        </div>
       </div>

               <div class="box_info">
         <a class="link_box" href=""></a>
         <div class="image_box">
           <img src="<?php echo base_url();?>style/images/categoria3.jpg"/>
           <div class="div_absolute"></div>
        </div>
        
        <div class="detalhes_box">
           <h2>BUQUÊS</h2>
           <p>Presenteie quem você gosta
           com lindas cestas para presente!</p> 
          <a class="saiba_mais" href=""></a>
        </div>
       </div>
        


     </div>


<div style="clear: both;"></div>



    <div class="produtos_destaque_titulo">
        <div class="detalhe_esq">
          <img src="<?php echo base_url();?>style/images/detalhe_esq.png"/>
        </div>
        <div class="titulo_destaque">
          <h1>Produtos em <span>Destaque</span></h1>
        </div>
        <div class="detalhe_dir">
          <img src="<?php echo base_url();?>style/images/detalhe_dir.png"/>
        </div>     
    </div>

<?php 
  foreach($produtos as $produto): 
     $this->db->where("id_produtos",$produto->id);
     $foto = $this->db->get("fotos_produtos")->result();
  ?>
  <div class="box_produto">
    <a class="link_box" href="<?php echo base_url();?>produtos/detalhe/<?php echo $produto->id;?>"></a>
    <div class="produto_image">
      
      <img itemprop="image" src="<?php echo base_url();?>phpthumb/phpThumb.php?src=../imgs/<?php echo $foto[0]->nome;?>&w=211&h=214&zc=1&q=100" alt="<?php echo $produto->nome;?>" />
    </div>
    <div class="produto_descricao">
      <p><?php echo $produto->nome;?><br/><span><?php echo $produto->valor;?></span></p>
    </div>
    <div class="bandeira_mais"></div>
  </div>
<?php endforeach; ?>

   </div>
</section>