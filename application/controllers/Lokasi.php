<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lokasi_model');
    }

    function index()
    {
        $data['lokasi'] = $this->Lokasi_model->get();
        $this->load->view('layout/ldp_header');
        $this->load->view('landing_pages/vw_lokasi', $data);
        $this->load->view('layout/ldp_footer');
    }
}
