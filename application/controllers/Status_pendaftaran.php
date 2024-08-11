<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status_pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Pendaftaran_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $data['user']['id'];

        $cekStatus = $this->Pendaftaran_model->getUser($id);
        if (($cekStatus['status'] === "DIPROSES")) {
            $this->load->view("layout/header", $data);
            $this->load->view("siswa/vw_belum_konfirmasi", $data);
            $this->load->view("layout/footer");
        } else if (($cekStatus['status'] === "DITERIMA")) {
            $this->load->view("layout/header", $data);
            $this->load->view("siswa/vw_status_diterima", $data);
            $this->load->view("layout/footer");
        } else {
            $this->load->view("layout/header", $data);
            $this->load->view("siswa/vw_status_ditolak", $data);
            $this->load->view("layout/footer");
        }
    }
}
