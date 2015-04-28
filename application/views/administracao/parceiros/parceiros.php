

<div id="content">
			<div id="content-header">
				<h1><?php echo $nomecontroller; ?></h1>
				
			</div>
			<div id="breadcrumb">
				<a href="<?php echo base_url();?>administracao" title="Ir Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="<?php echo base_url();?>administracao/<?php echo $nomecontroller;?>/listar" title="Listar Noticias" class="tip-bottom"> <?php echo $nomecontroller;?> </a>
				<a href="#" class="current">Cadastrar <?php echo $nomecontroller;?></a>
			</div>
			<div class="container-fluid">
				
				<div class="row-fluid">
					<div class="span12 center">	
						<form action="<?php echo base_url();?>administracao/<?php echo $nomecontroller;?>/cadastrar" method="post" enctype="multipart/form-data" id="basic_validate"  novalidate="novalidate" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Nome</label>
										<div class="controls">
											<input type="text" name="nome" id="nome" />
											
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">Tipo</label>
										<div class="controls">
											<select name="tipo" id="tipo">
												<option value="">Selecione o Tipo de Cliente</option>
												<option value="musica">Musica</option>
												<option value="empresas">Empresas/Eventos</option>
												<option value="outrasartes">Outras Artes</option>
												<option value="projetos">Projetos Patrocinados</option>

											</select>	
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Descricao</label>
										<div class="controls">
											<textarea name="descricao" id="descricao" cols="70" rows="20" /></textarea>
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
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
								</form>
								
								
						
		    
					</div>
				</div>	
			




