<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_enquiry extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isAdminLoggedIn')){
			redirect('admin-login');
		}
		$this->load->model('CommonMdl');
	  }
	public function index()
	{   
	  $data['enquiry']= $this->CommonMdl->getResult('enquiry', '*');
		
	  $this->load->view('admin/enquiry',$data);
	}
}
