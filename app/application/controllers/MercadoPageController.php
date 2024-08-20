<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'services/MercadoService.php');

class MercadoPageController extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function nuevo()
  {
    $this->load->view('admin/mercado/index.php');
  }

  public function galeria()
  {
    $this->load->view('admin/archivo/index.php');
  }
}
