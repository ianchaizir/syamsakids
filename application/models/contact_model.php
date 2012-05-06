<?php

	class Contact_model extends CI_Model {

		function addGuestBook() {

			date_default_timezone_set('Asia/Jakarta');

			$guestBookData = array(
				'date' => date('Y-m-d H:i:s'),
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'subject' => (($this->input->post('subject') == '' || $this->input->post('subject') == 'Subject') ? '<no subject>' : $this->input->post('subject')),
				'message' => $this->input->post('message')				
				);

			$insert = $this->db->insert('tguestbook', $guestBookData);
			return $insert;

		}		

		function getOtherContact() {

			$sql = $this->db->select('name,Address,phone1,phone2,fax,email1,email2,social1,social2,social3')
				->from('tcontact')
				->where('status','OTHER');

			$results = $sql->get()->result();
			
			return $results;

		}			

	}