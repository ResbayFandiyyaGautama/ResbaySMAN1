<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persyaratan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Pendaftaran_model');
        $this->load->model('Persyaratan_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $data['user']['id'];
        $cekUser = $this->Pendaftaran_model->getUser($id);
        $cekSyarat = $this->Persyaratan_model->getUser($id);
        if (empty($cekUser['asal_sekolah'])) {
            $this->load->view("layout/header", $data);
            $this->load->view("siswa/vw_belum_daftar", $data);
            $this->load->view("layout/footer");
        } else if (empty($cekSyarat['kartu_pelajar'])) {
            $this->load->view("layout/header", $data);
            $this->load->view("siswa/vw_tambah_persyaratan", $data);
            $this->load->view("layout/footer");
        } else {
            $daftar = $this->Persyaratan_model->getUser($id);
            $data['syarat'] = $daftar;
            $this->load->view("layout/header", $data);
            $this->load->view("siswa/vw_tampil_syarat", $data);
            $this->load->view("layout/footer");
        }
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $files = ['surat_izin_sekolah', 'surat_pernyataan', 'surat_kesehatan', 'kartu_pelajar', 'kartu_keluarga', 'pas_foto'];
        $uploaded_files = [];

        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config['max_size'] = '2048';
        $config['upload_path'] = './assets/images/persyaratan';
        $this->load->library('upload', $config);
        $id = $data['user']['id'];

        foreach ($files as $file) {
            if (!empty($_FILES[$file]['name'])) {
                $config['file_name'] = time() . '_' . $_FILES[$file]['name'];
                $this->upload->initialize($config);

                if ($this->upload->do_upload($file)) {
                    $uploaded_files[$file] = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }
        }

        $data = [];
        foreach ($uploaded_files as $key => $value) {
            $data[$key] = $value;
        }

        if (!empty($data)) {
            $this->Persyaratan_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Persyaratan berhasil diunggah!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Ada salah satu file yang belum diunggah!</div>');
        }
        redirect('Persyaratan');
    }
}
