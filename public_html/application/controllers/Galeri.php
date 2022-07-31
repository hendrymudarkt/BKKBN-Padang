<?php
class Galeri extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Galeri_model');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
	}

    function index(){
        $data['galeri'] = $this->Galeri_model->get_all_galeri();
        $data['_view'] = 'galeri/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){
        if(isset($_POST) && count($_POST) > 0){
			$config['upload_path']          = 'gallery/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['overwrite']            = TRUE;
            $config['encrypt_name']         = TRUE;
     
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')){
				$file = $this->upload->data();
				$lampiran = $file['file_name'];
				
				$params = array(
					'judul' => $this->input->post('judul'),
					'file' => $lampiran
				);
				
				$galeri_id = $this->Galeri_model->add_galeri($params);
				$this->session->set_flashdata('msgg', 'Berhasil');
				helper_log("add", $this->session->userdata('nama')." menambahkan galeri ".$this->input->post('judul'));
				redirect('galeri/add');
            }
            else{
				$error =  $this->upload->display_errors(); 
                echo json_encode(array('msgg' => $error, 'success' => false));
			}
        }
        else{            
            if($this->session->userdata('level') == 1 OR $this->session->userdata('level') == 3){
				$data['_view'] = 'galeri/add';
				$this->load->view('layouts/main',$data);
			}else{
				echo "<script>window.alert('Berbahaya..!!!')</script>";
			}
        }
	}

	function edit($id){
        $data['user'] = $this->User_model->get_user($id);

        if(isset($data['user']['id'])){
            if(isset($_POST) && count($_POST) > 0){
                $config['upload_path']          = 'gallery/';
                $config['allowed_types']        = 'jpeg|jpg|png';
                $config['overwrite']            = TRUE;
                $config['encrypt_name']         = TRUE;
        
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file')){
                    $file = $this->upload->data();
                    $lampiran = $file['file_name'];
                    
                    $params = array(
                        'judul' => $this->input->post('judul'),
                        'file' => $lampiran
                    );
                    
                    $galeri_id = $this->Galeri_model->update_galeri($id, $params);
                    $this->session->set_flashdata('msgg', 'Berhasil');
                    helper_log("add", $this->session->userdata('nama')." mengedit galeri ".$this->input->post('judul'));
                    redirect('galeri/index');
                }
                else{
                    $params = array(
                        'judul' => $this->input->post('judul')
                    );
                    
                    $galeri_id = $this->Galeri_model->update_galeri($id, $params);
                    $this->session->set_flashdata('msgg', 'Berhasil');
                    helper_log("add", $this->session->userdata('nama')." mengedit galeri ".$this->input->post('judul'));
                    redirect('galeri/index');
                }
            }
            else{
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
    }

    function remove($id){
        $galeri = $this->Galeri_model->get_galeri($id);

        if(isset($galeri['id'])){
            $path = "./gallery/";
            unlink($path.$galeri['file']);
            $this->Galeri_model->delete_galeri($id);
            redirect('galeri/index');
        }
        else
            show_error('Data Gagal Dihapus');
    }
}
