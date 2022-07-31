<?php
class DisposisiSurat_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function get_disposisi_surat($id_disposisi_surat){
        return $this->db->get_where('disposisi_surat',array('id_disposisi_surat'=>$id_disposisi_surat))->row_array();
    }
        
    function get_all_disposisi_surat(){
        $this->db->order_by('id_disposisi_surat', 'desc');
        return $this->db->get('disposisi_surat')->result_array();
    }
        
    function add_disposisi_surat($params){
        $this->db->insert('disposisi_surat',$params);
        return $this->db->insert_id();
    }
    
    function update_disposisi_surat($id_disposisi_surat,$params){
        $this->db->where('id_disposisi_surat',$id_disposisi_surat);
        return $this->db->update('disposisi_surat',$params);
    }
    
    function delete_disposisi_surat($id_disposisi_surat){
        return $this->db->delete('disposisi_surat',array('id_disposisi_surat'=>$id_disposisi_surat));
    }
}