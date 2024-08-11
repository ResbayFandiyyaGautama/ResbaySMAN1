<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{
    public $table = 'pembayaran';
    public $id = 'pembayaran.id_bayar';
    public function __construct()
    {
        parent::__construct();
    }
    public function get($id = '')
    {
        $this->db->select('p.*, u.nama');
        $this->db->from('pembayaran p, user u');
        $this->db->where('p.id = u.id');
        $this->db->where('u.role', 'User');
        // $this->db->where('p.gross_amount IS NOT NULL');
        if ($id) {
            $this->db->where('p.id', $id);
        }
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
        $this->db->from('pembayaran p, user u');
        $this->db->where('p.id = u.id');
        $this->db->where('p.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getNama($id)
    {
        $this->db->select('p.*, u.nama');
        $this->db->from('pembayaran p, user u');
        $this->db->where('p.id = u.id');
        $this->db->where('p.id_bayar', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getSiswa()
    {
        $this->db->select('p.*, u.nama');
        $this->db->from('pembayaran p, user u');
        $this->db->where('p.id = u.id');
        $this->db->where('u.role', 'User');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function jumlahBerhasil()
    {
        $this->db->from('pembayaran p');
        $this->db->where('p.status_code', 'Berhasil');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function jumlahDiproses()
    {
        $this->db->from('pembayaran p');
        $this->db->group_start();
        $this->db->where('p.status_code !=', 'Berhasil');
        $this->db->or_where('p.status_code IS NULL', NULL, FALSE);
        $this->db->or_where('p.status_code', '');
        $this->db->group_end();
        $query = $this->db->get();
        return $query->num_rows();
    }
}
