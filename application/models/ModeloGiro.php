<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloGiro extends CI_Model {

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

    
}
