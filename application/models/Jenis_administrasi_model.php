<?php
class Jenis_administrasi_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_jenis_administrasi($id){
        return $this->db->get_where('jenis_administrasi',array('id'=>$id))->row_array();
    }
        
    function get_all_jenis_administrasi(){
        $this->db->order_by('id', 'desc');
        return $this->db->get('jenis_administrasi')->result_array();
    }
        
    function add_jenis_administrasi($params){
        $this->db->insert('jenis_administrasi',$params);
        return $this->db->insert_id();
    }
    
    function update_jenis_administrasi($id,$params){
        $this->db->where('id',$id);
        return $this->db->update('jenis_administrasi',$params);
    }
    
    function delete_jenis_administrasi($id){
        return $this->db->delete('jenis_administrasi',array('id'=>$id));
    }
}