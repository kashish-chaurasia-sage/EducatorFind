<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {

	 
    function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        $this->load->model('user'); 
         
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
    } 
	public function index()
	{
		if($this->isUserLoggedIn){ 
            redirect('dashboard'); 
        }else{ 
            $data = array(); 
         
      
         $data['title']='Forgot password | Starsboard';
        // Load view 
        $this->load->view('forgot',$data); 
        } 
	}
	
	public function password()
	{ 
	$this->load->model('CommonMdl');
    $to= $this->input->post('email');
             
            if($this->form_validation->run() == true){ 
                $con = array( 
                    'returnType' => 'single', 
                    'conditions' => array( 
                        'email'=> $this->input->post('email'), 
                       
                    ) 
                ); 
                $checkLogin = $this->user->getRows($con); 
                if($checkLogin){ 
				
				$reset_link=md5(rand());
				  $data = array(
   		'reset_link' => $reset_link,
   		'updated_date' => date("Y-m-d H:i:s"),
   	);
	
   	$response =$this->CommonMdl->updateData($data,array('email'=>$to),'users');
	
	        $from_email = "info@starsboard.in"; 
         $to_email = $this->input->post('email'); 
   
Hi
 
We received a request to reset the password to access STARSBOARD with your email address (axx@gmxx.com).
 

<a href="https://starsboard.in/resetpassword/'.$reset_link.'"  style="background:#20e277;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;">
Click here to RESET PASSWORD</a>
 
If you use STARSBOARD and were expecting this email, consider trying to request a password reset using the email address associated with your account.
 
Best Regards,
STARSBOARD Education
Flat Iamage (Whatsapp) -7977476239

';
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Starsboard'); 
         $this->email->to($to_email);
         $this->email->subject('Forgot Password'); 
         $this->email->message($msg); 
   
               if($this->email->send()){
            	   echo '1';
               }else{
            
                    echo $this->email->print_debugger();
               }
   
                }else{ 
                    echo 'Email id does not exits.'; 
                } 
            }else{ 
                echo 'Please enter valid email id'; 
            } 
        
	}

     
  	public function change_password()
	{
		$this->load->model('CommonMdl');
    
		$id=trim($this->input->post('id'));
		$password=trim($this->input->post('password'));
		$data = array(
   		'password' => md5($password),
		'reset_link' => md5('123456'),
   		'updated_date' => date("Y-m-d H:i:s"),
   	);
	
     	$response =$this->CommonMdl->updateData($data,array('id'=>$id),'users');
	
        echo 'You have changed your password.';

	}
     
}
