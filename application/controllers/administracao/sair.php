<?php 
	class Sair extends CI_Controller {
            
			
			function index(){
				
			    $this->load->library('session');
                            $this->session->sess_destroy();
                            redirect('administracao/home/', 'refresh');
                                
				
			}
                        
                       
	}
				
				
				
?>