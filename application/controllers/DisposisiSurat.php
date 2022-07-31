<?php
class DisposisiSurat extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('DisposisiSurat_model');
        $this->load->model('SuratMasuk_model');

        if($this->session->userdata('status') != "login" && $this->session->userdata('sebagai') != "admin"){
            redirect('login/index');
        }
    } 

    function get_surat(){
        $sd = $this->input->post('surat_dari');
        $data = $this->SuratMasuk_model->get_surat_masuk_by_sd($sd);
        echo json_encode($data);
    }

    function index(){
        $data['disposisi_surat'] = $this->DisposisiSurat_model->get_all_disposisi_surat();
        
        $data['_view'] = 'disposisi_surat/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){
        $data['surat_masuk'] = $this->SuratMasuk_model->get_all_surat_masuk();

        if(isset($_POST) && count($_POST) > 0){
            $params = array(
				'surat_dari' => $this->input->post('surat_dari'),
                'nomor_surat' => $this->input->post('no_surat'),
				'tanggal_surat' => $this->input->post('tanggal_surat'),
				'perihal' => $this->input->post('perihal'),
				'tanggal_terima' => $this->input->post('tanggal_terima'),
				'nomor_agenda' => $this->input->post('nomor_agenda'),
				'sifat' => $this->input->post('sifat'),
                'disposisi_kepala' => implode(",", $this->input->post('disposisi_kepala')),
                'diteruskan_kepada' => implode(",", $this->input->post('diteruskan_kepada'))
            );
            
            $disposisi_surat_id = $this->DisposisiSurat_model->add_disposisi_surat($params);
            redirect('disposisisurat/index');
        }
        else{
            $data['_view'] = 'disposisi_surat/add';
            $this->load->view('layouts/main',$data);
        }
    }

    function edit($id_disposisi_surat){
        $data['surat_masuk'] = $this->SuratMasuk_model->get_all_surat_masuk();
        $data['disposisi_surat'] = $this->DisposisiSurat_model->get_disposisi_surat($id_disposisi_surat);
        
        if(isset($data['disposisi_surat']['id_disposisi_surat'])){
            if(isset($_POST) && count($_POST) > 0){
                $params = array(
                    'surat_dari' => $this->input->post('surat_dari'),
                    'nomor_surat' => $this->input->post('no_surat'),
                    'tanggal_surat' => $this->input->post('tanggal_surat'),
                    'perihal' => $this->input->post('perihal'),
                    'tanggal_terima' => $this->input->post('tanggal_terima'),
                    'nomor_agenda' => $this->input->post('nomor_agenda'),
                    'sifat' => $this->input->post('sifat'),
                    'disposisi_kepala' => implode(",", $this->input->post('disposisi_kepala')),
                    'diteruskan_kepada' => implode(",", $this->input->post('diteruskan_kepada'))
                );

                $this->DisposisiSurat_model->update_disposisi_surat($id_disposisi_surat,$params);            
                redirect('disposisisurat/index');
            }
            else{
                $data['_view'] = 'disposisi_surat/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The disposisi_surat you are trying to edit does not exist.');
    } 

    function remove($id_disposisi_surat){
        $disposisi_surat = $this->DisposisiSurat_model->get_disposisi_surat($id_disposisi_surat);

        if(isset($disposisi_surat['id_disposisi_surat'])){
            $this->DisposisiSurat_model->delete_disposisi_surat($id_disposisi_surat);
            redirect('disposisisurat/index');
        }
        else
            show_error('The disposisi_surat you are trying to delete does not exist.');
    }   
}