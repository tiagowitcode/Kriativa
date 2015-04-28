<?php

class Noticias extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('conversor_de_formatos');
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
        
        
		
		
		
        $this->load->view('administracao/elementos/html_header');
        $this->load->view('administracao/elementos/menu');
        $this->load->view('administracao/noticias',$dados);
        $this->load->view('administracao/elementos/html_footer');
    }

    
    function cadastrar() {
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
            array('field' => 'titulo',       'label' => 'Titulo', 'rules' => 'required|min_length[1]')
            
            
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
                    $data['data']  = data_br_to_us($this->input->post('data'));
					$data['titulo']  = $this->input->post('titulo');
					$data['descricao']  = $this->input->post('descricao');
					
                    $this->load->model('administracao/noticias_model');

                    $pid = $this->noticias_model->cadastrar($data); // guardo o pid q eh o id_noticia para inserir a foto correspondente ao noticia certo

                        if ($pid) {
                            $numero_arquivos = count($_FILES['userfile']['name']) - 1;
                            for ($i = 0; $i < $numero_arquivos; $i++) {

                                $foto['id_noticia'] = $pid;
                                $foto['nome'] = $fotos['nome_crip'][$i];


                                $this->load->model('administracao/noticias_model');
                                $this->noticias_model->fotocadastra($foto);
                            }

                            $alerta = "<script type='text/javascript'>alert('Inserido com Sucesso');</script>";
                            $this->formcad($alerta);
                        } else {
                            echo "Erro ao cadastrar noticia";
                        }// fechado


                        //$data = array('upload_data' => $files);
                       // $this->load->view('administracao/noticias', $data);
                       //  $this->load->view('administracao/noticias');

                        
            // ACABA TIAGO TESTE
        }
        
             
    }

    function listar($offset=false) {
        
                $this->load->model('administracao/noticias_model');
                $data['noticias'] = $this->noticias_model->listar();
                
                
                $this->load->library('pagination');  
                
                $this->load->view('administracao/elementos/html_header',$data);
                $this->load->view('administracao/elementos/menu');
                 
                if($this->noticias_model->numero_noticias()>0){
                    $offset = $this->uri->segment(4);

                    $config['base_url'] = base_url() . 'administracao/noticias/listar';
                    $config['uri_segment'] = 4;
                    $config['total_rows'] = $this->noticias_model->numero_noticias();
                    $config['per_page'] = '10';

                    $this->pagination->initialize($config);

                    $data['paginas'] = $this->pagination->create_links();
                    $data['noticias'] = $this->noticias_model->listar($offset);
                    
                    $this->load->view('administracao/listanoticias',$data);
                }else{
                    $data['paginas'] = "";
                    $data['noticias'] = "";
                    
                    $this->load->view('administracao/listanoticias',$data);
                }
    }

   function alterar($id) {
        
        $data['dados_noticia'] = $this->dados_noticia($id);
        
        $this->db->where('id_noticia', $id);
        $query = $this->db->get('fotos_noticia');
        $data['fotos'] = $query->result();
        
        
        $this->load->view('administracao/elementos/html_header', $data);
        $this->load->view('administracao/elementos/menu');
        $this->load->view('administracao/alterar_noticia', $data);
        $this->load->view('administracao/elementos/html_footer');
    }

    private function dados_noticia($id) {
        $this->load->model('administracao/noticias_model');
        return $this->noticias_model->listar_dados_noticia($id);
    }

    function gravar_alteracao() {
        
        
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
        

        $this->load->model('administracao/noticias_model');

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

                $foto['id_noticia'] = $this->input->post('id');
                $foto['nome'] = $fotos['nome_crip'][$i];

                $this->load->model('administracao/noticias_model');
                $this->noticias_model->fotocadastra($foto);
            }
        }
        }else{
            echo "<script>alert('Foto ja existe no sistema');</script>";
            redirect("administracao/noticias/alterar/$id","refresh");
        }
        

        $this->load->library('form_validation');
        $validacoes = array(
            array('field' => 'titulo', 'label' => 'Titulo', 'rules' => 'required|min_length[1]')
            
            
        );
        $this->form_validation->set_rules($validacoes);
        if ($this->form_validation->run() == FALSE) {
            $this->alterar($this->input->post('id'));
        } else {
            $data['id'] = $this->input->post('id');
            $data['data']  = data_br_to_us($this->input->post('data'));
			$data['titulo']  = $this->input->post('titulo');
			$data['descricao']  = $this->input->post('descricao');
					
            
            $this->load->model('administracao/noticias_model');
            if ($this->noticias_model->gravar_alteracao($data)) {
                $this->listar();
            } else {
                echo "Erro ao alterar noticia";
            }
        }
    }
//exclui noticia junto com foto
    function excluir($id) {
        //busca as fotos da tabela para deletar da pasta
        $this->db->where('id_noticia', $id);
        $query = $this->db->get('fotos_noticia');
        
        $dados['foto'] = $query->result();
        
        if($dados['foto']){
        foreach($dados['foto'] as $foto): // percorre todas as fotos com o id_noticia
            unlink('imgs/' . $foto->nome);
        endforeach;
        }
        
       
        $this->load->model('administracao/noticias_model');
        
        if (!$this->noticias_model->fotoexcluir($id)){   // deleta foto do banco
            echo "Erro ao excluir Foto do noticia";
        }
        
        if ($this->noticias_model->excluir($id)) { // deleta arquivo do banco
            
            redirect('administracao/noticias/listar/', 'refresh');
        } else {
            echo "erro ao excluir o noticia.";
        }
    }
    
    
    // funcao criada para deletar a foto na pagina de alteraçao
    // recebe id do noticia 
    //recebe id da foto
    function excluirfoto($id){
        
        $this->db->where('id', $id);
        $query = $this->db->get('fotos_noticia');
        $dados['foto'] = $query->row();
        $guardaid = $dados['foto']->id_noticia;
        
        unlink('./imgs/' . $dados['foto']->nome);
        
        $this->load->model('administracao/noticias_model');
        $this->noticias_model->fotounicaexcluir($id);
        
        $this->alterar($guardaid);
        
    }
    
     function busca($offset=false){
        
         
		 
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
        $this->load->model('administracao/noticias_model');

        $this->load->view('administracao/elementos/html_header');
        $this->load->view('administracao/elementos/menu');


        if($this->noticias_model->numero_buscaFiltro($busca)>0){
            $offset = $this->uri->segment(4);

            $config['base_url'] = base_url() . 'administracao/noticias/busca/';
            $config['uri_segment'] = 4;
            $config['total_rows'] = $this->noticias_model->numero_buscaFiltro($busca);
            $config['per_page'] = '10';

            $this->pagination->initialize($config);

            $dados['paginas'] = $this->pagination->create_links();
            $dados['noticias'] = $this->noticias_model->buscaFiltro($busca,$offset);

            $this->load->view('administracao/listanoticias',$dados);

        }
        else{
                $dados['termo'] = $this->input->post('busca');
                $this->load->view('administracao/nao_encontrado',$dados);
        }
                
                
      $this->load->view('administracao/elementos/html_footer');
                
                
    }
    
    

}

?>
