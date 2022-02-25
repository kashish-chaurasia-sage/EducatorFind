<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct() {        
    parent::__construct();
	if(!$this->session->userdata('isUserLoggedIn')){
			redirect('login');
		}
	$this->load->model('CommonMdl');
		 
}
	public function index()
	{   
	    $data['title']='Profile | Starsboard ';
	$data['user_data']= $this->CommonMdl->getResult('users', '*', ['id' => $this->session->userdata('userId')]);
	$this->load->view('view_profile',$data);
	}
	
	public function edit()
	{   
	
		$data['user_data']= $this->CommonMdl->getResult('users', '*', ['id' => $this->session->userdata('userId')]);
	
		$this->load->view('edit_profile',$data);
	}
	
	public function update_profile()
	{   
	if(!empty($this->session->userdata('userId'))){
            
               $user_id=$this->session->userdata('userId');
		if(!empty($_FILES['blog_image']['name'])){ 
			if (!file_exists('uploads/users/'.$user_id.'/')) {
			mkdir('uploads/users/' . $user_id, 0777, TRUE);
			}
         // Set preference 
         $config['upload_path'] = 'uploads/users/'.$user_id.'/'; 
         $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
         $config['max_size'] = '5000'; // max_size in kb 
        
         // Load upload library 
         $this->load->library('upload',$config); 
   
         // File upload
         if($this->upload->do_upload('blog_image')){ 
            // Get data about the file
            $uploadData_edu_image = $this->upload->data(); 
            $filename = $uploadData_edu_image['file_name']; 
          }
			}
            
	$ProfileData= array(
							'password' => md5($this->input->post('paswword')),
							'phone' => $this->input->post('mobile_number'),
							'city' => $this->input->post('user_city'),
							'user_image' => $filename ?$filename :'',
							'user_facebook' => $this->input->post('user_facebook'),
							'user_twitter' => $this->input->post('user_twitter'),
							'user_youtube' => $this->input->post('user_youtube'),
							'user_website' => $this->input->post('user_website'),
							'updated_date' => date("Y-m-d H:i:s"),
						);
						
			$approval_status = $this->CommonMdl->updateData($ProfileData,['id'=>$this->session->userdata('userId')],'users');
	if($approval_status){
		redirect('profile');
	}
	}
	}
}
