<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isUserLoggedIn')){
			redirect('login');
		}
	$this->load->model('CommonMdl');
		 
}
	public function index()
	{   
	$data['user_data']= $this->CommonMdl->getResult('users', '*', ['id' => $this->session->userdata('userId')]);
	
		$data['review']= $this->CommonMdl->getResult('review', '*', array('user_id' => $this->session->userdata('userId')));
	$data['receivedreview']= $this->CommonMdl->getResult('review', '*', array('review_by_id' => $this->session->userdata('userId')));
	    $data['title']='Review | Starsboard ';
		$this->load->view('view_review',$data);
	}
	
	
}
