<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'models/Model.php');
class MercadoModel extends Model
{

    function __construct()
    {
        parent::__construct("v3.mercado", "id_mercado");
    }

    public function findAll()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join("v3.locacion", $this->table . ".id_locacion = v3.locacion.id_locacion");
        $this->db->join("v3.direccion", $this->table . ".id_direccion = v3.direccion.id_direccion");
        $query = $this->db->get();

        return $query->result_array();
    }
}
