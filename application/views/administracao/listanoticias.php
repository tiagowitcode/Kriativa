

<div id="content">
			<div id="content-header">
				<h1>Noticias</h1>
				
			</div>
			<div id="breadcrumb">
				<a href="<?php echo base_url();?>administracao" title="Ir Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="#" class="current">Notícias</a>
			</div>
			<div class="container-fluid">
				
				<div class="row-fluid">
				
					
					<div class="span12 center">	
						
						<form class="form-search" action="<?php echo base_url();?>administracao/noticias/busca" method="POST">
							<input type="text" name="busca" class="input-medium search-query">
							<button type="submit" class="btn">Pesquisar</button>
							<a class="btn btn-primary" style="float:right;"  href="<?php echo base_url();?>administracao/noticias/formcad">Adicionar</a>
						</form>					
							
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-th"></i>
								</span>
								<h5>Notícias</h5>
							</div>
							<div class="widget-content nopadding">
							<table class="table table-bordered table-striped table-hover">
									
									<thead>
										<tr>
											 <th>Data</th>
											 <th>Titulo</th>
											 <th>Editar</th>
											 <th>Excluir</th>
										</tr>
									</thead>
									<tbody>
										 
 
 		
									 <?php 
									 if($noticias){
									 
										foreach($noticias as $item):
											
									
											
										?>   
									 
									 <tr>
										 <td><?php echo data_us_to_br($item->data); ?></td>
										 <td><?php echo $item->titulo;?></td>
										 <td> <a href="<?php echo base_url();?>administracao/noticias/alterar/<?php echo $item->id; ?>"><i class="icon icon-pencil"></i></a></td>
										 <td> <a href="<?php echo base_url();?>administracao/noticias/excluir/<?php echo $item->id; ?>" onclick="return confirm('Confirma a Exclusao?')"><i class="icon icon-remove"></i></a></td>
									 </tr>
									 </tbody>
											
										<?   
										
										endforeach;
									 }
									 ?>
									</tbody>
								</table>
								</div>
						</div>
								
								<?php if($paginas){
									   echo $paginas;
									   
								 }
								  ?>
          
		  
		    
				</div>
			</div>	
			
				
				



  