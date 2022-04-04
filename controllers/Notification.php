<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {

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
	$data['title']='Notification | Starsboard ';
	date_default_timezone_set('Asia/Calcutta');
	$today = date("Y-m-d 00:00:00");
	$educator = $this->CommonMdl->getResult('custom_educator', '*', ['user_id' => $this->session->userdata('userId')]);
	// echo json_encode($today);die();
	$data['bday_notification'] = 0;
	if(!empty($educator)){
		if ($educator[0]->edu_dob == $today) {
			$data['bday_notification'] = 1;
		}else{
			$data['bday_notification'] = 0;
		}

	}
	
	// echo json_encode($data['Bday_notification'] );die();

	$notifications= $this->CommonMdl->getAllUserNotification($this->session->userdata('userId'));
	$data['notifications'] = $notifications;
	
	$this->load->view('view_notification',$data);
	}
	
	
}
