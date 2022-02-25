<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_course extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isAdminLoggedIn')){
			redirect('admin-login');
		}
		$this->load->model('CommonMdl');
	  }
	public function index()
	{   
	  $data['edu_course']= $this->CommonMdl->getResult('edu_course', '*');
		
	  $this->load->view('admin/admin_course',$data);
	}
	
	public function add()
	{   
	
	  $this->load->view('admin/add_admin_course');
	}
	public function addsubmit()
	{   
	$count=count($this->input->post('edu_course_title'));
	   for ($i=0; $i<$count; $i++)
        {
          if(empty($this->input->post('edu_course_title')[$i]) ){
                 $blank='0';
                 }
           
           $data[] = array(
               'edu_course_title' => $this->input->post('edu_course_title')[$i],
             );
           
          
       }
	    $insert = $this->CommonMdl->insertinBatch($data, 'edu_course');
        echo '1';
	  }
	
	
	
}
