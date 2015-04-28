<?php

class Agenda extends CI_Controller {

	public $nomeLista = "lista_agenda"; // nome do view  de listagem
	public $nomeModel = "agenda_model"; // nome do model
	public $nomeForm = "agenda";        // nome da view de cadastro
	public $nomeAltera = "alterar_agenda"; // nome da view de alterar
	public $temFoto = false;
	public $tabelaFoto = "fotos_agenda"; // nome da tabela de foto
	public $idFoto = "id_agenda";       // nome do campo da tabela de foto
	public $dentroDados = "agenda";     // nome que vai nos dados_
	public $nomeController = "agenda"; // nome do controlador
	


    function __construct() {
        parent::__construct();
        $this->load->library('session');
        
        if (!$this->session->userdata('loggedin')) {
            redirect(base_url() . 'administracao/home', 'refresh');
        }
    }

    function index() {
        $this->load->view('administracao/elementos/html_header');
        $this->load->view('administracao/elementos/menu');
        
        $this->load->view('administracao/elementos/html_footer');
        
    }

    function formcad($erro = "") {
        $dados['erro'] = $erro;
		
		$dados['nomecontroller'] = $this->nomeController;
		
        $this->load->view('administracao/elementos/html_header');
        $this->load->view('administracao/elementos/menu');
        $this->load->view('administracao/'.$this->nomeForm.'/'.$this->nomeForm,$dados);
        $this->load->view('administracao/elementos/html_footer');
    }

    
    function cadastrar() {
	
	   $nomeModel = $this->nomeModel;
	
       $erro = ""; 
       $jaexiste = false;
        // testa se a foto ja existe
         $numero_arquivos = count($_FILES['userfile']['name']) - 1;
          for ($i = 0; $i < $numero_arquivos; $i++) {
             $filename = 'imgs/' . $_FILES['userfile']['name'][$i];
             if(file_exists($filename)){
                 $jaexiste = true;
             }
         }
        
        $this->load->library('form_validation');
        $validacoes = array(
            array('field' => 'nome',       'label' => 'Nome', 'rules' => 'required|min_length[1]')
			
            
        );
        $this->form_validation->set_rules($validacoes);
        
        if ($this->form_validation->run() == FALSE || $jaexiste == true) {  // Valida se os campos estao preenchidos e verifica se a foto ja existe
            if($jaexiste){  // se a foto existe chama o metodo com o parametro do erro
                $erro .= "A Imagem ". $_FILES['userfile']['name'][$i] ." ja existe no sistema <br />";
            }
            
            $this->formcad($erro); // se o erro n for da foto chama o metodo sem o parametro de erro
            
        } else {
                   // TIAGO TESTE
                    $config['upload_path'] = 'imgs'; // server directory
                    $config['allowed_types'] = 'gif|jpg|png'; // by extension, will check for whether it is an image
                    $config['max_size'] = '0'; // in kb
                    $config['max_width'] = '0';
                    $config['max_height'] = '0';
					$config['encrypt_name'] = TRUE;

                    $this->load->library('upload', $config);
                    $this->load->library('Multi_upload');

                    $files = $this->multi_upload->go_upload();

					$fotos['nome_crip'] =    $this->multi_upload->data();	
					
                    $data['nome']  = $this->input->post('nome');
					$data['data']  = data_br_to_us($this->input->post('data'));
					$data['descricao']  = $this->input->post('descricao');
                    $data['local']  = $this->input->post('local');
                    $data['endereco']  = $this->input->post('endereco');
					
					
					
                    $this->load->model('administracao/'.$this->nomeModel);

                    $pid = $this->$nomeModel->cadastrar($data); // guardo o pid q eh o id_produto para inserir a foto correspondente ao produto certo

                        if ($pid) {
                            $numero_arquivos = count($_FILES['userfile']['name']) - 1;
                            for ($i = 0; $i < $numero_arquivos; $i++) {

                                $foto[$this->idFoto] = $pid;
                                $foto['nome'] = $fotos['nome_crip'][$i];
								
								
                                $this->$nomeModel->fotocadastra($foto);
                            }

                            $alerta = "<script type='text/javascript'>alert('Inserido com Sucesso');</script>";
                            $this->formcad($alerta);
                        } else {
                            echo "Erro ao cadastrar Produto";
                        }
        }
        
             
    }

