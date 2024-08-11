<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Pendaftaran_model');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $data['user']['id'];

        $cekUser = $this->Pendaftaran_model->getUser($id);
        if (empty($cekUser['asal_sekolah'])) {
            $this->load->view("layout/header", $data);
            $this->load->view("siswa/vw_daftar_siswa", $data);
            $this->load->view("layout/footer");
        } else {
            $daftar = $this->Pendaftaran_model->getUser($id);
            $data['daftar'] = $daftar;
            $this->load->view("layout/header", $data);
            $this->load->view("siswa/vw_ubah_pendaftaran", $data);
            $this->load->view("layout/footer");
        }
    }

    public function tambah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', ['required' => 'Asal Sekolah Wajib di Isi']);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', ['required' => 'Tempat Lahir Wajib di Isi']);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', ['required' => 'Tanggal Lahir Wajib di Isi']);
        $this->form_validation->set_rules('agama', 'Agama', 'required', ['required' => 'Agama Wajib di Isi']);
        $this->form_validation->set_rules('nisn', 'NISN', 'required', ['required' => 'NISN Wajib di Isi']);
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required', ['required' => 'Nama Ayah Wajib di Isi']);
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required', ['required' => 'Nama Ibu Wajib di Isi']);
        $this->form_validation->set_rules('no_orangtua', 'Nomor Hp Orangtua', 'required', ['required' => 'Nomor Hp Orangtua Wajib di Isi']);
        $this->form_validation->set_rules('alamat_orangtua', 'Alamat Orangtua', 'required', ['required' => 'Alamat Orangtua Wajib di Isi']);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin Wajib di Isi']);
        $this->form_validation->set_rules('alamat_siswa', 'Asal Daerah', 'required', ['required' => 'Asal Daerah Wajib di Isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("siswa/vw_daftar_siswa", $data);
            $this->load->view("layout/footer");
        } else {
            $id = $data['user']['id'];
            $data = [
                'asal_sekolah' => $this->input->post('asal_sekolah'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'agama' => $this->input->post('agama'),
                'nisn' => $this->input->post('nisn'),
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'no_orangtua' => $this->input->post('no_orangtua'),
                'alamat_orangtua' => $this->input->post('alamat_orangtua'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat_siswa' => $this->input->post('alamat_siswa'),
            ];
            $this->Pendaftaran_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pendaftaran Berhasil Dilakukan!</div>');
            redirect('Pendaftaran');
        }
    }
}
