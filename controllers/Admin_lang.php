<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_lang extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isAdminLoggedIn')){
			redirect('admin-login');
		}
		$this->load->model('CommonMdl');
	  }
	public function index()
	{   
	  $data['edu_lang']= $this->CommonMdl->getResult('edu_lang', '*');
		
	  $this->load->view('admin/admin_lang',$data);
	}
	
	public function add()
	{   
	
	  $this->load->view('admin/add_admin_lang');
	}
	public function addsubmit()
	{   
	$count=count($this->input->post('edu_lang_title'));
	   for ($i=0; $i<$count; $i++)
        {
          if(empty($this->input->post('edu_lang_title')[$i]) ){
                 $blank='0';
                 }
           
           $data[] = array(
               'edu_lang_title' => $this->input->post('edu_lang_title')[$i],
             );
           
          
       }
	    $insert = $this->CommonMdl->insertinBatch($data, 'edu_lang');
        echo '1';
	  }
	
	
	
}
