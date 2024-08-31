<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'models/Model.php');
class ArchivoModel extends Model
{

    private $_table = "v3.archivo";
    private $_key = "id_archivo";

    function __construct()
    {
        parent::__construct($this->_table, $this->_key);
    }

    public function findByIdLocacion($idLocacion)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join("v3.locacion_archivo", $this->_table . ".id_locacion = v3.locacion_archivo.id_locacion");
        $this->db->where("v3.locacion_archivo.id_locacion", $idLocacion);
        $query = $this->db->get();

        return $query->result_array();
    }
}
