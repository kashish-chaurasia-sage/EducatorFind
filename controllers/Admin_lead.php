<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_lead extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isAdminLoggedIn')){
			redirect('admin-login');
		}
		$this->load->model('CommonMdl');
	  }
	public function index()
	{   
	  $data['lead']= $this->CommonMdl->getLeadAdmin();
	 //echo '<pre>'; print_r($data); die;
		
	  $this->load->view('admin/lead',$data);
	}
}
