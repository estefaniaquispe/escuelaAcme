<?php 

require_once "alumnosdao.php";

 class Alumno extends AlumnosDao
 {
 	
 	const DB_TABLA = "alumno";
 	const DB_TABLA_INDICE = "id";

 	public $id;
 	public $nombre;
 	public $apellido;
 	public $fecha;

 	public function poblarPropiedades(array $datos)
 	{
 		$this->$id = isset($datos['id']) ? trim($datos['id']) : 0;

 		$this->nombre = isset($datos['nombre']) ? trim($datos['nombre']) : null;

 		$this->apellido = isset($datos['apellido']) ? trim($datos['apellido']) : null;

 		$this->fecha = isset($datos['fecha']) ? trim($datos['fecha']) : null;
 		


 	}
 } 
 ?>