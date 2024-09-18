<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'models/Model.php');
class LocalModel extends Model
{

    function __construct()
    {
        parent::__construct("v3.local", "id_local");
    }

    public function findAll()
    {
        $this->db->select('loc.clave, loc.eslogan, loc.activo, loc.id_giro, loc.id_locacion, loc.id_mercado, loc.id_local, locac.nombre, locac.historia, locac.telefono, locac.id_locacion, gi.nombre as nombre_giro, locamer.nombre as nombre_mercado, locamer.id_locacion as id_locacion_mercado');
        $this->db->from($this->table . ' AS loc');
        $this->db->join("v3.locacion AS locac", "loc.id_locacion = locac.id_locacion");
        $this->db->join("v3.giro AS gi", "loc.id_giro = gi.id_giro");
        $this->db->join("v3.mercado AS mer", "loc.id_mercado = mer.id_mercado");
        $this->db->join("v3.locacion AS locamer", "mer.id_locacion = locamer.id_locacion");
        $query = $this->db->get();

        return $query->result_array();
    }
}
