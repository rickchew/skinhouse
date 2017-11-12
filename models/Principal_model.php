<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal_model extends CI_Model {
	function save(){
		$data['fullname'] = $this->input->post('fullname');
		$data['cms_users_contact'] = $this->input->post('contact');
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('username');
		$data['password'] = md5($this->input->post('password'));
		$data['group_id'] = 3;

		$this->db->insert('cms_users',$data);
	}
	function fetch_data($limit,$start,$condition=NULL){
		
		//$this->db->select('wn_client.*');
		$this->db->from('cms_users');
		/*
		if(strlen($this->input->get('q')) > 0 ){
			$this->db->where("wn_client_name LIKE '%".$this->input->get('q')."%'");
		}*/
        $this->db->where('group_id','3');
		$this->db->order_by('u_id','desc');
		$this->db->limit($limit, $start);
		
		$query = $this->db->get();
		
		return $query->num_rows() > 0 ? $query->result():null;
	}
	function record_count($condition=NULL){
		$this->db->where('group_id','3');
		$query = $this->db->get('cms_users');

		return $query->num_rows();
	}
}