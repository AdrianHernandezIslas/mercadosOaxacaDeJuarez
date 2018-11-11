<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Imagen extends CI_Model {

	function __construct(){
		parent::__construct();
		// aqui se caragan todas la librerias que 
		//vamos a utilizar
		$this->load->database();
	}

	public function index()
	{
		echo "aqui toy";
	}

	public function eliminarImg($nombre){
		$this->db->where('nombre',$nombre);
		$result = false;
 		if($this->db->delete('imagen')){
 		  $result = unlink('assets/recursos/img/mediana/'.$nombre) && unlink('assets/recursos/img/original/'.$nombre);
 		}

 		return $result;
	}
}
?>