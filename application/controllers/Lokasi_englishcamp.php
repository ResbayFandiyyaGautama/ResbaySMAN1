<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi_englishcamp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Lokasi_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lokasi'] = $this->Lokasi_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/vw_lokasi_englishcamp', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_lokasi', 'Titik Lokasi', 'required', ['required' => 'Titik Lokasi Wajib di Isi']);
        $this->form_validation->set_rules('telepon', 'Telepon', 'required', ['required' => 'Telepon Wajib di Isi']);
        $this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email Wajib di Isi']);
        $this->form_validation->set_rules('info_lokasi', 'Info Deskripsi', 'required', ['required' => 'Info Deskripsi Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_tambah_lokasi", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_lokasi' => $this->input->post('nama_lokasi'),
                'telepon' => $this->input->post('telepon'),
                'email' => $this->input->post('email'),
                'info_lokasi' => $this->input->post('info_lokasi'),
            ];
            $this->Lokasi_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kontak dan Lokasi Berhasil Ditambah!</div>');
            redirect('Lokasi_englishcamp');
        }
    }

    public function hapus($id)
    {
        $this->Lokasi_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Kontak dan Lokasi Tidak Dapat Dihapus! (Sudah Berelasi)</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Kontak dan Lokasi Berhasil Dihapus!</div>');
        }
        redirect('Lokasi_englishcamp');
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lokasi'] = $this->Lokasi_model->getById($id);
        $this->form_validation->set_rules('nama_lokasi', 'Titik Lokasi', 'required', ['required' => 'Titik Lokasi Wajib di Isi']);
        $this->form_validation->set_rules('telepon', 'Telepon', 'required', ['required' => 'Telepon Wajib di Isi']);
        $this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email Wajib di Isi']);
        $this->form_validation->set_rules('info_lokasi', 'Info Deskripsi', 'required', ['required' => 'Info Deskripsi Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_ubah_lokasi", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_lokasi' => $this->input->post('nama_lokasi'),
                'telepon' => $this->input->post('telepon'),
                'email' => $this->input->post('email'),
                'info_lokasi' => $this->input->post('info_lokasi'),
            ];
            $id_lokasi = $this->input->post('id_lokasi');
            $this->Lokasi_model->update(['id_lokasi' => $id_lokasi], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kontak dan Lokasi Berhasil DI Ubah!</div>');
            redirect('Lokasi_englishcamp');
        }
    }
}
