<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller{

	public function __construct(){

		parent::__construct();
		
	}

	public function index(){	
		
		$this->load->view('header');
		$this->load->view('topo');
		$this->load->view('inicio');
		$this->load->view('footer');
	
	}

}

?>