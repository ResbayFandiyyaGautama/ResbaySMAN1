<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_bulanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in3();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Bulanan_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['bulanan'] = $this->Bulanan_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('bendahara/vw_detail_bulanan', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('bulanan', 'Nama Bulan', 'required', ['required' => 'Nama Bulan Wajib di Isi']);
        $this->form_validation->set_rules('harga', 'Harga', 'required', ['required' => 'Harga Pembelajaran Wajib di Isi']);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("bendahara/vw_pembayaran_perbulan", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'bulanan' => $this->input->post('bulanan'),
                'harga' => $this->input->post('harga'),
            ];
            $this->Bulanan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail Biaya Bulanan Berhasil Ditambah!</div>');
            redirect('Detail_bulanan');
        }
    }

    public function hapus($id)
    {
        $this->Bulanan_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Biaya Bulanan Tidak Dapat Dihapus! (Sudah Berelasi)</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Biaya Bulanan Berhasil Dihapus!</div>');
        }
        redirect('Detail_bulanan');
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['perbulan'] = $this->Bulanan_model->getById($id);
        $this->form_validation->set_rules('bulanan', 'Nama Bulan', 'required', ['required' => 'Nama Bulan Wajib di Isi']);
        $this->form_validation->set_rules('harga', 'Harga', 'required', ['required' => 'Harga Pembelajaran Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("bendahara/vw_ubah_detailbulanan", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'bulanan' => $this->input->post('bulanan'),
                'harga' => $this->input->post('harga'),
            ];
            $id_bulanan = $this->input->post('id_bulanan');
            $this->Bulanan_model->update(['id_bulanan' => $id_bulanan], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail Biaya Bulanan Berhasil DI Ubah!</div>');
            redirect('Detail_bulanan');
        }
    }
}
