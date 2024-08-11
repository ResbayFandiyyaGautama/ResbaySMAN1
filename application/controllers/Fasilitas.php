<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Fasilitas_model');
    }

    function index()
    {
        $data['fasilitas'] = $this->Fasilitas_model->get();
        $this->load->view('layout/ldp_header');
        $this->load->view('landing_pages/vw_fasilitas', $data);
        $this->load->view('layout/ldp_footer');
    }
}
