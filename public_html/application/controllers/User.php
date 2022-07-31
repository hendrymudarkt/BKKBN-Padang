<?php
class User extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
	} 
	
	function data_user(){
        $data = $this->User_model->get_all_user();
        echo json_encode($data);
    }

    function index(){
        if($this->session->userdata('level') == 1){
            $data['_view'] = 'user/index';
            $this->load->view('layouts/main',$data);
        }else{
            redirect('dashboard');
        }
    }

    function add(){   
        if(isset($_POST) && count($_POST) > 0){   
            $params = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'departemen' => $this->input->post('departemen'),
                'password' => $this->encryption->encrypt($this->input->post('password')),
                'email' => $this->input->post('email'),
                'no_hp' => $this->input->post('no_hp'),
				'level' => $this->input->post('level'),
            );
            
            $user_id = $this->User_model->add_user($params);
            helper_log("add", $this->session->userdata('nama')." menambah ".$this->input->post('nama'));
            // echo json_encode($user_id);
            redirect('user/index');
        }
        // else{            
        //     $data['_view'] = 'user/add';
        //     $this->load->view('layouts/main',$data);
        // }
	}

	function edit($id){
        $data['user'] = $this->User_model->get_user($id);

        if(isset($data['user']['id'])){
            if(isset($_POST) && count($_POST) > 0){   
                $params = array(
                    'nopeg' => $this->input->post('nopeg'),
                    'nama' => $this->input->post('nama'),
                    'username' => $this->input->post('username'),
                    'departemen' => $this->input->post('departemen'),
                    'password' => $this->encryption->encrypt($this->input->post('password')),
                    'email' => $this->input->post('email'),
                    'no_hp' => $this->input->post('no_hp'),
                    'level' => $this->input->post('level'),
                );

                $user_id = $this->User_model->update_user($id,$params);
                helper_log("edit", $this->session->userdata('nama')." merubah password ".$this->input->post('nama'));
                redirect('user/index');
            }
            else{
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
    }
    
    function edit_pass($id){
        $data['user'] = $this->User_model->get_user($id);

        if(isset($data['user']['id'])){
            if(isset($_POST) && count($_POST) > 0){ 
                if ($this->encryption->decrypt($data['user']['password']) == $this->encryption->decrypt($this->input->post('passwordlama'))) {
                    echo "<script>alert('Password lama tidak sesuai'); window.location = ''</script>";
                }else{
                    $params = array(
                        'password' => $this->encryption->encrypt($this->input->post('password'))
                    );
    
                    $user_id = $this->User_model->update_user($id,$params);
                    helper_log("edit", $this->session->userdata('nama')." merubah password ".$this->input->post('nama'));
                    $this->load->view('layouts/main',$data);
                }
            }
            else{
                $data['_view'] = 'user/password';
                $this->load->view('layouts/main',$data);
            }
        }
	}
	
	function get_user(){
        $id = $this->input->get('id');
        $data = $this->User_model->get_user($id);
		echo json_encode($data);
	}

    function remove($id){
        $data = $this->User_model->delete_user($id);
        helper_log("remove", $this->session->userdata('nama')." menghapus ".$this->input->post('nama'));
        // echo json_encode($data);
        redirect('user/index');
    }

    function edit_profil($id){
        $data['user'] = $this->User_model->get_user($id);

        if(isset($data['user']['id'])){
            if(isset($_POST) && count($_POST) > 0){   
                $params = array(
                    'nopeg' => $this->input->post('nopeg'),
                    'nama' => $this->input->post('nama'),
                    'username' => $this->input->post('username'),
                    'password' => $this->encryption->encrypt($this->input->post('password')),
                    'no_hp' => $this->input->post('no_hp')
                );

                $user_id = $this->User_model->update_user($id,$params);
                $this->session->set_flashdata('msgpw', 'Gagal');
                helper_log("edit", $this->session->userdata('nama')." merubah profil ".$this->input->post('nama'));
                redirect('dashboard');
            }
            else{
                $data['_view'] = 'user/edit_profil';
                $this->load->view('layouts/main',$data);
            }
        }
    }
}
