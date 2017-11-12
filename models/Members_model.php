<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members_model extends CI_Model {

	function fetch_data($limit,$start,$condition=NULL){
		//$this->db->select('');
		//$this->db->select('*,CONCAT(mod_clients_fullname,mod_clients_fullname_zh,mod_clients_email,mod_clients_nric,mod_clients_contact_1,mod_clients_contact_2) AS ref');
		$this->db->from('mod_clients');

        if($this->input->get('q')){
        	//$this->db->where("mod_clients.ref LIKE '%".$this->input->get('q')."%'");
        	$this->db->where("CONCAT(mod_clients_fullname,mod_clients_nric,mod_clients_contact_1,mod_clients_contact_2) LIKE '%".$this->input->get('q')."%'", NULL, FALSE);
        }
		$this->db->order_by('mod_clients_fullname','asc');
		$this->db->limit($limit, $start);
		
		$query = $this->db->get();
		
		return $query->num_rows() > 0 ? $query->result():null;
	}
	function record_count($condition=NULL){
		//$this->db->select('*,CONCAT(mod_clients_fullname,mod_clients_fullname_zh,mod_clients_email,mod_clients_nric,mod_clients_contact_1,mod_clients_contact_2) AS ref');
		if($this->input->get('q')){
        	//$this->db->where("mod_clients.ref LIKE '%".$this->input->get('q')."%'");
        	$this->db->where("CONCAT(mod_clients_fullname,mod_clients_nric,mod_clients_contact_1,mod_clients_contact_2) LIKE '%".$this->input->get('q')."%'", NULL, FALSE);
        }
		$query = $this->db->get('mod_clients');

		return $query->num_rows();
	}
	function getByID($id){
		$this->db->where('mod_clients_id',$id);
		$query = $this->db->get('mod_clients');

		return $query->row();
	}
	function getAll(){
		$this->db->order_by('mod_clients_fullname','ASC');
		$query = $this->db->get('mod_clients');

		return $query->result();
	}
	function checkExistedIC($nric){
		$this->db->where('mod_clients_nric',$nric);
		$this->db->or_where('mod_clients_nric',str_replace('-', '', $nric));
		$query = $this->db->get('mod_clients');

		return $query->row(); 
	}
	function update($id){

		$data['mod_clients_nric'] = $this->input->post('mod_clients_nric');
		$data['mod_clients_fullname'] = $this->input->post('mod_clients_fullname');
		$data['mod_clients_fullname_zh'] = $this->input->post('mod_clients_fullname_zh');
		$data['mod_clients_place_of_birth'] = $this->input->post('mod_clients_place_of_birth');
		$data['mod_clients_birthday'] = $this->input->post('mod_clients_birthday');

		$this->db->where('mod_clients_id',$id);
		$this->db->update('mod_clients', $data);
	}
	/*
	function save(){
		$data['fullname'] = $this->input->post('fullname'); 
		$data['cms_users_contact'] = $this->input->post('contact');
		$data['username'] = $this->input->post('username');
		$data['email'] = $this->input->post('username');
		$data['password'] = md5($this->input->post('password'));
		$data['group_id'] = 6;

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
	}*/
}