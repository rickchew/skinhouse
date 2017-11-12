<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		//$this->output->enable_profiler(TRUE);
		$this->load->model('members_model');
		$this->load->library('pagination');
		
		if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
		
		//Pagination Initializing
		$config['base_url'] = site_url($this->uri->segment(1).'/'.$this->router->fetch_method());
		$config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
		$config['per_page'] = 20;
		$config['total_rows'] = $this->members_model->record_count();
		
		$this->pagination->initialize($config);
		
		//PAGINATION
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		//Data To Render
		$data['list'] = $this->members_model->fetch_data($config["per_page"],$page,$condition=null);
		$data['total_rows'] = $config['total_rows'];
		$data['links'] = $this->pagination->create_links();
		$data['page'] = $page;

		$this->load->view('members/index',$data);
	}
	public function add(){
		//$this->load->model('states_model');
		//$this->load->model('salesman_model');
		//$data['state'] = $this->states_model->getAll();
		//$data['salesman'] = $this->salesman_model->getAll();

		$this->load->view('members/add');
	}
	public function save(){
		$this->load->model('dealer_model');
		$last_id = $this->dealer_model->save();
		$this->dealer_model->save_store($last_id);

		redirect('dealer');
		print_r($_POST);
	}
	public function edit($id){
		$this->load->model('members_model');
		$data['list'] = $this->members_model->getByID($id);
		$data['id'] = $id;
		$this->load->view('members/edit',$data);
	}
	public function check_ic($nric=null){
		$this->load->model('members_model');

		$result = $this->members_model->checkExistedIC($nric);

		header('Content-type: application/json');
		echo json_encode($result);
	}
	public function update($id){
		$this->load->model('members_model');

		$this->members_model->update($id);

		redirect("members/edit/$id");
		//print_r($_POST);
	}
}
