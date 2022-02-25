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
            $this->form_validation->set_rules('phone', 'Phone', 'required'); 
            $this->form_validation->set_rules('password', 'password', 'required'); 
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]'); 
            $this->form_validation->set_rules('user_type', 'user_type', 'required'); 

 
            $userData = array( 
                'name' => strip_tags($this->input->post('name')), 
                'email' => strip_tags($this->input->post('email')), 
                'phone' => strip_tags($this->input->post('phone')), 
                'password' => md5($this->input->post('password')), 
                'user_type' => ($this->input->post('user_type')), 

            ); 
 
            if($this->form_validation->run() == true){ 
            echo $userData;
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
        
       
        //sendinblue mail config
        $receipents = array(array("email"=>$to_email,"name"=>$this->input->post('name')));
        $params["name"] =$this->input->post('name');
        if($this->input->post('user_type') == "learner"){
            $mailResponse = $this->sendMail($receipents, 2, $params);
        }else{
            $mailResponse = $this->sendMail($receipents, 1, $params);

        }

        //  Send mail 
        //  if($this->email->send()) 
        //  $this->session->set_flashdata("email_sent","Email sent successfully."); 
        //  else 
        //  $this->session->set_flashdata("email_sent","Error in sending Email."); 
                 
                if($insert){ 
                    $con = array( 
                        'returnType' => 'single', 
                        'conditions' => array( 
                            'email'=> $this->input->post('email'), 
                            'password' => md5($this->input->post('password')), 
                            'status' => 1 
                        ) 
                    ); 
                    $checkLogin = $this->user->getRows($con);
                    $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 

                    if($checkLogin){ 
                        $this->session->set_userdata('isUserLoggedIn', TRUE); 
                        $this->session->set_userdata('userId', $checkLogin['id']); 
                        $this->session->set_userdata('username', $checkLogin['name']);
                        $this->session->set_userdata('useremail', $checkLogin['email']);
                        $this->session->set_userdata('usercreated', $checkLogin['created']);
                        $this->session->set_userdata('user_type', $checkLogin['user_type']);
                        if($checkLogin['user_type'] == "educator"){
                            redirect('become_educator'); 
                        }else{
                            redirect('dashboard'); 
                        }
                        
                    }
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
