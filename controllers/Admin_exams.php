<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_exams extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isAdminLoggedIn')){
			redirect('admin-login');
		}
		$this->load->model('CommonMdl');
	  }
	public function index()
	{   
	  $data['edu_exams']= $this->CommonMdl->getResult('edu_exams', '*');
		
	  $this->load->view('admin/admin_exams',$data);
	}
	
	public function add()
	{   
	
	  $this->load->view('admin/add_admin_exams');
	}
	public function addsubmit()
	{   
	$count=count($this->input->post('edu_exams_title'));
	   for ($i=0; $i<$count; $i++)
        {
          if(empty($this->input->post('edu_exams_title')[$i]) ){
                 $blank='0';
                 }
           
           $data[] = array(
               'edu_exams_title' => $this->input->post('edu_exams_title')[$i],
             );
           
          
       }
	    $insert = $this->CommonMdl->insertinBatch($data, 'edu_exams');
        echo '1';
	  }
	
	
	
}
