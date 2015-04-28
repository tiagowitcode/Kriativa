<?php 
	class Home extends CI_Controller {
			function __construct(){
				parent::__construct();
                                $this->load->library('session');
                                
                                
                               if($this->session->userdata('loggedin')){
                                    redirect(base_url().'administracao/intro','refresh');
                                }
	
			}
			
			function index(){
				
				$this->load->view('administracao/login');
                                
				
			}
                        
                        
                        function login(){
                            
                            $this->load->library('form_validation');
                            $config = array(
                                        array(
                                               'field' => 'login',
                                               'label' => 'Login',
                                               'rules' => 'required|min_length[4]|max_length[50]|htmlspecialchars'
                                        ),
                                        array(
                                               'field' => 'senha',
                                               'label' => 'Senha',
                                               'rules' => 'required|min_length[4]|max_length[50]|htmlspecialchars'
                                        )
                            );
                            
                            $this->form_validation->set_rules($config);
                            if($this->form_validation->run() == FALSE){
                                $this->index();
                                
                            }else
                                { 
                                
                                $this->load->model('administracao/usuarios_model');
                                
                                 $data['login'] = $this->input->post('login');
                                 
                                 $verifica = $this->usuarios_model->verificasenha($data['login']);
                                 
                                 if(count($verifica)> 0){
                                 
                                         $senhanormal = $this->encrypt->decode($verifica['0']->password);
                                         $data['senha'] = $this->input->post('senha');
                                         if($senhanormal == $data['senha']){
                                     
                                                 $this->load->library('session');
                                                 $newdata = array(
                                                                     'nome_usuario' => $verifica[0]->username,
                                                                     'usuario' => $data['login'],   
																	 'usuario_id' => $verifica[0]->id,
                                                                     'loggedin' => TRUE
                                                             );
                                                 $this->session->set_userdata($newdata);
                                                 redirect(base_url().'administracao/intro','refresh');

                                             }
                                             else{
                                                 $this->index();
                                             }
                                         
                                         
                                 }else{
                                     $this->index();
                                 }
                                 
                                 
                              }
                        }
                        
                        
	}
				
				
				
?>