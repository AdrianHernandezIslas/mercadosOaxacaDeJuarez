<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'services/GiroService.php');

class GiroController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('GiroModel');
		$this->giroService = new GiroService($this->GiroModel);
	}

	public function getAll()
	{
		$response = $this->giroService->findAll();
		$this->output->set_content_type('application/json')
				->set_status_header(200)
				->set_output(json_encode($response, JSON_UNESCAPED_UNICODE));
	}
}
