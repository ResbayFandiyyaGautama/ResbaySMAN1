<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftarsyarat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Persyaratan_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['syarat'] = $this->Persyaratan_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/vw_daftarsyarat', $data);
        $this->load->view('layout/footer');
    }

    public function hapus($id)
    {
        $this->Persyaratan_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Persyaratan Tidak Dapat Dihapus! (Sudah Berelasi)</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Persyaratan Berhasil Dihapus!</div>');
        }
        redirect('Daftarsyarat');
    }

    public function detail($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['syarat'] = $this->Persyaratan_model->getSyarat($id);
        $this->load->view("layout/header", $data);
        $this->load->view("admin/vw_detail_persyaratan", $data);
        $this->load->view("layout/footer");
    }
}
