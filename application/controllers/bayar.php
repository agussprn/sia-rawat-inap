<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bayar extends CI_Controller {

function __construct()
     {
         // Call the Model constructor
         parent::__construct();
		 $this->load->helper('url');
		 $this->load->model('M_pasien');
		 $this->load->model('M_ruang');
		 $this->load->model('M_inap');
		 $this->load->model('M_bayar');
		 
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
		$data['inap']="";
		$data['bayar']="active";
		$data['gantipass']="";
		$query = $this->M_bayar->data_bayar();
		$data['query'] = $query;
		
		$this->template->set($data);
		$this->template->set_layout('theme')->build('bayar');
		
	}
	
	
	function baru($simpan="tidak"){
	$data['home']="";
	$data['ruang']="";
	$data['pasien']="";
	$data['dokter']="";
	$data['petugas']="";
	$data['inap']="";
	$data['bayar']="active";
	$inap = $this->M_inap->data_inap();
	$data['inap'] = $inap;
	$data['pesan']="";
	$data['gantipass']="";
	if ($simpan=='simpan'){
		$tg=date("Y-m-d");
		$d = array(
		'id_rawatinap' => $this->input->post('inap'),
		'total_bayar' => $this->input->post('bayar'),
		'tgl_bayar' => $tg
		);
		
		$id_inap=$this->input->post('inap');
		$dd = array(
		'tgl_keluar' => $tg
		);
		$runi = $this->M_inap->update_data($dd,$id_inap);
	    $run = $this->M_bayar->simpan_data($d);
		
		redirect(base_url().'bayar');
		
	}
	
	$this->template->set($data);
	$this->template->set_layout('theme')->build('bayar_baru');
	}
	//---------------------------------------------------------------------------------------
	function edit($id,$simpan="tidak"){
	$data['home']="";
	$data['pasien']="";
	$data['ruang']="";
	$data['dokter']="";
	$data['petugas']="";
	$data['inap']="";
	$data['bayar']="active";
	$data['pesan']="";
	$data['gantipass']="";
	$inap = $this->M_inap->data_inap();
	$data['inap'] = $inap;
	$query = $this->M_bayar->data_bayar($id);
	foreach($query as $d){
	$data['id_bayar'] =$d->id_bayar;
	$data['id_rawatinap'] =$d->id_rawatinap;
	$data['total_bayar'] =$d->total_bayar;
	
	}
	//print_r($data['nama']);
	if ($simpan=='simpan'){
		 
		$d = array(
		'total_bayar' => $this->input->post('bayar') 
		);
		
	    $run = $this->M_bayar->update_data($d,$id);
		redirect(base_url().'bayar');
		
	}
	
	$this->template->set($data);
	$this->template->set_layout('theme')->build('bayar_edit');
	}
	
//==========================================================================	
function hapus($id){
$q = $this->M_bayar->data_bayar($id);
//print_r($q);
$id_inap = $q[0]->id_rawatinap;

$dd = array(
'tgl_keluar' => "0000-00-00"
);
$runi = $this->M_inap->update_data($dd,$id_inap);
$run = $this->M_bayar->hapus_data($id);
redirect(base_url().'bayar');
}	
	
	
}
