<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model
{
    public $table = 'pendaftaran';
    public $id = 'pendaftaran.id_pendaftar';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->select('p.*, u.nama');
        $this->db->from('pendaftaran p, user u');
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
        $this->db->from('pendaftaran p, user u');
        $this->db->where('p.id = u.id');
        $this->db->where('p.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getSiswa($id)
    {
        $this->db->select('p.*, u.nama');
        $this->db->from('pendaftaran p, user u');
        $this->db->where('p.id = u.id');
        $this->db->where('p.id_pendaftar', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function jumlahPendaftar()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function jumlahLaki()
    {
        $this->db->from('pendaftaran p');
        $this->db->where('p.jenis_kelamin', 'Laki-laki');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function jumlahPerempuan()
    {
        $this->db->from('pendaftaran p');
        $this->db->where('p.jenis_kelamin', 'Perempuan');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function jumlahDiproses()
    {
        $this->db->from('pendaftaran p');
        $this->db->where('p.status', 'DIPROSES');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function jumlahDiterima()
    {
        $this->db->from('pendaftaran p');
        $this->db->where('p.status', 'DITERIMA');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function jumlahDitolak()
    {
        $this->db->from('pendaftaran p');
        $this->db->where('p.status', 'DITOLAK');
        $query = $this->db->get();
        return $query->num_rows();
    }
}
