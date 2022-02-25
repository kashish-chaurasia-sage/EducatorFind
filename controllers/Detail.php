<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	
	public function __construct() {        
    parent::__construct();
	$this->load->model('CommonMdl');
		 $this->load->library('user_agent');
                  $this->load->model('user'); 
}
	
	public function educator()
	{   
	
	if(empty($this->uri->segment(3))){
		
			redirect('/');
		}else{
			 $data=array();
     	$data['title']=$this->uri->segment(2).' | Educator | Starsboard';
			$educator_id=$this->uri->segment(3);
			$educator = $this->CommonMdl->getResult('tbl_educator', '*', ['Eid' => $educator_id]);
			$longJsonInfo=$educator[0]->LongJsonInfo;
			//echo '<pre>';   print_r($educator);die;
			$personInfo = json_decode($longJsonInfo,true);
			$data['detail']=$personInfo[0];
			$data['Eid']=$educator[0]->Eid;
			$data['user_id']=$educator[0]->user_id;
	     	//echo '<pre>';   print_r($data['detail']);die;
			 $data['isFeaturedA']= $this->CommonMdl->getResult('tbl_educator', '*', ['isFeatured' => '1']);
			//echo '<pre>';   print_r($data['isFeaturedA']);die;
			$review=$this->CommonMdl->getReviewFront($educator_id);
	   //	echo '<pre>';	print_r($review); die;
			$total_review=count($review);
			if($total_review != '0'){
			$average[]='';
			foreach($review as $key =>$val){
				if(!empty($val->price_rating) && is_numeric($val->price_rating)){
				$average[] = $val->price_rating;
				}
			}
			$average_review = array_sum($average);
			
			
			$data['average_review']= round($average_review/$total_review, 2); 
			}
			$data['review']= $review;
				$data['total_review']= $total_review;
			
				//echo '<pre>';   print_r($data['review']);die;
				$liked = $this->CommonMdl->getResult('liked', '*', ['listing_educator_id' => $educator_id]);
			$total_liked=count($liked);
			$data['total_liked']= $total_liked;
			
		
		$this->load->view('detail',$data);
	}
	}
	public function enquiry(){
		$this->load->model('User');
		$this->load->model('CommonMdl');
		if($this->session->userdata('userId') != $this->input->post('listing_user_id')){
			
		
		$data = array(
				'listing_educator_id' => trim($this->input->post('listing_educator_id')),
				'user_id' => trim($this->input->post('listing_user_id')),
				'enquiry_name' => $this->input->post('enquiry_name'),
				'enquiry_email' => $this->input->post('enquiry_email'),
				'enquiry_mobile' => $this->input->post('enquiry_mobile'),
				'enquiry_message' => $this->input->post('enquiry_message'),
				'enquiry_by_id' => $this->session->userdata('userId')
			);
			
			$data = $this->security->xss_clean($data);
			$response =  $this->CommonMdl->insertRow($data,'lead');

		$from_email = "info@starsboard.in"; 
		error_log("User data 1----> ".json_encode($this->input->post('listing_educator_id')));
	    $educator_details= $this->User->getEducatorInfo($this->input->post('listing_educator_id'));
		$longJsonInfo=$educator_details[0]->LongJsonInfo;
			//echo '<pre>';   print_r($educator);die;
			$personInfo = json_decode($longJsonInfo,true);
			$Edudata=$personInfo[0];

		// $userInfo = $this->User->userInfo( $this->input->post('listing_educator_id'));
		error_log("Educator data2 ----> ".json_encode($Edudata["edu_email"]));
		// error_log("User data ----> ".json_encode($this->input->post('listing_educator_id')));

        $to_email = $Edudata["edu_email"]; 
//         $msg="New Student Enquiry

// Hi 
 
// A New Enquiry has been received on STARSBOARD. For reference, here's your enquiry information:
 
// Enquiry informations:
// Enquirer name: '.$this->input->post('enquiry_name').'
// Mobile Number : '.$this->input->post('enquiry_mobile').'
// Email Id : '.$this->input->post('e	nquiry_email').'
// Message :'.$this->input->post('enquiry_message').'
 

// Best Regards,
// STARSBOARD Education
// Flat Iamage (Whatsapp) -7977476239";

         //Load email library 
        //  $this->load->library('email'); 
   
        //  $this->email->from($from_email, 'Starsboard'); 
        //  $this->email->to($to_email);
        //  $this->email->subject('Enquiry'); 
        //  $this->email->message($msg); 


		$receipents = array(array("email"=>$to_email,"name"=>$this->input->post('name')));
		$params["name"] =$this->session->userdata('name');
		$params["e_name"] =$this->input->post('enquiry_name');
		$params["phone"] =$this->input->post('enquiry_mobile');
		$params["email"] =$this->input->post('enquiry_email');
		$params["message"] =$this->input->post('enquiry_message');

		$mailResponse = $this->sendMail($receipents, 7, $params);
		error_log("test1s");

			if($response){
				echo $message = '<div class="alert alert-success" role="alert">Your Enquiry Is Submitted Successfully!!!</div>';
			
			}else{
			echo 	$message = '<div class="alert alert-danger" role="alert">Oops!! Something Went Wrong Try Later!!!</div>';
			}
			}else{
			echo $message = '<div class="alert alert-warning" role="alert">You cannot make enquiry on your own listing!!</div>';
		
			}
			return $message;
				exit;
	}
	
	public function review(){
		
		
		if(($this->session->userdata('userId')) != ($this->input->post('listing_user_id'))){
			
		$data = array(
				'listing_educator_id' => trim($this->input->post('listing_educator_id')),
				'user_id' => trim($this->input->post('listing_user_id')),
				'price_rating' => $this->input->post('price_rating'),
				'review_name' => $this->input->post('review_name'),
				'review_mobile' => $this->input->post('review_mobile'),
				'review_email' => $this->input->post('review_email'),
				'review_city' => $this->input->post('review_city'),
				'review_message' => $this->input->post('review_message'),
				'review_by_id' => $this->session->userdata('userId')
			);
			
			$data = $this->security->xss_clean($data);
			
			$response =  $this->CommonMdl->insertRow($data,'review');
           
			if($response){
				echo $message = 'Your Review Is Submitted Successfully!!!';
			
			}else{
			echo 	$message = 'Oops!! Something Went Wrong Try Later!!!';
			}
			}else{
			echo '1';
			}
		
			
	}
	
	 public function liked(){
             if(!$this->session->userdata('isUserLoggedIn')){
			echo '0';
		}else{
		 if(($this->session->userdata('userId')) != ($this->input->post('listing_user_id'))){
              $checkLikeSql= $this->CommonMdl->getResult('liked', '*', ['review_by_id' => $this->session->userdata('userId'),'user_id' => $this->input->post('listing_user_id')]);
	      $countLiked=count($checkLikeSql);
              
              if($countLiked == '0'){
		       $data = array(
				'listing_educator_id' => trim($this->input->post('listing_educator_id')),
				'user_id' => trim($this->input->post('listing_user_id')),
				'review_by_id' => $this->session->userdata('userId')
			);
			
			$data = $this->security->xss_clean($data);
			
			$response =  $this->CommonMdl->insertRow($data,'liked');
                        if($response){
				echo $message = 'Your Liked added Successfully!!!';
			         }else{
			    echo $message = 'Oops!! Something Went Wrong Try Later!!!';
			  }
              }else{
                  echo '2';
              }}else{
			echo '1';
		
			}
                  }
	}
	
	public function generalEnquiry(){
		$data = array(
				'enquiry_name' => $this->input->post('enquiry_name'),
				'enquiry_mobile' => $this->input->post('enquiry_mobile'),
				'enquiry_email' => $this->input->post('enquiry_email'),
				'enquiry_category' => $this->input->post('category'),
				'enquiry_message' => $this->input->post('enquiry_message'),
			);
			
			$data = $this->security->xss_clean($data);
			
			$response =  $this->CommonMdl->insertRow($data,'enquiry');
            
         $to_email = $this->input->post('enquiry_message'); 
         
        $msg='New Student Enquiry

Hi 
 
A New Enquiry has been received on STARSBOARD. For reference, here s your enquiry information:

Best Regards,
STARSBOARD Education
Flat Iamage (Whatsapp) -7977476239';
         //Load email library 
         $this->load->library('email'); 
   $from_email = "info@starsboard.in"; 
        //  $this->email->from($from_email, 'Starsboard'); 
        //  $this->email->to($to_email);
        //  $this->email->subject('Enquiry'); 
        //  $this->email->message($msg);

		$receipents = array(array("email"=>$to_email,"name"=>$this->input->post('name')));
		$params["name"] =$this->session->userdata('name');
		$params["e_name"] =$this->input->post('enquiry_name');
		$params["phone"] =$this->input->post('enquiry_mobile');
		$params["email"] =$this->input->post('enquiry_email');
		$params["message"] =$this->input->post('enquiry_message');

		$mailResponse = $this->sendMail($receipents, 7, $params);
		error_log("test2");
			if($response){
				echo $message = 'Your Enquiry has been submiited successfuly!!!';
			
			}else{
			echo 	$message = 'Oops!! Something Went Wrong Try Later!!!';
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
