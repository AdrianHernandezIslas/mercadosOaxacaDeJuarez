<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ArchivoPageController extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function galeria()
  {
    $this->load->view('admin/archivo/index.php');
  }
}
