<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {        
    parent::__construct();
	$this->load->model('CommonMdl');
		 
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
		$cat='';
		
		 $cat=$this->input->post('cat');
		 $educator= $this->CommonMdl->asPerCategory('tbl_educator',$cat);
		 $data['listed']=$educator;
		 $html['_html'] = $this->load->view('filltered_educator',$data,true);
   	     return $this->output->set_content_type('application/json')->set_output(json_encode($html));
   
	}
}
