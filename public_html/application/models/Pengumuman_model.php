<?php
class Pengumuman_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_pengumuman($id){
        return $this->db->get_where('pengumuman',array('id'=>$id))->row_array();
    }
    
    function get_all_pengumuman(){
        return $this->db->get('pengumuman')->result_array();
    }
    
    function add_pengumuman($params){
        $this->db->insert('pengumuman',$params);
        return $this->db->insert_id();
    }
    
    function update_pengumuman($id,$params){
        $this->db->where('id',$id);
        return $this->db->update('pengumuman',$params);
    }
    
    function delete_pengumuman($id){
		$this->db->where('id',$id);
        return $this->db->delete('pengumuman');
    }
    
    function get_5_pengumuman(){
		$this->db->order_by('id', 'desc');
		$this->db->limit(5);
        return $this->db->get('pengumuman')->result_array();
    }
}
