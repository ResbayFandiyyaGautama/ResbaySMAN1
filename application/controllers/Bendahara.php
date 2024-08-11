<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bendahara extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in3();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Pendaftaran_model');
        $this->load->model('Pembayaran_model');
        $this->load->model('Pembayaran_bulanan_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pendaftar'] = $this->Pendaftaran_model->jumlahPendaftar();
        $data['berhasil'] = $this->Pembayaran_model->jumlahBerhasil();
        $data['diproses'] = $this->Pembayaran_model->jumlahDiproses();
        $data['midle'] = $this->Pembayaran_bulanan_model->jumlahMidle();
        $data['final'] = $this->Pembayaran_bulanan_model->jumlahFinal();
        $data['bulanan'] = $this->Pembayaran_bulanan_model->jumlahBulanan();
        $this->load->view('layout/header', $data);
        $this->load->view('bendahara/vw_bendahara', $data);
        $this->load->view('layout/footer');
    }
}
