<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bulanan_model extends CI_Model
{
    public $table = 'detail_bulanan';
    public $id = 'detail_bulanan.id_bulanan';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->where($this->id, $id);
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

    public function getTotalBiaya()
    {
        $this->db->select('SUM(db.harga) as total_biaya');
        $this->db->from('detail_bulanan db');
        $query = $this->db->get();
        return $query->row()->total_biaya;
    }
}
