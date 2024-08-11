<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Pengajar_model');
    }

    function index()
    {
        $data['judul'] = "Halaman Admin Siswa Kursus Bahasa Inggris";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengajar'] = $this->Pengajar_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('admin/vw_pengajar', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Pengajar";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_pengajar', 'Nama Pengajar', 'required', ['required' => 'Nama Pengajar Wajib di Isi']);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', ['required' => 'Tanggal Lahir Wajib di Isi']);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin Wajib di Isi']);
        $this->form_validation->set_rules('agama', 'Agama', 'required', ['required' => 'Agama Wajib di Isi']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat Wajib di Isi']);
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required', ['required' => 'Jabatan Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_tambah_pengajar", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_pengajar' => $this->input->post('nama_pengajar'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama' => $this->input->post('agama'),
                'alamat' => $this->input->post('alamat'),
                'jabatan' => $this->input->post('jabatan'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
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
            $this->Pengajar_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pengajar Berhasil Ditambah!</div>');
            redirect('Pengajar');
        }
    }

    public function hapus($id)
    {
        $this->Pengajar_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Pengajar Tidak Dapat Dihapus! (Sudah Berelasi)</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Pengajar Berhasil Dihapus!</div>');
        }
        redirect('Pengajar');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Prodi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengajar'] = $this->Pengajar_model->getById($id);
        $this->form_validation->set_rules('nama_pengajar', 'Nama Pengajar', 'required', ['required' => 'Nama Pengajar Wajib di Isi']);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', ['required' => 'Tanggal Lahir Wajib di Isi']);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin Wajib di Isi']);
        $this->form_validation->set_rules('agama', 'Agama', 'required', ['required' => 'Agama Wajib di Isi']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat Wajib di Isi']);
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required', ['required' => 'Jabatan Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("admin/vw_ubah_pengajar", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama_pengajar' => $this->input->post('nama_pengajar'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama' => $this->input->post('agama'),
                'alamat' => $this->input->post('alamat'),
                'jabatan' => $this->input->post('jabatan'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
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
            $id = $this->input->post('id');
            $this->Pengajar_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pengajar Berhasil DI Ubah!</div>');
            redirect('Pengajar');
        }
    }
}
