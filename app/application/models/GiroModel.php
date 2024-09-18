<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once(APPPATH . 'models/Model.php');
class GiroModel extends Model
{

    function __construct()
    {
        parent::__construct("v3.giro", "id_giro");
    }

    public function findAll()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();

        return $query->result_array();
    } 
}
