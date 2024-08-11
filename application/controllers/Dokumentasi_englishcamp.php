<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumentasi_englishcamp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Dokumentasi_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dokumentasi'] = $this->Dokumentasi_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/vw_dokumentasi_englishcamp', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('judul', 'Judul', 'required', ['required' => 'Judul Dokumentasi Wajib di Isi']);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', ['required' => 'Deskripsi Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_tambah_dokumentasi", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
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
            $this->Dokumentasi_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dokumentasi Siswa Kursus Bahasa Inggris Berhasil Ditambah!</div>');
            redirect('Dokumentasi_englishcamp');
        }
    }

    public function hapus($id)
    {
        $this->Dokumentasi_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Dokumentasi Tidak Dapat Dihapus! (Sudah Berelasi)</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Dokumentasi Berhasil Dihapus!</div>');
        }
        redirect('Dokumentasi_englishcamp');
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dokumentasi'] = $this->Dokumentasi_model->getById($id);
        $this->form_validation->set_rules('judul', 'Judul', 'required', ['required' => 'Judul Dokumentasi Wajib di Isi']);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', ['required' => 'Deskripsi Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_ubah_dokumentasi", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
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
            $id_dokumentasi = $this->input->post('id_dokumentasi');
            $this->Dokumentasi_model->update(['id_dokumentasi' => $id_dokumentasi], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dokumentasi Siswa Kursus Bahasa Inggris Berhasil DI Ubah!</div>');
            redirect('Dokumentasi_englishcamp');
        }
    }
}
