<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isUserLoggedIn')){
			redirect('login');
		}
	$this->load->model('CommonMdl');		 
      }
	public function index()
	{    $data=array();
     	$data['title']='Starsboard | User Dashboard';
	$data['user_data']= $this->CommonMdl->getResult('users', '*', ['id' => $this->session->userdata('userId')]);
			
	  // $activeUser= $this->CommonMdl->getUsersDetails($this->session->userdata('userId'));
	   
	  // print_r($data['user_data'][0]->educator); die;
	   
	  $data['blog']= $this->CommonMdl->getResult('blog', '*', array('blog_user_id' => $this->session->userdata('userId')));
	  $data['educator']= $this->CommonMdl->getResult('tbl_educator', '*', array('Eid' => $this->session->userdata('userId')));
	   
		$this->load->view('dashboard',$data);
	}
}
