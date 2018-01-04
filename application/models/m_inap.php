<?php
class M_inap extends CI_Model{
 function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
//===================================================================================//
function data_inap($id=""){
    $this->db->select('*');
	$this->db->from('rawat_inap');
	$this->db->join( 'pasien', 'rawat_inap.id_pasien = pasien.id_pasien', 'left' );
	$this->db->join( 'ruang', 'rawat_inap.id_ruang = ruang.id_ruang', 'left' );
	$this->db->join( 'dokter', 'pasien.id_dokter = dokter.id_dokter', 'left' );
	if ($id!=""){
	$this->db->where("id_rawatinap",$id);
	}
	$this->db->order_by('id_rawatinap','DESC');
    $query = $this->db->get();
    //die($this->db->last_query());
    //file_put_contents('x:\alpha\_DEBUG.txt',$jenis.'=='.$this->db->last_query());
    return $query->result();   
 }

 function simpan_data($d){
  $this->db->insert('rawat_inap', $d);
 }
 function update_data($d,$id){
  $this->db->where('id_rawatinap', $id);
  $this->db->update('rawat_inap', $d);
 }
 function hapus_data($id){
  $this->db->where('id_rawatinap', $id);
  $this->db->delete('rawat_inap');
 }
}