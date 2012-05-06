<?php

	class Main_model extends CI_Model {

		function getMenu() {

			$results = array(
		 			'home' => 'HOME',
		 			'gallery' => 'GALLERY',
		 			'about' => 'ABOUT US',
		 			'contact' => 'CONTACT'
		 		);
			
			return $results;

		}	

		function getMainContact() {

			$sql = $this->db->select('name,Address,phone1,phone2,fax,email1,email2,social1,social2')
				->from('tcontact')
				->where('status','MAIN');

			$results = $sql->get()->result();
			
			return $results;

		}	

		function getAboutHeadline() {

			$sql = $this->db->select('content')
				->from('tabout')
				->limit(1,0)
				->order_by('id', 'desc');

			$results = $sql->get()->result();
			
			return $results;

		}	

		function getAdminMenu() {

			$results = array(
		 			'home' => 'HOME',
		 			'gallery' => 'GALLERY',
		 			'about' => 'ABOUT US',
		 			'contact' => 'CONTACT'
		 		);
			
			return $results;

		}			
	}