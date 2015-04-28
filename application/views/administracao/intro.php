

<div id="content">
			<div id="content-header">
				<h1>Calendário</h1>
				
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="#" class="current">Visitas</a>
			</div>
			<!--<div class="container-fluid">
					<br />
					<div class="alert alert-info">
						Para maiores informações sobre estatísticas de seu site 
						<a href="http://www.google.com.br">Acesse Google analytics</a>
						</div>
					<div class="row-fluid">
					
					<div class="span12 center" style="text-align: center;">					
						<ul class="stat-boxes">
											<li class="popover-visits">
												
												<div class="right">
													<strong><?php echo $mes;?></strong>
													Mês
												</div>
											</li>
											
											<li class="popover-visits">
												
												<div class="right">
													<strong><?php echo $dia;?></strong>
													Hoje
												</div>
											</li>
										</ul>
					</div>	
				</div>
				
				
				<div class="row-fluid">
						<div class="span2">
							<div class="widget-box">
								<div class="widget-title">
									<span class="icon">
										<i class="icon-eye-open"></i>
									</span>
									<h5>Ultimos 5 dias</h5>
								</div>
								<div class="widget-content nopadding">
									<table class="table table-bordered table-striped table-hover">
										<thead>
											<tr>
														<th>Dia</th>
														<th>Visitas</th>
													</tr>
										</thead>
										<tbody>
												
													<?php foreach($acessosdiames as $ac): 
															echo $ac;
														  endforeach;
													?>
													
												</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="span4">
							<div class="widget-box">
								<div class="widget-title">
									<span class="icon">
										<i class="icon-eye-open"></i>
									</span>
									<h5>Browsers</h5>
								</div>
								<div class="widget-content nopadding">
									<table class="table table-bordered table-striped table-hover">
										<thead>
											<tr>
														<th>Browser</th>
														<th>Visitas</th>
													</tr>
										</thead>
										<tbody>
												
													<?php foreach($browsermes as $ac): 
															echo $ac;
														  endforeach;
													?>
													
												</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					-->
					
					
				<!--<div class="row-fluid">
					<div class="span12">
						
						<div class="widget-box widget-calendar">
							<div class="widget-title">
								<span class="icon"><i class="icon-calendar"></i></span>
								<h5>Calendar</h5>
								<div class="buttons">
									<a id="add-event" data-toggle="modal" href="#modal-add-event" class="btn btn-success btn-mini"><i class="icon-plus icon-white"></i> Add new event</a>
									<div class="modal hide" id="modal-add-event">
										 <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">×</button>
											<h3>Add a new event</h3>
										</div>
										<div class="modal-body">
											<p>Enter event name:</p>
											<p><input id="event-name" type="text" /></p>
										</div>
										<div class="modal-footer">
											<a href="#" class="btn" data-dismiss="modal">Cancel</a>
											<a href="#" id="add-event-submit" class="btn btn-primary">Add event</a>
										</div>
									</div>
								</div>
							</div>
							<div class="widget-content nopadding">
								<div class="panel-left">
									<div id="fullcalendar"></div>
								</div>
								<div id="external-events" class="panel-right">
									<div class="panel-title"><h5>Events</h5></div>
									<div class="panel-content">
										<div class="external-event ui-draggable label label-inverse">My Event 1</div>
                                        <div class="external-event ui-draggable label label-inverse">My Event 2</div>
                                        <div class="external-event ui-draggable label label-inverse">My Event 3</div>
                                        <div class="external-event ui-draggable label label-inverse">My Event 4</div>
                                        <div class="external-event ui-draggable label label-inverse">My Event 5</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>-->