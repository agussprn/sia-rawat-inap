<?php
class M_pasien extends CI_Model{
 function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
//===================================================================================//
function data_pasien($id=""){
    $this->db->select('*');
	$this->db->from('pasien');
	$this->db->join( 'dokter', 'pasien.id_dokter = dokter.id_dokter', 'left' );
	if ($id!=""){
	$this->db->where("id_pasien",$id);
	}
	$this->db->order_by('id_pasien','DESC');
    $query = $this->db->get();
    //die($this->db->last_query());
    //file_put_contents('x:\alpha\_DEBUG.txt',$jenis.'=='.$this->db->last_query());
    return $query->result();   
 }

 function simpan_data($d){
  $this->db->insert('pasien', $d);
 }
 function update_data($d,$id){
  $this->db->where('id_pasien', $id);
  $this->db->update('pasien', $d);
 }
 function hapus_data($id){
  $this->db->where('id_pasien', $id);
  $this->db->delete('pasien');
 }
}