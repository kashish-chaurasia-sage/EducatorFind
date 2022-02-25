<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	 
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
           
        $data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){ 
		
            $this->form_validation->set_rules('name', 'Name', 'required'); 
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check'); 
            $this->form_validation->set_rules('password', 'password', 'required'); 
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]'); 
 
            $userData = array( 
                'name' => strip_tags($this->input->post('name')), 
                'email' => strip_tags($this->input->post('email')), 
                'password' => md5($this->input->post('password')), 
            ); 
 
            if($this->form_validation->run() == true){ 
            $insert = $this->user->insert($userData); 
                 
          $from_email = "info@starsboard.in"; 
         $to_email = $this->input->post('email'); 
        $msg="Welcome to Starsboard Education ! Dear User Your Sign up has been successfully for STARSBOARD. We're thrilled to have you on board. To get the most out of STARSBOARD. , do this primary next step: Access dashboard and Once you login into your dashboard then Select Become Educator and complete your registration. BECOME EDUCATOR Best Regards, STARSBOARD Education Flat Iamage (Whatsapp) -7977476239";
   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Starsboard'); 
         $this->email->to($to_email);
         $this->email->subject('Registration'); 
         $this->email->message($msg); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
   
                 
                 
                 
                if($insert){ 
                    $this->session->set_userdata('success_msg', 'Your account registration has been successful. Please login to your account.'); 
                    redirect('login'); 
                }else{ 
                    $data['error_msg'] = 'Some problems occured, please try again.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            } 
        } 
         
        // Posted data 
        $data['user'] = $userData; 
         $data['title']='Registration | Starsboard ';
        // Load view 
        $this->load->view('registration', $data); 
        } 
	}

  
     
   
     
    // Existing email check during validation 
    public function email_check($str){ 
        $con = array( 
            'returnType' => 'count', 
            'conditions' => array( 
                'email' => $str 
            ) 
        ); 
        $checkEmail = $this->user->getRows($con); 
        if($checkEmail > 0){ 
            $this->form_validation->set_message('email_check', 'The given email already exists.'); 
            return FALSE; 
        }else{ 
            return TRUE; 
        } 
    } 
}
