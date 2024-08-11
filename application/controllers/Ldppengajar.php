<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ldppengajar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
        $this->load->model('Pengajar_model');
    }

    function index()
    {
        $data['user'] = $this->userrole->getBy();
        $data['pengajar'] = $this->Pengajar_model->get();
        $this->load->view('layout/ldp_header', $data);
        $this->load->view('landing_pages/vw_ldppengajar', $data);
        $this->load->view('layout/ldp_footer');
    }

    public function detail($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengajar'] = $this->Pengajar_model->getById($id);
        $this->load->view('layout/ldp_header', $data);
        $this->load->view("landing_pages/vw_detail_ldppengajar", $data);
        $this->load->view('layout/ldp_footer');
    }
}
