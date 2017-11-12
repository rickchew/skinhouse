<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales_model extends CI_Model {
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
        $this->db->where('cms_store_type_id','1');
		$this->db->order_by('cms_store_name','asc');*/
		$this->db->from('cms_order');
		$this->db->join('cms_store', 'cms_store.cms_store_id = cms_order.cms_order_store_id','left');
		$this->db->limit($limit, $start);
		
		$query = $this->db->get();
		
		return $query->num_rows() > 0 ? $query->result():null;
	}
	function record_count($condition=NULL){
		//$this->db->where('cms_store_type_id','1');
		$query = $this->db->get('cms_product_category');

		return $query->num_rows();
	}
	function save(){
		
		$data['cms_order_product_id'] = $this->input->post('productID');
		$data['cms_order_product_serial_id'] = $this->input->post('productSerial');
		$data['cms_order_date_created'] = date('Y-m-d H:i:s');
		$data['cms_order_store_id'] = $this->input->post('storeID');
		$data['cms_order_salesperson_id'] = $this->session->userdata('user_id');

		$this->db->insert('cms_order',$data);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	}
	function getAll(){
		$query = $this->db->get('cms_order');

		return $query->result();
	}
}