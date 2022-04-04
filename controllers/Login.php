<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 
    function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        $this->load->model('user'); 
        $this->load->library('email');
         
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
    } 
	public function index()
	{
		if($this->isUserLoggedIn){ 
            redirect('dashboard'); 
        }else{ 
            $data = array(); 
         
        // Get messages from the session 
        if($this->session->userdata('success_msg')){ 
            $data['success_msg'] = $this->session->userdata('success_msg'); 
            $this->session->unset_userdata('success_msg'); 
        } 
        if($this->session->userdata('error_msg')){ 
            $data['error_msg'] = $this->session->userdata('error_msg'); 
            $this->session->unset_userdata('error_msg'); 
        } 
         
        // If login request submitted 
        if($this->input->post('loginSubmit')){ 
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
            $this->form_validation->set_rules('password', 'password', 'required'); 
             
            if($this->form_validation->run() == true){ 
                $con = array( 
                    'returnType' => 'single', 
                    'conditions' => array( 
                        'email'=> $this->input->post('email'), 
                        'password' => md5($this->input->post('password')), 
                        'status' => 1 
                    ) 
                ); 
                $checkLogin = $this->user->getRows($con); 
                if($checkLogin){ 
                    $this->session->set_userdata('isUserLoggedIn', TRUE); 
                    $this->session->set_userdata('userId', $checkLogin['id']); 
					$this->session->set_userdata('username', $checkLogin['name']);
					$this->session->set_userdata('useremail', $checkLogin['email']);
					$this->session->set_userdata('usercreated', $checkLogin['created']);
                    if($checkLogin['user_type'] == "educator" && $checkLogin['educator'] == 0){
                        redirect('become_educator'); 
                    }else{
                        redirect('dashboard'); 
                    }
                }else{ 
                    $data['error_msg'] = 'Wrong email or password, please try again.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            } 
        } 
         
        // Load view 
        $data['title']='Login | Starsboard ';
        $this->load->view('login', $data); 
        } 
	}

     
      public function send() { 
         $from_email = "info@starsboard.in"; 
         $to_email = 'veerajay@icloud.com'; 
   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Your Name'); 
         $this->email->to($to_email);
         $this->email->subject('Email Test'); 
         $this->email->message('Testing the email class.'); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
        
      } 
     
    public function logout(){ 
        $this->session->unset_userdata('isUserLoggedIn'); 
        $this->session->unset_userdata('userId'); 
        $this->session->sess_destroy(); 
        redirect('login'); 
    } 
     
}
