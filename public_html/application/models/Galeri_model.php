<?php
class Galeri_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_galeri($id){
        return $this->db->get_where('galeri',array('id'=>$id))->row_array();
    }
    
    function get_all_galeri(){
        return $this->db->get('galeri')->result_array();
    }
    
    function add_galeri($params){
        $this->db->insert('galeri',$params);
        return $this->db->insert_id();
    }
    
    function update_galeri($id,$params){
        $this->db->where('id',$id);
        return $this->db->update('galeri',$params);
    }
    
    function delete_galeri($id){
		$this->db->where('id',$id);
        return $this->db->delete('galeri');
    }
    
    function get_5_galeri(){
		$this->db->order_by('id', 'desc');
		$this->db->limit(6);
        return $this->db->get('galeri')->result_array();
    }
}
