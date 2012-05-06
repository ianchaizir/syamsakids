<?php

	class Home_model extends CI_Model {

		function getLatestProduct() {

			$sql = $this->db->select('articleCode,articleName,description,price,image')
				->from('tcatalog')
				->limit(4,0)
				->order_by('dateCreated', 'desc');

			$results = $sql->get()->result();

			return $results;

		}	

	}