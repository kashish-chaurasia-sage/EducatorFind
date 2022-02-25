<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_art extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isAdminLoggedIn')){
			redirect('admin-login');
		}
		$this->load->model('CommonMdl');
	  }
	public function index()
	{  
	    $data=array();
     	$data['title']='Starsboard | Art';
	  $data['edu_art']= $this->CommonMdl->getResult('edu_art', '*');
		
	  $this->load->view('admin/admin_art',$data);
	}
	
	public function add()
	{   
	
	  $this->load->view('admin/add_admin_art');
	}
	public function addsubmit()
	{   
	$count=count($this->input->post('edu_art_title'));
	   for ($i=0; $i<$count; $i++)
        {
          if(empty($this->input->post('edu_art_title')[$i]) ){
                 $blank='0';
                 }
           
           $data[] = array(
               'edu_art_title' => $this->input->post('edu_art_title')[$i],
             );
           
          
       }
	    $insert = $this->CommonMdl->insertinBatch($data, 'edu_art');
        echo '1';
	  }
	
	
	
}
