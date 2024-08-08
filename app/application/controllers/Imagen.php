<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagen extends CI_Controller {

	private $LOCAL_KEY;

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('ModeloImagen');
		$this->LOCAL_KEY = 'r5da3dfd0dssw4hfohu9fdgrv14';
	}

	public function index()
	{
		echo "aqui toy";
	}

	public function eliminarImagen($nombreImg,$idMercado){
		if($this->ModeloImagen->eliminarImg($nombreImg)){
			redirect(base_url().'Mercado/updateMercado/'.$idMercado);
		}else{
			echo "ERROR!!";
		}

	}

	
}
?>