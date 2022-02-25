<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_review extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isAdminLoggedIn')){
			redirect('admin-login');
		}
		$this->load->model('CommonMdl');
	  }
	public function index()
	{   
	  $data['review']= $this->CommonMdl->getReviewAdmin();
	  // echo '<pre>'; print_r($data); die;
		
	  $this->load->view('admin/review',$data);
	}
}
