<script type="text/javascript">
$(document).ready(function(){
 <?php if($produto){ ?>
  var id = "<?php echo $produto[0]->id_categoria;?>";
  
  $("#"+id).addClass("hover_a");
<?php } ?>

});

</script>
<div class="fundo">
    <div class="bg_sobre">
      <div class="centro">
        <h1>NOSSOS <span>PRODUTOS</span></h1>
        <ul>
         <li><a href="">INICIO&nbsp; ></a></li>
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
      <div class="produto_detalhe">
        <?php if($produto){ ?>
        <div class="img_interna">
       <?php    
            $this->db->where("id_produtos",$produto[0]->id);
            $foto = $this->db->get("fotos_produtos")->result();
           ?>
          <img itemprop="image" src="<?php echo base_url();?>phpthumb/phpThumb.php?src=../imgs/<?php echo $foto[0]->nome;?>&w=320&h=321&zc=1&q=100" alt="<?php echo $produto[0]->nome;?>" />
        </div>
        <div class="titulo_interna">
          <h2><?php echo $produto[0]->nome;?><br/><span>Ref: <?php echo $produto[0]->codigo;?></span></h2>
        </div>
        <div class="descricao_produto">
          <span>Descrição:</span><br/>
          <p><?php echo $produto[0]->descricao;?></p>
        </div>
        <div class="preco">
          <p><span>R$</span><?php echo $produto[0]->valor;?></p>
        </div>
        <div class="descrip">Entregamos em domicílio</div>
        <?php }?>
      </div>

   </div>
</div>