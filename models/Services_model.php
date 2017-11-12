<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services_model extends CI_Model {
	function getByID($id){
		$this->db->where('cms_product_id',$id);
		$query = $this->db->get('cms_product');

		return $query->row();
	}
	function fetch_data($limit,$start,$condition=NULL){
		$this->db->from('cms_product');
		$this->db->join('cms_product_category', 'cms_product_category.cms_product_category_id = cms_product.cms_product_category_id','left');
		$this->db->where('cms_product_is_service','1');
		$this->db->limit($limit, $start);
		
		$query = $this->db->get();
		
		return $query->num_rows() > 0 ? $query->result():null;
	}
	function record_count($condition=NULL){
		//$this->db->where('cms_store_type_id','1');
		$this->db->where('cms_product_is_service','1');
		$query = $this->db->get('cms_product');

		return $query->num_rows();
	}
	function save(){
		$data['cms_product_name'] = $this->input->post('fullname');
		$data['cms_product_is_service'] = '1';

		$this->db->insert('cms_product',$data);
		$insert_id = $this->db->insert_id();

		return $insert_id;
		/*fullname
		$data['cms_product_name'] = $this->input->post('fullname');
		$data['cms_product_category_id'] = $this->input->post('catID');

		$this->db->insert('cms_product',$data);
		$insert_id = $this->db->insert_id();

		return $insert_id;*/
		//print_r($_POST);
	}
	
}