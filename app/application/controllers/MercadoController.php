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
		$this->load->model('DireccionModel');
		$this->mercadoService = new MercadoService($this->LocacionModel, $this->MercadoModel, $this->DireccionModel);
	}

	public function create()
	{

		if ($this->input->method() === 'post') {
			$input = json_decode(file_get_contents('php://input'), true);
			$response =  $this->mercadoService->create($input);
			$this->output->set_content_type('application/json')
				->set_status_header(201)
				->set_output(json_encode($response, JSON_UNESCAPED_UNICODE));
		} else {
			$error_response = array('status' => 'error', 'message' => 'Invalid METHOD input');
			echo json_encode($error_response, JSON_UNESCAPED_UNICODE);
		}
	}

	public function updateOrDelete($idMercado)
	{
		$method = $this->input->method();
		$response = array();
		switch ($method) {
			case 'put':
				$response = $this->update($idMercado);
				break;
			case 'delete':
				$response = $this->delete($idMercado);
				break;
			default:
				$response = array('status' => 'error', 'message' => 'Invalid METHOD '.$method.' input');
				break;
		}

		return json_encode($response, JSON_UNESCAPED_UNICODE);;
	}

	private function update($idMercado)
	{

		$input = json_decode(file_get_contents('php://input'), true);
		$response = $this->mercadoService->update($input, $idMercado);
		return $response;
	}

	private function delete($idMercado)
	{
		$response = $this->mercadoService->delete($idMercado);
		return $response;
	}

	public function getAll()
	{
		$response = $this->mercadoService->findAll();
		$this->output->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode($response, JSON_UNESCAPED_UNICODE));
	}
}
