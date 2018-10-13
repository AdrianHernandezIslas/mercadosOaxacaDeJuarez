<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloLocal extends CI_Model {

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
  
	public function getGiros(){
	      $this->db->select("*");
	      $this->db->from("giro");
	      $consulta = $this->db->get();
	      return $consulta->result_array();
	}

	public function insertLocal($idMercado,$nombre,$giro,$eslogan,$logo,$historia,$tags){
		$result = $this->db->query('INSERT INTO local(idMercado,nombre,idGiro,eslogan,logo,historia,tags) VALUES ('.$idMercado.',"'.$nombre.'","'.$giro.'","'.$eslogan.'","'.$logo.'","'.$historia.'","'.$tags.'")');
		return  ($result) ? $this->db->insert_id() : 0 ;
	}

    
}
