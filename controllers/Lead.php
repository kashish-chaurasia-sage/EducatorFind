<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isUserLoggedIn')){
			redirect('login');
		}
	$this->load->model('CommonMdl');
		 
}
	public function index()
	{  $data['user_data']= $this->CommonMdl->getResult('users', '*', ['id' => $this->session->userdata('userId')]);
	
	    $data['lead']= $this->CommonMdl->getResult('lead', '*', array('user_id' => $this->session->userdata('userId')));
	    $data['title']='Lead | Starsboard ';
	    $this->load->view('view_lead',$data);
	}
	
	
}
