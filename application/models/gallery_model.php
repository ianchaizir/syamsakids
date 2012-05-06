<?php

	class catalog_model extends CI_Model {

		function getbycategory() {

			$sql = $this->db->select('articleCode,articleName,description,price,image')
				->from('tcatalog')
				->where('category'),$this->input->post('category')
				->order_by('dateCreated', 'desc');

			$results = $sql->get()->result();

			return $results;

		}	

	}