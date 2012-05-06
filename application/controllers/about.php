<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class About extends CI_Controller {

		function index() {

			$this->load->model('main_model');	

		 	$data['menus'] = $this->main_model->getMenu();	 
			$data['mainContacts'] = $this->main_model->getMainContact();
			
		 	$data['main_content'] = 'about';
	 		
			$this->load->model('about_model');	

			$data['abouts'] = $this->about_model->getAbout();	 		

		 	if ($this->input->is_ajax_request()) {
		 		$this->load->view($data['main_content'],$data);
		 	} else {
			 	$this->load->view('includes/template',$data);
		 	}

		}
	}
?>