<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_become_educator extends CI_Controller {

public function __construct(){
		parent:: __Construct();
		if(!$this->session->userdata('isUserLoggedIn')){
			redirect('login');
		}
		$this->load->model('CommonMdl');
	}
	public function index()
	{  
	$data = array(); 
	if($this->input->post('edu_per_submit')){
		$user_id=$this->session->userdata('userId');
		    if(!empty($_FILES['edu_image']['name'])){ 
			if (!file_exists('uploads/'.$user_id.'/')) {
			mkdir('uploads/' . $user_id, 0777, TRUE);
			}
         // Set preference 
         $config['upload_path'] = 'uploads/'.$user_id.'/'; 
         $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
         $config['max_size'] = '2000'; // max_size in kb 
         //$config['file_name'] = $_FILES['edu_image']['name']; 

         // Load upload library 
         $this->load->library('upload',$config); 
   
         // File upload
         if($this->upload->do_upload('edu_image')){ 
            // Get data about the file
            $uploadData_edu_image = $this->upload->data(); 
            $filename = $uploadData_edu_image['file_name']; 
          }
			}
		  
		   if(!empty($_FILES['cover_image']['name'])){ 
          // Load upload library 
           $this->load->library('upload',$config); 
   
         // File upload
         if($this->upload->do_upload('cover_image')){ 
            // Get data about the file
            $uploadData = $this->upload->data(); 
            $filename_banner = $uploadData['file_name']; 
          }
          }
		 $this->session->set_userdata('edu_name', $this->input->post('edu_name')); 
		 $this->session->set_userdata('edu_mobile', $this->input->post('edu_mobile')); 
		 $this->session->set_userdata('edu_email', $this->input->post('edu_email')); 
		 $this->session->set_userdata('edu_whatsapp', $this->input->post('edu_whatsapp'));
		 $this->session->set_userdata('edu_address', $this->input->post('edu_address')); 
		 $this->session->set_userdata('edu_city', $this->input->post('edu_city')); 
		 $this->session->set_userdata('edu_country', $this->input->post('edu_country')); 
		 $this->session->set_userdata('category', $this->input->post('category'));		 
		 $this->session->set_userdata('servicecity', $this->input->post('servicecity')); 
		 $this->session->set_userdata('description', $this->input->post('description')); 
		 $this->session->set_userdata('edu_image', $filename); 
		 $this->session->set_userdata('cover_image', $filename_banner);		 
					redirect('become_educator/service'); 
	}else{
		$data['Eid']= $this->CommonMdl->getResult('tbl_educator', 'Eid', ['user_id' => $this->session->userdata('userId')]);
	    $educator_details= $this->CommonMdl->getResult('tbl_educator', '*', ['Eid' => $data['Eid'][0]->Eid]);
	// echo '<pre>'; print_r($educator_details[0]->user_id); die;
	 $educator = json_decode($educator_details[0]->LongJsonInfo,true);
	 $data['user_id'] = $educator_details[0]->user_id;
	 $data['educator'] = $educator[0];
	//  echo '<pre>'; print_r($educator[0]); die;
	$data['title']='Update Educator details | Starsboard ';
	   $this->load->view('update-become-educator',$data);
		}
		
	}
	
	public function service()
	{
		if($this->input->post('edu_ser_submit')){
		 $this->session->set_userdata('academic', $this->input->post('academic')); 
		  $this->session->set_userdata('class', $this->input->post('class')); 
		  $this->session->set_userdata('subject', $this->input->post('subject')); 
		 $this->session->set_userdata('board', $this->input->post('board')); 
		 $this->session->set_userdata('exam', $this->input->post('exam'));
		 $this->session->set_userdata('lang_academic', $this->input->post('lang_academic')); 
		 $this->session->set_userdata('counselling', $this->input->post('counselling')); 
		 $this->session->set_userdata('career_path', $this->input->post('career_path')); 
		 $this->session->set_userdata('lang_coun', $this->input->post('lang_coun')); 
		 $this->session->set_userdata('price_coun', $this->input->post('price_coun'));		 
		 $this->session->set_userdata('training', $this->input->post('training')); 
		 $this->session->set_userdata('tech_course', $this->input->post('tech_course')); 
		 $this->session->set_userdata('lang_prof', $this->input->post('lang_prof')); 	
	 $this->session->set_userdata('price_prof', $this->input->post('price_prof')); 			 
					redirect('become_educator/offer'); 
	}else{
		$data['Eid']= $this->CommonMdl->getResult('tbl_educator', 'Eid', ['user_id' => $this->session->userdata('userId')]);
	    $data['educator_data']= $this->CommonMdl->getResult('tbl_educator', '*', ['Eid' => $data['Eid'][0]->Eid]);
	    $this->load->view('update-become-educator-two',$data);
	}
	}
	
	public function offer()
	{
		$educatorData=[];
		if($this->input->post('edu_offer_submit')){
		$user_id=$this->session->userdata('userId');
		// Set preference 
         $config['upload_path'] = 'uploads/'.$user_id.'/'; 
         $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
         $config['max_size'] = '2000'; // max_size in kb 
         //$config['file_name'] = $_FILES['edu_image']['name']; 

         // Load upload library 
         $this->load->library('upload',$config); 
   
         // File upload
         if($this->upload->do_upload('offers_image')){ 
            // Get data about the file
            $uploadData_edu_image = $this->upload->data(); 
            $filename_offer = $uploadData_edu_image['file_name']; 
          }
	
	 $educatorData[]=[
      'edu_name'=> $this->session->userdata('edu_name'),
	  'edu_mobile'=> $this->session->userdata('edu_mobile'),
	  'edu_email'=> $this->session->userdata('edu_email'),
	  'edu_whatsapp'=> $this->session->userdata('edu_whatsapp'),
	  'edu_city'=> $this->session->userdata('edu_city'),
	  'edu_country'=> $this->session->userdata('edu_country'),
	  'category'=> $this->session->userdata('category'),
	  'servicecity'=> $this->session->userdata('servicecity'),
	  'description'=> $this->session->userdata('description'),
	  'edu_image'=> $this->session->userdata('edu_image'),
	  'cover_image'=> $this->session->userdata('cover_image'),
	  'academic'=> $this->session->userdata('academic'),
	  'class'=> $this->session->userdata('class'),
	  'subject'=> $this->session->userdata('subject'),
	  'board'=> $this->session->userdata('board'),
	  'exam'=> $this->session->userdata('exam'),
	  'lang_academic'=> $this->session->userdata('lang_academic'),
	  'counselling'=> $this->session->userdata('counselling'),
	  'career_path'=> $this->session->userdata('career_path'),
	  'lang_coun'=> $this->session->userdata('lang_coun'),
	  'price_coun'=> $this->session->userdata('price_coun'),
	  'training'=> $this->session->userdata('training'),
	  'tech_course'=> $this->session->userdata('tech_course'),
	  'lang_prof'=> $this->session->userdata('lang_prof'),
	  'price_prof'=>$this->session->userdata('price_prof'),
	  'offer_name'=>$this->input->post('offer_name'),
	  'offers_price'=>$this->input->post('offers_price'),
	  'offer_detials'=>$this->input->post('offer_detials'),
	  'offers_image'=>$filename_offer,
	  'offer_link'=>$this->input->post('offer_link'),
	 ];
	if($this->session->userdata('academic') != ''){
		$academic='1';
	}else{
		$academic='0';
	}
	if($this->session->userdata('counselling') != ''){
		$counselling='1';
	}else{
		$counselling='0';
	}
	if($this->session->userdata('training') != ''){
		$training='1';
	}else{
		$training='0';
	}
	$board=implode(",",$this->session->userdata('board'));
	$subject=implode(",",$this->session->userdata('subject'));
	$lang_academic=implode(",",$this->session->userdata('lang_academic'));
	$exam=implode(",",$this->session->userdata('exam'));
	$tech_course=implode(",",$this->session->userdata('tech_course'));
	$career_path=implode(",",$this->session->userdata('career_path'));
	$keyword=$board.','.$subject.','.$exam.','.$tech_course.','.$lang_academic;
	 $LongJsonInfoData = json_encode($educatorData);
	 $educator_class=implode(",",$this->session->userdata('class'));
	 $prof_course=implode(",",$this->session->userdata('tech_course'));
	 $prof_lang=implode(",",$this->session->userdata('lang_prof'));
	 $concelling_lang=implode(",",$this->session->userdata('lang_coun'));
	 
        $searchString=array(
		);
		 $LongJsonInfo = array(
		                    'user_id' => $this->session->userdata('userId'),
							'LongJsonInfo' => $LongJsonInfoData,
							'edu_name' => $this->session->userdata('edu_name'),
							'edu_address' => $this->session->userdata('edu_address'),
							'edu_city' => $this->session->userdata('edu_city'),
							'edu_state' => $this->session->userdata('edu_city'),
						     'searchString' => 'educator,'.'teacher,'.'tutor,'.$this->session->userdata('edu_city').','.$this->session->userdata('edu_address').','.$this->session->userdata('country').','.$this->session->userdata('academic').','.$this->session->userdata('counselling').','.$this->session->userdata('training').','.$keyword.','.$this->session->userdata('servicecity'),
							//'searchString' =>$keyword,
							'edu_image' => $this->session->userdata('edu_image'),
							'cover_imag  e' => $this->session->userdata('cover_image'),
							'academic'=>$academic,
							'counselling'=>$counselling,
							'training'=>$training,
							'educator_class'=>$educator_class,
							'edu_subject'=>$subject,
							'edu_board'=>$board,
							'edu_exam'=>$exam,
							'career_path'=>$career_path,
							'prof_course'=>$prof_course,
							'prof_lang'=>$prof_lang,
							'concelling_lang'=>$concelling_lang,
							'academic_lang'=>$lang_academic,
							);
						 
					  //  $insetEducator = $this->CommonMdl->insertRow($LongJsonInfo,'tbl_educator');
					   $approval_status = $this->CommonMdl->updateData($LongJsonInfo,['user_id'=>$this->session->userdata('userId')],'users');
	      	
						redirect('update-become_educator/finish'); 
	}else{
		$data['Eid']= $this->CommonMdl->getResult('tbl_educator', 'Eid', ['user_id' => $this->session->userdata('userId')]);
	    $data['educator_data']= $this->CommonMdl->getResult('tbl_educator', '*', ['Eid' => $data['Eid'][0]->Eid]);
	    $this->load->view('update-become-educator-three',$data);
	}
	}
	
	public function finish()
	{
		$this->load->view('update-become-educator-finish');
	}
}