    function listar($offset=false) {
        
		
		
                $this->load->model('administracao/'.$this->nomeModel);
				$nomevar = $this->dentroDados;
				$nomeModel = $this->nomeModel;
				$data['nomecontroller'] = $this->nomeController;
                $data["registros"] = $this->$nomeModel->listar();
                
				
                
                $this->load->library('pagination');  
                
                $this->load->view('administracao/elementos/html_header',$data);
                $this->load->view('administracao/elementos/menu');
                 
                if($this->$nomeModel->numero_total()>0){
                    $offset = $this->uri->segment(4);

                    $config['base_url'] = base_url() . 'administracao/'.$this->nomeController.'/listar';
                    $config['uri_segment'] = 4;
                    $config['total_rows'] = $this->$nomeModel->numero_total();
                    $config['per_page'] = '10';

                    $this->pagination->initialize($config);

                    $data['paginas'] = $this->pagination->create_links();
                    $data["registros"] = $this->$nomeModel->listar($offset);
                    
                    $this->load->view('administracao/'.$this->nomeController.'/'.$this->nomeLista,$data);
                }else{
                    $data['paginas'] = "";
                    $data["registros"] = "";
                    
                    $this->load->view('administracao/'.$this->nomeController.'/'.$this->nomeLista,$data);
                }
    }

   function alterar($id) {
        
        $data["dados"] = $this->dados_control($id);
        $data['nomecontroller'] = $this->nomeController;
		
		if($this->temFoto){
			$this->db->where($this->idFoto, $id);
			$query = $this->db->get($this->tabelaFoto);
			$data['fotos'] = $query->result();
		
		}
        
		
        $this->load->view('administracao/elementos/html_header', $data);
        $this->load->view('administracao/elementos/menu');
        $this->load->view('administracao/'.$this->nomeController .'/'.$this->nomeAltera, $data);
        $this->load->view('administracao/elementos/html_footer');
    }

    private function dados_control($id) {
		$nomeModel = $this->nomeModel;
        $this->load->model('administracao/'.$this->nomeModel);
        return $this->$nomeModel->listar_dados($id);
    }

