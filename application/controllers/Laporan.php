<?php 
class Laporan extends CI_Controller{
	function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "login"){
            redirect('');
        }
	}

	function rekap(){
        if($this->session->userdata('sebagai') == 'admin'){
            $data['_view'] = 'laporan/rekap';
            $this->load->view('layouts/main',$data);
        }else{
            $data['_view'] = 'laporan/rekap';
            $this->load->view('layouts/main2',$data);
        }
    }

    function masuk(){
        if($this->session->userdata('sebagai') == 'admin'){
            $data['_view'] = 'laporan/masuk';
            $this->load->view('layouts/main',$data);
        }else{
            $data['_view'] = 'laporan/masuk';
            $this->load->view('layouts/main2',$data);
        }
    }

    function keluar(){
        if($this->session->userdata('sebagai') == 'admin'){
            $data['_view'] = 'laporan/keluar';
            $this->load->view('layouts/main',$data);
        }else{
            $data['_view'] = 'laporan/keluar';
            $this->load->view('layouts/main2',$data);
        }
    }
}
