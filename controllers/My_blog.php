<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_blog extends CI_Controller {

	public function __construct(){
		parent:: __Construct();
		if(!$this->session->userdata('isUserLoggedIn')){
			redirect('login');
		}
		$this->load->model('CommonMdl');
	}
	public function index()
	{  $data['user_data']= $this->CommonMdl->getResult('users', '*', ['id' => $this->session->userdata('userId')]);
	
	$data['blog']= $this->CommonMdl->getResult('blog', '*', array('blog_user_id' => $this->session->userdata('userId')));
	   $data['title']='My blog | Starsboard ';
	    $this->load->view('view_blog_list',$data);
	
	}
	
	public function create_blog (){
		$this->load->view('create_blog');
	}
	

	
		public function delete_blog (){
		    $id=$this->uri->segment(3);
		    if($id !=''){
		    $delete = $this->CommonMdl->deleteRecord("blog", [
            "blog_id" => $id,
           ]);
           
           if($delete){
              redirect('my-blog'); 
           }
           
		    }else{
		       redirect('my-blog'); 
		    }
		
	}
	
	
	public function edit_blog (){
		   $id=$this->uri->segment(3);
		    if($id !=''){
		        
		          $data['blog_details'] = $this->CommonMdl->getRow("blog", "*", [
                    "blog_id" => $id,
                    
                ]);
                

		  
           	$this->load->view('edit_blog',$data);
		    }else{
		       redirect('my-blog'); 
		    }
	
	}
	
	public function create_blog_submit (){
		$user_id=$this->session->userdata('userId');
		if(!empty($_FILES['blog_image']['name'])){ 
			if (!file_exists('uploads/blog/'.$user_id.'/')) {
			mkdir('uploads/blog/' . $user_id, 0777, TRUE);
			}
         // Set preference 
         $config['upload_path'] = 'uploads/blog/'.$user_id.'/'; 
         $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
         $config['max_size'] = '2000'; // max_size in kb 
        
         // Load upload library 
         $this->load->library('upload',$config); 
   
         // File upload
         if($this->upload->do_upload('blog_image')){ 
            // Get data about the file
            $uploadData_edu_image = $this->upload->data(); 
            $filename = $uploadData_edu_image['file_name']; 
          }
			}
			
		$blogData = array(
		                    'blog_title' => $this->input->post('blog_title'),
							'blog_description' => $this->input->post('blog_description'),
							'blog_image' => $filename ? $filename :'',
							'blog_user_id' => $this->session->userdata('userId'),
							);
		  $insetBlog = $this->CommonMdl->insertRow($blogData,'blog');
	
   
			if($insetBlog){
			    $from_email = "info@starsboard.in"; 
         $to_email = $this->session->userdata('useremail'); 
       $msg="New Blog Added Hi Thanks for creating Blog. Your Blog has been successfully created on STARSBOARD. For reference, here's your blog information:
           Blog informations:
           Blog name: ".$this->input->post('blog_title')."
 
            Best Regards,
            STARSBOARD Education
            Flat Iamage (Whatsapp) -7977476239";
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Starsboard'); 
         $this->email->to($to_email);
         $this->email->subject('New Blog added'); 
         $this->email->message($msg); 
					redirect('my-blog'); 
			}		
		
	}
	
		public function edit_blog_submit (){
		$user_id=$this->session->userdata('userId');
		if(!empty($_FILES['blog_image']['name'])){ 
			if (!file_exists('uploads/blog/'.$user_id.'/')) {
			mkdir('uploads/blog/' . $user_id, 0777, TRUE);
			}
         // Set preference 
         $config['upload_path'] = 'uploads/blog/'.$user_id.'/'; 
         $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
         $config['max_size'] = '2000'; // max_size in kb 
        
         // Load upload library 
         $this->load->library('upload',$config); 
   
         // File upload
         if($this->upload->do_upload('blog_image')){ 
            // Get data about the file
            $uploadData_edu_image = $this->upload->data(); 
            $filename = $uploadData_edu_image['file_name']; 
          }
			}
			
	               	$blogData = array(
		                    'blog_title' => $this->input->post('blog_title'),
							'blog_description' => $this->input->post('blog_description'),
							'blog_image' => $filename ? $filename :'',
							'blog_user_id' => $this->session->userdata('userId'),
							);
							
						$update_blog = $this->CommonMdl->updateData(
                        $blogData,
                        ["blog_id" => $this->input->post('blog_id')],
                        "blog"
                    );
		if($update_blog){
					redirect('my-blog'); 
			}		
		
	}
	
	
}

