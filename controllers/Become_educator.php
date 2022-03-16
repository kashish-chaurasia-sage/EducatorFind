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
            // $this->session->set_userdata('edu_city', $this->input->post('edu_city'));
            // $this->session->set_userdata('edu_country', $this->input->post('edu_country'));
            // $this->session->set_userdata('category', $this->input->post('category'));
            $this->session->set_userdata('servicecity', $this->input->post('servicecity'));
            $this->session->set_userdata('description', $this->input->post('description'));
            $this->session->set_userdata('edu_experience', $this->input->post('edu_experience'));
            $this->session->set_userdata('edu_mode', $this->input->post('edu_mode'));
            $this->session->set_userdata('edu_slot', $this->input->post('edu_slot'));
            $this->session->set_userdata('edu_image', $filename);
            $this->session->set_userdata('cover_image', $filename_banner);
            $this->session->set_userdata('edu_dob', $this->input->post('edu_dob'));

            redirect('become_educator/service');
        } else {
            // $data['city'] = $this->CommonMdl->getResult('city', '*');
            // $data['state'] = $this->CommonMdl->getResult('state', '*');
            // $data['country'] = $this->CommonMdl->getResult('country', '*');
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
            $this->session->set_userdata('lang_academic', $this->input->post('lang_academic'));
            $this->session->set_userdata('academic_cost', $this->input->post('academic_cost'));


            $this->session->set_userdata('exams', $this->input->post('exams'));
            $this->session->set_userdata('exam', $this->input->post('exam'));
            $this->session->set_userdata('lang_exam', $this->input->post('lang_exam'));
            $this->session->set_userdata('exam_cost', $this->input->post('exam_cost'));

            $this->session->set_userdata('counselling', $this->input->post('counselling'));
            $this->session->set_userdata('career_path', $this->input->post('career_path'));
            $this->session->set_userdata('lang_career', $this->input->post('lang_career'));
            $this->session->set_userdata('career_cost', $this->input->post('career_cost'));

            $this->session->set_userdata('arts', $this->input->post('arts'));
            $this->session->set_userdata('art', $this->input->post('art'));
            $this->session->set_userdata('lang_art', $this->input->post('lang_art'));
            $this->session->set_userdata('art_cost', $this->input->post('art_cost'));

            $this->session->set_userdata('languages', $this->input->post('languages'));
            $this->session->set_userdata('language', $this->input->post('language'));
            $this->session->set_userdata('lang_language', $this->input->post('lang_language'));
            $this->session->set_userdata('language_cost', $this->input->post('language_cost'));

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
            $this->session->set_userdata('servicecity', $this->input->post('servicecity'));
            $this->session->set_userdata('description', $this->input->post('description'));
            $this->session->set_userdata('edu_experience', $this->input->post('edu_experience'));
            $this->session->set_userdata('edu_mode', $this->input->post('edu_mode'));
            $this->session->set_userdata('edu_slot', $this->input->post('edu_slot'));
            $this->session->set_userdata('edu_image', $filename);
            $this->session->set_userdata('cover_image', $filename_banner);
            $this->session->set_userdata('edu_dob', $this->input->post('edu_dob'));

            redirect('become_educator');
        } else {

            $data['custom_class'] = $this->CommonMdl->getResult('custom_class', '*');
            $data['custom_board'] = $this->CommonMdl->getResult('custom_board', '*');
            $data['subjects'] = $this->CommonMdl->getSubCategorybyCategoryId(1);
            $data['exams'] =$this->CommonMdl->getSubCategorybyCategoryId(2);
            $data['career'] = $this->CommonMdl->getSubCategorybyCategoryId(3);
            $data['courses'] = $this->CommonMdl->getSubCategorybyCategoryId(6);
            $data['art'] =$this->CommonMdl->getSubCategorybyCategoryId(4);
            $data['lang'] = $this->CommonMdl->getSubCategorybyCategoryId(5);
            $data['custom_language'] = $this->CommonMdl->getResult('custom_language', '*');

            $this->load->view('become-educator-two', $data);
        }
    }



    public function offer() {
        $educatorData = [];
        $offerData = [];
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

            //Eg: string_exam :["Airline Transport Pilot License (ATPL)","Banks","Railways","Civil Services","Commercial Pilot License (CPL)"]
            //userdata('exam') : userdataexam : >>>>>>>>>>["105","106","107","108","109"]
            //exam :exam : >>>>>>>>>>"105,106,107,108,109",
            $string_class = [];
            $postedClass = $this->session->userdata('class');
            if (!empty($postedClass)) {
                foreach ($postedClass as $key => $val) {
                    $className = $this->CommonMdl->getResult('custom_class', 'class_name', ['class_id' => $val]);
                  if(isset($className[0])){
                    $string_class[] = $className[0]->class_name;
                  }
                }
            }

            $string_board = [];
            $postedBoard = $this->session->userdata('board');
            if (!empty($postedBoard)) {
                foreach ($postedBoard as $key => $val) {
                    $boardName = $this->CommonMdl->getResult('custom_board', 'board_name', ['board_id' => $val]);
                     if(isset($boardName[0])){
                    $string_board[] = $boardName[0]->board_name;
                     }
                }
            }


            $string_sub = [];
            $postedSubject = $this->session->userdata('subject');
            if (!empty($postedSubject)) {
                foreach ($postedSubject as $key => $val) {
                    $subjectName = $this->CommonMdl->getResult('custom_sub_category', 'sub_category_name', ['sub_category_id' => $val]);
                   if(isset($subjectName[0])){
                    $string_sub[] = $subjectName[0]->sub_category_name;
                   }
                }
            }

            $string_exam = [];
            $postedExam = $this->session->userdata('exam');
            if (!empty($postedExam)) {
                foreach ($postedExam as $key => $val) {
                    $examName = $this->CommonMdl->getResult('custom_sub_category', 'sub_category_name', ['sub_category_id' => $val]);
                    if(isset($examName[0])){
                    $string_exam[] = $examName[0]->sub_category_name;
                    }
                }
            }

            $string_career_path = [];
            $postedcareer_path = $this->session->userdata('career_path');
            if (!empty($postedcareer_path)) {
                foreach ($postedcareer_path as $key => $val) {
                    $career_pathName = $this->CommonMdl->getResult('custom_sub_category', 'sub_category_name', ['sub_category_id' => $val]);
                   if(isset($career_pathName[0])){
                    $string_career_path[] = $career_pathName[0]->sub_category_name;
                   }
                }
            }

            $string_language = [];
            $postedlanguage= $this->session->userdata('language');
            if (!empty($postedlanguage)) {
                foreach ($postedlanguage as $key => $val) {
                    $languageName = $this->CommonMdl->getResult('custom_sub_category', 'sub_category_name', ['sub_category_id' => $val]);
                   if(isset($languageName[0])){
                    $string_language[] = $languageName[0]->sub_category_name;
                   }
                }
            }

            $string_tech_course = [];
            $postedtech_course = $this->session->userdata('tech_course');
            if (!empty($postedtech_course)) {
                foreach ($postedtech_course as $key => $val) {
                    $tech_courseName = $this->CommonMdl->getResult('custom_sub_category', 'sub_category_name', ['sub_category_id' => $val]);
                    if(isset($tech_courseName[0])){
                    $tech_course[] = $tech_courseName[0]->sub_category_name;
                    }
                }
            }
            
            $string_art = [];
            $postedart = $this->session->userdata('art');
            if (!empty($postedart)) {
                foreach ($postedart as $key => $val) {
                    $artName = $this->CommonMdl->getResult('custom_sub_category', 'sub_category_name', ['sub_category_id' => $val]);
                   if(isset($artName[0])){
                    $string_art[] = $artName[0]->sub_category_name;
                   }
                }
            }


            //Eg: string_exam :["Airline Transport Pilot License (ATPL)","Banks","Railways","Civil Services","Commercial Pilot License (CPL)"]
            //userdata('exam') : userdataexam : >>>>>>>>>>["105","106","107","108","109"]
            //exam :exam : >>>>>>>>>>"105,106,107,108,109",

            //1. Academics
            $board ='';
            if (!empty($this->session->userdata('board'))) {
                $board = implode(",", $this->session->userdata('board'));
            }
            $class ='';
            if (!empty($this->session->userdata('class'))) {
                $class = implode(",", $this->session->userdata('class'));
            }
            $subject = '';
            if (!empty($this->session->userdata('subject'))) {
                $subject = implode(",", $this->session->userdata('subject'));
            }
            $lang_academic = '';
            if (!empty($this->session->userdata('lang_academic'))) {
                $lang_academic = implode(",", $this->session->userdata('lang_academic'));
            }

            //2. Competetive Exams
            $exam = '';
            if (!empty($this->session->userdata('exam'))) {
                $exam = implode(",", $this->session->userdata('exam'));
            }
            $lang_exam = '';
            if (!empty($this->session->userdata('lang_exam'))) {
                $lang_exam = implode(",", $this->session->userdata('lang_exam'));
            }

            //3. Art
            $art = '';
            if (!empty($this->session->userdata('art'))) {
                $art = implode(",", $this->session->userdata('art'));
            }
            $lang_art = '';
            if (!empty($this->session->userdata('lang_art'))) {
                $lang_art = implode(",", $this->session->userdata('lang_art'));
            }

            //4. Language
            $language = '';
            if (!empty($this->session->userdata('language'))) {
                $language = implode(",", $this->session->userdata('language'));
            }
            $lang_language = '';
            if (!empty($this->session->userdata('lang_language'))) {
                $lang_language = implode(",", $this->session->userdata('lang_language'));
            }
            
            //5. Professional Courses
            $prof_course = '';
            if (!empty($this->session->userdata('tech_course'))) {
                $prof_course = implode(",", $this->session->userdata('tech_course'));
            }
            $lang_prof= '';
            if (!empty($this->session->userdata('lang_prof'))) {
                $lang_prof = implode(",", $this->session->userdata('lang_prof'));
            }

            //5. Career Counselling
            $career_courses = '';
            if (!empty($this->session->userdata('tech_course'))) {
                $career_courses = implode(",", $this->session->userdata('tech_course'));
            }
            $lang_career= '';
            if (!empty($this->session->userdata('lang_career'))) {
                $lang_career = implode(",", $this->session->userdata('lang_career'));
            }

            // $keyword = '';
            $classArr = implode(",", $string_class);
            $boardArr = implode(",", $string_board);
            $subArr = implode(",", $string_sub);
            $examArr = implode(",", $string_exam);
            $artArr = implode(",", $string_art);
            $pcourseArr = implode(",", $string_tech_course);
            $langArr = implode(",", $string_language);
            $careerArr = implode(",", $string_career_path);
            $keyword = ($classArr ? $classArr : '') . ',' . ($boardArr ? $boardArr : '') . ',' . ($subArr ? $subArr : '') . ',' . ($examArr ? $examArr : '') . ',' . ($careerArr ? $careerArr : '') . ',' . ($pcourseArr ? $pcourseArr : '') . ',' . ($langArr ? $langArr : '') . ',' . ($artArr ? $artArr : '') ;
            $locationInfo  = $this->CommonMdl->getResult('custom_location', '*', ['pincode' => $this->session->userdata('edu_pincode')]);
            $city = $locationInfo[0]->city_name;
            $state = $locationInfo[0]->state_name;
            $country = $locationInfo[0]->country_name;

            
            $searchString = array();
            $LongJsonInfo = array(
                'user_id' => $this->session->userdata('userId'),
                // 'LongJsonInfo' => $LongJsonInfoData,
                'edu_name' => $this->session->userdata('edu_name'),
                'edu_number' => $this->session->userdata('edu_mobile'),
                'edu_email' => $this->session->userdata('edu_email'),
                'edu_whatsapp' => $this->session->userdata('edu_whatsapp'),
                'edu_location_id' => $locationInfo[0]->location_id,
                'edu_address' => $this->session->userdata('servicecity'),
                'search_string' => 'educator,' . 'teacher,' . 'tutor,'.','. $city .','. $state .','. $country .',' . $keyword . ',' . $this->session->userdata('servicecity') . ',' . $this->session->userdata('edu_name') ,
                'edu_image' => $this->session->userdata('edu_image'),
                'edu_cover_image' => $this->session->userdata('cover_image'),
                'edu_experience' =>  $this->session->userdata('edu_experience'),
                'edu_mode' =>  $this->session->userdata('edu_mode'),
                'edu_slot' =>  $this->session->userdata('edu_slot'),
                'class_id' => $class ? $class : '',
                'board_id' => $board ? $board : '',
                'edu_isfeatured' => '0',
                'edu_description' => $this->session->userdata('description'),
                'edu_dob' => $this->session->userdata('edu_dob'),
                'sort_order' => '0',
                'status' => '1',
                
            );

           
            if ($this->session->userdata('academic_cost') != '') {
                $exam = '1';
            } else {
                $exam = '0';
            }
            if ($this->session->userdata('art_cost') != '') {
                $art = '1';
            } else {
                $art = '0';
            }
            if ($this->session->userdata('exam_cost') != '') {
                $academic = '1';
            } else {
                $academic = '0';
            }
            if ($this->session->userdata('career_cost') != '') {
                $counselling = '1';
            } else {
                $counselling = '0';
            }
            if ($this->session->userdata('prof_cost') != '') {
                $training = '1';
            } else {
                $training = '0';
            }
            if ($this->session->userdata('language_cost') != '') {
                $language = '1';
            } else {
                $language = '0';
            }

            // error_log("******************************************************************************************");
            // error_log("OFFER FUNCTION - eduExamSubCategoryData : >>>>>>>>>>".json_encode($eduExamSubCategoryData));
            // error_log("OFFER FUNCTION - string exam : >>>>>>>>>>".json_encode($string_exam));
            // error_log("OFFER FUNCTION - userdataexam : >>>>>>>>>>".json_encode($this->session->userdata('exam')));
            // error_log("OFFER FUNCTION - exam : >>>>>>>>>>".json_encode($exam));

            
           $checkEducator = $this->CommonMdl->getResult('custom_educator', 'educator_id', ['user_id' => $this->session->userdata('userId')]);
            if (empty($checkEducator)) {
                $insertEducator = $this->CommonMdl->insertRow($LongJsonInfo, 'custom_educator');
                $UpdateUserData = array(
                    'educator' => '1',
                );

                $approval_status = $this->CommonMdl->updateData($UpdateUserData, ['id' => $this->session->userdata('userId')], 'users');
                $EidInfo =  $this->CommonMdl->getResult('custom_educator', 'educator_id', ['user_id' => $this->session->userdata('userId')]);
                $lastEid = $EidInfo[0]->educator_id;
                // error_log("EID: >>>>>>>>>>".json_encode($lastEid));

                //CUSTOM EDUCATOR OFFER TABLE
                $offerData = array(
                    'educator_id' =>  $lastEid,
                    'offer_name' => $this->input->post('offer_name'),
                    'offer_price' => $this->input->post('offers_price'),
                    'offer_description' => $this->input->post('offer_detials'),
                    'offer_image' => $filename_offer,
                    'offer_link' => $this->input->post('offer_link'),
                );

                $insertOffer = $this->CommonMdl->insertRow($offerData, 'custom_educator_offer');

                $academicSC = "";
                $artSC = "";
                $examSC = "";
                $careerSC = "";
                $langSC = "";
                if(!empty($this->session->userdata('subject'))){
                    $academicSC = implode(",", $this->session->userdata('subject'));

                }

                if(!empty($this->session->userdata('art'))){
                    $artSC = implode(",", $this->session->userdata('art'));

                }

                if(!empty($this->session->userdata('exam'))){
                    $examSC = implode(",", $this->session->userdata('exam'));

                }
                
                if(!empty($this->session->userdata('career_path'))){
                    $careerSC = implode(",", $this->session->userdata('career_path'));

                }
                
                if(!empty($this->session->userdata('language'))){
                    $langSC = implode(",", $this->session->userdata('language'));

                }
                $profSC = "";
                if(!empty($this->session->userdata('tech_course'))){
                    $profSC = implode(",", $this->session->userdata('tech_course'));

                }
                $academicSCL = "";

                if(!empty($this->session->userdata('lang_academic'))){
                    $academicSCL = implode(",", $this->session->userdata('lang_academic'));

                }
                $artSCL = "";

                if(!empty($this->session->userdata('lang_art'))){
                    $artSCL = implode(",", $this->session->userdata('lang_art'));

                }
                $examSCL = "";

                if(!empty($this->session->userdata('lang_exam'))){
                    $examSCL = implode(",", $this->session->userdata('lang_exam'));

                }
                $careerSCL = "";

                if(!empty($this->session->userdata('lang_career'))){
                    $careerSCL = implode(",", $this->session->userdata('lang_career'));

                }
                $langSCL = "";

                if(!empty($this->session->userdata('lang_language'))){
                    $langSCL = implode(",", $this->session->userdata('lang_language'));

                }
                $profSCL = "";

                if(!empty($this->session->userdata('lang_prof'))){
                    $profSCL = implode(",", $this->session->userdata('lang_prof'));

                }


                //CUSTOM EDUCATOR SUBCATEGORY TABLE
                $eduAcademicSubCategoryData = array(
                    'educator_id' =>  $lastEid,
                    'sub_category_id' => $academicSC ? $academicSC : '',
                    'language_id' => $academicSCL ? $academicSCL : '',
                    'cost' => $this->session->userdata('academic_cost'),
                    
                );

                $eduExamSubCategoryData = array(
                    'educator_id' =>  $lastEid,
                    'sub_category_id' =>  $examSC ? $examSC : '',
                    'language_id' => $examSCL ? $examSCL : '',
                    'cost' => $this->session->userdata('exam_cost'),
                    
                );
                $eduCareerSubCategoryData = array(
                    'educator_id' =>  $lastEid,
                    'sub_category_id' => $careerSC ? $careerSC : '',
                    'language_id' => $careerSCL ? $careerSCL : '',
                    'cost' => $this->session->userdata('career_cost'),
                    
                );
                $eduArtSubCategoryData = array(
                    'educator_id' => $lastEid,
                    'sub_category_id' => $artSC ? $artSC : '',
                    'language_id' => $artSCL ? $artSCL : '',
                    'cost' => $this->session->userdata('art_cost'),
                    
                );
                $eduLanguageSubCategoryData = array(
                    'educator_id' =>  $lastEid,
                    'sub_category_id' => $langSC ? $langSC : '',
                    'language_id' => $langSCL ? $langSCL : '',
                    'cost' => $this->session->userdata('language_cost'),
                    
                );
                $eduCoursesSubCategoryData = array(
                    'educator_id' =>  $lastEid,
                    'sub_category_id' => $profSC ? $profSC : '',
                    'language_id' => $profSCL ? $profSCL : '',
                    'cost' => $this->session->userdata('prof_cost'),
                    
                );
                error_log("prof errorlog".json_encode($eduCoursesSubCategoryData));
                error_log("prof errorlog2".json_encode($course));


                if (!empty($subject)){
                    $insertSub = $this->CommonMdl->insertRow($eduAcademicSubCategoryData, 'custom_educator_sub_category');
                }
                if (!empty($exam)){
                    $insertExam = $this->CommonMdl->insertRow($eduExamSubCategoryData, 'custom_educator_sub_category');
                }
                if (!empty($counselling)){
                    $insertCareer = $this->CommonMdl->insertRow($eduCareerSubCategoryData, 'custom_educator_sub_category');
                }
                if (!empty($art)){
                    $insertArt = $this->CommonMdl->insertRow($eduArtSubCategoryData, 'custom_educator_sub_category');
                }
                if (!empty($training)){
                    $insertProf = $this->CommonMdl->insertRow($eduCoursesSubCategoryData, 'custom_educator_sub_category');
                }
                if (!empty($language)){
                    $insertLang = $this->CommonMdl->insertRow($eduLanguageSubCategoryData, 'custom_educator_sub_category');
                }

                // Email to user here 
                // $listingLink = '';
                // $listingLink = base_url('detail/'.preg_replace('/[[:space:]]+/', '-', strtolower($this->session->userdata('edu_name')).'/'.$lastEid));
                       
                $from_email = "info@starsboard.in"; 
                $to_email = $this->session->userdata('useremail'); 
                
                //Load email library 
                $this->load->library('email'); 
        
                $this->email->from($from_email, 'Starsboard'); 
                $this->email->to($to_email);
                // $this->email->subject('Become Educator'); 
                //-- $this->email->message($msg);
         
                $receipents = array(array("email"=>$to_email,"name"=>$this->input->post('name')));
                $params["name"] = $this->session->userdata('edu_name');
                // error_log("CATEGORY : >>>>>>>>>>".json_encode($this->session->userdata('category')));
               
                $category = $this->session->userdata('category');
                $categoryString = " ";
               
                if (!empty($subject)){
                    $categoryString =   $categoryString . "|Academic| " ;
                }
                if (!empty($exam)){
                    $categoryString =  $categoryString . "|Competetive Exams| " ;
                }
                if (!empty($counselling)){
                    $categoryString =  $categoryString ."|Career Counselling| " ;
                }
                if (!empty($art)){
                    $categoryString =  $categoryString ."|Art| " ;
                }
                if (!empty($training)){
                    $categoryString =  $categoryString ."|Professional Training| " ;
                }
                if (!empty($language)){
                    $categoryString =  $categoryString ."|Language Learning| " ;
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
            $this->session->set_userdata('lang_academic', $this->input->post('lang_academic'));
            $this->session->set_userdata('academic_cost', $this->input->post('academic_cost'));


            $this->session->set_userdata('exams', $this->input->post('exams'));
            $this->session->set_userdata('exam', $this->input->post('exam'));
            $this->session->set_userdata('lang_exam', $this->input->post('lang_exam'));
            $this->session->set_userdata('exam_cost', $this->input->post('exam_cost'));

            $this->session->set_userdata('counselling', $this->input->post('counselling'));
            $this->session->set_userdata('career_path', $this->input->post('career_path'));
            $this->session->set_userdata('lang_career', $this->input->post('lang_career'));
            $this->session->set_userdata('career_cost', $this->input->post('career_cost'));

            $this->session->set_userdata('arts', $this->input->post('arts'));
            $this->session->set_userdata('art', $this->input->post('art'));
            $this->session->set_userdata('lang_art', $this->input->post('lang_art'));
            $this->session->set_userdata('art_cost', $this->input->post('art_cost'));

            $this->session->set_userdata('languages', $this->input->post('languages'));
            $this->session->set_userdata('language', $this->input->post('language'));
            $this->session->set_userdata('lang_language', $this->input->post('lang_language'));
            $this->session->set_userdata('language_cost', $this->input->post('language_cost'));

            $this->session->set_userdata('training', $this->input->post('training'));
            $this->session->set_userdata('tech_course', $this->input->post('tech_course'));
            $this->session->set_userdata('art', $this->input->post('art'));
            $this->session->set_userdata('lang_prof', $this->input->post('lang_prof'));
            $this->session->set_userdata('prof_cost', $this->input->post('prof_cost'));
            redirect('become_educator/service');
            
        }else {
            $this->load->view('become-educator-three');
        }
    }

    public function finish() {
        $user_id=$this->session->userdata('userId');
		$dataEid= $this->CommonMdl->getResult('custom_educator', 'educator_id', ['user_id' => $this->session->userdata('userId')]);
		$eid =  $dataEid[0]->educator_id;
		$data['eid'] = $eid;
		// error_log("BECOME EDUCATOR FINISH".json_encode($data));
        $this->load->view('become-educator-finish',$data);
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
            // error_log("error ".json_encode($receipts));

			return "cURL Error #:" . $err;
		} else {
			return $response;
		}
	}

}