    function gravar_alteracao() {
        $nomeModel = $this->nomeModel;
        
        $id = $this->input->post('id');
        
        $jaexiste = false;
        // testa se a foto ja existe
         $numero_arquivos = count($_FILES['userfile']['name']) - 1;
          for ($i = 0; $i < $numero_arquivos; $i++) {
             $filename = 'imgs/' . $_FILES['userfile']['name'][$i];
             if(file_exists($filename)){
                 $jaexiste = true;
             }
         }
        

        $this->load->model('administracao/'.$this->nomeModel);

        if($jaexiste == false){
        $config['upload_path'] = 'imgs'; // server directory
        $config['allowed_types'] = 'gif|jpg|png'; // by extension, will check for whether it is an image
        $config['max_size'] = '0'; // in kb
        $config['max_width'] = '0';
        $config['max_height'] = '0';
		$config['encrypt_name'] = TRUE;
		


        $this->load->library('upload', $config);
        $this->load->library('Multi_upload');

        if ($this->multi_upload->go_upload()) {

            $numero_arquivos = count($_FILES['userfile']['name']) - 1;
			$fotos['nome_crip'] =  $this->multi_upload->data();

            for ($i = 0; $i < $numero_arquivos; $i++) {

                $foto[$this->idFoto] = $this->input->post('id');
                $foto['nome'] = $fotos['nome_crip'][$i];

                $this->load->model('administracao/'.$this->nomeModel);
                $this->$nomeModel->fotocadastra($foto);
            }
        }
        }else{
            echo "<script>alert('Foto ja existe no sistema');</script>";
            redirect("administracao/".$this->nomeController."/alterar/$id","refresh");
        }
        

        $this->load->library('form_validation');
        $validacoes = array(
            array('field' => 'nome', 'label' => 'Nome', 'rules' => 'required|min_length[1]')
			
            
        );
        $this->form_validation->set_rules($validacoes);
        if ($this->form_validation->run() == FALSE) {
            $this->alterar($this->input->post('id'));
        } else {
            $data['id'] = $this->input->post('id');
            $data['nome'] = $this->input->post('nome');
			$data['data']  = data_br_to_us($this->input->post('data'));
			$data['descricao']  = $this->input->post('descricao');
            $data['local']  = $this->input->post('local');
            $data['endereco']  = $this->input->post('endereco');
			
			
            $this->load->model('administracao/'.$this->nomeModel);
            if ($this->$nomeModel->gravar_alteracao($data)) {
                $this->listar();
            } else {
                echo "Erro ao alterar Produto";
            }
        }
    }
//exclui produto junto com foto
    function excluir($id) {
	
		$nomeModel = $this->nomeModel;
		$this->load->model('administracao/'.$this->nomeModel);
		
		if($this->temFoto){
			//busca as fotos da tabela para deletar da pasta
			$this->db->where($this->idFoto, $id);
			$query = $this->db->get($this->tabelaFoto);
			
			$dados['foto'] = $query->result();
			
			if($dados['foto']){
			foreach($dados['foto'] as $foto): // percorre todas as fotos com o id_produto
				unlink('imgs/' . $foto->nome);
			endforeach;
			}
			
		   if (!$this->$nomeModel->fotoexcluir($id)){   // deleta foto do banco
				echo "Erro ao excluir Foto do produto";
			}
		}
        
        if ($this->$nomeModel->excluir($id)) { // deleta arquivo do banco
            
            redirect('administracao/'.$this->nomeController.'/listar/', 'refresh');
        } else {
            echo "erro ao excluir o Produto.";
        }
    }
    
  
    function excluirfoto($id){
        
		$nomeModel = $this->nomeModel;
		$idFoto = $this->idFoto;
		
        $this->db->where('id', $id);
        $query = $this->db->get($this->tabelaFoto);
        $dados['foto'] = $query->row();
        $guardaid = $dados['foto']->$idFoto;
        
        unlink('./imgs/' . $dados['foto']->nome);
        
        $this->load->model('administracao/'.$this->nomeModel);
        $this->$nomeModel->fotounicaexcluir($id);
        
        $this->alterar($guardaid);
        
    }
    
     function busca($offset=false){
        
		$nomeModel = $this->nomeModel;
		
		 $categoria = "";
		 $busca = "";
		 if($_POST) {
		 
			
			
			if($this->input->post('busca')){
				$busca = $this->input->post('busca'); 
				$this->session->set_flashdata('busca',$busca);
			}
		}else{
		
			
			
			$busca = $this->session->flashdata('busca');
			$this->session->set_flashdata('busca',$busca);
		}
        
		 
        /*$pais = $this->input->post('pais'); 
        $busca = $this->input->post('busca');*/ 
         
         
        $this->load->library('pagination');  
        $this->load->model('administracao/'.$this->nomeModel);

        $this->load->view('administracao/elementos/html_header');
        $this->load->view('administracao/elementos/menu');


        if($this->$nomeModel->numero_buscaFiltro($categoria,$busca)>0){
            $offset = $this->uri->segment(4);

            $config['base_url'] = base_url() . 'administracao/'.$this->nomeController.'/busca/';
            $config['uri_segment'] = 4;
            $config['total_rows'] = $this->$nomeModel->numero_buscaFiltro($categoria,$busca);
            $config['per_page'] = '10';

            $this->pagination->initialize($config);

            $dados['paginas'] = $this->pagination->create_links();
            $dados[$this->dentroDados] = $this->$nomeModel->buscaFiltro($categoria,$busca,$offset);

            $this->load->view('administracao/'.$this->nomeLista,$dados);

        }
        else{
                $dados['termo'] = $this->input->post('busca');
                $this->load->view('administracao/nao_encontrado',$dados);
        }
                
                
      $this->load->view('administracao/elementos/html_footer');
                
                
    }
}
?>