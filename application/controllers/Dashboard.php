<?php
class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();

        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
    }

    function index(){
        $data['_view'] = 'dashboard';
        $this->load->view('layouts/main',$data);
    }

    function notaris(){
        $data['_view'] = 'dashboard';
        $this->load->view('layouts/main2',$data);
    }
}
