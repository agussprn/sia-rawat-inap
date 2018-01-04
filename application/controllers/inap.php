<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inap extends CI_Controller {

function __construct()
     {
         // Call the Model constructor
         parent::__construct();
		 $this->load->helper('url');
		 $this->load->model('M_pasien');
		 $this->load->model('M_ruang');
		 $this->load->model('M_inap');
		 
     }
     
//==============================================================================>
  
	public function index()
	{
		if($this->session->userdata('id_petugas')==''){
	       redirect(base_url().'login');
           exit;
	   }
	   $data['id_petugas']=$this->session->userdata('id_petugas');
	   $data['home']="";
		$data['pasien']="";
		$data['ruang']="";
		$data['dokter']="";
		$data['petugas']="";
		$data['inap']="active";
		$data['bayar']="";
		$data['gantipass']="";
		$query = $this->M_inap->data_inap();
		$data['query'] = $query;
		
		$this->template->set($data);
		$this->template->set_layout('theme')->build('inap');
		
	}
	
	
	function baru($simpan="tidak"){
	$data['home']="";
	$data['ruang']="";
	$data['pasien']="";
	$data['dokter']="";
	$data['petugas']="";
	$data['inap']="active";
	$data['bayar']="";
	$data['gantipass']="";
	$ruang = $this->M_ruang->data_ruang();
	$data['ruangan'] = $ruang;
	$pasien = $this->M_pasien->data_pasien();
	$data['pasien'] = $pasien;
	$data['pesan']="";
	
	if ($simpan=='simpan'){
		$d = array(
		'id_ruang' => $this->input->post('ruangan'),
		'id_pasien' => $this->input->post('pasien'),
		'tgl_masuk' => $this->input->post('tgl')
		);
	    $run = $this->M_inap->simpan_data($d);
		redirect(base_url().'inap');
		
	}
	
	$this->template->set($data);
	$this->template->set_layout('theme')->build('inap_baru');
	}
	//---------------------------------------------------------------------------------------
	function edit($id,$simpan="tidak"){
	$data['home']="";
	$data['pasien']="";
	$data['ruang']="";
	$data['dokter']="";
	$data['petugas']="";
	$data['inap']="active";
	$data['bayar']="";
	$data['gantipass']="";
	$ruang = $this->M_ruang->data_ruang();
	$data['ruangan'] = $ruang;
	$pasien = $this->M_pasien->data_pasien();
	$data['pasien'] = $pasien;
	$data['pesan']="";
	$query = $this->M_inap->data_inap($id);
	foreach($query as $d){
	$data['id_rawatinap'] =$d->id_rawatinap;
	$data['id_pasien'] =$d->id_pasien;
	$data['id_ruang'] =$d->id_ruang;
	$data['tgl_masuk'] =$d->tgl_masuk;
	}
	//print_r($data['nama']);
	if ($simpan=='simpan'){
		$d = array(
		'id_ruang' => $this->input->post('ruangan'),
		'tgl_masuk' => $this->input->post('tgl')
		);
	    $run = $this->M_inap->update_data($d,$id);
		redirect(base_url().'inap');
		
	}
	
	$this->template->set($data);
	$this->template->set_layout('theme')->build('inap_edit');
	}
	
//==========================================================================	
function hapus($id){
$run = $this->M_inap->hapus_data($id);
redirect(base_url().'inap');
}	
	
	
}
