<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info_pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Info_pendaftaran_model');
        $this->load->model('Materi_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pendaftaran'] = $this->Info_pendaftaran_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/vw_info_pendaftaran', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->form_validation->set_rules('tgl_buka', 'Tanggal Buka', 'required', ['required' => 'Tanggal Buka Wajib di Isi']);
        // $this->form_validation->set_rules('tgl_tutup', 'Tanggal Tutup', 'required', ['required' => 'Tanggal Tutup Wajib di Isi']);
        $this->form_validation->set_rules('periode_satu', 'Periode Satu', 'required', ['required' => 'Periode Pertama Wajib di Isi']);
        $this->form_validation->set_rules('periode_dua', 'Periode Dua', 'required', ['required' => 'Periode Kedua Wajib di Isi']);
        $this->form_validation->set_rules('deskripsi_web', 'Deskripsi Website', 'required', ['required' => 'Deskripsi Website Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_tambah_infodaftar", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                // 'tgl_buka' => $this->input->post('tgl_buka'),
                // 'tgl_tutup' => $this->input->post('tgl_tutup'),
                'periode_satu' => $this->input->post('periode_satu'),
                'periode_dua' => $this->input->post('periode_dua'),
                'deskripsi_web' => $this->input->post('deskripsi_web'),
            ];
            $this->Info_pendaftaran_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Info Pendaftaran Berhasil Ditambah!</div>');
            redirect('Info_pendaftaran');
        }
    }

    public function hapus($id)
    {
        $this->Info_pendaftaran_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Info Pendaftaran Tidak Dapat Dihapus! (Sudah Berelasi)</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Info Pendaftaran  Berhasil Dihapus!</div>');
        }
        redirect('Info_pendaftaran');
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pendaftaran'] = $this->Info_pendaftaran_model->getById($id);
        // $this->form_validation->set_rules('tgl_buka', 'Tanggal Buka', 'required', ['required' => 'Tanggal Buka Wajib di Isi']);
        // $this->form_validation->set_rules('tgl_tutup', 'Tanggal Tutup', 'required', ['required' => 'Tanggal Tutup Wajib di Isi']);
        $this->form_validation->set_rules('periode_satu', 'Periode Satu', 'required', ['required' => 'Periode Pertama Wajib di Isi']);
        $this->form_validation->set_rules('periode_dua', 'Periode Dua', 'required', ['required' => 'Periode Kedua Wajib di Isi']);
        $this->form_validation->set_rules('deskripsi_web', 'Deskripsi Website', 'required', ['required' => 'Deskripsi Website Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_ubah_infodaftar", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                // 'tgl_buka' => $this->input->post('tgl_buka'),
                // 'tgl_tutup' => $this->input->post('tgl_tutup'),
                'periode_satu' => $this->input->post('periode_satu'),
                'periode_dua' => $this->input->post('periode_dua'),
                'deskripsi_web' => $this->input->post('deskripsi_web'),
            ];
            $id_info = $this->input->post('id_info');
            $this->Info_pendaftaran_model->update(['id_info' => $id_info], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Info Pendaftaran Berhasil DI Ubah!</div>');
            redirect('Info_pendaftaran');
        }
    }

    function materi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->Materi_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/vw_materi', $data);
        $this->load->view('layout/footer');
    }

    public function tambah_materi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('materi_pembelajaran', 'Materi Pembelajaran', 'required', ['required' => 'Materi Pembelajaran Wajib di Isi']);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_tambah_materi", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'materi_pembelajaran' => $this->input->post('materi_pembelajaran'),
            ];
            $this->Materi_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Materi Pembelajaran Berhasil Ditambah!</div>');
            redirect('Info_pendaftaran/materi');
        }
    }

    public function hapus_materi($id)
    {
        $this->Materi_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Materi Pembelajaran Tidak Dapat Dihapus! (Sudah Berelasi)</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Materi Pembelajaran Berhasil Dihapus!</div>');
        }
        redirect('Info_pendaftaran/materi');
    }

    public function edit_materi($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->Materi_model->getById($id);
        $this->form_validation->set_rules('materi_pembelajaran', 'Materi Pembelajaran', 'required', ['required' => 'Materi pembelajaran Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_ubah_materi", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'materi_pembelajaran' => $this->input->post('materi_pembelajaran'),
            ];
            $id_belajar = $this->input->post('id_belajar');
            $this->Materi_model->update(['id_belajar' => $id_belajar], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Materi Pembelajaran Berhasil DI Ubah!</div>');
            redirect('Info_pendaftaran/materi');
        }
    }
}
