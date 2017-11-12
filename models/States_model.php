<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class States_model extends CI_Model {
	
	function getAll(){

		$this->db->join('cms_state', 'cms_state.cms_state_id = cms_city.cms_state_id','left');
		$this->db->order_by('cms_city_name');
		$query = $this->db->get('cms_city');

		return $query->result();
	}
}