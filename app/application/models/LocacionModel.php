<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'models/Model.php');
class LocacionModel extends Model
{

    private $_table = "v3.locacion";
    private $_key = "id_locacion";

    function __construct()
    {
        parent::__construct($this->_table, $this->_key);
    }
}
