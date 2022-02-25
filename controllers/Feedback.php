<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{  
	    test();
	    $data=array();
	    	$data['title']=' Feedbacks | Starsboard';
		$this->load->view('feedback' ,$data);
	}
	
	 public function send_mail() { 
         $from_email = "info@starsboard.in"; 
         $to_email = 'vivekpaswan624@gmail.com'; 
         $msg="SUB - 	Welcome to Starsboard Education !
			Dear User
			
			Your Sign up has been successfully for STARSBOARD. We're thrilled to have you on board. To get the most out of STARSBOARD. , do this primary next step:
			
			Access dashboard and Once you login into your dashboard then Select Become Educator and complete your registration.
			
			BECOME EDUCATOR
			
			Best Regards,
			STARSBOARD Education
			Flat Iamage (Whatsapp) -7977476239";
   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Your Name'); 
         $this->email->to($to_email);
         $this->email->subject('Email Test'); 
         $this->email->message($msg); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         
      } 
}
