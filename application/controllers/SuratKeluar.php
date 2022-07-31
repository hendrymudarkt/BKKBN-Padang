<?php
class SuratKeluar extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('SuratKeluar_model');
        $this->load->model('SuratMasuk_model');

        if($this->session->userdata('status') != "login" && $this->session->userdata('sebagai') != "admin"){
            redirect('login/index');
        }
    }

    function get_surat(){
        $sd = $this->input->post('nama_pengirim');
        $data = $this->SuratMasuk_model->get_surat_masuk_by_sd($sd);
        echo json_encode($data);
    }

    function index(){
        $data['surat_keluar'] = $this->SuratKeluar_model->get_all_surat_keluar();
        
        $data['_view'] = 'surat_keluar/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){
        $data['surat_masuk'] = $this->SuratMasuk_model->get_all_surat_masuk();

        if(isset($_POST) && count($_POST) > 0){
            $config['upload_path']          = 'lampiran/';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 10000;
            $config['max_width']            = 3000;
            $config['max_height']           = 1688;
     
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('lampiran')){
                echo '<script>alert("Data gagal disimpan");</script>';
                redirect('suratkeluar/index');
            }
            else{
                $file = $this->upload->data();
                $lampiran = $file['file_name'];

                $params = array(
                    'nama_pengirim' => $this->input->post('nama_pengirim'),
                    'tanggal' => $this->input->post('tanggal'),
                    'alamat' => $this->input->post('alamat'),
                    'isi' => $this->input->post('isi'),
                    'pertalian_nomor' => $this->input->post('pertalian_nomor'),
                    'catatan' => $this->input->post('catatan'),
                    'lampiran' => $lampiran
                );
                
                $surat_keluar_id = $this->SuratKeluar_model->add_surat_keluar($params);
                redirect('suratkeluar/index');
            }
        }
        else{
            $data['_view'] = 'surat_keluar/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id_surat_keluar){
        $data['surat_masuk'] = $this->SuratMasuk_model->get_all_surat_masuk();
        $data['surat_keluar'] = $this->SuratKeluar_model->get_surat_keluar($id_surat_keluar);
        
        if(isset($data['surat_keluar']['id_surat_keluar'])){
            if(isset($_POST) && count($_POST) > 0){
                $config['upload_path']          = 'lampiran/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                $config['max_size']             = 10000;
                $config['max_width']            = 3000;
                $config['max_height']           = 1688;
         
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('lampiran')){
                    $file = $this->upload->data();
                    $lampiran = $file['file_name'];

                    $params = array(
                        'nama_pengirim' => $this->input->post('nama_pengirim'),
                        'tanggal' => $this->input->post('tanggal'),
                        'alamat' => $this->input->post('alamat'),
                        'isi' => $this->input->post('isi'),
                        'pertalian_nomor' => $this->input->post('pertalian_nomor'),
                        'catatan' => $this->input->post('catatan')
                    );

                    $this->SuratKeluar_model->update_surat_keluar($id_surat_keluar,$params);            
                    redirect('suratkeluar/index');
                }
                else{
                    $file = $this->upload->data();
                    $lampiran = $file['file_name'];

                    $params = array(
                        'nama_pengirim' => $this->input->post('nama_pengirim'),
                        'tanggal' => $this->input->post('tanggal'),
                        'alamat' => $this->input->post('alamat'),
                        'isi' => $this->input->post('isi'),
                        'pertalian_nomor' => $this->input->post('pertalian_nomor'),
                        'catatan' => $this->input->post('catatan'),
                        'lampiran' => $lampiran
                    );

                    $this->SuratKeluar_model->update_surat_keluar($id_surat_keluar,$params);            
                    redirect('suratkeluar/index');
                }
            }
            else{
                $data['_view'] = 'surat_keluar/edit';
                $this->load->view('layouts/main',$data);
            }
        }
    } 

    function remove($id_surat_keluar){
        $surat_keluar = $this->SuratKeluar_model->get_surat_keluar($id_surat_keluar);

        if(isset($surat_keluar['id_surat_keluar'])){
            $path = './lampiran/';
            unlink($path.$surat_masuk['lampiran']);
            
            $this->SuratKeluar_model->delete_surat_keluar($id_surat_keluar);
            redirect('suratkeluar/index');
        }
    }
    
}