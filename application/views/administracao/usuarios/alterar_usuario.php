
<div id="content">
			<div id="content-header">
				<h1>Inicio</h1>
				
			</div>
			<div id="breadcrumb">
				<a href="<?php echo base_url();?>administracao" title="Ir Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="<?php echo base_url();?>administracao/usuarios/listar" title="Listar Noticias" class="tip-bottom"> usuarios</a>
				<a href="#" class="current">Alterar usuarios</a>
			</div>
			<div class="container-fluid">
				
				<div class="row-fluid">
					<div class="span12 center">	
						<form action="<?php echo base_url();?>administracao/usuarios/gravar_alteracao" method="post" enctype="multipart/form-data" id="basic_validate"  novalidate="novalidate" class="form-horizontal">
									
									<div class="control-group">
										<label class="control-label">usuario</label>
										<div class="controls">
											<input type="text" name="username" id="username" value="<?php echo $dados_usuario[0]->username; ?>" />
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Email</label>
										<div class="controls">
											<input name="email" type="text" id="email" size="75" value="<?php echo $dados_usuario[0]->email; ?>" />
											
										</div>
									</div>
									<div class="control-group">
										
										<div class="controls">
											<a href="<?php echo base_url();?>administracao/senha">Alterar Senha</a>
											
										</div>
									</div>
									
									
									<div class="form-actions">
										<input type="hidden" name="id" value="<?php echo $dados_usuario[0]->id; ?>" />
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
								</form>
								
								
									
						
		    
					</div>
				</div>	
			
				
				



  








