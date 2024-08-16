<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'models/Model.php');
class DireccionModel extends Model
{

    private $_table = "v3.direccion";
    private $_key = "id_direccion";

    function __construct()
    {
        parent::__construct($this->_table, $this->_key);
    }
}