<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_class extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isAdminLoggedIn')){
			redirect('admin-login');
		}
		$this->load->model('CommonMdl');
	  }
	public function index()
	{   
	  $data['edu_class']= $this->CommonMdl->getResult('edu_class', '*');
		
	  $this->load->view('admin/admin_class',$data);
	}
	
	public function add()
	{   
	  $this->load->view('admin/add_admin_class');
	}
	public function addsubmit()
	{   
	$count=count($this->input->post('edu_class_title'));
	   for ($i=0; $i<$count; $i++)
        {
          if(empty($this->input->post('edu_class_title')[$i]) ){
                 $blank='0';
                 }
           
           $scedule_mom_id = $this->input->post('scedule_mom_id');
           $data_meeting_mom[] = array(
               'edu_class_title' => $this->input->post('edu_class_title')[$i],
             );
           
          
       }
	    $insert = $this->CommonMdl->insertinBatch($data_meeting_mom, 'edu_class');
        echo '1';
	  }
	
	public function edit()
	{   
	  $data['edu_class']= $this->CommonMdl->getResult('edu_class', '*');
		
	  $this->load->view('admin/edit_admin_class',$data);
	}
	
	
}
