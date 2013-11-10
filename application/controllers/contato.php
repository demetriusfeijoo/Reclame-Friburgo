<?php

class Contato extends CI_controller{

    public function __construct(){

        parent::__construct();

    }

    public function index(){

		$this->load->view('header');
		$this->load->view('topo');
		$this->load->view('contato');
		$this->load->view('footer');		

    }

	public function enviar_fale_conosco(){

	}
    
}

?>