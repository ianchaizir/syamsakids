<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Home extends CI_Controller {

		public function index() {

			$this->load->model('main_model');	

		 	$data['menus'] = $this->main_model->getMenu();	 
			$data['mainContacts'] = $this->main_model->getMainContact();	 		
			$data['abouts'] = $this->main_model->getAboutHeadline();	 		

		 	$data['main_content'] = 'home';
	 		
			$this->load->model('home_model');	

			$data['products'] = $this->home_model->getLatestProduct();	 					


		 	if ($this->input->is_ajax_request()) {
		 		$this->load->view($data['main_content'],$data);
		 	} else {
			 	$this->load->view('includes/template',$data);
		 	}

		}

	}
?>
