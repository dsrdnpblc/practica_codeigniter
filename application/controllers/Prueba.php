<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('prueba/bienvenido');
	}
}