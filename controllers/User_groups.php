<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_groups extends CI_Controller {

	public function index(){
		$this->load->model('user_model');

		$data['groupList'] = $this->user_model->groupsList();
		$data['active_menu_id'] = '64';

		$this->load->view('user_groups/index',$data);
	}
	public function edit($group_id){
		$this->output->enable_profiler(TRUE);
		$this->load->model('user_model');
		$this->load->library('pagination');
		
		
		
		if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
		
		//Pagination Initializing
		$config['base_url'] = site_url($this->uri->segment(1).'/'.$this->router->fetch_method());
		$config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
		$config['per_page'] = 15;
		$config['total_rows'] = $this->user_model->record_count_group($group_id);
		
		$this->pagination->initialize($config);
		
		//PAGINATION
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		//Data To Render
		$data['list'] = $this->user_model->fetch_data_group($config["per_page"],$page,$group_id);
		$data['total_rows'] = $config['total_rows'];
		$data['links'] = $this->pagination->create_links();

		

		$data['active_menu_id'] = '64';

		$this->load->view('user_groups/edit',$data);
	}
}
