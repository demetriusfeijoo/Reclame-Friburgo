<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_controller{

    public function __construct(){

        parent::__construct();

    }

    public function form_cadastro(){

		$this->load->view('header');
		$this->load->view('topo');
		$this->load->view('cadastre_se');
		$this->load->view('footer');	

    }

}