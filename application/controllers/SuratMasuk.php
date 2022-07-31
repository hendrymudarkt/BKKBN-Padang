<?php
class SuratMasuk extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('SuratMasuk_model');

        if($this->session->userdata('status') != "login" && $this->session->userdata('sebagai') != "admin"){
            redirect('login/index');
        }
    }

    function index(){
        $data['surat_masuk'] = $this->SuratMasuk_model->get_all_surat_masuk();
        
        $data['_view'] = 'surat_masuk/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){
        if(isset($_POST) && count($_POST) > 0){
            $config['upload_path']          = 'lampiran/';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 10000;
            $config['max_width']            = 3000;
            $config['max_height']           = 1688;
     
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('lampiran')){
                echo '<script>alert("Data gagal disimpan");</script>';
                redirect('suratmasuk/index');
            }
            else{
                $file = $this->upload->data();
                $lampiran = $file['file_name'];

                $params = array(
    				'nomor_berikut' => $this->input->post('nomor_berikut'),
                    'pengirim' => $this->input->post('pengirim'),
                    'tanggal' => $this->input->post('tanggal'),
                    'nomor' => $this->input->post('nomor'),
                    'isi' => $this->input->post('isi'),
                    'pertalian_nomor' => $this->input->post('pertalian_nomor'),
                    'email' => $this->input->post('email'),
                    'lampiran' => $lampiran,
                    'status' => 'f'
                );
                
                $surat_masuk_id = $this->SuratMasuk_model->add_surat_masuk($params);
                redirect('suratmasuk/index');
            }
        }
        else{
            $data['_view'] = 'surat_masuk/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    function edit($id_surat_masuk){
        $data['surat_masuk'] = $this->SuratMasuk_model->get_surat_masuk($id_surat_masuk);
        
        if(isset($data['surat_masuk']['id_surat_masuk'])){
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
                        'nomor_berikut' => $this->input->post('nomor_berikut'),
                        'pengirim' => $this->input->post('pengirim'),
                        'tanggal' => $this->input->post('tanggal'),
                        'nomor' => $this->input->post('nomor'),
                        'isi' => $this->input->post('isi'),
                        'pertalian_nomor' => $this->input->post('pertalian_nomor'),
                        'email' => $this->input->post('email')
                    );

                    $this->SuratMasuk_model->update_surat_masuk($id_surat_masuk,$params);            
                    redirect('suratmasuk/index');
                }
                else{
                    $file = $this->upload->data();
                    $lampiran = $file['file_name'];

                    $params = array(
                        'nomor_berikut' => $this->input->post('nomor_berikut'),
                        'pengirim' => $this->input->post('pengirim'),
                        'tanggal' => $this->input->post('tanggal'),
                        'nomor' => $this->input->post('nomor'),
                        'isi' => $this->input->post('isi'),
                        'pertalian_nomor' => $this->input->post('pertalian_nomor'),
                        'email' => $this->input->post('email'),
                        'lampiran' => $lampiran,
                        'status' => 'f'
                    );

                    $this->SuratMasuk_model->update_surat_masuk($id_surat_masuk,$params);            
                    redirect('suratmasuk/index');
                }
            }
            else{
                $data['_view'] = 'surat_masuk/edit';
                $this->load->view('layouts/main',$data);
            }
        }
    } 

    function send_email($id_surat_masuk){
        $data['surat_masuk'] = $this->SuratMasuk_model->get_surat_masuk($id_surat_masuk);
        
        if(isset($data['surat_masuk']['id_surat_masuk'])){
            // Konfigurasi email
            $config = [
                   'mailtype'  => 'html',
                   'charset'   => 'utf-8',
                   'protocol'  => 'smtp',
                   'smtp_host' => 'ssl://smtp.gmail.com',
                   'smtp_user' => 'doe47975@gmail.com',    // Ganti dengan email gmail kamu
                   'smtp_pass' => 'kmzway87aa',      // Password gmail kamu
                   'smtp_port' => 465,
                   'crlf'      => "\r\n",
                   'newline'   => "\r\n"
               ];

            // Load library email dan konfigurasinya
            $this->load->library('email', $config);

            // Email dan nama pengirim
            $this->email->from('doe47975@gmail.com', 'BKKBN Provinsi Sumatera Barat');

            // Email penerima
            $this->email->to($data['surat_masuk']['email']); // Ganti dengan email tujuan kamu

            // Lampiran email, isi dengan url/path file
            $this->email->attach('C:/laragon/www/bkkbn/lampiran/'.$data['surat_masuk']['lampiran']);

            // Subject email
            $this->email->subject('Surat Masuk | BKKBN Provinsi Sumatera Barat');

            // Isi email
            $this->email->message($data['surat_masuk']['isi']);

            // Tampilkan pesan sukses atau error
            if ($this->email->send()) {
                $this->session->set_flashdata('sukses','Email berhasil dikirim');
                redirect('suratmasuk/index');
            } else {
                $this->session->set_flashdata('gagal','Email gagal dikirim');
                redirect('suratmasuk/index');
            }
        }
    } 

    function remove($id_surat_masuk){
        $surat_masuk = $this->SuratMasuk_model->get_surat_masuk($id_surat_masuk);

        if(isset($surat_masuk['id_surat_masuk'])){
            $path = './lampiran/';
            unlink($path.$surat_masuk['lampiran']);

            $this->SuratMasuk_model->delete_surat_masuk($id_surat_masuk);
            redirect('suratmasuk/index');
        }
    }
    
    function confirm($id_surat_masuk){
        $data['surat_masuk'] = $this->SuratMasuk_model->get_surat_masuk($id_surat_masuk);
        
        if(isset($data['surat_masuk']['id_surat_masuk'])){
            $params = array('status' => 't');

            $this->SuratMasuk_model->update_surat_masuk($id_surat_masuk,$params);            
            redirect('suratmasuk/index');
        }
    }
}