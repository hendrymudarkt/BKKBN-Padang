<?php
class Jenis_administrasi extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Jenis_administrasi_model');
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
        $data['jenis_administrasi'] = $this->Jenis_administrasi_model->get_all_jenis_administrasi();
        
        $data['_view'] = 'jenis_administrasi/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){
        $data['karyawan'] = $this->Karyawan_model->get_all_karyawan();

        if(isset($_POST) && count($_POST) > 0){
            $params = array(
				'nip' => $this->input->post('nip'),
                'username' => $this->input->post('username'),
				'password' => $this->encryption->encrypt($this->input->post('password')),
                'jabatan' => $this->input->post('jabatan')
            );
            
            $jenis_administrasi_id = $this->Jenis_administrasi_model->add_jenis_administrasi($params);
            redirect('jenis_administrasi/index');
        }
        else{
            $data['_view'] = 'jenis_administrasi/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id){
        $data['karyawan'] = $this->Karyawan_model->get_all_karyawan();
        $data['jenis_administrasi'] = $this->Jenis_administrasi_model->get_jenis_administrasi($id);
        
        if(isset($data['jenis_administrasi']['id'])){
            if(isset($_POST) && count($_POST) > 0){
                $params = array(
					'nip' => $this->input->post('nip'),
                    'username' => $this->input->post('username'),
                    'password' => $this->encryption->encrypt($this->input->post('password')),
                    'jabatan' => $this->input->post('jabatan')
                );

                $this->Jenis_administrasi_model->update_jenis_administrasi($id,$params);            
                redirect('jenis_administrasi/index');
            }
            else{
                $data['_view'] = 'jenis_administrasi/edit';
                $this->load->view('layouts/main',$data);
            }
        }
    } 

    function remove($id){
        $jenis_administrasi = $this->Jenis_administrasi_model->get_jenis_administrasi($id);

        if(isset($jenis_administrasi['id'])){
            $this->Jenis_administrasi_model->delete_jenis_administrasi($id);
            redirect('jenis_administrasi/index');
        }
        else
            show_error('The jenis_administrasi you are trying to delete does not exist.');
    }
}