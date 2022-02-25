<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

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
	
		$this->load->view('view_setting',$data);
	}
	
	
}
