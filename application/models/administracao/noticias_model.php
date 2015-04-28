<?php 
	class Noticias_model extends CI_Model {
			function __construct(){
				parent::__construct();
	
			}
			
			function cadastrar($data){
                                $this->db->insert('noticias',$data);
								$pid = $this->db->insert_id();
                                return 	$pid;
			}
                        
                        function fotocadastra($foto){
                            
				return $this->db->insert('fotos_noticia',$foto);	
			}
                        
                        function fotoexcluir($id){
                            
                            $this->db->where('id_noticia',$id);
                            return $this->db->delete('fotos_noticia');
                           	
                        }
                        
                        function fotounicaexcluir($id){
                            $this->db->where('id',$id);
                            return $this->db->delete('fotos_noticia');
                            
                        }
			
			function listar($offset=false){
                            if (!$offset) {
                                    $offset = 0;
                                }

                                $this->db->select('*');
                                $this->db->from('noticias');
                                $this->db->limit(10, $offset);

                                return $this->db->get()->result();
                            
                        }
                        function numero_noticias() {
                                $this->db->select('*');
                                $this->db->from('noticias');    
                                return $this->db->get()->num_rows();
                            }   
                        
                        
			function listar_dados_noticia($id){
			 	$this->db->where('id',$id);
				$query = $this->db->get('noticias');
				return $query->result();
				
			}
			
			
			function gravar_alteracao($data){
				$this->db->where('id',$data['id']);
				return $this->db->update('noticias',$data);							
				
			}
			
			function excluir($id){
				$this->db->where('id',$id);
				return $this->db->delete('noticias');							
				
			}
                        
                         function buscaFiltro($codigo,$offset=false) {
                           
                           
                           if (!$offset) {
                                    $offset = 0;
                                }
                           
                                $this->db->select('*');
                                $this->db->from('noticias');
                                
                               
                                if(!empty($codigo)){
                                    $this->db->like('titulo', $codigo);
                                }
                                
                                /*$this->db->like('visivel', 1);*/
                                $this->db->limit(10, $offset);
                                return $this->db->get()->result();
                                
                           
                       }
                       
                       function numero_buscaFiltro($codigo){
                             
                                 
                                $this->db->select('*');
                                $this->db->from('noticias');
                                
                               
                                
                                if(!empty($codigo)){
                                    $this->db->like('titulo', $codigo);
                                }
                                /*$this->db->where('visivel', 1);*/
                                
                                return $this->db->get()->num_rows();
                            }
                        
        }


?>