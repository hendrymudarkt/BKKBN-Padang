<?php
class Karyawan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Karyawan_model');

        if($this->session->userdata('status') != "login" && $this->session->userdata('sebagai') != "admin"){
            redirect('login/index');
        }
    } 

    function index(){
        $data['karyawan'] = $this->Karyawan_model->get_all_karyawan();
        
        $data['_view'] = 'karyawan/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){
        if(isset($_POST) && count($_POST) > 0){
            $params = array(
				'nip' => $this->input->post('nip'),
                'nama' => $this->input->post('nama'),
				'npwp' => $this->input->post('npwp'),
                'no_telp' => $this->input->post('no_telp'),
                'jk' => $this->input->post('jk'),
                'alamat' => $this->input->post('alamat'),
                'jabatan' => $this->input->post('jabatan'),
                'golongan' => $this->input->post('golongan')
            );
            
            $karyawan_id = $this->Karyawan_model->add_karyawan($params);
            redirect('karyawan/index');
        }
        else{
            $data['_view'] = 'karyawan/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id){
        $data['karyawan'] = $this->Karyawan_model->get_karyawan($id);
        
        if(isset($data['karyawan']['id'])){
            if(isset($_POST) && count($_POST) > 0){
                $params = array(
					'nip' => $this->input->post('nip'),
                    'nama' => $this->input->post('nama'),
                    'npwp' => $this->input->post('npwp'),
                    'no_telp' => $this->input->post('no_telp'),
                    'jk' => $this->input->post('jk'),
                    'alamat' => $this->input->post('alamat'),
                    'jabatan' => $this->input->post('jabatan'),
                    'golongan' => $this->input->post('golongan')
                );

                $this->Karyawan_model->update_karyawan($id,$params);            
                redirect('karyawan/index');
            }
            else{
                $data['_view'] = 'karyawan/edit';
                $this->load->view('layouts/main',$data);
            }
        }
    } 

    function remove($id){
        $karyawan = $this->Karyawan_model->get_karyawan($id);

        if(isset($karyawan['id'])){
            $this->Karyawan_model->delete_karyawan($id);
            redirect('karyawan/index');
        }
        else
            show_error('The karyawan you are trying to delete does not exist.');
    }
}