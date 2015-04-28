<?php

class Produtos extends CI_Controller {

    function __construct() {
        parent::__construct();
       $this->load->helper('conversor_de_formatos');
    }

    function index() {
        
		$dados['title'] = "Kriativa - Produtos";
		
		$dados['meta'] = "<meta name='description' content='' />";
		

        $this->db->order_by("nome","asc");
        $dados["categorias"] = $this->db->get("categoria")->result();


        $this->db->order_by("id","desc");
        $this->db->limit("12");
        $dados["produtos"] = $this->db->get("produtos")->result();
		
		
		$this->load->view('elementos/html_header',$dados);
        $this->load->view('produtos',$dados);
        $this->load->view('elementos/html_footer',$dados);
    }
    function detalhe($id){

       
        
        $dados['meta'] = "<meta name='description' content='' />";
        
        $this->db->order_by("nome","asc");
        $dados["categorias"] = $this->db->get("categoria")->result();
        

        $this->db->where("id",$id);
        $dados["produto"] = $this->db->get("produtos")->result();

        $dados['title'] = $dados['produto'][0]->nome;

        $this->load->view('elementos/html_header',$dados);
        $this->load->view('produtos_interna',$dados);
        $this->load->view('elementos/html_footer',$dados);
    }

    function categoria($id){

        $dados['meta'] = "<meta name='description' content='' />";
        
        $this->db->order_by("nome","asc");
        $dados["categorias"] = $this->db->get("categoria")->result();
        

        $this->db->where("id_categoria",$id);
        $dados["produtos"] = $this->db->get("produtos")->result();

        $this->db->where("id",$id);
        $dados["categorias_titulo"] = $this->db->get("categoria")->result();

        $dados['title'] = $dados['categorias_titulo'][0]->nome;

        $this->load->view('elementos/html_header',$dados);
        $this->load->view('produtos',$dados);
        $this->load->view('elementos/html_footer',$dados);
    }


    

}
?>