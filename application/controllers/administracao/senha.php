<?php

class senha extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        
        if (!$this->session->userdata('loggedin')) {
            redirect(base_url() . 'administracao/home', 'refresh');
        }
    }

    function index() {
        $this->formcad();
        
    }
    
    function formcad($erro = "") {
        $dados['erro'] = $erro;
        $this->load->view('administracao/elementos/html_header');
        $this->load->view('administracao/elementos/menu');
        $this->load->view('administracao/senha',$dados);
        $this->load->view('administracao/elementos/html_footer');
    }

    function cadastrar() {
        
         $this->session->set_flashdata('usuariotal',$this->input->post('username'));
       $erro = ""; 
       $jaexiste = false;
        
       
        $this->load->library('form_validation');
        $validacoes = array(
            array('field' => 'senhaantiga',  'label' => 'Senha Antiga', 'rules' => 'required|min_length[1]'),
            array('field' => 'senha',    'label' => 'Senha', 'rules' => 'required|min_length[1]'),
            array('field' => 'senhanova1',    'label' => 'Senha Nova', 'rules' => 'required|min_length[1]')
        );
        $this->form_validation->set_rules($validacoes);
        
        if ($this->form_validation->run() == FALSE ) {  // Valida se os campos estao preenchidos e verifica se a foto ja existe
            
            $this->formcad($erro); // se o erro n for da foto chama o metodo sem o parametro de erro
            
        } else {
            
               $this->load->model('administracao/usuarios_model');
                   
               $verifica = $this->usuarios_model->verificasenha($this->input->post('username'));
               
               $senha_antiga = $this->encrypt->decode($verifica['0']->password);

                   if($senha_antiga == $this->input->post('senhaantiga')){
                       $data['id'] = $verifica[0]->id;
                       $data['username'] = $this->input->post('username');
                       $senhanormal = $this->input->post('senha');
                       
                       if($senhanormal ==  $this->input->post('senhanova1')){

                           $data['password'] = $this->encrypt->encode($senhanormal);
                           $this->usuarios_model->alterasenha($data);
                           $msg= "Senha Alterada com Sucesso";
                           $this->formcad($msg);
                       }else{
                           
                          $erro = "Senha Nova digitada incorretamente";
                          $this->formcad($erro);

                       }
                   }else{
                       $erro = "Senha Antiga digitada incorretamente";
                       $this->formcad($erro);
                   }

             }
        }
}

?>