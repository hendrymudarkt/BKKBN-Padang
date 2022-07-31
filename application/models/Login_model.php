<?php 
class Login_model extends CI_Model{	
	function cek_login($username){		
		return $this->db->get_where('jenis_administrasi',array('username'=>$username))->row_array();
	}
}
