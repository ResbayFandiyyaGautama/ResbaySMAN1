<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ldpprofile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_model');
    }

    function index()
    {
        $data['profil'] = $this->Profil_model->get();
        $this->load->view('layout/ldp_header');
        $this->load->view('landing_pages/vw_profile', $data);
        $this->load->view('layout/ldp_footer');
    }
}
