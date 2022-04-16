<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isAdminLoggedIn')){
			redirect('admin-login');
		}
		$this->load->model('CommonMdl');
	  }
	public function index()
	{   
	   		$educator= $this->CommonMdl->getResult('custom_educator', '*');
			$data['educator']=count($educator);

			$learner= $this->CommonMdl->getResult('custom_learner', '*');
			$data['learner']=count($learner);

			$pending_educator= $this->CommonMdl->getResult('users', '*', ['educator' => '0','user_type' => 'educator' ]);
			// $boardName = $this->CommonMdl->getResult('custom_board', 'board_name', ['board_id' => $val]);
			$data['pending_educator']=count($pending_educator);
			
			$camebackEducators= $this->CommonMdl->getResult('users', '*', ['educator' => '1','user_type' => 'educator',' created' < '2022-04-04 00:00:00' ]);
			$data['camebackEducators']=count($camebackEducators);
			
			$user= $this->CommonMdl->getResult('users', '*');
			$data['user']=count($user);
			
			$review= $this->CommonMdl->getResult('review', '*');
			$data['review']=count($review);
			
			$lead= $this->CommonMdl->getResult('lead', '*');
			$data['lead']=count($lead);
			
			$blog= $this->CommonMdl->getResult('blog', '*');
			$data['blog']=count($blog);
			
	$this->load->view('admin/dashboard',$data);
	}
}
