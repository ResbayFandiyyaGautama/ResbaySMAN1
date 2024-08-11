<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persyaratan_model extends CI_Model
{
    public $table = 'persyaratan';
    public $id = 'persyaratan.id_persyaratan';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->select('p.*, u.nama');
        $this->db->from('persyaratan p, user u');
        $this->db->where('p.id = u.id');
        $this->db->where('u.role', 'User');
        $query = $this->db->get()->result_array();
        return $query;
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
    public function getUser($id)
    {
        $this->db->select('p.*, u.nama');
        $this->db->from('persyaratan p, user u');
        $this->db->where('p.id = u.id');
        $this->db->where('p.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getSyarat($id)
    {
        $this->db->select('p.*, u.nama');
        $this->db->from('persyaratan p, user u');
        $this->db->where('p.id = u.id');
        $this->db->where('p.id_persyaratan', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
}
