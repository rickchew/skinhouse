<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {
	function getByID($id){
		$this->db->where('cms_product_id',$id);
		$query = $this->db->get('cms_product');

		return $query->row();
	}
	function fetch_data($limit,$start,$condition=NULL){
		/*
		$this->db->from('cms_store');
		$this->db->join('cms_city', 'cms_city.cms_city_id = cms_store.cms_store_city','left');
		$this->db->join('cms_state', 'cms_state.cms_state_id = cms_city.cms_state_id','left');
		$this->db->join('cms_users', 'cms_users.u_id = cms_store.cms_store_pic','left');
        $this->db->where('cms_store_type_id','1');
		$this->db->order_by('cms_store_name','asc');*/
		$this->db->from('cms_product');
		$this->db->join('cms_product_category', 'cms_product_category.cms_product_category_id = cms_product.cms_product_category_id','left');
		$this->db->where('cms_product_is_service IS NULL');
		$this->db->limit($limit, $start);
		
		$query = $this->db->get();
		
		return $query->num_rows() > 0 ? $query->result():null;
	}
	function record_count($condition=NULL){
		//$this->db->where('cms_store_type_id','1');
		$query = $this->db->get('cms_product');

		return $query->num_rows();
	}
	function save(){
		$data['cms_product_name'] = $this->input->post('fullname');
		$data['cms_product_price'] = $this->input->post('price');
		$data['cms_product_category_id'] = $this->input->post('catID');

		$this->db->insert('cms_product',$data);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	}
	function update(){
		$data['cms_product_name'] = $this->input->post('fullname');
		$data['cms_product_price'] = $this->input->post('price');
		$data['cms_product_category_id'] = $this->input->post('catID');

		$this->db->where('cms_product_id',$this->input->post('productID'));
		$this->db->update('cms_product', $data);
	}
	
}