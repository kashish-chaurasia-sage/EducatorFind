<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_blog extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isAdminLoggedIn')){
			redirect('admin-login');
		}
		$this->load->model('CommonMdl');
	  }
	public function index()
	{   $data=array();
     	$data['title']='Starsboard';
	  $data['blog']= $this->CommonMdl->getResult('blog', '*');
		
	  $this->load->view('admin/blog',$data);
	}
}
