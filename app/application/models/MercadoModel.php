<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'models/Model.php');
class MercadoModel extends Model
{

    function __construct()
    {
        parent::__construct("v2.mercado","id_mercado");
    }
}
