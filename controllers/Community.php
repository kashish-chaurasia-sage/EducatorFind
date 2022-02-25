<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Community extends CI_Controller {

	
	public function __construct() {        
    parent::__construct();
	$this->load->model('CommonMdl');
		 
}
	
	public function index()
	
	{  
	     $data=array();
     	$data['title']='Starsboard | Community | Educator Community';
	    $data['community']= $this->CommonMdl->getResult('tbl_educator', '*');
			
		$this->load->view('community',$data);
	
	}
}
