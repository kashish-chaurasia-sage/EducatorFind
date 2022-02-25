<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_subject extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isAdminLoggedIn')){
			redirect('admin-login');
		}
		$this->load->model('CommonMdl');
	  }
	public function index()
	{   
	  $data['edu_sub']= $this->CommonMdl->getResult('edu_sub', '*');
		
	  $this->load->view('admin/admin_subject',$data);
	}
	
	public function add()
	{   
	
	  $this->load->view('admin/add_admin_subject');
	}
	public function addsubmit()
	{   
	$count=count($this->input->post('edu_sub_title'));
	   for ($i=0; $i<$count; $i++)
        {
          if(empty($this->input->post('edu_sub_title')[$i]) ){
                 $blank='0';
                 }
           
           $data[] = array(
               'edu_sub_title' => $this->input->post('edu_sub_title')[$i],
             );
           
          
       }
	    $insert = $this->CommonMdl->insertinBatch($data, 'edu_sub');
        echo '1';
	  }
	
	
	
}
