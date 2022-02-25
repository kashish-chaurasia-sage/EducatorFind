<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_career extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isAdminLoggedIn')){
			redirect('admin-login');
		}
		$this->load->model('CommonMdl');
	  }
	public function index()
	{   
	  $data['edu_career']= $this->CommonMdl->getResult('edu_career', '*');
		
	  $this->load->view('admin/admin_career',$data);
	}
	
	public function add()
	{   
	
	  $this->load->view('admin/add_admin_career');
	}
	public function addsubmit()
	{   
	$count=count($this->input->post('edu_career_title'));
	   for ($i=0; $i<$count; $i++)
        {
          if(empty($this->input->post('edu_career_title')[$i]) ){
                 $blank='0';
                 }
           
           $data[] = array(
               'edu_career_title' => $this->input->post('edu_career_title')[$i],
             );
           
          
       }
	    $insert = $this->CommonMdl->insertinBatch($data, 'edu_career');
        echo '1';
	  }
	
	
	
}
