<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct() {        
		parent::__construct();
		$this->load->model('CommonMdl');
		$this->load->helper('url');
		$this->load->library("pagination");
	}

	public function index()
	{ 
	    $data=array(); 
	        $data['title']='Starsboard | Online Educator | Find Teacher';
			$data['academic']= $this->CommonMdl->getResult('tbl_educator', '*', array('academic' => '1'),array('col_name'=>'Eid','order'=>'desc'),'5');
		//echo '<pre>';	print_r($data['academic']); die;
			$data['counselling']= $this->CommonMdl->getResult('tbl_educator', '*', array('counselling' => '1'),array('col_name'=>'Eid','order'=>'desc'),'5');
			$data['training']= $this->CommonMdl->getResult('tbl_educator', '*',  array('training' => '1'),array('col_name'=>'Eid','order'=>'desc'),'5');
			$data['isFeaturedA']= $this->CommonMdl->getResult('tbl_educator', '*',array('isFeatured' => '1'),array('col_name'=>'Eid','order'=>'desc'),'5');
			$data['isFeaturedB']= $this->CommonMdl->getResult('tbl_educator', '*', array('isFeatured' => '1'),array('col_name'=>'Eid','order'=>'asc'),'5');
		
		    $math= $this->CommonMdl->getliked('tbl_educator','searchString', 'math');
		        $data['math']=count($math);
			$kids_coding= $this->CommonMdl->getliked('tbl_educator','prof_course', '3');
			$data['kids_coding']=count($kids_coding); 
			$upsc= $this->CommonMdl->getliked('tbl_educator','searchString', 'upsc');
			$data['upsc']=count($upsc); 
			$cpl= $this->CommonMdl->getliked('tbl_educator','searchString', 'cpl');
			$data['cpl']=count($cpl); 
			
			$app= $this->CommonMdl->getliked('tbl_educator','prof_course', '15');
			$data['app']=count($app);
           
	   	    $foriegn_lang= $this->CommonMdl->getliked('tbl_educator','academic_lang', '1');
			$data['foriegn_lang']=count($foriegn_lang);	
			$digital= $this->CommonMdl->getliked('tbl_educator','prof_course', '4');
			$data['digital']=count($digital);
			$arts= $this->CommonMdl->getliked('tbl_educator','searchString', 'art');
			$data['arts']=count($arts);			
			
			
			
		
		$this->load->view('welcome_message',$data);
	}
	
	public function fromcat(){
		error_log("_________________________________________________________________________________");
		error_log("POST WELCOME *************************".json_Encode($this->input->post()));
		$config = array();
		$config["base_url"] = base_url() . "welcome/fromcat";
		$config["total_rows"] = $this->CommonMdl->get_count('custom_educator');
		$config["per_page"] = "";
		$config["uri_segment"] = 3;

		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';


		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$page = "";
		$cat='';
		$city='';
		$mode='';
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
			// $edu_subjectArr = $this->input->post('edu_sub');
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
	
		error_log("_________________________________________________________________________________");
		$cat=$this->input->post('cat');
		$city=$this->input->post('city');
		$mode=$this->input->post('mode');
		$educators= $this->CommonMdl->asPerFillter($config["per_page"], $page,'custom_educator', $cat,$city,$mode,$edu_classArr,$edu_subjectArr,$edu_boardArr,$edu_examArr,$edu_carrerArr,$edu_courseArr,$edu_artArr,$edu_langArr);

		// $educators= $this->CommonMdl->asPerCategory($config["per_page"], $page,'custom_educator', $cat);
		foreach ($educators as $educator) {
			$rating= $this->CommonMdl->getAvgRating($educator->educator_id);
			if(!empty($rating)){
				$avg_rating=(round($rating[0]->rating,2));
				$educator->avg_rating = $avg_rating;
			}else{
				$educator->avg_rating = '3.5';
			}
			
			$teachingCategories= $this->CommonMdl->getTeachingCategories($educator->educator_id);
			if(!empty($teachingCategories)){
				// error_log("Teaching Categories of Educator -----> ".json_encode($teachingCategories));
				$educator->categories = $teachingCategories;
			}

		}
		$data['listed']=$educators;
		// $data["links"] = $this->pagination->create_links();

		error_log("Welcome func. cat data".json_encode($cat));

		error_log("Welcome func. Educator list".json_encode($educators));
		$html['_html'] = $this->load->view('filltered_educator',$data,true);
		return $this->output->set_content_type('application/json')->set_output(json_encode($html));
   
	}
}
