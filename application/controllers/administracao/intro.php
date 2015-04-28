<?php 
	class Intro extends CI_Controller {
            
			
			function index(){
			
			$data = "";
			
						/*require("gapi/gapi.class.php");
						
						$id = '59558280';
								
						$diasmes = array();
						$browsermes = array();
					
						$ga = new gapi('witcode@witcode.com.br','pg192837');

						// Define o periodo do relatório
							$inicio = date('Y-m-01'); // 1° dia do mês passado
							$fim = date('Y-m-d', strtotime('-1 day')); // Último dia do mês passado
							
							
						 
							// Busca os pageviews e visitas (total do mês passado)
							$ga->requestReportData($id, 'month', 'visits', null, null, $inicio, $fim);
							foreach ($ga->getResults() as $dados) {
								$data['mes'] = $dados->getVisits();
							}
						 
							
							$ga->requestReportData($id, 'day', 'visits', null, null, date('Y-m-d', strtotime('-1 day')), date('Y-m-d'));
							foreach ($ga->getResults() as $dados) {
								$data['dia'] = $dados->getVisits();
							}
							
							$ga->requestReportData($id, 'day', array('pageviews', 'visits'), '-day', null, $inicio, $fim, 1, 6);
							foreach ($ga->getResults() as $dados) {
								//$diasmes[]  = '<li><i class="icon-user"></i> <strong>'. $dados . ' - '.$dados->getVisits().'</strong> <small>Acessos</small></li>';
								$diasmes[] = '<tr>
											  <td>' . $dados . '/' . date("m").'</td>
											  <td>' .$dados->getVisits().'</td>
											  </tr>';
								
							}
							
							$ga->requestReportData($id, 'browser', array('pageviews', 'visits'), '-visits', null, $inicio, $fim, 1, 50);
							foreach ($ga->getResults() as $dados) {
								//$diasmes[]  = '<li><i class="icon-user"></i> <strong>'. $dados . ' - '.$dados->getVisits().'</strong> <small>Acessos</small></li>';
								$browsermes[] = '<tr>
											  <td>' . $dados . '/' . date("m").'</td>
											  <td>' .$dados->getVisits().'</td>
											  </tr>';
								
							}
			
							$data['acessosdiames'] = $diasmes;
							$data['browsermes'] = $browsermes;
		
							
						*/
						$this->load->view('administracao/elementos/html_header');
						$this->load->view('administracao/elementos/menu');
						$this->load->view('administracao/intro',$data);
						$this->load->view('administracao/elementos/html_footer');
                                
				
			}
                        
                       
	}
				
				
				
?>