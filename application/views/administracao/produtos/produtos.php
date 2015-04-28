<?php 
$op = "";
foreach($categorias as $categoria): 

	$op .= "<option value='". $categoria->id ."'>".$categoria->nome. "</option>"; 


endforeach; ?>	

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
										<label class="control-label">Categoria</label>
										<div class="controls">
											<select name="id_categoria" id="id_categoria">
												<option>Selecione uma categoria</option>
												<?php echo $op;?>
											</select>	
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Código</label>
										<div class="controls">
											<input type="text" name="codigo" id="codigo" />
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Nome</label>
										<div class="controls">
											<input type="text" name="nome" id="nome" />
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Valor</label>
										<div class="controls">
											<input type="text" name="valor" id="valor" />
											
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
			




