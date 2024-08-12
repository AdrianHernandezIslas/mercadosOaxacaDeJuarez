<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'services/MercadoService.php');

class MercadoController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('MercadoModel');
		$this->load->model('LocacionModel');
		$this->mercadoService = new MercadoService($this->LocacionModel, $this->MercadoModel);
		header('Content-Type: application/json');
	}

	public function create()
	{
		$input = json_decode(file_get_contents('php://input'), true);
		if ($input) {
			$response =  $this->mercadoService->create($input);
			echo json_encode($response, JSON_UNESCAPED_UNICODE);
		} else {
			$error_response = array('status' => 'error', 'message' => 'Invalid JSON input');
			echo json_encode($error_response, JSON_UNESCAPED_UNICODE);
		}
	}
}
