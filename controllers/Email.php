<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller{
   
    function  __construct(){
        parent::__construct();
    }
   
   function sendemail($to,$subject,$msg){
   $config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'sg2plzcpnl453271.prod.sin2.secureserver.net',
    'smtp_port' => 587,
    'smtp_user' => 'info@starsboard.in',
    'smtp_pass' => 'Stars@0123456789',
    'mailtype'  => 'html', 
    'charset'   => 'iso-8859-1'
);
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");



        $this->email->from('info@starsboard.in', 'Starsoard');
        $this->email->to($to); 

        $this->email->subject($subject);
        $this->email->message($msg);  

   if($this->email->send()){
	   echo 'Email sent';
   }else{

        echo $this->email->print_debugger();
   }
}
   
   
}
