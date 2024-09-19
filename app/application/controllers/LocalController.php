<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'services/LocalService.php');

class LocalController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('LocacionModel');
		$this->load->model('LocalModel');
		$this->load->model('GiroModel');
		$this->load->model('MercadoModel');
		$this->localService = new LocalService($this->LocacionModel, $this->LocalModel, $this->MercadoModel, $this->GiroModel);
	} 

	public function create()
	{
		if ($this->input->method() === 'post') {
			$input = json_decode(file_get_contents('php://input'), true);
			$response =  $this->localService->create($input);
			$this->output->set_content_type('application/json')
				->set_status_header(201)
				->set_output(json_encode($response, JSON_UNESCAPED_UNICODE));
		} else {
			$error_response = array('status' => 'error', 'message' => 'Invalid METHOD input');
			echo json_encode($error_response, JSON_UNESCAPED_UNICODE);
		}
	}

	public function updateOrDelete($idLocal)
	{
		$method = $this->input->method();
		$response = array();
		switch ($method) {
			case 'put':
				$response = $this->update($idLocal);
				break;
			case 'delete':
				$response = $this->delete($idLocal);
				break;
			default:
				$response = array('status' => 'error', 'message' => 'Invalid METHOD '.$method.' input');
				break;
		} 

		return json_encode($response, JSON_UNESCAPED_UNICODE);;
	}

	private function update($idLocal)
	{

		$input = json_decode(file_get_contents('php://input'), true);
		$response = $this->localService->update($input, $idLocal);
		return $response;
	}

	private function delete($idLocal)
	{
		$response = $this->localService->delete($idLocal);
		return $response;
	}

	public function getAll()
	{
		$response = $this->localService->findAll();
		$this->output->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode($response, JSON_UNESCAPED_UNICODE));
	}
}
