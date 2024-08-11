<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Media_youtube extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Media_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['media'] = $this->Media_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/vw_media', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('judul', 'Judul', 'required', ['required' => 'Judul Wajib di Isi']);
        $this->form_validation->set_rules('aktor', 'Aktor', 'required', ['required' => 'Aktor Wajib di Isi']);
        $this->form_validation->set_rules('status', 'Status', 'required', ['required' => 'Status Wajib di Isi']);
        $this->form_validation->set_rules('link', 'Link', 'required', ['required' => 'Link Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_tambah_media", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'aktor' => $this->input->post('aktor'),
                'status' => $this->input->post('status'),
                'link' => $this->input->post('link'),
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
            $this->Media_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Media Berhasil Ditambah!</div>');
            redirect('Media_youtube');
        }
    }

    public function hapus($id)
    {
        $this->Media_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Media Tidak Dapat Dihapus! (Sudah Berelasi)</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Media Berhasil Dihapus!</div>');
        }
        redirect('Media_youtube');
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['media'] = $this->Media_model->getById($id);
        $this->form_validation->set_rules('judul', 'Judul', 'required', ['required' => 'Judul Wajib di Isi']);
        $this->form_validation->set_rules('aktor', 'Aktor', 'required', ['required' => 'Aktor Wajib di Isi']);
        $this->form_validation->set_rules('status', 'Status', 'required', ['required' => 'Status Wajib di Isi']);
        $this->form_validation->set_rules('link', 'Link', 'required', ['required' => 'Link Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_ubah_media", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'aktor' => $this->input->post('aktor'),
                'status' => $this->input->post('status'),
                'link' => $this->input->post('link'),
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
            $id_media = $this->input->post('id_media');
            $this->Media_model->update(['id_media' => $id_media], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pengajar Berhasil DI Ubah!</div>');
            redirect('Media_youtube');
        }
    }
}
