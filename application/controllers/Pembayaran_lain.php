<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_lain extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Pendaftaran_model');
        $params = array('server_key' => 'SB-Mid-server-e81WrNh1I6Tjom-SrqeK-4ua', 'production' => false);
        $this->load->library('midtrans');
        $this->midtrans->config($params);
        $this->load->helper('url');
        $this->load->model('Pembayaran_model');
        $this->load->model('Bulanan_model');
        $this->load->model('Pembayaran_bulanan_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $data['user']['id'];

        $data['bayar'] = $this->Pembayaran_bulanan_model->get($id);
        $data['bulanan'] = $this->Bulanan_model->getTotalBiaya();

        $cekStatus = $this->Pendaftaran_model->getUser($id);
        if (($cekStatus['status'] === "DITERIMA")) {
            $this->load->view("layout/header", $data);
            $this->load->view("siswa/vw_bisa_bayar_lain", $data);
            $this->load->view("layout/footer");
        } else {
            $this->load->view("layout/header", $data);
            $this->load->view("siswa/vw_belum_bayar_lain", $data);
            $this->load->view("layout/footer");
        }
    }

    public function token()
    {

        $nama_siswa = $this->input->post('nama_siswa');
        $jmlbayar = $this->input->post('jmlbayar');

        // Required
        $transaction_details = array(
            'order_id' => rand(),
            'gross_amount' => $jmlbayar, // no decimal allowed for creditcard
        );

        // Optional
        $item1_details = array(
            'id' => 'a1',
            'price' => $jmlbayar,
            'quantity' => 1,
            'name' => "Pembayaran Uang Pendaftaran"
        );

        $item_details = array($item1_details);

        $customer_details = array(
            'first_name'    => $nama_siswa,
        );

        $credit_card['secure'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O", $time),
            'unit' => 'day',
            'duration'  => 1
        );

        $transaction_data = array(
            'transaction_details' => $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

        error_log(json_encode($transaction_data));
        $snapToken = $this->midtrans->getSnapToken($transaction_data);
        error_log($snapToken);
        echo $snapToken;
    }

    public function bulanan()
    {
        $result = json_decode($this->input->post('result_data'), true);

        $jmlbayar = $this->input->post('jmlbayar');
        $jenis_pembayaran = $this->input->post('jenis_pembayaran');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $data['user']['id'];

        $values = [
            'order_id' => $result['order_id'],
            'gross_amount' => $jmlbayar,
            'payment_type' => $result['payment_type'],
            'transaction_time' => $result['transaction_time'],
            'bank' => $result['va_numbers'][0]["bank"],
            'va_number' => $result['va_numbers'][0]["va_number"],
            'pdf_url' => $result['pdf_url'],
            'status_code' => $result['status_code'],
            'id' => $id,
            'jenis_pembayaran' => $jenis_pembayaran
        ];
        $update = [
            'order_id' => $result['order_id'],
            'payment_type' => $result['payment_type'],
            'transaction_time' => $result['transaction_time'],
            'bank' => $result['va_numbers'][0]["bank"],
            'va_number' => $result['va_numbers'][0]["va_number"],
            'pdf_url' => $result['pdf_url'],
            'status_code' => $result['status_code'],
            'id' => $id
        ];
        if (empty($result['payment_type'])) {
            $simpan = $this->Pembayaran_bulanan_model->insert($values);
        } else {
            $last_id = $this->Pembayaran_bulanan_model->lastId();
            $simpan = $this->Pembayaran_bulanan_model->update(['id_bayar' => $last_id], $update);
        }

        if ($simpan) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Gagal Ditambah!</div>');
        }
        redirect('Pembayaran_lain');
    }
}
