<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_users extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isAdminLoggedIn')){
			redirect('admin-login');
		}
		$this->load->model('CommonMdl');
	  }
	public function index()
	{   
	  $data['users']= $this->CommonMdl->getResult('users', '*');
		
	  $this->load->view('admin/users',$data);
	}
}
