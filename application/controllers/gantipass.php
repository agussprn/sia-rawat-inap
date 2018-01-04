<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gantipass extends CI_Controller {

function __construct()
     {
         // Call the Model constructor
         parent::__construct();
		 $this->load->helper('url');
		 $this->load->model('M_petugas');
		 
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
		$data['petugas']="active";
		$data['inap']="";
		$data['bayar']="";
		$data['dokter']="";
		$query = $this->M_petugas->data_petugas();
		$data['query'] = $query;
		
		$this->template->set($data);
		$this->template->set_layout('theme')->build('petugas');
		
	}
	
	
	function baru($simpan="tidak"){
	$data['home']="";
	$data['pasien']="";
	$data['ruang']="";
	$data['pesan']="";
	$data['dokter']="";
	$data['petugas']="";
	$data['inap']="";
	$data['bayar']="";
	$data['gagal']="";
	$data['gantipass']="active";
	if ($simpan=='simpan'){
		$dt=$this->input->post('username');
		$cek = $this->M_petugas->cek_data($dt);
		if($cek){
		$user=$cek[0]->username;
		}else{
		$user="";
		}
		if ($user!=$dt){
		$d = array(
		'nama' => $this->input->post('nama'),
		'jabatan' => $this->input->post('jabatan'),
		'username' => $this->input->post('username'),
		'password' =>'12345'
		);
	    $run = $this->M_petugas->simpan_data($d);
		redirect(base_url().'petugas');
		}else{
		$data['gagal']="Data Gagal Disimpan, Username sudah ada!";
		}
	}
	
	$this->template->set($data);
	$this->template->set_layout('theme')->build('petugas_baru');
	}
	//---------------------------------------------------------------------------------------
	function edit($id,$simpan="tidak"){
	$data['home']="";
	$data['pasien']="";
	$data['ruang']="";
	$data['pesan']="";
	$data['dokter']="";
	$data['petugas']="";
	$data['inap']="";
	$data['bayar']="";
	$data['gagal']="";
	$data['gantipass']="active";
	
	//print_r($data['nama']);
	if ($simpan=='simpan'){
		$dt=$this->input->post('username');
		$cek = $this->M_petugas->cek_data_edit($dt,$id);
		if($cek){
		$user=$cek[0]->username;
		}else{
		$user="";
		}
		if ($user!=$dt){
		if ($this->input->post('password')!=""){
		$d = array(
		'nama' => $this->input->post('nama'),
		'jabatan' => $this->input->post('jabatan'),
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password')
		);
		}else{
		$d = array(
		'nama' => $this->input->post('nama'),
		'jabatan' => $this->input->post('jabatan'),
		'username' => $this->input->post('username')
		);
		}
		
	    $run = $this->M_petugas->update_data($d,$id);
		$data['gagal']="Data berhasil disimpan ...";
		}else{
		$data['gagal']="Data Gagal Disimpan, Username sudah ada!";
		}
		
	}
	
	$query = $this->M_petugas->data_petugas($id);
	foreach($query as $d){
	$data['id_petugas'] =$d->id_petugas;
	$data['nama'] =$d->nama;
	$data['jabatan'] =$d->jabatan;
	$data['username'] =$d->username;
	$data['password'] =$d->password;
	}
	$this->template->set($data);
	$this->template->set_layout('theme')->build('ganti_pass');
	}
	
//==========================================================================	
function hapus($id){
$run = $this->M_petugas->hapus_data($id);
redirect(base_url().'petugas');
}	
	
	
}
