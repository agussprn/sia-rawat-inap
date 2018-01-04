<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
function __construct()
     {
         // Call the Model constructor
         parent::__construct();
		 $this->load->helper('url');
     }
     
//==============================================================================>
  
	public function index()
	{
		if($this->session->userdata('id_petugas')==''){
	       redirect(base_url().'login');
           exit;
	   }
	   $data['id_petugas']=$this->session->userdata('id_petugas');
		$data['pasien']="";
		$data['home']="active";
		$data['ruang']="";
		$data['dokter']="";
		$data['petugas']="";
		$data['inap']="";
		$data['bayar']="";$data['gantipass']="";
		
		$this->template->set($data);
		$this->template->set_layout('theme')->build('v_home');
		
	}
	
	
//================================================================================
}
