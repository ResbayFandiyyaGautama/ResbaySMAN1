<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumentasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dokumentasi_model');
    }

    function index()
    {
        $data['dokumentasi'] = $this->Dokumentasi_model->get();
        $this->load->view('layout/ldp_header');
        $this->load->view('landing_pages/vw_dokumentasi', $data);
        $this->load->view('layout/ldp_footer');
    }
}
