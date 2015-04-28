<script src="<?php echo base_url();?>style/admin/bootstrap/js/jquery.masonry.min.js"></script>


<script type="text/javascript">

	 $('.gallery-masonry').masonry({
						  itemSelector: '.item',
						  isAnimated: true,
						  isFitWidth: true
						});   
</script>



<div id="content">
			<div id="content-header">
				<h1>Inicio</h1>
				
			</div>
			<div id="breadcrumb">
				<a href="<?php echo base_url();?>administracao" title="Ir Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="<?php echo base_url();?>administracao/noticias/listar" title="Listar Noticias" class="tip-bottom"> Notícias</a>
				<a href="#" class="current">Alterar Notícias</a>
			</div>
			<div class="container-fluid">
				
				<div class="row-fluid">
					<div class="span12 center">	
						<form action="<?php echo base_url();?>administracao/noticias/gravar_alteracao" method="post" enctype="multipart/form-data" id="basic_validate"  novalidate="novalidate" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Data</label>
										<div class="controls">
											
											<input class="datepicker" name="data" id="data" type="text" value="<?php echo data_us_to_br($dados_noticia[0]->data); ?>" data-date-format="dd/mm/yyyy" data-date="<?php echo date("d/m/Y");?>">
											
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">Titulo</label>
										<div class="controls">
											<input type="text" name="titulo" id="titulo" value="<?php echo $dados_noticia[0]->titulo; ?>" />
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Descricao</label>
										<div class="controls">
											<textarea name="descricao" id="descricao" cols="70" rows="20" /><?php echo $dados_noticia[0]->descricao; ?></textarea>
										<script type="text/javascript">
												CKEDITOR.replace( 'descricao' );
											</script>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Imagens</label>
										<div class="controls">
											<input type="file" name="userfile[]" id="imagem" size="20" class="multi" />
										</div>
									</div>
									
									<div class="form-actions">
										<input type="hidden" name="id" value="<?php echo $dados_noticia[0]->id; ?>" />
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
								</form>
								
								
									
									<div class="gallery-masonry">
                                    
									<?php
										foreach($fotos as $foto):
											?>
											<div class="item">
												<a href="#" class="thumbnail">
													<img src="<?php echo base_url();?>imgs/<?php echo $foto->nome;?>" alt="">
												</a>
												<div class="actions">
													
													<a title="Remove" href="<?php echo base_url();?>administracao/noticias/excluirfoto/<?php echo $foto->id;?>" class="tip-top"><i class="icon-remove icon-white"></i></a>
												</div>
											 </div>
										<?php endforeach; ?>
									</div>
						
		    
					</div>
				</div>	
			
				
				



  



