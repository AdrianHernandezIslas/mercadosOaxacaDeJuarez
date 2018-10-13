<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		// aqui se caragan todas la librerias que 
		//vamos a utilizar
		$this->load->helper('url');
		$this->load->model('Modelomercado');
		
	}



	public function index()
	{

		$values['CH'] = $this->Modelomercado->getMercadoZona('CH');
		$values['C'] = $this->Modelomercado->getMercadoZona('C');
		$values['N'] = $this->Modelomercado->getMercadoZona('N');
		$values['S'] = $this->Modelomercado->getMercadoZona('S');
		$values['P'] = $this->Modelomercado->getMercadoZona('P');
		$values['O'] = $this->Modelomercado->getMercadoZona('O');
		$this->load->view('vistaInicio',$values);
	}

	public function admin(){
		$this->load->view('admin/vistaMercados');
	}
}
