<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Pengajar_model');
        $this->load->model('Pendaftaran_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengajar'] = $this->Pengajar_model->jumlahPengajar();
        $data['pendaftar'] = $this->Pendaftaran_model->jumlahPendaftar();
        $data['laki'] = $this->Pendaftaran_model->jumlahLaki();
        $data['perempuan'] = $this->Pendaftaran_model->jumlahPerempuan();
        $data['diproses'] = $this->Pendaftaran_model->jumlahDiproses();
        $data['diterima'] = $this->Pendaftaran_model->jumlahDiterima();
        $data['ditolak'] = $this->Pendaftaran_model->jumlahDitolak();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/vw_admin', $data);
        $this->load->view('layout/footer');
    }
}
