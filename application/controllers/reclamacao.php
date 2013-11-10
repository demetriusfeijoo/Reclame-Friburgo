<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reclamacao extends CI_controller{

    public function __construct(){

        parent::__construct();

    }

    public function mostrar_reclamacao( $slug ){

    	$slug = addslashes($slug);

    	if( empty($slug) )
    		show_404();

		$this->load->view('header');
		$this->load->view('topo');
		$this->load->view('reclamacao');
		$this->load->view('footer');		

    }

    public function nova_reclamacao(){

		$this->load->view('header');
		$this->load->view('topo');
		$this->load->view('nova_reclamacao');
		$this->load->view('footer');	

    }

}