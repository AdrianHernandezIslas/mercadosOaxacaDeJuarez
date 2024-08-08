<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloRecurso extends CI_Model{

	function __construct(){
		parent::__construct();
		// aqui se caragan todas la librerias que 
		//vamos a utilizar
		$this->load->database();
	}

	public function insertRecurso($idMercado,$idLocal,$nombreArchivo,$tipoArchivo,$rutaMiniatura,$rutaMediana,$rutaCompleta,$extension,$peso,$ancho,$alto,$fecha){
		 $result = $this->db->query('INSERT INTO 
                        							recurso(idMercado,idLocal,nombre,tipo,rutaMiniatura,rutaMediana,rutaAbsoluta,extension,peso,medidas,fechaCreacion) 
                        							VALUES (
                        							"'.$idMercado.'",
                        							"'.$idLocal.'",
                        							"'.$nombreArchivo.'",
                        							"'.$tipoArchivo.'",
                        							"'.$rutaMiniatura.'",
                        							"'.$rutaMediana.'",
                        							"'.$rutaCompleta.'",
                        							"'.$extension.'",
                        							"'.$peso.'",
                        							"'.$ancho.'x'.$alto.'",
                        							"'.$fecha.'"
                        							)');
	}
}
