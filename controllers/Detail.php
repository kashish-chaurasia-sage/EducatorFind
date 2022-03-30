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

			// $longJsonInfo=$educator[0]->LongJsonInfo;
			// $personInfo = json_decode($longJsonInfo,true);
			// $data['detail']=$personInfo[0];
			$isFeatured= $this->CommonMdl->getResult('custom_educator', '*', ['edu_isfeatured' => '0']);
			$data['isFeatured'] = $isFeatured;
						// echo '<pre>';   print_r($isFeatured);die;

			$review=$this->CommonMdl->getReviewFront($educator_id);
			$total_review=count($review);
			$average_review = "4";
			$avg = 3.5;
			if($total_review != '0'){
				$average[]='';
				foreach($review as $key =>$val){
					if(!empty($val->price_rating) && is_numeric($val->price_rating)){
					$average[] = $val->price_rating;
					}
				}
				$average_review = array_sum($average);
			
				$avg= round($average_review/$total_review, 2); 

				
			}
			$data['average_review'] = $avg;
			$data['percentage_review'] = ($avg/5)*100 ."%";

			$data['review']= $review;
			$data['total_review']= $total_review;
			
			$liked = $this->CommonMdl->getResult('liked', '*', ['listing_educator_id' => $educator_id]);
			$total_liked=count($liked);
			$data['total_liked']= $total_liked;

			$educatorInfo= $this->CommonMdl->getResult('custom_educator', '*', ['educator_id' => $educator_id]);
			$base_fare = $this->CommonMdl->getBaseFareEducator( $educator_id);
			// $data['base_fare'] = $base_fare[0];
			$data['base_fare'] = $base_fare[0]->basefare;
			// echo '<pre>';   print_r($base_fare[0]->basefare);die;

			$locationInfo  = $this->CommonMdl->getResult('custom_location', '*', ['location_id' => $educatorInfo[0]->edu_location_id]);
			$educatorInfo[0]->pincode = $locationInfo[0]->pincode;
			$educatorInfo[0]->city = $locationInfo[0]->city_name;
			$educatorInfo[0]->state = $locationInfo[0]->state_name;
            $educatorInfo[0]->country = $locationInfo[0]->country_name;
			$data['Eid']=$educatorInfo[0]->educator_id;
			$data['user_id']=$educatorInfo[0]->user_id;
			$data['educator']= $educatorInfo[0];

			$offerInfo = $this->CommonMdl->getResult('custom_educator_offer', '*', ['educator_id' => $educator_id]);
			$data['offerInfo'] = $offerInfo[0];
			$enquiry=$this->CommonMdl->getResult('lead', '*', ['listing_educator_id' =>$educatorInfo[0]->educator_id]);
			$total_enquiry=count($enquiry);
			$data['enquiry'] = $total_enquiry;

			
			// echo '<pre>';   print_r($total_enquiry);die;

			//Kashish: Arrays for Educator Category
			$classArray = array();
			$boardsArray = array();
			
			if(!empty($educatorInfo[0]->class_id) || $educatorInfo[0]->class_id!=0 ){
				$classIDs =  (explode(",",$educatorInfo[0]->class_id));
			}
			if($educatorInfo[0]->class_id!=0){
				foreach ($classIDs as $class_id){
					if($class_id){
						$classInfo  = $this->CommonMdl->getClassName($class_id);
						array_push($classArray,$classInfo[0]['class_name']);

					}	
				}
			}

			if(!empty($educatorInfo[0]->board_id)|| $educatorInfo[0]->board_id!=0){
				$boardIDs =  (explode(",",$educatorInfo[0]->board_id));
			}
			if($educatorInfo[0]->board_id!=0){
				foreach ($boardIDs as $board_id){
					if($board_id){
						$boardsInfo  = $this->CommonMdl->getBoardName($board_id);
						array_push($boardsArray,$boardsInfo[0]['board_name']);

					}	
				}
			}

			$subjects = array();
			$subjectsLang = array();
			$subjectsData = array();
			
			$exams = array();
			$examsLang = array();
			$examsData = array();

			$career = array();
			$careerLang = array();
			$careerData = array();

			$art = array();
			$artLang = array();
			$artData = array();

			$language = array();
			$languageLang = array();
			$languageData = array();

			$profCourses = array();
			$profCoursesLang = array();
			$profCoursesData = array();

			$CategoryIDs = array(1, 2, 3, 4, 5, 6);
			$base_fare = "0";
			foreach ($CategoryIDs as $CategoryID){
				$subCategoryInfo = $this->CommonMdl->getEducatorCategorySubCategories($educator_id, $CategoryID);
				if(!empty($subCategoryInfo)){
					if(!empty($subCategoryInfo[0]['sub_category_id'])){
						$subIds =  (explode(",",$subCategoryInfo[0]['sub_category_id']));
					}

					foreach ($subIds as $subId){

						if($subId){

							$subCategoryNameInfo = $this->CommonMdl->getSubCategoryNamebySubID($subId);
							if($subCategoryNameInfo[0]['sub_category_name']){
								if($CategoryID == 1){
									array_push($subjects,$subCategoryNameInfo[0]['sub_category_name']);
									
								}elseif($CategoryID == 2){
									array_push($exams,$subCategoryNameInfo[0]['sub_category_name']);

								}elseif($CategoryID == 3){
									array_push($career,$subCategoryNameInfo[0]['sub_category_name']);

								}elseif($CategoryID == 4){
									array_push($art,$subCategoryNameInfo[0]['sub_category_name']);

								}elseif($CategoryID == 5){
									array_push($language,$subCategoryNameInfo[0]['sub_category_name']);

								}else{
									array_push($profCourses,$subCategoryNameInfo[0]['sub_category_name']);

								}
							}


						}
					}

					if(!empty($subCategoryInfo[0]['cost'])){
						if($CategoryID == 1){
							array_push($subjectsData,$subCategoryInfo[0]['cost']);
							
						}elseif($CategoryID == 2){
							array_push($examsData,$subCategoryInfo[0]['cost']);

						}elseif($CategoryID == 3){
							array_push($careerData,$subCategoryInfo[0]['cost']);

						}elseif($CategoryID == 4){
							array_push($artData,$subCategoryInfo[0]['cost']);

						}elseif($CategoryID == 5){
							array_push($languageData,$subCategoryInfo[0]['cost']);

						}else{
							array_push($profCoursesData,$subCategoryInfo[0]['cost']);

						}

					}

					if(!empty($subCategoryInfo[0]['language_id'])){
						$langIds =  (explode(",",$subCategoryInfo[0]['language_id']));
					}

					foreach ($langIds as $langId){
						if($langId){

							$languageInfo = $this->CommonMdl->getLanguageInfoByLanguageID($langId);
							// echo '<pre>';   print_r($languageInfo[0]['language_name']);die;
							if($languageInfo[0]['language_name']){
								if($CategoryID == 1){
									array_push($subjectsLang,$languageInfo[0]['language_name']);
									
								}elseif($CategoryID == 2){
									array_push($examsLang,$languageInfo[0]['language_name']);

								}elseif($CategoryID == 3){
									array_push($careerLang,$languageInfo[0]['language_name']);

								}elseif($CategoryID == 4){
									array_push($artLang,$languageInfo[0]['language_name']);

								}elseif($CategoryID == 5){
									array_push($languageLang,$languageInfo[0]['language_name']);

								}else{
									array_push($profCoursesLang,$languageInfo[0]['language_name']);

								}
							}
						}
					}
				}
			}
			if(!empty($subjectsData[0])){
				array_push($subjectsData,$subjects,$subjectsLang);
			}
			if(!empty($examsData[0])){
				array_push($examsData,$exams,$examsLang);
			}
			if(!empty($careerData[0])){
				array_push($careerData,$career,$careerLang);
			}
			if(!empty($artData[0])){
				array_push($artData,$art,$artLang);
			}
			if(!empty($languageData[0])){
				array_push($languageData,$language,$languageLang);
			}
			if(!empty($profCoursesData[0])){
				array_push($profCoursesData,$profCourses,$profCoursesLang);
			}


			$data['classArray'] = $classArray;
			$data['boardsArray'] = $boardsArray;
			$data['subjectsArray'] = $subjectsData;
			$data['examsArray'] = $examsData;
			$data['careerArray'] = $careerData;
			$data['artArray'] = $artData;
			$data['languageArray'] = $languageData;
			$data['profCoursesArray'] = $profCoursesData;
			
			// echo '<pre>';   print_r(($subjectsData));die;

			// $examInfo = $this->CommonMdl->getEducatorCategorySubCategories($educator_id, 2);
			// $careerInfo = $this->CommonMdl->getEducatorCategorySubCategories($educator_id, 3);
			// $artInfo = $this->CommonMdl->getEducatorCategorySubCategories($educator_id, 4);
			// $languageInfo = $this->CommonMdl->getEducatorCategorySubCategories($educator_id, 5);
			// $profInfo = $this->CommonMdl->getEducatorCategorySubCategories($educator_id, 6);
			// $data['academic'] = 1;
			// $data['competetive_exams'] =1;
			// $data['career_counselling'] =1;
			// $data['art'] =1;
			// $data['language_learning'] =1;
			// $data['prof_courses'] =1;
			// $academicsInfo
			
			// echo '<pre>';   print_r($boardsArray );die;

		
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
		// error_log("User data 1----> ".json_encode($this->input->post('listing_educator_id')));
	    // $educator_details= $this->User->getEducatorInfo($this->input->post('listing_educator_id'));
		$educator_details= $this->CommonMdl->getResult('custom_educator', '*', ['educator_id' => $this->input->post('listing_educator_id')]);

		// $longJsonInfo=$educator_details[0]->LongJsonInfo;
			//echo '<pre>';   print_r($educator);die;
			// $personInfo = json_decode($longJsonInfo,true);
			

		// $userInfo = $this->User->userInfo( $this->input->post('listing_educator_id'));
		// error_log("Educator data2 ----> ".json_encode($Edudata["edu_email"]));
		// error_log("User data ----> ".json_encode($this->input->post('listing_educator_id')));

        $to_email = $educator_details[0]->edu_email;
		// $to_email = "Kashish.chaurasia10@gmail.com"; 
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
			if($response){
				echo $message = 'Your Enquiry has been submiited successfuly!!!';
			
			}else{
			echo 	$message = 'Oops!! Something Went Wrong Try Later!!!';
			}
			
		
			
	}
	public function sendMail($receipts,$templateId,$params){
		// error_log("PARAMS -------------------------sendMail : ".json_encode($receipts));

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
