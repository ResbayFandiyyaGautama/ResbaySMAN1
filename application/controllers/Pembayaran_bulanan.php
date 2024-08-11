<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_bulanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in3();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Pembayaran_bulanan_model');
        $this->load->model('Bulanan_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['bulanan'] = $this->Pembayaran_bulanan_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('bendahara/vw_bayar_bulanan', $data);
        $this->load->view('layout/footer');
    }

    public function hapus($id)
    {
        $this->Pembayaran_bulanan_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Pembayaran Bulanan Tidak Dapat Dihapus! (Sudah Berelasi)</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Pembayaran Bulanan Berhasil Dihapus!</div>');
        }
        redirect('Pembayaran_bulanan');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('id', 'Nama Siswa', 'required', ['required' => 'Nama Siswa Wajib di Isi']);
        $this->form_validation->set_rules('gross_amount', 'Jumlah', 'required', ['required' => 'Jumlah Wajib di Isi']);
        $this->form_validation->set_rules('payment_type', 'Tipe Pembayaran', 'required', ['required' => 'Tipe Pembayaran Wajib di Isi']);
        $this->form_validation->set_rules('transaction_time', 'Waktu Transaksi', 'required', ['required' => 'Waktu Transaksi Wajib di Isi']);
        $this->form_validation->set_rules('status_code', 'Status', 'required', ['required' => 'Status Pembayaran Wajib di Isi']);
        $this->form_validation->set_rules('jenis_pembayaran', 'Status', 'required', ['required' => 'Status Pembayaran Wajib di Isi']);
        $data['biaya'] = $this->Bulanan_model->getTotalBiaya();
        $data['siswa'] = $this->Pembayaran_bulanan_model->getSiswa();

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("bendahara/vw_tambah_bulanan", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'id' => $this->input->post('id'),
                'gross_amount' => $this->input->post('gross_amount'),
                'payment_type' => $this->input->post('payment_type'),
                'transaction_time' => $this->input->post('transaction_time'),
                'status_code' => $this->input->post('status_code'),
                'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
            ];
            $this->Pembayaran_bulanan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pembayaran Baru Berhasil Ditambah!</div>');
            redirect('Pembayaran_bulanan');
        }
    }

    public function edit($id_bayar)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('gross_amount', 'Jumlah', 'required', ['required' => 'Jumlah Wajib di Isi']);
        $this->form_validation->set_rules('payment_type', 'Tipe Pembayaran', 'required', ['required' => 'Tipe Pembayaran Wajib di Isi']);
        $this->form_validation->set_rules('transaction_time', 'Waktu Transaksi', 'required', ['required' => 'Waktu Transaksi Wajib di Isi']);
        $this->form_validation->set_rules('status_code', 'Status', 'required', ['required' => 'Status Pembayaran Wajib di Isi']);
        $this->form_validation->set_rules('jenis_pembayaran', 'Jenis Pembayaran', 'required', ['required' => 'Jenis Pembayaran Wajib di Isi']);
        $data['biaya'] = $this->Bulanan_model->getTotalBiaya();
        $data['siswa'] = $this->Pembayaran_bulanan_model->getUser($id_bayar);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("bendahara/vw_ubah_bulanan", $data);
            $this->load->view("layout/footer");
        } else {
            $id_bayar =  $this->input->post('id_bayar');
            $data = [
                'gross_amount' => $this->input->post('gross_amount'),
                'payment_type' => $this->input->post('payment_type'),
                'transaction_time' => $this->input->post('transaction_time'),
                'status_code' => $this->input->post('status_code'),
                'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
            ];
            $this->Pembayaran_bulanan_model->update(['id_bayar' => $id_bayar], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pembayaran Baru Berhasil Ditambah!</div>');
            redirect('Pembayaran_bulanan');
        }
    }

    function midleexam()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['midle'] = $this->Pembayaran_bulanan_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('bendahara/vw_bayar_midleexam', $data);
        $this->load->view('layout/footer');
    }

    function finalexam()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['final'] = $this->Pembayaran_bulanan_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('bendahara/vw_bayar_finalexam', $data);
        $this->load->view('layout/footer');
    }
}
