<?php
class Bidang extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Bidang_model');
        $this->load->model('Karyawan_model');

        if($this->session->userdata('status') != "login" && $this->session->userdata('sebagai') != "admin"){
            redirect('login/index');
        }
    }

    function get_karyawan(){
        $nip = $this->input->post('nip');
        $data = $this->Karyawan_model->get_karyawan_by_nip($nip);
        echo json_encode($data);
    }

    function index(){
        $data['bidang'] = $this->Bidang_model->get_all_bidang();
        
        $data['_view'] = 'bidang/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){
        $data['karyawan'] = $this->Karyawan_model->get_all_karyawan();

        if(isset($_POST) && count($_POST) > 0){
            $params = array(
				'nip' => $this->input->post('nip'),
                'nama_pegawai' => $this->input->post('nama'),
                'golongan' => $this->input->post('golongan'),
                'jabatan' => $this->input->post('jabatan')
            );
            
            $bidang_id = $this->Bidang_model->add_bidang($params);
            redirect('bidang/index');
        }
        else{
            $data['_view'] = 'bidang/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id){
        $data['karyawan'] = $this->Karyawan_model->get_all_karyawan();
        $data['bidang'] = $this->Bidang_model->get_bidang($id);
        
        if(isset($data['bidang']['id'])){
            if(isset($_POST) && count($_POST) > 0){
                $params = array(
					'nip' => $this->input->post('nip'),
                    'nama_pegawai' => $this->input->post('nama'),
                    'golongan' => $this->input->post('golongan'),
                    'jabatan' => $this->input->post('jabatan')
                );

                $this->Bidang_model->update_bidang($id,$params);            
                redirect('bidang/index');
            }
            else{
                $data['_view'] = 'bidang/edit';
                $this->load->view('layouts/main',$data);
            }
        }
    } 

    function remove($id){
        $bidang = $this->Bidang_model->get_bidang($id);

        if(isset($bidang['id'])){
            $this->Bidang_model->delete_bidang($id);
            redirect('bidang/index');
        }
        else
            show_error('The bidang you are trying to delete does not exist.');
    }
}