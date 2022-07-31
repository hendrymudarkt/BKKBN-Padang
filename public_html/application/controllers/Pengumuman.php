<?php
class Pengumuman extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Pengumuman_model');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
	}

    function index(){
        $data['pengumuman'] = $this->Pengumuman_model->get_all_pengumuman();
        $data['_view'] = 'pengumuman/index';
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
				$gambar = $file['file_name'];
				
				$params = array(
					'gambar' => $gambar,
					'judul' => $this->input->post('judul'),
					'isi' => $this->input->post('isi')
				);
				
				$pengumuman_id = $this->Pengumuman_model->add_pengumuman($params);
				$this->session->set_flashdata('msgp', 'Berhasil');
				helper_log("add", $this->session->userdata('nama')." menambahkan pengumuman ".$this->input->post('judul'));
				redirect('pengumuman/index');
            }
            else{
				$error =  $this->upload->display_errors(); 
                echo json_encode(array('msgp' => $error, 'success' => false));
			}
        }
        else{            
            if($this->session->userdata('level') == 1 OR $this->session->userdata('level') == 3){
				$data['_view'] = 'pengumuman/add';
				$this->load->view('layouts/main',$data);
			}else{
				echo "<script>window.alert('Berbahaya..!!!')</script>";
			}
        }
	}

	function edit($id){
        $data['pengumuman'] = $this->Pengumuman_model->get_pengumuman($id);

        if(isset($data['pengumuman']['id'])){
            if(isset($_POST) && count($_POST) > 0){
                $config['upload_path']          = 'gallery/';
                $config['allowed_types']        = 'jpeg|jpg|png';
                $config['overwrite']            = TRUE;
                $config['encrypt_name']         = TRUE;
        
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file')){
                    $file = $this->upload->data();
                    $gambar = $file['file_name'];
                    
                    $params = array(
                        'gambar' => $gambar,
                        'judul' => $this->input->post('judul'),
                        'isi' => $this->input->post('isi')
                    );
                    
                    $pengumuman_id = $this->Pengumuman_model->update_pengumuman($id, $params);
                    $this->session->set_flashdata('msgp', 'Berhasil');
                    helper_log("add", $this->session->userdata('nama')." mengedit pengumuman ".$this->input->post('judul'));
                    redirect('pengumuman/index');
                }
                else{
                    $params = array(
					    'judul' => $this->input->post('judul'),
					    'isi' => $this->input->post('isi')
                    );
                    
                    $pengumuman_id = $this->Pengumuman_model->update_pengumuman($id, $params);
                    $this->session->set_flashdata('msgp', 'Berhasil');
                    helper_log("add", $this->session->userdata('nama')." mengedit pengumuman ".$this->input->post('judul'));
                    redirect('pengumuman/index');
                }
            }
            else{
                $data['_view'] = 'pengumuman/edit';
                $this->load->view('layouts/main',$data);
            }
        }
    }

    function remove($id){
        $pengumuman = $this->Pengumuman_model->get_pengumuman($id);

        if(isset($pengumuman['id'])){
            $path = "./gallery/";
            unlink($path.$pengumuman['file']);
            $this->Pengumuman_model->delete_pengumuman($id);
            redirect('pengumuman/index');
        }
        else
            show_error('Data Gagal Dihapus');
    }
    
    function view($id){
        $data['pengumuman'] = $this->Pengumuman_model->get_pengumuman($id);
        $data['_view'] = 'pengumuman/view';
        $this->load->view('layouts/main',$data);
    }
}
