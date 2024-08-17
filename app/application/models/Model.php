<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model extends CI_Model
{

    protected $table;
    protected $key;

    function __construct($table, $key)
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

    public function findAll()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function findById($id = 0)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where($this->key, $id);
        $record = $this->db->get();
        return $record->row();
    }

    public function update($data,$id)
    {
        $this->db->where($this->key, $id);
        return $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where($this->key, $id);
        return $this->db->delete($this->table);
    }

    public function intance_db()
    {
        return $this->db;
    }
}
