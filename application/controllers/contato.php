<?php

class Contato extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
		
		$dados['title'] = "Kriativa - Contato";
		
		$dados['meta'] = "<meta name='description' content='' />";
		$dados['enviou'] = false;

		
		
		$this->load->view('elementos/html_header',$dados);
        $this->load->view('contato',$dados);
        $this->load->view('elementos/html_footer',$dados);

    }

	
	function mapa(){
	
		$this->load->view('mapa');
	
	}
    function enviar(){
	
				$dados['meta'] = "";
		
				$data['nome']     = $this->input->post('nome');
				$data['email']    = $this->input->post('email');
			    $mensagem         = $this->input->post('mensagem');
				
				$this->load->library('email');
				$this->email->from("contato@floriculturakriativa.com.br","Kriativa");
				$this->email->to('contato@floriculturakriativa.com.br');
				$this->email->subject('Contato encaminhado pelo Website');
				$this->email->message("Nome: " . $data['nome'] . "\n\n Email: " . $data['email'] . "\n\n Mensagem: " .$mensagem);
				
				$this->email->send();
				
				
				$dados['title'] = "Ana Camila - Contato";
		
				$dados['meta'] = "<meta name='description' content='' />";
				$dados['enviou'] = true;

				
				
				$this->load->view('elementos/html_header',$dados);
		        $this->load->view('contato',$dados);
		        $this->load->view('elementos/html_footer',$dados);
				
			
		}

}

?>