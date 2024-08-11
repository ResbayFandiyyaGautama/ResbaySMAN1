<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_biaya extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in3();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Biaya_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['biaya'] = $this->Biaya_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('bendahara/vw_detail_biaya', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', ['required' => 'Nama Barang Wajib di Isi']);
        $this->form_validation->set_rules('harga', 'Harga', 'required', ['required' => 'Harga Pembelajaran Wajib di Isi']);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("bendahara/vw_tambah_detailbiaya", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_barang' => $this->input->post('nama_barang'),
                'harga' => $this->input->post('harga'),
            ];
            $this->Biaya_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail Biaya Berhasil Ditambah!</div>');
            redirect('Detail_biaya');
        }
    }

    public function hapus($id)
    {
        $this->Biaya_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Biaya Tidak Dapat Dihapus! (Sudah Berelasi)</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Biaya  Berhasil Dihapus!</div>');
        }
        redirect('Detail_biaya');
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['biaya'] = $this->Biaya_model->getById($id);
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required', ['required' => 'Nama Barang Wajib di Isi']);
        $this->form_validation->set_rules('harga', 'Harga', 'required', ['required' => 'Harga Pembelajaran Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("bendahara/vw_ubah_detailbiaya", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_barang' => $this->input->post('nama_barang'),
                'harga' => $this->input->post('harga'),
            ];
            $id_biaya = $this->input->post('id_biaya');
            $this->Biaya_model->update(['id_biaya' => $id_biaya], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Detail Biaya Berhasil DI Ubah!</div>');
            redirect('Detail_biaya');
        }
    }
}
