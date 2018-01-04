<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dokter extends CI_Controller {

function __construct()
     {
         // Call the Model constructor
         parent::__construct();
		 $this->load->helper('url');
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
		$data['pasien']="";
		$data['ruang']="";
		$data['petugas']="";
		$data['inap']="";
		$data['bayar']="";
		$data['dokter']="active";
		$data['gantipass']="";
		$query = $this->M_dokter->data_dokter();
		$data['query'] = $query;
		
		$this->template->set($data);
		$this->template->set_layout('theme')->build('dokter');
		
	}
	
	
	function baru($simpan="tidak"){
	$data['home']="";
	$data['pasien']="";
	$data['ruang']="";
	$data['pesan']="";
	$data['dokter']="active";
	$data['petugas']="";
	$data['inap']="";
	$data['bayar']="";
	$data['gantipass']="";
	if ($simpan=='simpan'){
		$d = array(
		'nama_dok' => $this->input->post('nama'),
		'alamat_dok' => $this->input->post('alamat'),
		'spesialisasi' => $this->input->post('spesialis')
		);
	    $run = $this->M_dokter->simpan_data($d);
		redirect('dokter');
		
	}
	
	$this->template->set($data);
	$this->template->set_layout('theme')->build('dokter_baru');
	}
	//---------------------------------------------------------------------------------------
	function edit($id,$simpan="tidak"){
	$data['home']="";
	$data['pasien']="";
	$data['ruang']="";
	$data['pesan']="";
	$data['dokter']="active";
	$data['petugas']="";
	$data['inap']="";
	$data['bayar']="";
	$data['gantipass']="";
	$query = $this->M_dokter->data_dokter($id);
	foreach($query as $d){
	$data['id_dokter'] =$d->id_dokter;
	$data['nama'] =$d->nama_dok;
	$data['alamat'] =$d->alamat_dok;
	$data['spesialis'] =$d->spesialisasi;
	
	}
	//print_r($data['nama']);
	if ($simpan=='simpan'){
		$d = array(
		'nama_dok' => $this->input->post('nama'),
		'alamat_dok' => $this->input->post('alamat'),
		'spesialisasi' => $this->input->post('spesialis')
		);
	    $run = $this->M_dokter->update_data($d,$id);
		redirect('dokter');
		
	}
	
	$this->template->set($data);
	$this->template->set_layout('theme')->build('dokter_edit');
	}
	
//==========================================================================	
function hapus($id){
$run = $this->M_dokter->hapus_data($id);
redirect('dokter');
}	
	
	
}
