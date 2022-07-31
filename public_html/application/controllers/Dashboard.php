<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Dokumen_model');
        $this->load->model('Galeri_model');
        $this->load->model('Pengumuman_model');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
	} 

	function index(){
		$data['galeri'] = $this->Galeri_model->get_5_galeri();
		$data['pengumuman'] = $this->Pengumuman_model->get_5_pengumuman();
		$data['_view'] = 'dashboard';
		$this->load->view('layouts/main',$data);
	}
}
