<?php
class M_bayar extends CI_Model{
 function __construct()
     {
         // Call the Model constructor
         parent::__construct();
     }
     
//===================================================================================//
function data_bayar($id=""){
    $this->db->select('*');
	$this->db->from('bayar');
	$this->db->join( 'rawat_inap', 'bayar.id_rawatinap = rawat_inap.id_rawatinap', 'left' );
	$this->db->join( 'pasien', 'rawat_inap.id_pasien = pasien.id_pasien', 'left' );
	$this->db->join( 'ruang', 'rawat_inap.id_ruang = ruang.id_ruang', 'left' );
	$this->db->join( 'dokter', 'pasien.id_dokter = dokter.id_dokter', 'left' );
	if ($id!=""){
	$this->db->where("id_bayar",$id);
	}
	$this->db->order_by('id_bayar','DESC');
    $query = $this->db->get();
    //die($this->db->last_query());
    //file_put_contents('x:\alpha\_DEBUG.txt',$jenis.'=='.$this->db->last_query());
    return $query->result();   
 }

 function simpan_data($d){
  $this->db->insert('bayar', $d);
 }
 function update_data($d,$id){
  $this->db->where('id_bayar', $id);
  $this->db->update('bayar', $d);
 }
 function hapus_data($id){
  $this->db->where('id_bayar', $id);
  $this->db->delete('bayar');
 }
}