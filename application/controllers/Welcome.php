<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Info_pendaftaran_model');
		$this->load->model('Materi_model');
		$this->load->model('Review_model');
		$this->load->model('Media_model');
		$this->load->model('Tanggal_model');
	}

	function index()
	{
		$data['pendaftaran'] = $this->Info_pendaftaran_model->get();
		$data['materi'] = $this->Materi_model->get();
		$data['review'] = $this->Review_model->get();
		$data['media'] = $this->Media_model->get();
		$data['tgl'] = $this->Tanggal_model->get();
		$this->load->view('layout/ldp_header');
		$this->load->view('landing_pages/vw_main', $data);
		$this->load->view('layout/ldp_footer');
	}
}
