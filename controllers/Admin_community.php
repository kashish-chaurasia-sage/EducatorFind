<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_community extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isAdminLoggedIn')){
			redirect('admin-login');
		}
		$this->load->model('CommonMdl');
	  }
	public function index()
	{   
	  $data['community']= $this->CommonMdl->getResult('tbl_educator', '*');
		
	  $this->load->view('admin/community',$data);
	}
}
