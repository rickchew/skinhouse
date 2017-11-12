<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Branch_model extends CI_Model {
	function getAll(){
		$query = $this->db->get('mod_branch');

		return $query->result();
	}
}