<?php 
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('Login_model');

		$this->load->library('encryption');
	}

	function index(){
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));
		$level = $this->security->xss_clean($this->input->post('level'));

		if ($level == "Administrator") {
			$data = $this->Login_model->cek_login($username);
			$passb = $this->encryption->decrypt($data['password']);
			if ($password == $passb && $level == "Administrator") {
				$data_session = array(
					'username' => $username,
					'status' => "login",
					'sebagai' => "admin"
				);
				$this->session->set_userdata($data_session);
				redirect('dashboard');
			}
			else{
				redirect(base_url('login'));
			}
		}
		else if ($level == "Sekretaris") {
			$data = $this->Login_model->cek_login($username);
			$passb = $this->encryption->decrypt($data['password']);
			if ($password == $passb && $level == "Sekretaris") {
				$data_session = array(
					'username' => $username,
					'status' => "login",
					'sebagai' => "sekretaris"
				);
				$this->session->set_userdata($data_session);
				redirect('dashboard/notaris');
			}
			else{
				redirect(base_url('login'));
			}
		}
		else{
			redirect(base_url('login'));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
