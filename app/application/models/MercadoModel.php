<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'models/Model.php');
class MercadoModel extends Model
{

    function __construct()
    {
        parent::__construct("v2.mercado", "id_mercado");
    }

    public function findAll()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join("v2.locacion", $this->table . ".id_locacion = v2.locacion.id_locacion");
        $query = $this->db->get();

        return $query->result_array();
    }
}
