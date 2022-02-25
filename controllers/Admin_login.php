<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

	 
    function __construct() { 
        parent::__construct(); 
         
       } 
	public function index()
	{
		
        $this->load->view('admin/login'); 
    
	}
	public function check_login(){
		//print_r($_POST); die;
		if(($this->input->post('admin_email') == 'veerajay18@gmail.com') && ($this->input->post('admin_password') == 'Stars@4ever!')){
		$this->session->set_userdata('isAdminLoggedIn', TRUE); 
                    
		redirect('admin-dashboard'); 
			}else{
				$this->load->view('admin/login'); 
			}
		}
	 
    public function logout(){ 
        $this->session->unset_userdata('isAdminLoggedIn'); 
        $this->session->sess_destroy(); 
        redirect('admin-login'); 
    } 

     
}
