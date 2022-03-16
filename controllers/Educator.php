<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Educator extends CI_Controller {

	
	public function __construct() {        
    parent::__construct();
	$this->load->model('CommonMdl');
	$this->load->helper('url');
	$this->load->library("pagination");

		 
}
	
	public function index()
	{   $data=array();
		//Pagination
		$config = array();
		$config["base_url"] = base_url() . "educator/index/";
		$config["total_rows"] = $this->CommonMdl->get_count('tbl_educator');
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;

		// Pagination link format 
		// $config['use_page_numbers'] = TRUE;
		// $config['num_links'] = 5;
		// $config['cur_tag_open'] = '&nbsp;&nbsp;<a class="current">';
		// $config['cur_tag_close'] = '</a>&nbsp;&nbsp;';
		// $config['next_link'] = 'Next';
		// $config['prev_link'] = 'Previous';

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
		// $str_links = $this->pagination->create_links();
		// $data["links"] = explode('&nbsp;',$str_links );
		$data["links"] = $this->pagination->create_links();

		error_log("Pageination -> Page error log>>>>>>>>>>>".json_encode($page));
		$paginated_educators =$this->CommonMdl->get_paginatedRows($config["per_page"], $page, 'tbl_educator');

	
		if(empty($this->uri->segment(2))){
			
				redirect('/');
			}else{
				
				$searchString=$this->uri->segment(2);

				
				// $this->load->view('educator/index', $data);
				
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
					
					$educator= $this->CommonMdl->asPerFillter($config["per_page"], $page,'custom_educator', $edu_classArr,$edu_subjectArr,$edu_boardArr,$edu_examArr,$edu_carrerArr,$edu_courseArr,$edu_artArr,$edu_langArr);
					$data['listed']=$educator;
					error_log("Paginated Educators -------------: ".json_Encode($educator));
					//echo '<pre>';	print_r($data['listed']); die;
					$html['_html'] = $this->load->view('filltered_educator',$data,true);
					return $this->output->set_content_type('application/json')->set_output(json_encode($html));
		
			
			}else{
				// $educator= $this->CommonMdl->getliked('tbl_educator','searchString', $searchString);
				$educators= $this->CommonMdl->asPerFillter($config["per_page"], $page,'custom_educator', $edu_classArr,$edu_subjectArr,$edu_boardArr,$edu_examArr,$edu_carrerArr,$edu_courseArr,$edu_artArr,$edu_langArr);
					// $data['listed']=$educator;
					error_log("Paginated Educators -ELSE------------: ".json_Encode($educators));
					foreach ($educators as $educator) {
						$rating= $this->CommonMdl->getAvgRating($educator->educator_id);
						if(!empty($rating)){
							$avg_rating=(round($rating[0]->rating,2));
							$educator->avg_rating = $avg_rating;
						}else{
							$educator->avg_rating = '4';
						}
					}
					// $rating= $this->CommonMdl->getAvgRating($educator[]);

							//echo '<pre>';print_r($educator); die;
				if(!empty($educators)){
					$data['listed']=$educators;
					// $data['avg_rating'] = 
				}
					$data['edu_class']= $this->CommonMdl->getResult('edu_class', '*');
					$data['edu_sub']= $this->CommonMdl->getResult('edu_sub', '*');
					$data['edu_board']= $this->CommonMdl->getResult('edu_board', '*');
					$data['edu_exams']= $this->CommonMdl->getResult('edu_exams', '*');
					$data['edu_career']= $this->CommonMdl->getResult('edu_career', '*');
					$data['edu_course']= $this->CommonMdl->getResult('edu_course', '*');
					$data['edu_art']= $this->CommonMdl->getResult('edu_art', '*');
					$data['edu_lang']= $this->CommonMdl->getResult('edu_lang', '*');
					$data['categories']= $this->CommonMdl->getResult('category', '*');
					$data['cities']= $this->CommonMdl->getResult('city', '*');
					$data['title']='Educator | Starsboard ';

					// $data['category_search_id'] ="1";
					$this->load->view('educator', $data);
			
			}
				
				

		}
	}
	
	
}
