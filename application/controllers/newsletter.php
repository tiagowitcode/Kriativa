<?php

class Newsletter extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

		
    }
	function cadastra1(){
	
		//$dados['nome'] = $this->input->post("nome");
		$dados['email'] = $this->input->post("email");
		
		$this->db->where("email",$dados['email']);
		$existe = $this->db->get("newsletter")->result();
		
		if(!$existe){
			$this->db->insert("newsletter",$dados);
			echo "E-mail cadastrado com sucesso.";
		}else{
			echo "Este email já existe em nosso sistema.";
		}
		
		
	
	}
	
	function remove(){
	
		
		$email  = $this->input->post("email");
		$this->db->where("email",$email);
		$this->db->delete("newsletter");
	
	}

}

?>