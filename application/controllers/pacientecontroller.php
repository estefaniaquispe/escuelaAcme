<?php if ( ! defined('BASEPATH') ) exit('No direct script access allowed');


require_once "AbstractController.php";

class pacientecontroller extends AbstractController {

public function __construct(){
	parent::__construct();
	}
/**
 * Lista de Alumnos
 * @return [type] [description]
 */

public function index(){
	
	$this->load->model('alumno');
	
	$this->alumno->cargar(1);
	echo $this->alumno->nombre;
	exit;


	
  	$this->load->view('alumnos/index');
}

}