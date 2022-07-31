<?php
class SuratMasuk_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_surat_masuk($id_surat_masuk){
        return $this->db->get_where('surat_masuk',array('id_surat_masuk'=>$id_surat_masuk))->row_array();
    }
        
    function get_all_surat_masuk(){
        $this->db->order_by('id_surat_masuk', 'desc');
        return $this->db->get('surat_masuk')->result_array();
    }

    function get_surat_masuk_by_sd($sd){
        $hasil = $this->db->query("SELECT * FROM surat_masuk WHERE nomor_berikut = '$sd'");
        return $hasil->result();
    }
        
    function add_surat_masuk($params){
        $this->db->insert('surat_masuk',$params);
        return $this->db->insert_id();
    }
    
    function update_surat_masuk($id_surat_masuk,$params){
        $this->db->where('id_surat_masuk',$id_surat_masuk);
        return $this->db->update('surat_masuk',$params);
    }
    
    function delete_surat_masuk($id_surat_masuk){
        return $this->db->delete('surat_masuk',array('id_surat_masuk'=>$id_surat_masuk));
    }
}