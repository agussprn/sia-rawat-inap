<?php
class M_petugas extends CI_Model{
 function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
//===================================================================================//
function data_petugas($id=""){
    $this->db->select('*');
	$this->db->from('petugas');
	if ($id!=""){
	$this->db->where("id_petugas",$id);
	}
	$this->db->order_by('id_petugas','DESC');
    $query = $this->db->get();
    //die($this->db->last_query());
    return $query->result();   
 }
 
 function cek_data($d){
		$this->db->select('*');
		$this->db->from('petugas');
		$this->db->where("username",$d);
		$query = $this->db->get();
		//die($this->db->last_query());
		return $query->result();   
 }
 function cek_data_edit($d,$id){
		$this->db->select('*');
		$this->db->from('petugas');
		$this->db->where("id_petugas!=",$id);
		$this->db->where("username",$d);
		$query = $this->db->get();
		//die($this->db->last_query());
		return $query->result();   
 }
 
 function simpan_data($d){
  $this->db->insert('petugas', $d);
 }
 function update_data($d,$id){
  $this->db->where('id_petugas', $id);
  $this->db->update('petugas', $d);
 }
 function hapus_data($id){
  $this->db->where('id_petugas', $id);
  $this->db->delete('petugas');
 }
}