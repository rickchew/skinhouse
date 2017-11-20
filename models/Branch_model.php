<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Branch_model extends CI_Model {
	function getAll(){
		$query = $this->db->get('mod_branch');

		return $query->result();
	}
	function getByID($branch_id){
		$this->db->where('mod_branch_id',$branch_id);
		$query = $this->db->get('mod_branch');

		return $query->row();
	}
}