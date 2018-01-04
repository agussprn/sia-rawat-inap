<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		 $this->load->model('M_login');
     }
     
//==============================================================================>
  
	public function index()
	{
		$data['salah']="";
		$this->load->view('login',$data);
		
	}
	
	function masuk(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
	    $run = $this->M_login->masuk($username,$password);
		if (!$run){
		 redirect(base_url().'login/salah');
		}else{
			$id_petugas=$run[0]->id_petugas;
			$nama=$run[0]->nama;
			$jabatan=$run[0]->jabatan;
			
            $array_items = array('id_petugas'=>$id_petugas,'nama'=>$nama,'jabatan'=>$jabatan );
            $this->session->set_userdata($array_items);
			redirect(base_url());
		
		}
	}
	
	
	function keluar(){
			$array_items = array('id_petugas'=>'','nama'=>'','jabatan'=>'');
            $this->session->set_userdata($array_items);
			redirect(base_url());
	}	
		
		
	function salah(){
	$data['salah']="Username atau Password Masih Salah !";
	$this->load->view('login',$data);
	}
//================================================================================
}
