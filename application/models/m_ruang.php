<?php
class M_ruang extends CI_Model{
 function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
//===================================================================================//
function data_ruang($id=""){
    $this->db->select('*');
	$this->db->from('ruang');
	if ($id!=""){
	$this->db->where("id_ruang",$id);
	}
	$this->db->order_by('id_ruang','DESC');
    $query = $this->db->get();
    //die($this->db->last_query());
    //file_put_contents('x:\alpha\_DEBUG.txt',$jenis.'=='.$this->db->last_query());
    return $query->result();   
 }

 function simpan_data($d){
  $this->db->insert('ruang', $d);
 }
 function update_data($d,$id){
  $this->db->where('id_ruang', $id);
  $this->db->update('ruang', $d);
 }
 function hapus_data($id){
  $this->db->where('id_ruang', $id);
  $this->db->delete('ruang');
 }
}