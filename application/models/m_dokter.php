<?php
class M_dokter extends CI_Model{
 function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
//===================================================================================//
function data_dokter($id=""){
    $this->db->select('*');
	$this->db->from('dokter');
	if ($id!=""){
	$this->db->where("id_dokter",$id);
	}
	$this->db->order_by('id_dokter','DESC');
    $query = $this->db->get();
    //die($this->db->last_query());
    return $query->result();   
 }

 function simpan_data($d){
  $this->db->insert('dokter', $d);
 }
 function update_data($d,$id){
  $this->db->where('id_dokter', $id);
  $this->db->update('dokter', $d);
 }
 function hapus_data($id){
  $this->db->where('id_dokter', $id);
  $this->db->delete('dokter');
 }
}