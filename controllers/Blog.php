<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	
	public function __construct() {        
    parent::__construct();
	$this->load->model('CommonMdl');
		 
}
	
	public function index()
	{   $data=array();
     	$data['title']='Starsboard | Blog | Notes';
	    $data['blog']= $this->CommonMdl->getResult('blog','*');
		
	    $this->load->view('blog',$data);
	
	}
	
	public function details()
	{  
	if(!empty($this->uri->segment(2))){
		$data=array();
		$blog_id=$this->uri->segment(2);
			
		$detailed = $this->CommonMdl->getblog('blog',$blog_id);
			
		 $data['blog_detail']= $detailed;
		//echo '<pre>';print_r($data['blog_detail']); die;
		$data['all_blog']= $this->CommonMdl->getResult('blog', '*');
		$data['title']='Blog | Starsboard ';
		$this->load->view('blog_details',$data);
	}else{
		redirect('blog');
	 }
	}
	
	
}
