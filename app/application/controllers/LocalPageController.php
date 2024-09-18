<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'services/LocalService.php');

class LocalPageController extends CI_Controller
{

    function __construct(){ 
      parent::__construct();
      //$this->load->library('LocalController');
    } 

    public function nuevo(){
	    $this->load->view('admin/local/index.php');
	  }
}