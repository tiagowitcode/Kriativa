<script type="text/javascript">
$(document).ready(function(){

  var id = "<?php echo $this->uri->segment('3');?>";
  $("#"+id).addClass("hover_a");


});

</script>

<div class="fundo">
    <div class="bg_sobre">
      <div class="centro">
        <h1>NOSSOS <span>PRODUTOS</span></h1>
        <ul>
         <li><a href="<?php echo base_url();?>">INICIO&nbsp; ></a></li>
        <li>&nbsp; PRODUTOS</li>
       </ul>
    </div>
   </div>

   <div class="centro">
     <div class="categoria_produtos">
       <div class="categorias_titulo"><h3>CATEGORIAS</h3></div>
       <ul>
         <?php foreach($categorias as $categoria): ?>
         <li><img src="<?php echo base_url();?>style/images/flecha.png"/><a id="<?php echo $categoria->id;?>" href="<?php echo base_url();?>produtos/categoria/<?php echo $categoria->id;?>"><?php echo $categoria->nome;?></a></li>
         <?php endforeach; ?>
       </ul>
     </div>


    
    <div class="div_produtos">

      <?php 
      if($produtos){
      foreach($produtos as $produto):
        $this->db->where("id_produtos",$produto->id);
     $foto = $this->db->get("fotos_produtos")->result();
      ?>
        <div class="box_produto_dir">
        <a class="link_box" href="<?php echo base_url();?>produtos/detalhe/<?php echo $produto->id;?>"></a>
        <div class="produto_image">
           <img itemprop="image" src="<?php echo base_url();?>phpthumb/phpThumb.php?src=../imgs/<?php echo $foto[0]->nome;?>&w=211&h=214&zc=1&q=100" alt="<?php echo $produto->nome;?>" />
        </div>
        <div class="produto_descricao">
          <p><?php echo $produto->nome;?><br/><span>R$ <?php echo $produto->valor;?></span></p>
        </div>
        <div class="bandeira_mais"></div>
      </div>
      

      <?php endforeach; }else{echo "<br /><br /><p>Produtos desta categoria ainda não foram cadastrados</p>"; } ?>
   
    </div>
   </div>
</div>