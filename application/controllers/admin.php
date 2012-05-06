<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends CI_Controller {

	    function index(){

	    	$this->is_logged_in();

	    }

	    function is_logged_in()
	    {
			$this->load->model('main_model');	

			$data['mainContacts'] = $this->main_model->getMainContact();

	        $is_logged_in = $this->session->userdata('is_logged_in');

	        if(!isset($is_logged_in) || $is_logged_in != true)
	        {				

			 	$data['menus'] = $this->main_model->getMenu();	 

	            $data['main_content'] = 'admin_login';	 		

		 		$this->load->view('includes/template',$data);
	        
	        } else {

			 	$data['menus'] = $this->main_model->getAdminMenu();	 

	            $data['main_content'] = 'admin_home';	 	

		 		$this->load->view('includes/template',$data);

	        }
	    }

		 function validate_credentials()
		 {
		 	$this->load->model('admin_model');
		 	$query = $this->admin_model->validate();

		 	if($query)
		 	{
		 		$data = array(
		 			'username' => $this->input->post('username'),
		 			'is_logged_in' => true
		 			);

		 		$this->session->set_userdata($data);
		 		redirect('admin');
		 	}

		 	else
		 	{
		 		redirect('admin');
		 	}
		 }	    

	}

