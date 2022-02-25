<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resetpassword extends CI_Controller {

	 
    function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        $this->load->model('user'); 
       } 
	public function index()
	{ 
		$reset_link=$this->uri->segment(2);
	     
		if(!empty($this->uri->segment(2))){
			$reset_link=$this->uri->segment(2);
	          $con = array( 
                    'returnType' => 'single', 
                    'conditions' => array( 
                     'reset_link' => $reset_link, 
                      
                    ) 
                ); 
                $checkLogin = $this->user->getRows($con); 
				if($checkLogin){ 
				$data['id']=$checkLogin['id'];
				$data['title']='Forgot password Link | Starsboard ';
             // Load view 
            $this->load->view('resetForm',$data); 
				}else{
				echo 'Invalid reset link';
				}
		     }else{
			echo 'You are not allowed to reset password';
		    }
	}
	

	

     
}
