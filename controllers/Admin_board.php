<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_board extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isAdminLoggedIn')){
			redirect('admin-login');
		}
		$this->load->model('CommonMdl');
	  }
	public function index()
	{   
	  $data['edu_board']= $this->CommonMdl->getResult('edu_board', '*');
		
	  $this->load->view('admin/admin_board',$data);
	}
	
	public function add()
	{   
	
	  $this->load->view('admin/add_admin_board');
	}
	public function addsubmit()
	{   
	$count=count($this->input->post('edu_board_title'));
	   for ($i=0; $i<$count; $i++)
        {
          if(empty($this->input->post('edu_board_title')[$i]) ){
                 $blank='0';
                 }
           
           $data[] = array(
               'edu_board_title' => $this->input->post('edu_board_title')[$i],
             );
           
          
       }
	    $insert = $this->CommonMdl->insertinBatch($data, 'edu_board');
        echo '1';
	  }
	
	
	
}
