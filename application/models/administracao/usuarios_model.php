<?php 
	class Usuarios_model extends CI_Model {
			function __construct(){
				parent::__construct();
	
			}
			
			function login($data){
                            
                            $this->db->where('username',$data['login']);
                            $this->db->where('password',$data['senha']);
                            $query = $this->db->get('admin');
                            return $query->result();
                            
			}
                        
                        function verificasenha($usuario){
                            $this->db->where('username',$usuario);
                            $query = $this->db->get('admin');
                            return $query->result();
                        }
                        
                        function alterasenha($data){
                            $this->db->where('id',$data['id']);
                            return $this->db->update('admin',$data);
                            
                        }
                        function cadastrar($data){
                               
                               return $this->db->insert('admin',$data);
				
			}
                        
                       function listar($offset=false){
                            if (!$offset) {
                                    $offset = 0;
                                }

                                $this->db->select('*');
                                $this->db->from('admin');
                                $this->db->limit(10, $offset);

                                return $this->db->get()->result();
                            
                        }
                        function numero_usuario() {
                                $this->db->select('*');
                                $this->db->from('admin');    
                                return $this->db->get()->num_rows();
                            }   
                        
                        function verificanome($nome){
                            $this->db->where('username',$nome);
		            $query = $this->db->get('admin');
                            return $query->row();
                        }
			
			function listar_dados_usuario($id){
			 	$this->db->where('id',$id);
				$query = $this->db->get('admin');
				return $query->result();
				
			}
			
			
			function gravar_alteracao($data){
				$this->db->where('id',$data['id']);
				return $this->db->update('admin',$data);							
				
			}
			
			function excluir($id){
				$this->db->where('id',$id);
				return $this->db->delete('admin');							
				
			}
         
                        
        }


?>