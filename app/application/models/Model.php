<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model extends CI_Model
{

    protected $table;
    protected $key;

    function __construct($table,$key)
    {
        parent::__construct();
        $this->load->database();
        $this->table = $table;
        $this->key = $key;
    }

    public function create($data)
    {
        $query = $this->db->insert($this->table, $data);
        $insert_id = $this->db->insert_id();
        return ($query) ? $this->findById($insert_id) : null;
    }

    public function findById($idMercado = 0)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where($this->key, $idMercado);
        $record = $this->db->get();
        return $record->row();
    }

    public function update($idMercado, $data)
    {
        $this->db->where($this->key, $idMercado);
        return $this->db->update($this->table, $data);
    }

    public function delete($idMercado)
    {
        $this->db->where($this->key, $idMercado);
        return $this->db->delete($this->table);
    }
}