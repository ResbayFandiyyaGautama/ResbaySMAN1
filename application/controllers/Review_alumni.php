<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Review_alumni extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Review_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['review'] = $this->Review_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/vw_review_alumni', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_alumni', 'Nama Alumni', 'required', ['required' => 'Nama Alumni Wajib di Isi']);
        $this->form_validation->set_rules('generasi', 'Generasi', 'required', ['required' => 'Generasi Wajib di Isi']);
        $this->form_validation->set_rules('review', 'Review', 'required', ['required' => 'Review Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_tambah_review", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_alumni' => $this->input->post('nama_alumni'),
                'generasi' => $this->input->post('generasi'),
                'review' => $this->input->post('review'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/pengajar';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Review_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Review Alumni Berhasil Ditambah!</div>');
            redirect('Review_alumni');
        }
    }

    public function hapus($id)
    {
        $this->Review_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Review Tidak Dapat Dihapus! (Sudah Berelasi)</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Review Berhasil Dihapus!</div>');
        }
        redirect('Review_alumni');
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['review'] = $this->Review_model->getById($id);
        $this->form_validation->set_rules('nama_alumni', 'Nama Alumni', 'required', ['required' => 'Nama Alumni Wajib di Isi']);
        $this->form_validation->set_rules('generasi', 'Generasi', 'required', ['required' => 'Generasi Wajib di Isi']);
        $this->form_validation->set_rules('review', 'Review', 'required', ['required' => 'Review Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_ubah_review", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_alumni' => $this->input->post('nama_alumni'),
                'generasi' => $this->input->post('generasi'),
                'review' => $this->input->post('review'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/pengajar';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id_review = $this->input->post('id_review');
            $this->Review_model->update(['id_review' => $id_review], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Review Alumni Berhasil DI Ubah!</div>');
            redirect('Review_alumni');
        }
    }
}
