

<div id="content">
			<div id="content-header">
				<h1>Inicio</h1>
				
			</div>
			<div id="breadcrumb">
				<a href="<?php echo base_url();?>administracao" title="Ir Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="<?php echo base_url();?>administracao/usuarios/listar" title="Listar Noticias" class="tip-bottom"> Usuarios </a>
				<a href="#" class="current">Alterar Senha usuario</a>
			</div>
			<div class="container-fluid">
				
				<div class="row-fluid">
					<div class="span12 center">	
						<form action="<?php echo base_url();?>administracao/senha/cadastrar" method="post" enctype="multipart/form-data" id="basic_validate"  novalidate="novalidate" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Nome</label>
										<div class="controls">
											<input name="username" type="text" id="username" value="<?php echo $this->session->userdata('usuariotal');?>" size="35" readonly/>
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Senha antiga</label>
										<div class="controls">
											<input name="senhaantiga" type="password" id="senhaantiga" size="35" />
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Senha nova</label>
										<div class="controls">
											<input name="senha" type="password" id="senha" size="35" />
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Confirme Senha nova</label>
										<div class="controls">
											<input name="senhanova1" type="password" id="senhanova1" size="35" />
											
										</div>
									</div>
									
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
								</form>
								
								
						
		    
					</div>
				</div>	
			




