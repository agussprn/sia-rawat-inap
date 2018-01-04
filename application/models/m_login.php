<?php
class M_login extends CI_Model{
 function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
//===================================================================================//
function masuk($username,$password){
    $this->db->select('*');
	$this->db->from('petugas');
	$this->db->where("username",$username);
	$this->db->where("password",$password);
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