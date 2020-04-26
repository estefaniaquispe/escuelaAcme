<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once "AbstractController.php";

class pacientecontroller extends AbstractController {

public function __construct(){
	parent::__construct();
	}
/**
 * 	Lista de Alumno
 */
public function index(){
	
	echo "index alumnos";
  	exit;
  	$this->load->view('alumnos/index');

}

}