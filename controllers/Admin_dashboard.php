<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isAdminLoggedIn')){
			redirect('admin-login');
		}
		$this->load->model('CommonMdl');
	  }
	public function index()
	{   
	    $educator= $this->CommonMdl->getResult('tbl_educator', '*');
			$data['educator']=count($educator);
			
			$user= $this->CommonMdl->getResult('users', '*');
			$data['user']=count($user);
			
				$review= $this->CommonMdl->getResult('review', '*');
			$data['review']=count($review);
			
				$lead= $this->CommonMdl->getResult('lead', '*');
			$data['lead']=count($lead);
			
			$blog= $this->CommonMdl->getResult('blog', '*');
			$data['blog']=count($blog);
			
	$this->load->view('admin/dashboard',$data);
	}
}
