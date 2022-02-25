<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_educator extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isAdminLoggedIn')){
			redirect('admin-login');
		}
		$this->load->model('CommonMdl');
	  }
	public function index()
	{   
	  $data['educator']= $this->CommonMdl->getResult('tbl_educator', '*');
		
	  $this->load->view('admin/educator',$data);
	}
	
	public function isfeatured()
	{   
	   $eid=$this->input->post('eid');
	   $featuredAction=$this->input->post('featuredAction');
	   $data = array(
   		'isFeatured' => $featuredAction,
   		'updated' => date("Y-m-d H:i:s"),
   	);
	
   	$response =$this->CommonMdl->updateData($data,array('Eid'=>$eid),'tbl_educator');
	if($featuredAction == '1'){
   	echo 'You have marked Featured Educator';
	}else{
		
   	echo 'You have unmarked Featured Educator';
	}
	 }
}
