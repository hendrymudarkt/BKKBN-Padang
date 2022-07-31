<?php
class SuratKeluar_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_surat_keluar($id_surat_keluar){
        return $this->db->get_where('surat_keluar',array('id_surat_keluar'=>$id_surat_keluar))->row_array();
    }
        
    function get_all_surat_keluar(){
        $this->db->order_by('id_surat_keluar', 'desc');
        return $this->db->get('surat_keluar')->result_array();
    }
        
    function add_surat_keluar($params){
        $this->db->insert('surat_keluar',$params);
        return $this->db->insert_id();
    }
    
    function update_surat_keluar($id_surat_keluar,$params){
        $this->db->where('id_surat_keluar',$id_surat_keluar);
        return $this->db->update('surat_keluar',$params);
    }
    
    function delete_surat_keluar($id_surat_keluar){
        return $this->db->delete('surat_keluar',array('id_surat_keluar'=>$id_surat_keluar));
    }
}