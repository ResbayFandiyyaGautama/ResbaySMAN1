<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_englishcamp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Profil_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profil'] = $this->Profil_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/vw_profil_englishcamp', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('sejarah', 'Sejarah', 'required', ['required' => 'Sejarah Wajib di Isi']);
        $this->form_validation->set_rules('visi', 'Visi', 'required', ['required' => 'Visi Wajib di Isi']);
        $this->form_validation->set_rules('misi', 'Misi', 'required', ['required' => 'Misi Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_tambah_profil", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'sejarah' => $this->input->post('sejarah'),
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi'),
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
            $this->Profil_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Profil Berhasil Ditambah!</div>');
            redirect('Profil_englishcamp');
        }
    }

    public function hapus($id)
    {
        $this->Profil_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Profil Tidak Dapat Dihapus! (Sudah Berelasi)</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Profil Berhasil Dihapus!</div>');
        }
        redirect('Profil_englishcamp');
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profil'] = $this->Profil_model->getById($id);
        $this->form_validation->set_rules('sejarah', 'Sejarah', 'required', ['required' => 'Sejarah Wajib di Isi']);
        $this->form_validation->set_rules('visi', 'Visi', 'required', ['required' => 'Visi Wajib di Isi']);
        $this->form_validation->set_rules('misi', 'Misi', 'required', ['required' => 'Misi Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_ubah_profil", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'sejarah' => $this->input->post('sejarah'),
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi'),
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
            $id_profil = $this->input->post('id_profil');
            $this->Profil_model->update(['id_profil' => $id_profil], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil Siswa Kursus Bahasa Inggris Berhasil DI Ubah!</div>');
            redirect('Profil_englishcamp');
        }
    }
}
