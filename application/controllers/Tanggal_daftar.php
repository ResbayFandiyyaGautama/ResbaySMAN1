<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tanggal_daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Tanggal_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tanggal'] = $this->Tanggal_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/vw_tanggal_pendaftaran', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('judul', 'Judul', 'required', ['required' => 'Judul Wajib di Isi']);
        $this->form_validation->set_rules('tgl_buka', 'Tanggal Buka', 'required', ['required' => 'Tanggal Buka Wajib di Isi']);
        $this->form_validation->set_rules('tgl_tutup', 'Tanggal Tutup', 'required', ['required' => 'Tanggal Tutup Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_tambah_tanggal", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'tgl_buka' => $this->input->post('tgl_buka'),
                'tgl_tutup' => $this->input->post('tgl_tutup'),
                'judul' => $this->input->post('judul'),
            ];
            $this->Tanggal_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Info Pendaftaran Berhasil Ditambah!</div>');
            redirect('Tanggal_daftar');
        }
    }

    public function hapus($id)
    {
        $this->Tanggal_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Tanggal Tidak Dapat Dihapus! (Sudah Berelasi)</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Tanggal Berhasil Dihapus!</div>');
        }
        redirect('Tanggal_daftar');
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tgl'] = $this->Tanggal_model->getById($id);
        $this->form_validation->set_rules('tgl_buka', 'Tanggal Buka', 'required', ['required' => 'Tanggal Buka Wajib di Isi']);
        $this->form_validation->set_rules('tgl_tutup', 'Tanggal Tutup', 'required', ['required' => 'Tanggal Tutup Wajib di Isi']);
        $this->form_validation->set_rules('judul', 'Judul', 'required', ['required' => 'Judul Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_ubah_tanggal", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'tgl_buka' => $this->input->post('tgl_buka'),
                'tgl_tutup' => $this->input->post('tgl_tutup'),
                'judul' => $this->input->post('judul'),
            ];
            $id_tanggal = $this->input->post('id_tanggal');
            $this->Tanggal_model->update(['id_tanggal' => $id_tanggal], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tanggal Pendaftaran Berhasil DI Ubah!</div>');
            redirect('Tanggal_daftar');
        }
    }
}
