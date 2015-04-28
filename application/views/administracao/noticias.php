

<div id="content">
			<div id="content-header">
				<h1>Noticias</h1>
				
			</div>
			<div id="breadcrumb">
				<a href="<?php echo base_url();?>administracao" title="Ir Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="<?php echo base_url();?>administracao/noticias/listar" title="Listar Noticias" class="tip-bottom"> Notícias</a>
				<a href="#" class="current">Cadastrar Notícias</a>
			</div>
			<div class="container-fluid">
				
				<div class="row-fluid">
					<div class="span12 center">	
						<form action="<?php echo base_url();?>administracao/noticias/cadastrar" method="post" enctype="multipart/form-data" id="basic_validate"  novalidate="novalidate" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Data</label>
										<div class="controls">
											
											<input class="datepicker" name="data" id="data" type="text" value="<?php echo date("d/m/Y");?>" data-date-format="dd/mm/yyyy" data-date="<?php echo date("d/m/Y");?>">
											
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">Titulo</label>
										<div class="controls">
											<input type="text" name="titulo" id="titulo" />
											
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
			
				
				



  