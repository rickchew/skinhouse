<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Salesman_model extends CI_Model {
	/*
	function save(){
		$data['fullname'] = $this->input->post('fullname');
		$data['cms_users_contact'] = $this->input->post('contact');
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('username');
		$data['password'] = md5($this->input->post('password'));
		$data['group_id'] = 4;

		$this->db->insert('cms_users',$data);
	}*/
	function fetch_data($limit,$start,$condition=NULL){
		/*
		$this->db->from('cms_store');
		$this->db->join('cms_city', 'cms_city.cms_city_id = cms_store.cms_store_city','left');
		$this->db->join('cms_state', 'cms_state.cms_state_id = cms_city.cms_state_id','left');
		$this->db->join('cms_users', 'cms_users.u_id = cms_store.cms_store_pic','left');
        $this->db->where('cms_store_type_id','2');
		$this->db->order_by('cms_store_name','asc');
		$this->db->limit($limit, $start);*/

		$this->db->where('group_id','5');
		$query = $this->db->get('cms_users');
		
		return $query->num_rows() > 0 ? $query->result():null;
	}
	function record_count($condition=NULL){
		$this->db->where('group_id','5');
		$query = $this->db->get('cms_users');

		return $query->num_rows();
	}
	function getAll(){
		$this->db->where('group_id','5');
		$query = $this->db->get('cms_users');

		return $query->result();
	}
	function save(){
		$data['fullname'] = $this->input->post('fullname');
		$data['cms_users_contact'] = $this->input->post('contact');
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('username');
		$data['password'] = md5($this->input->post('password'));
		$data['group_id'] = 5;
		$data['cms_users_store_id'] = $this->check_store_id();

		$this->db->insert('cms_users',$data);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	}
	function save_store($u_id){
		$data['cms_store_name'] = $this->input->post('company_name');
		$data['cms_store_email'] = $this->input->post('company_email');
		$data['cms_store_pic'] = $u_id;
		$data['cms_store_city'] = $this->input->post('store_city');
		$data['cms_store_type_id'] = '2';

		$this->db->insert('cms_store',$data);
	}
	function check_store_id(){
		$this->db->where('cms_store_pic',$this->session->userdata('user_id'));

		$query = $this->db->get('cms_store');

		return $query->row();
	}
}