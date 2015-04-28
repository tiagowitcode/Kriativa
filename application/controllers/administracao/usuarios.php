<?php

class Usuarios extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->library('session');

		if($this->session->userdata('nome_usuario') != "admin"){
		
			redirect(base_url() . 'administracao/home', 'refresh');
		
		}
        if(!$this->session->userdata('loggedin')) {
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
        $this->load->view('administracao/usuarios/usuarios', $dados);
        $this->load->view('administracao/elementos/html_footer');
    }

    function cadastrar() {
        $erro = "";

        $this->load->library('form_validation');
        $validacoes = array(
            array('field' => 'username', 'label' => 'username', 'rules' => 'required|min_length[1]'),
            array('field' => 'password', 'label' => 'password', 'rules' => 'required|min_length[1]'),
            array('field' => 'email', 'label' => 'email', 'rules' => 'required|min_length[1]'),
        );
        $this->form_validation->set_rules($validacoes);

        if ($this->form_validation->run() == FALSE) {  // Valida se os campos estao preenchidos e verifica se a foto ja existe
            $this->formcad(); // se o erro n for da foto chama o metodo sem o parametro de erro
        } else {
            $this->load->model('administracao/usuarios_model');
            if ($this->usuarios_model->verificanome($this->input->post('username'))) {
                $erro = "Usuario ja existente no sistema";
                $this->formcad($erro);
            } else {

                $data['username'] = $this->input->post('username');
                $data['password'] = $this->input->post('password');
                $data['email']    = $this->input->post('email');
                $this->load->model('administracao/usuarios_model');

                
                        if($data['password'] == $this->input->post('senha2')){
                            $data['password'] = $this->encrypt->encode($data['password']);
                                if ($this->usuarios_model->cadastrar($data)) {
                                    $this->formcad();
                                } else {
                                    echo "Erro ao cadastrar Usuario";
                                }
                        }else{
                               $erro = "Senhas digitas incorretamente"; 
                               $this->formcad($erro);
                             }
            }
        }

}

function listar($offset=false) {
    
    $this->load->model('administracao/usuarios_model');
    $data['usuarios'] = $this->usuarios_model->listar();

    $this->load->library('pagination');
    
    $this->load->view('administracao/elementos/html_header', $data);
    $this->load->view('administracao/elementos/menu');

    if ($this->usuarios_model->numero_usuario() > 0) {
        $offset = $this->uri->segment(4);

        $config['base_url'] = base_url() . 'administracao/usuarios/listar';
        $config['uri_segment'] = 4;
        $config['total_rows'] = $this->usuarios_model->numero_usuario();
        $config['per_page'] = '10';

        $this->pagination->initialize($config);

        $data['paginas'] = $this->pagination->create_links();
        $data['usuarios'] = $this->usuarios_model->listar($offset);

        $this->load->view('administracao/usuarios/listausuario', $data);
    }else{
        $data['paginas'] = "";
        $this->load->view('administracao/usuarios/listausuario',$data);
                }
}

    function alterar($id) {
        
        $data['dados_usuario'] = $this->dados_usuario($id);
        $this->session->set_userdata('usuariotal',$data['dados_usuario']['0']->username);
        
        
        $this->load->view('administracao/elementos/html_header', $data);
        $this->load->view('administracao/elementos/menu');
        $this->load->view('administracao/usuarios/alterar_usuario', $data);
        $this->load->view('administracao/elementos/html_footer');
    }

    private function dados_usuario($id) {
        $this->load->model('administracao/usuarios_model');
        return $this->usuarios_model->listar_dados_usuario($id);
    }

    function gravar_alteracao() {

        $this->load->model('administracao/usuarios_model');

        $this->load->library('form_validation');
        $validacoes = array(
            array('field' => 'username', 'label' => 'Username', 'rules' => 'required|min_length[1]'),
            array('field' => 'email', 'label' => 'Email', 'rules' => 'required|min_length[5]')
        );
        $this->form_validation->set_rules($validacoes);
        if ($this->form_validation->run() == FALSE) {
            $this->alterar($this->input->post('id'));
        } else {
            $data['id']         = $this->input->post('id');
            $data['username']   = $this->input->post('username');
            $data['email']  = $this->input->post('email');
            
            $this->load->model('administracao/usuarios_model');
            if ($this->usuarios_model->gravar_alteracao($data)) {
                $this->listar();
            } else {
                echo "Erro ao alterar Usuario";
            }
        }
    }

    //exclui produto junto com foto
    function excluir($id) {
       
        $this->load->model('administracao/usuarios_model');

        if ($this->usuarios_model->excluir($id)) { // deleta arquivo do banco
            redirect('administracao/usuarios/listar/', 'refresh');
        } else {
            echo "<script>  alert( 'Erro ao excluir Usuario' ); </script>";
            redirect('administracao/usuarios/listar/', 'refresh');
        }
    }

}

?>