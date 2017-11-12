<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index()
	{
		$this->load->model('services_model');
		$this->load->library('pagination');
		
		if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
		
		//Pagination Initializing
		$config['base_url'] = site_url($this->uri->segment(1).'/'.$this->router->fetch_method());
		$config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
		$config['per_page'] = 20;
		$config['total_rows'] = $this->services_model->record_count();
		
		$this->pagination->initialize($config);
		
		//PAGINATION
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		//Data To Render
		$data['list'] = $this->services_model->fetch_data($config["per_page"],$page,$condition=null);
		$data['total_rows'] = $config['total_rows'];
		$data['links'] = $this->pagination->create_links();

		$this->load->view('services/index',$data);
	}
	public function add(){
		$this->load->model('product_model');
		$this->load->model('category_model');
		$data['category'] = $this->category_model->getAll();
		$this->load->view('services/add',$data);
	}
	public function edit($id){
		$this->load->model('product_model');
		$this->load->model('category_model');

		$data['list'] = $this->product_model->getByID($id);
		$data['category'] = $this->category_model->getAll();

		$this->load->view('product/edit',$data);
	}
	public function save(){
		$this->load->model('services_model');

		$last_id = $this->services_model->save();
		//$this->distributor_model->save_store($last_id);

		redirect('services');
		//print_r($_POST);
	}
}
