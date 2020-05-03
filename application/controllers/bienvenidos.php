<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once "AbstractController.php";

class bienvenidos extends AbstractController {

public function __construct(){
	parent::__construct();
}

public function index(){
	$this->load->view('bienvenidos/index');
}
}