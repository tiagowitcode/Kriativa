<?php 
	class Parceiros_model extends CI_Model {
	
			public $tabela = "parceiros";
			public $tabelaFoto = "fotos_parceiros";
			public $idFoto = "id_parceiros";
	
			function __construct(){
				parent::__construct();
				
			}
			
			function cadastrar($data){
                                $this->db->insert($this->tabela,$data);
								$pid = $this->db->insert_id();
                                return 	$pid;
			}
                        
            function fotocadastra($foto){
                            
				return $this->db->insert($this->tabelaFoto,$foto);	
			}
                        
                        function fotoexcluir($id){
                            
                            $this->db->where($this->idFoto,$id);
                            return $this->db->delete($this->tabelaFoto);
                           	
                        }
                        
                        function fotounicaexcluir($id){
                            $this->db->where('id',$id);
                            return $this->db->delete($this->tabelaFoto);
                            
                        }
			
			function listar($offset=false){
                            if (!$offset) {
                                    $offset = 0;
                                }

								
								$this->db->order_by("nome", "asc");
								$this->db->limit(100, $offset);
								return $this->db->get($this->tabela)->result();
                            
                        }
                        function numero_total() {
                                $this->db->select('*');
                                $this->db->from($this->tabela);    
                                $this->db->order_by("nome", "asc");
								
                                return $this->db->get()->num_rows();
                            }   
                        
                        
			function listar_dados($id){
			 	$this->db->where('id',$id);
				$query = $this->db->get($this->tabela);
				return $query->result();
				
			}
			
			
			function gravar_alteracao($data){
				$this->db->where('id',$data['id']);
				return $this->db->update($this->tabela,$data);							
				
			}
			
			function excluir($id){
				$this->db->where('id',$id);
				return $this->db->delete($this->tabela);							
				
			}
			
			function buscaFiltro($codigo,$offset=false) {
                           
                           
						   
                           if (!$offset) {
                                    $offset = 0;
                                }
                           
                                $this->db->select('p.id,p.nome,p.descricao, c.nome as categoria');
                                $this->db->from('produtos as p');
								$this->db->join('categoria as c', 'p.id_categoria = c.id', 'inner');
								
								if(!empty($categoria)){
                                    
                                    $this->db->where('p.id_categoria', $categoria);
                                }
                                if(!empty($codigo)){
                                    $this->db->like('p.nome', $codigo);
                                }
                                
                                /*$this->db->like('visivel', 1);*/
                                $this->db->limit(10, $offset);
                                return $this->db->get()->result();
                                
                           
                       }
                       
                       function numero_buscaFiltro($categoria,$codigo){
                             
                                 
                                $this->db->select('p.id,p.nome,p.descricao, c.nome as categoria');
                                $this->db->from('produtos as p');
								$this->db->join('categoria as c', 'p.id_categoria = c.id', 'inner');
								
								if(!empty($categoria)){
                                    $this->db->where('p.id_categoria', $categoria);
                                }
                                
                                if(!empty($codigo)){
                                    $this->db->like('p.nome', $codigo);
                                }
                                /*$this->db->where('visivel', 1);*/
                                
                                return $this->db->get()->num_rows();
                            }
                        
                         
                        
        }


?>