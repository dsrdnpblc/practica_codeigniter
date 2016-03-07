<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('practica');
	}

	function index(){
		$this->load->view('prueba/bienvenido');
	}

	function hello(){
		$this->load->view('prueba/headers');
		$this->load->view('prueba/bienvenido');
	}
}