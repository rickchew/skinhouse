<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model {
	function save(){

		$data['mod_order_clients_id'] = $this->input->post('memberID');
		$data['mod_order_branch_id'] = $this->input->post('branchID');
		
		$data['mod_order_date'] = $this->input->post('orderDate');
		$data['mod_order_total_amount'] = $this->input->post('totalAmt');


		$data['mod_order_created_by'] = '';
		$data['mod_order_date_created'] = date('Y-m-d H:i:s');

		//Invoice No
		$data['mod_order_inv_display'] = $this->getLastInv($data['mod_order_branch_id']);
		//$data['mod_order_inv_id']


		$this->db->insert('mod_order',$data);
		$insert_id = $this->db->insert_id();

		return $insert_id;
	}
	function save_sub($order_id,$productArray){
		//$data['mod_order_sub_parent_id'] = $order_id;


		//print_r($productArray);
		$this->db->insert_batch('mod_order_sub', $productArray); 
		//$data['']
	}
	function getByID($id){

		$this->db->join('mod_branch', 'mod_branch.mod_branch_id = mod_order.mod_order_branch_id');
		$this->db->join('mod_clients', 'mod_clients.mod_clients_id = mod_order.mod_order_clients_id');

		$this->db->where('mod_order_id',$id);
		$query = $this->db->get('mod_order');

		return $query->row();
	}
	function getSubByID($id){
		$this->db->join('cms_product', 'mod_order_sub.mod_order_sub_product_id = cms_product.cms_product_id');
		$this->db->where('mod_order_sub_parent_id',$id);
		$query = $this->db->get('mod_order_sub');

		return $query->result();
	}
	function getLastInv($branchID){
		$this->load->model('branch_model');

		$branch_info = $this->branch_model->getByID($branchID);

		//print_r($branch_info);
		$search = $branch_info->mod_branch_code.date('Y');

		//print_r($search);
		
		$this->db->where("mod_order_inv_display LIKE '$search%'");
		
		$this->db->order_by('mod_order_inv_display','DESC');

		$query = $this->db->get('mod_order');

		$result = $query->row();

		//$lastInv = ;
		$inv_no = substr($result->mod_order_inv_display, 5, 4);
        $inv_no += 1;

        $display_inv_no = $branch_info->mod_branch_code.date('Y').sprintf('%04d',$inv_no);

		//print_r($display_inv_no);

		return $display_inv_no;
		//return $query->row();
	}
	/*
	function getByID($id){
		$this->db->where('cms_product_id',$id);
		$query = $this->db->get('cms_product');

		return $query->row();
	}
	function fetch_data($limit,$start,$condition=NULL){
		
		$this->db->from('cms_store');
		$this->db->join('cms_city', 'cms_city.cms_city_id = cms_store.cms_store_city','left');
		$this->db->join('cms_state', 'cms_state.cms_state_id = cms_city.cms_state_id','left');
		$this->db->join('cms_users', 'cms_users.u_id = cms_store.cms_store_pic','left');
        $this->db->where('cms_store_type_id','1');
		$this->db->order_by('cms_store_name','asc');
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
	function getAll(){
		$this->db->order_by('cms_product_name','ASC');
		$query = $this->db->get('cms_product');

		return $query->result();
	}*/
	
}