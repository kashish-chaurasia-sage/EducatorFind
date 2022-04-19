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
		// echo '<pre>';   print_r( $data['user_data']);die;
		$educator = $this->CommonMdl->getResult('custom_educator', '*', ['user_id' => $this->session->userdata('userId')]);
		// echo '<pre>';   print_r( $educator);die;

		if(!empty($educator)){
			$data['lead']= $this->CommonMdl->getResult('lead', '*', array('user_id' => $this->session->userdata('userId')));

		}else{
			$data['lead']= $this->CommonMdl->getResult('lead', '*', array('enquiry_by_id' => $this->session->userdata('userId')));
			if(!empty($data['lead'])){
				$educator = $this->CommonMdl->getResult('custom_educator', '*', ['user_id' => $data['lead'][0]->user_id ]);
				// echo '<pre>';   print_r(  $educator);die;

				$data['lead'][0]->enquiry_name = $educator[0]->edu_name;
				$data['lead'][0]->enquiry_email = $educator[0]->edu_email;
				$data['lead'][0]->enquiry_mobile= $educator[0]->edu_number;
			}
			
		}
		// echo '<pre>';   print_r( $data['lead']);die;
		if(empty($data['leade'])){
			$data['leade'] ="";
		}
	    $data['title']='Lead | Starsboard ';
	    $this->load->view('view_lead',$data);
	}
	
	
}
