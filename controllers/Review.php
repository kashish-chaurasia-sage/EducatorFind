<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isUserLoggedIn')){
			redirect('login');
		}
	$this->load->model('CommonMdl');
		 
}
	public function index()
	{   
	$data['user_data']= $this->CommonMdl->getResult('users', '*', ['id' => $this->session->userdata('userId')]);
	$educator = $this->CommonMdl->getResult('custom_educator', '*', ['user_id' => $this->session->userdata('userId')]);
	// echo '<pre>';   print_r($data['user_data']);die;
	// if(!empty($educator)){

		if(!empty($educator)){
			$reviews= $this->CommonMdl->getResult('custom_review', '*', array('educator_id' => $educator[0]->educator_id));
			$learner = $this->CommonMdl->getResult('custom_learner', '*', ['user_id' => $this->session->userdata('userId')]);
			foreach ($reviews as $review) {
				$data['user_data2']= $this->CommonMdl->getResult('users', '*', ['id' => $review->user_id]);
				$review->learner_name = $data['user_data2'][0]->name;
			}
		}else{
			$reviews = "";
		}

		// $data['review']= $this->CommonMdl->getResult('custom_review', '*', array('educator_id' => $educator[0]->educator_id));

		// $data['receivedreview']
		$sentReviews= $this->CommonMdl->getResult('custom_review', '*', array('user_id' => $this->session->userdata('userId')));
		// echo '<pre>';   print_r($sentReviews);die;

		if(!empty($sentReviews)){
			foreach ($sentReviews as $sentReview) {
								// echo '<pre>';   print_r($sentReview->educator_id);die;
				$sentReviewEducatorInfo =  $this->CommonMdl->getResult('custom_educator', '*', ['educator_id' => $sentReview->educator_id]);
				// echo '<pre>';   print_r($sentReviewEducatorInfo);die;
				if(!empty($sentReviewEducatorInfo)){
					$sentReview->edu_name = $sentReviewEducatorInfo[0]->edu_name;

				}
				// else{
				// 	$data['user_data2']= $this->CommonMdl->getResult('users', '*', ['id' => $review[0]->user_id]);
				// 	$review[0]->edu_name = $data['user_data2'][0]->name;
				// }
		}
		}
		else{
			$sentReviews="";

		}
		// echo '<pre>';   print_r($sentReviews);die;
		$data['review']= $reviews;
		$data['receivedreview'] = $sentReviews;
		$data['title']='Review | Starsboard ';
		$this->load->view('view_review',$data);
	}
	
	
}
