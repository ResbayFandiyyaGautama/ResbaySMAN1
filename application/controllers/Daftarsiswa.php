<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftarsiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Pendaftaran_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['daftar'] = $this->Pendaftaran_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/vw_daftarsiswa', $data);
        $this->load->view('layout/footer');
    }

    public function hapus($id)
    {
        $this->Pendaftaran_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Siswa Tidak Dapat Dihapus! (Sudah Berelasi)</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Siswa Berhasil Dihapus!</div>');
        }
        redirect('Daftarsiswa');
    }

    public function detail($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['daftarsiswa'] = $this->Pendaftaran_model->getSiswa($id);
        $this->load->view("layout/header", $data);
        $this->load->view("admin/vw_detail_siswa", $data);
        $this->load->view("layout/footer");
    }

    public function status($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['daftar'] = $this->Pendaftaran_model->getSiswa($id);
        $this->form_validation->set_rules('status', 'Status', 'required', ['required' => 'Status Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_konfirmasi_status", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'status' => $this->input->post('status')
            ];
            $this->Pendaftaran_model->update(['id_pendaftar' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Berhasil Ditambahkan!</div>');
            redirect('Daftarsiswa');
        }
    }
}
