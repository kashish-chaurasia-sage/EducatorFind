<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Educator extends CI_Controller {

	
	public function __construct() {        
    parent::__construct();
	$this->load->model('CommonMdl');
		 
}
	
	public function index()
	{   
	
	if(empty($this->uri->segment(2))){
		
			redirect('/');
		}else{
			$data=array();
			$searchString=$this->uri->segment(2);
			
			$data['title']=$searchString.' | Educator | Starsboard';
			
			$edu_subjectArr='';
			$edu_classArr='';
			$edu_boardArr='';
			$edu_examArr='';
			$edu_carrerArr='';
			$edu_courseArr='';
			$edu_artArr='';
			$edu_langArr='';
			
				if(!empty($this->input->post('edu_sub'))){
				$edu_sub=$this->input->post('edu_sub');
				$edu_subjectArr=implode(",",$edu_sub);
			    }
			
				if(!empty($this->input->post('edu_class'))){
						$edu_class=$this->input->post('edu_class');
				$edu_classArr=implode(",",$edu_class);
				}
				
				if(!empty($this->input->post('edu_board'))){
						$edu_board=$this->input->post('edu_board');
				$edu_boardArr=implode(",",$edu_board);
				}
				
				if(!empty($this->input->post('edu_exam'))){
						$edu_exam=$this->input->post('edu_exam');
				$edu_examArr=implode(",",$edu_exam);
				}
				
				if(!empty($this->input->post('edu_carrer'))){
						$edu_carrer=$this->input->post('edu_carrer');
				$edu_carrerArr=implode(",",$edu_carrer);
				}
				
				if(!empty($this->input->post('edu_course'))){
						$edu_course=$this->input->post('edu_course');
				$edu_courseArr=implode(",",$edu_course);
				}
				if(!empty($this->input->post('edu_art'))){
						$edu_art=$this->input->post('edu_art');
				$edu_artArr=implode(",",$edu_art);
				}
				
				if(!empty($this->input->post('edu_lang'))){
						$edu_lang=$this->input->post('edu_lang');
				$edu_langArr=implode(",",$edu_lang);
				}
				
			if(!empty($edu_subjectArr)||!empty($edu_classArr)||!empty($edu_boardArr)||!empty($edu_examArr)||!empty($edu_carrerArr)||!empty($edu_courseArr)||!empty($edu_artArr)||!empty($edu_langArr)){
				
				$educator= $this->CommonMdl->asPerFillter('tbl_educator', $edu_classArr,$edu_subjectArr,$edu_boardArr,$edu_examArr,$edu_carrerArr,$edu_courseArr,$edu_artArr,$edu_langArr);
			 $data['listed']=$educator;
		//echo '<pre>';	print_r($data['listed']); die;
		     $html['_html'] = $this->load->view('filltered_educator',$data,true);
   			 return $this->output->set_content_type('application/json')->set_output(json_encode($html));
   
		
		}else{
			$educator= $this->CommonMdl->getliked('tbl_educator','searchString', $searchString);
						//echo '<pre>';print_r($educator); die;
			if(!empty($educator)){
			$data['listed']=$educator;
			}
                         $data['edu_class']= $this->CommonMdl->getResult('edu_class', '*');
			$data['edu_sub']= $this->CommonMdl->getResult('edu_sub', '*');
			$data['edu_board']= $this->CommonMdl->getResult('edu_board', '*');
			$data['edu_exams']= $this->CommonMdl->getResult('edu_exams', '*');
			$data['edu_career']= $this->CommonMdl->getResult('edu_career', '*');
			$data['edu_course']= $this->CommonMdl->getResult('edu_course', '*');
			$data['edu_art']= $this->CommonMdl->getResult('edu_art', '*');
			$data['edu_lang']= $this->CommonMdl->getResult('edu_lang', '*');
			$data['title']='Educator | Starsboard ';
		        $this->load->view('educator',$data);
		
		}
			
			

	}
	}
	
	
}
