<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends CI_Controller {

	public function index()
	{  
	    $data['title']='Plan | Starsboard ';
		$this->load->view('plan');
	}
}
