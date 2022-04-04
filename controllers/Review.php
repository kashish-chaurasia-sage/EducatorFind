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
	$educator = $this->CommonMdl->getResult('custom_educator', '*', ['user_id' => $this->session->userdata('userId')]);
	// echo '<pre>';   print_r($educator);die;
	// if(!empty($educator)){

	
		$data['review']= $this->CommonMdl->getResult('custom_review', '*', array('educator_id' => $educator[0]->educator_id));
		$data['receivedreview']= $this->CommonMdl->getResult('custom_review', '*', array('user_id' => $this->session->userdata('userId')));
	    $data['title']='Review | Starsboard ';
		$this->load->view('view_review',$data);
	}
	
	
}
