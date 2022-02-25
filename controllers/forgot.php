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
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
             
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
            //sendinblue mail config
            $receipents = array(array("email"=>$to_email));
            $params["reset_link"] =$reset_link;
            $mailResponse = $this->sendMail($receipents, 5, $params);
            // echo '1';
   
            if($this->sendMail($receipents, 5, $params)){
                echo '1';
                // error_log("ECHO 1 !");
            }else{
                // error_log("ECHO debugger !");

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

    public function sendMail($receipts,$templateId,$params){
		error_log("PARAMS -------------------------sendMail : ".json_encode($receipts));

		$fields = array();
		$fields["to"] = $receipts;
		
		$fields["templateId"] = $templateId;
		$fields["params"] = $params;
		$fields["headers"] = array(
			"X-Mailin-custom"=>"custom_header_1:custom_value_1|custom_header_2:custom_value_2|custom_header_3:custom_value_3",
			"charset"=>"iso-8859-1"
		);
		$curl = curl_init();
		$fields_string = json_encode($fields);
		// error_log($fields_string);

		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.sendinblue.com/v3/smtp/email",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => $fields_string,
		CURLOPT_HTTPHEADER => array(
			"accept: application/json",
			"api-key: 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",
			"content-type: application/json"
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
            error_log("error ".json_encode($receipts));

			return "cURL Error #:" . $err;
		} else {
			return $response;
		}
	}
     
}
