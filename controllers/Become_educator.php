<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Become_educator extends CI_Controller {

    public function __construct() {
        parent:: __Construct();
        if (!$this->session->userdata('isUserLoggedIn')) {
            redirect('login');
        }
        $this->load->model('CommonMdl');
    }

    public function index() {
         $data=array();
     	$data['title']='Starsboard | Become Educator | Become online Teacher';
        if ($this->input->post('edu_per_submit')) {
            $user_id = $this->session->userdata('userId');
            if (!empty($_FILES['edu_image']['name'])) {
                if (!file_exists('uploads/' . $user_id . '/')) {
                    mkdir('uploads/' . $user_id, 0777, TRUE);
                }
                // Set preference 
                $config['upload_path'] = 'uploads/' . $user_id . '/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = '20000'; // max_size in kb 
                //$config['file_name'] = $_FILES['edu_image']['name']; 
                // Load upload library 
                $this->load->library('upload', $config);

                // File upload
                if ($this->upload->do_upload('edu_image')) {
                    // Get data about the file
                    $uploadData_edu_image = $this->upload->data();
                    $filename = $uploadData_edu_image['file_name'];
                }
            }

            if (!empty($_FILES['cover_image']['name'])) {
                // Load upload library 
                $this->load->library('upload', $config);

                // File upload
                if ($this->upload->do_upload('cover_image')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $filename_banner = $uploadData['file_name'];
                }
            }
            $this->session->set_userdata('edu_name', $this->input->post('edu_name'));
            $this->session->set_userdata('edu_mobile', $this->input->post('edu_mobile'));
            $this->session->set_userdata('edu_email', $this->input->post('edu_email'));
            $this->session->set_userdata('edu_whatsapp', $this->input->post('edu_whatsapp'));
            $this->session->set_userdata('edu_pincode', $this->input->post('edu_pincode'));
            $this->session->set_userdata('edu_city', $this->input->post('edu_city'));
            $this->session->set_userdata('edu_country', $this->input->post('edu_country'));
            // $this->session->set_userdata('category', $this->input->post('category'));
            $this->session->set_userdata('servicecity', $this->input->post('servicecity'));
            $this->session->set_userdata('description', $this->input->post('description'));
            $this->session->set_userdata('edu_experience', $this->input->post('edu_experience'));
            $this->session->set_userdata('edu_mode', $this->input->post('edu_mode'));
            $this->session->set_userdata('edu_slot', $this->input->post('edu_slot'));
            $this->session->set_userdata('edu_image', $filename);
            $this->session->set_userdata('cover_image', $filename_banner);
            redirect('become_educator/service');
        } else {
            $data['city'] = $this->CommonMdl->getResult('city', '*');
            // $data['state'] = $this->CommonMdl->getResult('state', '*');
            $data['country'] = $this->CommonMdl->getResult('country', '*');
            // $data['edu_exams'] = $this->CommonMdl->getResult('edu_exams', '*');
            // $data['edu_career'] = $this->CommonMdl->getResult('edu_career', '*');
            // $data['edu_course'] = $this->CommonMdl->getResult('edu_course', '*');
            // $data['edu_art'] = $this->CommonMdl->getResult('edu_art', '*');
            // $data['edu_lang'] = $this->CommonMdl->getResult('edu_lang', '*');
            $this->load->view('become-educator',$data);
        }
    }

    public function service() {
        if ($this->input->post('edu_ser_submit')) {
            $this->session->set_userdata('academic', $this->input->post('academic'));
            $this->session->set_userdata('class', $this->input->post('class'));
            $this->session->set_userdata('subject', $this->input->post('subject'));
            $this->session->set_userdata('board', $this->input->post('board'));
            $this->session->set_userdata('exam', $this->input->post('exam'));
            $this->session->set_userdata('lang_academic', $this->input->post('lang_academic'));
            $this->session->set_userdata('academic_cost', $this->input->post('academic_cost'));
            $this->session->set_userdata('counselling', $this->input->post('counselling'));
            $this->session->set_userdata('career_path', $this->input->post('career_path'));
            $this->session->set_userdata('lang_career', $this->input->post('lang_career'));
            $this->session->set_userdata('career_cost', $this->input->post('career_cost'));
            $this->session->set_userdata('training', $this->input->post('training'));
            $this->session->set_userdata('tech_course', $this->input->post('tech_course'));
            $this->session->set_userdata('art', $this->input->post('art'));
            $this->session->set_userdata('lang_prof', $this->input->post('lang_prof'));
            $this->session->set_userdata('prof_cost', $this->input->post('prof_cost'));
            redirect('become_educator/offer');
        }elseif ($this->input->post('edu_per_submit')) {
            $this->session->set_userdata('edu_name', $this->input->post('edu_name'));
            $this->session->set_userdata('edu_mobile', $this->input->post('edu_mobile'));
            $this->session->set_userdata('edu_email', $this->input->post('edu_email'));
            $this->session->set_userdata('edu_whatsapp', $this->input->post('edu_whatsapp'));
            $this->session->set_userdata('edu_pincode', $this->input->post('edu_pincode'));
            $this->session->set_userdata('edu_city', $this->input->post('edu_city'));
            $this->session->set_userdata('edu_country', $this->input->post('edu_country'));
            // $this->session->set_userdata('category', $this->input->post('category'));
            $this->session->set_userdata('servicecity', $this->input->post('servicecity'));
            $this->session->set_userdata('description', $this->input->post('description'));
            $this->session->set_userdata('edu_experience', $this->input->post('edu_experience'));
            $this->session->set_userdata('edu_mode', $this->input->post('edu_mode'));
            $this->session->set_userdata('edu_slot', $this->input->post('edu_slot'));
            $this->session->set_userdata('edu_image', $filename);
            $this->session->set_userdata('cover_image', $filename_banner);
            redirect('become_educator');
        } else {

            $data['edu_class'] = $this->CommonMdl->getResult('edu_class', '*');
            $data['edu_sub'] = $this->CommonMdl->getResult('edu_sub', '*');
            $data['edu_board'] = $this->CommonMdl->getResult('edu_board', '*');
            $data['edu_exams'] = $this->CommonMdl->getResult('edu_exams', '*');
            $data['edu_career'] = $this->CommonMdl->getResult('edu_career', '*');
            $data['edu_course'] = $this->CommonMdl->getResult('edu_course', '*');
            $data['edu_art'] = $this->CommonMdl->getResult('edu_art', '*');
            $data['edu_lang'] = $this->CommonMdl->getResult('edu_lang', '*');

            $this->load->view('become-educator-two', $data);
        }
    }

    public function offer() {
        $educatorData = [];
        if ($this->input->post('edu_offer_submit')) {
            $user_id = $this->session->userdata('userId');
            // Set preference 
            $config['upload_path'] = 'uploads/' . $user_id . '/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '2000'; // max_size in kb 
            //$config['file_name'] = $_FILES['edu_image']['name']; 
            // Load upload library 
            $this->load->library('upload', $config);

            // File upload
            if ($this->upload->do_upload('offers_image')) {
                // Get data about the file
                $uploadData_edu_image = $this->upload->data();
                $filename_offer = $uploadData_edu_image['file_name'];
            }
            $edu_class = [];

            $postedClass = $this->session->userdata('class');
            if (!empty($postedClass)) {
                foreach ($postedClass as $key => $val) {
                    $classSql = $this->CommonMdl->getResult('edu_class', 'edu_class_title', ['edu_class_id' => $val]);
                  if(isset($classSql[0])){
                    $edu_class[] = $classSql[0]->edu_class_title;
                  }
                }
            }

            $edu_sub = [];
            $postedSubject = $this->session->userdata('subject');
            if (!empty($postedSubject)) {
                foreach ($postedSubject as $key => $val) {
                    $subjectSql = $this->CommonMdl->getResult('edu_sub', 'edu_sub_title', ['edu_sub_id' => $val]);
                   if(isset($subjectSql[0])){
                    $edu_sub[] = $subjectSql[0]->edu_sub_title;
                   }
                }
            }
            $edu_board = [];
            $postedBoard = $this->session->userdata('board');
            if (!empty($postedBoard)) {
                foreach ($postedBoard as $key => $val) {
                    $boardSql = $this->CommonMdl->getResult('edu_board', 'edu_board_title', ['edu_board_id' => $val]);
                     if(isset($boardSql[0])){
                    $edu_board[] = $boardSql[0]->edu_board_title;
                     }
                }
            }
            $edu_exam = [];
            $postedExam = $this->session->userdata('exam');
            if (!empty($postedExam)) {
                foreach ($postedExam as $key => $val) {
                    $examSql = $this->CommonMdl->getResult('edu_exams', 'edu_exams_title', ['edu_exams_id' => $val]);
                    if(isset($examSql[0])){
                    $edu_exam[] = $examSql[0]->edu_exams_title;
                    }
                }
            }
            $lang_academic = [];
            $postedlang_academic = $this->session->userdata('lang_academic');
            if (!empty($postedlang_academic)) {
                foreach ($postedlang_academic as $key => $val) {
                    $lang_academicSql = $this->CommonMdl->getResult('edu_lang', 'edu_lang_title', ['edu_lang_id' => $val]);
                      if(isset($lang_academicSql[0])){
                    $lang_academic[] = $lang_academicSql[0]->edu_lang_title;
                      }
                }
            }
            $career_path = [];
            $postedcareer_path = $this->session->userdata('career_path');
            if (!empty($postedcareer_path)) {
                foreach ($postedcareer_path as $key => $val) {
                    $career_pathSql = $this->CommonMdl->getResult('edu_career', 'edu_career_title', ['edu_career_id' => $val]);
                   if(isset($career_pathSql[0])){
                    $career_path[] = $career_pathSql[0]->edu_career_title;
                   }
                }
            }

            $lang_coun = [];
            $postedlang_coun = $this->session->userdata('lang_coun');
            if (!empty($postedlang_coun)) {
                foreach ($postedlang_coun as $key => $val) {
                    $lang_counSql = $this->CommonMdl->getResult('edu_lang', 'edu_lang_title', ['edu_lang_id' => $val]);
                    if(isset($lang_counSql[0])){
                    $lang_academic[] = $lang_counSql[0]->edu_lang_title;
                    }
                }
            }
            $tech_course = [];
            $postedtech_course = $this->session->userdata('tech_course');
            if (!empty($postedtech_course)) {
                foreach ($postedtech_course as $key => $val) {
                    $tech_courseSql = $this->CommonMdl->getResult('edu_course', 'edu_course_title', ['edu_course_id' => $val]);
                    if(isset($tech_courseSql[0])){
                    $tech_course[] = $tech_courseSql[0]->edu_course_title;
                    }
                }
            }
            
            
            $edu_art = [];
            $postedart = $this->session->userdata('art');
            if (!empty($postedart)) {
                foreach ($postedart as $key => $val) {
                    $artSql = $this->CommonMdl->getResult('edu_art', 'edu_art_title', ['edu_art_id' => $val]);
                   if(isset($artSql[0])){
                    $edu_art[] = $artSql[0]->edu_art_title;
                   }
                }
            }
            $lang_prof = [];
            $postedlang_prof = $this->session->userdata('lang_prof');
            if (!empty($postedlang_prof)) {
                foreach ($postedlang_prof as $key => $val) {
                    $lang_profSql = $this->CommonMdl->getResult('edu_lang', 'edu_lang_title', ['edu_lang_id' => $val]);
                      if(isset($lang_profSql[0])){
                    $lang_prof[] = $lang_profSql[0]->edu_lang_title;
                      }
                }
            }


            $educatorData[] = [
                'edu_name' => $this->session->userdata('edu_name'),
                'edu_mobile' => $this->session->userdata('edu_mobile'),
                'edu_email' => $this->session->userdata('edu_email'),
                'edu_whatsapp' => $this->session->userdata('edu_whatsapp'),
                'edu_city' => $this->session->userdata('edu_city'),
                'edu_country' => $this->session->userdata('edu_country'),
                'category' => $this->session->userdata('category'),
                'servicecity' => $this->session->userdata('servicecity'),
                'description' => $this->session->userdata('description'),
                'edu_experience' =>  $this->session->userdata('edu_experience'),
                'edu_mode' =>  $this->session->userdata('edu_mode'),
                'edu_slot' =>  $this->session->userdata('edu_slot'),
                'edu_image' => $this->session->userdata('edu_image'),
                'cover_image' => $this->session->userdata('cover_image'),
                'academic' => $this->session->userdata('academic'),
                'class' => $edu_class ? $edu_class : '',
                'subject' => $edu_sub ? $edu_sub : '',
                'board' => $edu_board ? $edu_board : '',
                'exam' => $edu_exam ? $edu_exam : '',
                'academic_lang' => $lang_academic ? $lang_academic : '',
                'academic_cost'=>  $this->session->userdata('academic_cost'),
                'prof_cost'=>  $this->session->userdata('prof_cost'),
                'career_cost'=>  $this->session->userdata('career_cost'),
                'counselling' => $this->session->userdata('counselling'),
                'career_path' => $career_path ? $career_path : '',
                'career_lang' => $lang_academic ? $lang_academic : '',
                // 'price_coun' => $this->session->userdata('price_coun'),
                'training' => $this->session->userdata('training'),
                'tech_course' => $tech_course ? $tech_course : '',
                'art' => $edu_art ? $edu_art : '',
                'prof_lang' => $lang_prof,
                // 'price_prof' => $this->session->userdata('price_prof'),
                'offer_name' => $this->input->post('offer_name'),
                'offers_price' => $this->input->post('offers_price'),
                'offer_detials' => $this->input->post('offer_detials'),
                'offers_image' => $filename_offer,
                'offer_link' => $this->input->post('offer_link'),
            ];
            if ($this->session->userdata('academic') != '') {
                $academic = '1';
            } else {
                $academic = '0';
            }
            if ($this->session->userdata('counselling') != '') {
                $counselling = '1';
            } else {
                $counselling = '0';
            }
            if ($this->session->userdata('training') != '') {
                $training = '1';
            } else {
                $training = '0';
            }
            if (!empty($this->session->userdata('board'))) {
                $board = implode(",", $this->session->userdata('board'));
            }
            $subject = '';
            if (!empty($this->session->userdata('subject'))) {
                $subject = implode(",", $this->session->userdata('subject'));
            }
            $lang_academic = '';
            if (!empty($this->session->userdata('lang_academic'))) {
                $lang_academic = implode(",", $this->session->userdata('lang_academic'));
            }
            $exam = '';
            if (!empty($this->session->userdata('exam'))) {
                $exam = implode(",", $this->session->userdata('exam'));
            }
            $tech_course2 = '';
            if (!empty($this->session->userdata('tech_course'))) {
                $tech_course2 = implode(",", $this->session->userdata('tech_course'));
            }
            $career_path2 = '';
            if (!empty($this->session->userdata('career_path'))) {
                $career_path2 = implode(",", $this->session->userdata('career_path'));
            }
            $LongJsonInfoData = json_encode($educatorData);

            $educator_class = '';
            if (!empty($this->session->userdata('class'))) {
                $educator_class = implode(",", $this->session->userdata('class'));
            }
            $prof_course = '';
            if (!empty($this->session->userdata('tech_course'))) {
                $prof_course = implode(",", $this->session->userdata('tech_course'));
            }
            $art = '';
            if (!empty($this->session->userdata('art'))) {
                $art = implode(",", $this->session->userdata('art'));
            }
            $prof_lang = '';
            if (!empty($this->session->userdata('lang_prof'))) {
                $prof_lang = implode(",", $this->session->userdata('lang_prof'));
            }
            $career_lang = '';
            if (!empty($this->session->userdata('lang_coun'))) {
                $career_lang = implode(",", $this->session->userdata('lang_coun'));
            }
            
            $tech_courseKeyword = '';
            if (!empty($tech_course)) {
                $tech_courseKeyword = implode(",", $tech_course);
            }
           
            
            
            $career_pathKeyword = '';
            if (!empty($career_path)) {
                $career_pathKeyword = implode(",", $career_path);
            }
            
            $keyword = '';
            $edu_classArr = implode(",", $edu_class);
            $edu_boardArr = implode(",", $edu_board);
            $edu_subArr = implode(",", $edu_sub);
            $edu_examArr = implode(",", $edu_exam);
            $edu_subArr = implode(",", $edu_sub);
            $edu_courseArr = implode(",", $tech_course);
            $lang_academicArr = implode(",", $lang_academic);
            $edu_artArr = implode(",", $edu_art);
            $keyword = ($edu_classArr ? $edu_classArr : '') . ',' . ($edu_boardArr ? $edu_boardArr : '') . ',' . ($edu_subArr ? $edu_subArr : '') . ',' . ($edu_examArr ? $edu_examArr : '') . ',' . ($career_path ? $career_path : '') . ',' . ($edu_courseArr ? $edu_courseArr : '') . ',' . ($lang_academicArr ? $lang_academicArr : '') . ',' . ($edu_artArr ? $edu_artArr : '') . ',' . ((!empty($edu_art)) ? 'art' : '') . ',' . ((!empty($edu_exam)) ? 'exam' : '');
 
            $searchString = array();
            $LongJsonInfo = array(
                'user_id' => $this->session->userdata('userId'),
                'LongJsonInfo' => $LongJsonInfoData,
                'edu_name' => $this->session->userdata('edu_name'),
                'edu_pincode' => $this->session->userdata('edu_pincode'),
                'edu_city' => $this->session->userdata('edu_city'),
                'edu_country' => $this->session->userdata('edu_country'),
                'edu_address' => $this->session->userdata('servicecity'),
                'searchString' => 'educator,' . 'teacher,' . 'tutor,' . $this->session->userdata('edu_city') . ',' . $this->session->userdata('edu_pincode') . ',' . $this->session->userdata('country') . ',' . $this->session->userdata('academic') . ',' . $this->session->userdata('counselling') . ',' . $this->session->userdata('training') . ',' . $keyword . ',' . $this->session->userdata('servicecity'). ',' . $career_pathKeyword. ',' .$tech_courseKeyword ,
                'edu_image' => $this->session->userdata('edu_image'),
                'cover_image' => $this->session->userdata('cover_image'),
                'edu_experience' =>  $this->session->userdata('edu_experience'),
                'edu_mode' =>  $this->session->userdata('edu_mode'),
                'edu_slot' =>  $this->session->userdata('edu_slot'),
                'academic_cost'=>  $this->session->userdata('academic_cost'),
                'prof_cost'=>  $this->session->userdata('prof_cost'),
                'career_cost'=>  $this->session->userdata('career_cost'),
                'academic' => $academic ? $academic : '',
                'counselling' => $counselling ? $counselling : '',
                'training' => $training ? $training : '',
                'educator_class' => $educator_class ? $educator_class : '',
                'edu_subject' => $subject ? $subject : '',
                'edu_board' => $board ? $board : '',
                'edu_exam' => $exam ? $exam : '',
                'career_path' => $career_path2 ? $career_path2 : '',
                'prof_course' => $tech_course2 ? $tech_course2 : '',
                'art' => $art ? $art : '',
                'prof_lang' => $prof_lang ? $prof_lang : '',
                'career_lang' => $career_lang ? $career_lang : '',
                'academic_lang' => $lang_academic ? $lang_academic : '',
            );
            
           $checkEducator = $this->CommonMdl->getResult('tbl_educator', 'Eid', ['user_id' => $this->session->userdata('userId')]);
            if (empty($checkEducator)) {
                $insetEducator = $this->CommonMdl->insertRow($LongJsonInfo, 'tbl_educator');
                $UpdateUserData = array(
                    'educator' => '1',
                );

                $approval_status = $this->CommonMdl->updateData($UpdateUserData, ['id' => $this->session->userdata('userId')], 'users');
                $lastEid = $this->db->insert_id();
//                           Email to user here 
                $listingLink = '';
                $listingLink = base_url('detail/'.preg_replace('/[[:space:]]+/', '-', strtolower($this->session->userdata('edu_name')).'/'.$lastEid));
                       
         $from_email = "info@starsboard.in"; 
         $to_email = $this->session->userdata('useremail'); 
      $msg="Become Educator Successful!

HI ".$this->session->userdata('edu_name')."
 
Your Online Educator registration has been successfully created on STARSBOARD. For your reference Educator details below.
 
Educator information:
Complete Listing Details
Category : ".$this->session->userdata('category')."
Service Area  : ".$this->session->userdata('servicecity').",
 
 
Best Regards,
STARSBOARD Education
Flat Iamage (Whatsapp) -7977476239";
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Starsboard'); 
         $this->email->to($to_email);
         $this->email->subject('Become Educator'); 
         $this->email->message($msg);
         
        $receipents = array(array("email"=>$to_email,"name"=>$this->input->post('name')));
        $params["name"] = $this->session->userdata('edu_name');
        error_log("CATEGORY : >>>>>>>>>>".json_encode($this->session->userdata('category')));
        $category = $this->session->userdata('category');
        $categoryString = " ";
        if (in_array("1", $category)){
            $categoryString =   $categoryString . "|Academic| " ;
        }
        if (in_array("2", $category)){
            $categoryString =  $categoryString . "|Career Counselling| " ;
        }
        if (in_array("3", $category)){
            $categoryString =  $categoryString ."|Professional Training| " ;
        }
        
        $params["category"] =  $categoryString;
        $params["email"] =$this->session->userdata('useremail');
        $params["phone"] =$this->session->userdata('edu_mobile');
        
        $mailResponse = $this->sendMail($receipents, 4, $params);
        echo 'You are our now our verified educator';

   
                // if ($this->email->send()) {
                //     echo 'You are our now our verified educator';
                // }
            }
            redirect('become_educator/finish');
        } elseif ($this->input->post('edu_per_submit')) {
           
            $this->session->set_userdata('academic', $this->input->post('academic'));
            $this->session->set_userdata('class', $this->input->post('class'));
            $this->session->set_userdata('subject', $this->input->post('subject'));
            $this->session->set_userdata('board', $this->input->post('board'));
            $this->session->set_userdata('exam', $this->input->post('exam'));
            $this->session->set_userdata('lang_academic', $this->input->post('lang_academic'));
            $this->session->set_userdata('counselling', $this->input->post('counselling'));
            $this->session->set_userdata('career_path', $this->input->post('career_path'));
            $this->session->set_userdata('lang_coun', $this->input->post('lang_coun'));
            $this->session->set_userdata('career_cost', $this->input->post('career_cost'));
            $this->session->set_userdata('training', $this->input->post('training'));
            $this->session->set_userdata('tech_course', $this->input->post('tech_course'));
            $this->session->set_userdata('art', $this->input->post('art'));
            $this->session->set_userdata('lang_prof', $this->input->post('lang_prof'));
            $this->session->set_userdata('prof_cost', $this->input->post('prof_cost'));
            $this->session->set_userdata('academic_cost', $this->input->post('academic_cost'));
            redirect('become_educator/service');
            
        }else {
            $this->load->view('become-educator-three');
        }
    }

    public function finish() {
        $this->load->view('become-educator-finish');
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
