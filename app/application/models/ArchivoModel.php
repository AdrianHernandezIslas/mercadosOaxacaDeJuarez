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
        $this->db->join("v3.locacion_archivo", $this->_table . ".id_archivo = v3.locacion_archivo.id_archivo");
        $this->db->where("v3.locacion_archivo.id_locacion", $idLocacion);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function countAllRecords($idLocacion)
    {
        $this->db->from($this->table);
        $this->db->join("v3.locacion_archivo", $this->_table . ".id_archivo = v3.locacion_archivo.id_archivo");
        $this->db->where("v3.locacion_archivo.id_locacion", $idLocacion);
        return $this->db->count_all_results();
    }

    public function getDataPage($idLocacion,$start, $length){
        $this->db->from($this->table);
        $this->db->join("v3.locacion_archivo", $this->_table . ".id_archivo = v3.locacion_archivo.id_archivo");
        $this->db->where("v3.locacion_archivo.id_locacion", $idLocacion);
        $this->db->limit($length, $start);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function countDataFiltered($idLocacion){
        $this->db->from($this->table);
        $this->db->join("v3.locacion_archivo", $this->_table . ".id_archivo = v3.locacion_archivo.id_archivo");
        $this->db->where("v3.locacion_archivo.id_locacion", $idLocacion);
        return $this->db->count_all_results();
    }

    public function findAllPaginationById($id, $start, $length)
    {
        $total_records = $this->countAllRecords($id);
        $data = $this->getDataPage($id,$start, $length);
        //$total_filtered = $this->countDataFiltered($id);
        return [
            'recordsTotal' => $total_records,
            'recordsFiltered' => $total_records,
            'data' => $data
        ];
    }
}
