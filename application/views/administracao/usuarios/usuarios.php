
<div id="content">
			<div id="content-header">
				<h1>Usuários</h1>
				
			</div>
			<div id="breadcrumb">
				<a href="<?php echo base_url();?>administracao" title="Ir Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="<?php echo base_url();?>administracao/usuarios/listar" title="Listar Noticias" class="tip-bottom"> usuarios</a>
				<a href="#" class="current">Cadastro usuarios</a>
			</div>
			<div class="container-fluid">
				
				<div class="row-fluid">
					<div class="span12 center">	
						<form action="<?php echo base_url();?>administracao/usuarios/cadastrar" method="post" enctype="multipart/form-data" id="basic_validate"  novalidate="novalidate" class="form-horizontal">
									
									<div class="control-group">
										<label class="control-label">usuario</label>
										<div class="controls">
											<input type="text" name="username" id="username"  />
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Email</label>
										<div class="controls">
											<input name="email" type="text" id="email" size="75"  />
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Senha</label>
										<div class="controls">
											<input name="password" type="password" id="password" size="75"  />
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Confirme Senha</label>
										<div class="controls">
											<input name="senha2" type="password" id="senha2" size="35" />
											
										</div>
									</div>
									
									
									<div class="form-actions">
										
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
								</form>
								
								
									
						
		    
					</div>
				</div>	
			
				
				



  









