<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Contact extends CI_Controller {

		public function index() {

			$this->load->model('main_model');	

		 	$data['menus'] = $this->main_model->getMenu();	 
			$data['mainContacts'] = $this->main_model->getMainContact();	 		
			$data['abouts'] = $this->main_model->getAboutHeadline();	 		

		 	$data['main_content'] = 'contact';
	 		
			$this->load->model('contact_model');	

			$data['otherContacts'] = $this->contact_model->getOtherContact();	 					

		 	if ($this->input->is_ajax_request()) {
		 		$this->load->view($data['main_content'],$data);
		 	} else {
			 	$this->load->view('includes/template',$data);
		 	}

		}

		public function submit() {

		 	$this->load->library('form_validation');

		 	$this->form_validation->set_rules('name','Name','trim|required|max_length[64]');
		 	$this->form_validation->set_rules('email','Email Address','trim|required|valid_email|max_length[64]');
		 	$this->form_validation->set_rules('subject','Subject','trim|max_length[64]');
		 	$this->form_validation->set_rules('message','Message','trim|required');

		 	if($this->form_validation->run() == FALSE)
		 	{
		 		echo validation_errors(' ',' ');

		 	} else {

		 		$this->load->model('contact_model');
		 		if($query = $this->contact_model->addGuestBook())
		 		{
		 			echo 'Thank You, Your message has been posted !';
		 		}
		 		else
		 		{
		 			$this->index();
		 		}
		 	}
		}

	}
?>

