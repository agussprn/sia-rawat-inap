<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pasien extends CI_Controller {

function __construct()
     {
         // Call the Model constructor
         parent::__construct();
		 $this->load->helper('url');
		 $this->load->model('M_pasien');
		 $this->load->model('M_dokter');
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
		$data['pasien']="active";
		$data['ruang']="";
		$data['dokter']="";
		$data['petugas']="";
		$data['inap']="";
		$data['bayar']="";$data['gantipass']="";
		$query = $this->M_pasien->data_pasien();
		$data['query'] = $query;
		
		$this->template->set($data);
		$this->template->set_layout('theme')->build('pasien');
		
	}
	
	
	function baru($simpan="tidak"){
	$data['home']="";
	$data['ruang']="";
	$data['pasien']="active";
	$data['dokter']="";
	$data['petugas']="";
	$data['inap']="";
	$data['bayar']="";$data['gantipass']="";
	$dokter = $this->M_dokter->data_dokter();
	$data['dokter'] = $dokter;
	$data['pesan']="";
	
	if ($simpan=='simpan'){
		$d = array(
		'nama' => $this->input->post('nama'),
		'alamat' => $this->input->post('alamat'),
		'keluhan' => $this->input->post('keluhan'),
		'id_dokter' => $this->input->post('dokter')
		);
	    $run = $this->M_pasien->simpan_data($d);
		redirect('pasien');
		
	}
	
	$this->template->set($data);
	$this->template->set_layout('theme')->build('pasien_baru');
	}
	//---------------------------------------------------------------------------------------
	function edit($id,$simpan="tidak"){
	$data['home']="";
	$data['pasien']="active";
	$data['ruang']="";
	$data['dokter']="";
	$data['petugas']="";
	$data['inap']="";
	$data['bayar']="";$data['gantipass']="";
	$dokter = $this->M_dokter->data_dokter();
	$data['dokter'] = $dokter;
	$data['pesan']="";
	$query = $this->M_pasien->data_pasien($id);
	foreach($query as $d){
	$data['id_pasien'] =$d->id_pasien;
	$data['nama'] =$d->nama;
	$data['alamat'] =$d->alamat;
	$data['keluhan'] =$d->keluhan;
	$data['id_dokter'] =$d->id_dokter;
	}
	//print_r($data['nama']);
	if ($simpan=='simpan'){
		$d = array(
		'nama' => $this->input->post('nama'),
		'alamat' => $this->input->post('alamat'),
		'keluhan' => $this->input->post('keluhan'),
		'id_dokter' => $this->input->post('dokter')
		);
	    $run = $this->M_pasien->update_data($d,$id);
		redirect('pasien');
		
	}
	
	$this->template->set($data);
	$this->template->set_layout('theme')->build('pasien_edit');
	}
	
//==========================================================================	
function hapus($id){
$run = $this->M_pasien->hapus_data($id);
redirect('pasien');
}	
	
	
}
