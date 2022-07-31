<?php
class Karyawan_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function get_karyawan_by_nip($nip){
        $hasil = $this->db->query("SELECT * FROM karyawan WHERE nip = '$nip'");
        return $hasil->result();
    }
    
    function get_karyawan($id){
        return $this->db->get_where('karyawan',array('id'=>$id))->row_array();
    }
        
    function get_all_karyawan(){
        $this->db->order_by('id', 'desc');
        return $this->db->get('karyawan')->result_array();
    }
        
    function add_karyawan($params){
        $this->db->insert('karyawan',$params);
        return $this->db->insert_id();
    }
    
    function update_karyawan($id,$params){
        $this->db->where('id',$id);
        return $this->db->update('karyawan',$params);
    }
    
    function delete_karyawan($id){
        return $this->db->delete('karyawan',array('id'=>$id));
    }
}