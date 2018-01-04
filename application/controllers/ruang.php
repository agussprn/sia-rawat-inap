<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ruang extends CI_Controller {

function __construct()
     {
         // Call the Model constructor
         parent::__construct();
		 $this->load->helper('url');
		 $this->load->model('M_pasien');
		 $this->load->model('M_dokter');
		 $this->load->model('M_ruang');
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
		$data['ruang']="active";
		$data['dokter']="";
		$data['petugas']="";
		$data['inap']="";
		$data['bayar']="";$data['gantipass']="";
		$query = $this->M_ruang->data_ruang();
		$data['query'] = $query;
		
		$this->template->set($data);
		$this->template->set_layout('theme')->build('ruang');
		
	}
	
	
	function baru($simpan="tidak"){
	$data['home']="";
	$data['pasien']="";
	$data['ruang']="active";
	$data['dokter']="";
	$data['pesan']="";
	$data['petugas']="";
	$data['inap']="";
	$data['bayar']="";$data['gantipass']="";
	if ($simpan=='simpan'){
		$d = array(
		'nama_ruang' => $this->input->post('ruang'),
		'nama_gedung' => $this->input->post('gedung'),
		'biaya_per_hari' => $this->input->post('biaya')
		);
	    $run = $this->M_ruang->simpan_data($d);
		redirect('ruang');
		
	}
	
	$this->template->set($data);
	$this->template->set_layout('theme')->build('ruang_baru');
	}
	//---------------------------------------------------------------------------------------
	function edit($id,$simpan="tidak"){
	$data['home']="";
	$data['pasien']="";
	$data['ruang']="active";
	$data['pesan']="";
	$data['dokter']="";
	$data['petugas']="";
	$data['inap']="";
	$data['bayar']="";$data['gantipass']="";
	$query = $this->M_ruang->data_ruang($id);
	foreach($query as $d){
	$data['id_ruang'] =$d->id_ruang;
	$data['ruangan'] =$d->nama_ruang;
	$data['gedung'] =$d->nama_gedung;
	$data['biaya'] =$d->biaya_per_hari;
	
	}
	//print_r($data['nama']);
	if ($simpan=='simpan'){
		$d = array(
		'nama_ruang' => $this->input->post('ruang'),
		'nama_gedung' => $this->input->post('gedung'),
		'biaya_per_hari' => $this->input->post('biaya')
		);
	    $run = $this->M_ruang->update_data($d,$id);
		redirect('ruang');
		
	}
	
	$this->template->set($data);
	$this->template->set_layout('theme')->build('ruang_edit');
	}
	
//==========================================================================	
function hapus($id){
$run = $this->M_ruang->hapus_data($id);
redirect('ruang');
}	
	
	
}
