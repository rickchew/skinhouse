<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_groups_edit extends CI_Controller {


	public function index(){
		//$this->output->enable_profiler(TRUE);
		$this->load->model('user_model');
		$this->load->library('pagination');
		
		
		
		if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
		
		//Pagination Initializing
		$config['base_url'] = site_url($this->uri->segment(1).'/'.$this->router->fetch_method());
		$config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
		$config['per_page'] = 15;
		$config['total_rows'] = $this->user_model->record_count_group($this->input->get('group_id'));
		
		$this->pagination->initialize($config);
		
		//PAGINATION
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		//Data To Render
		$data['list'] = $this->user_model->fetch_data_group($config["per_page"],$page,$this->input->get('group_id'));
		$data['total_rows'] = $config['total_rows'];
		$data['per_page'] = $config['per_page'];
		$data['page'] = $page;
		$data['links'] = $this->pagination->create_links();

		$data['group_info'] = $this->user_model->getByGroupID($this->input->get('group_id'));
		$data['group_access'] = $this->user_model->getAccessListByGroupID($this->input->get('group_id'));

		$data['active_menu_id'] = '64';

		$this->load->view('user_groups/edit',$data);
	}
	public function update_access($val){
		$this->load->model('access_control_model');


		$result = explode("_", $val);
		$accessExist = $this->access_control_model->isAccessExist($result[1],$result[2]);
		print_r($accessExist);
		if($accessExist > 0){
			// Delete If Existed
			$this->access_control_model->removeExist($result[1],$result[2]);
			
		}else{
			$data['menu_id'] = $result[1];
			$data['group_id'] = $result[2];

			$this->db->insert('base_access',$data);
		}
		

		//$this->db->insert('base_access',$data);
	}
}
