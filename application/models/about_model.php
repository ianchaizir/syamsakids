<?php

	class About_model extends CI_Model {

		function getAbout() {

			$sql = $this->db->select('content')
				->from('tabout')
				->limit(1,0)
				->order_by('id', 'desc');

			$results = $sql->get()->result();
			
			return $results;

		}		

	}