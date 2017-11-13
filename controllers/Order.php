<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{
		$this->load->model('product_model');
		$this->load->library('pagination');
		
		if (count($_GET) > 0) $config['suffix'] = '?' . http_build_query($_GET, '', "&");
		
		//Pagination Initializing
		$config['base_url'] = site_url($this->uri->segment(1).'/'.$this->router->fetch_method());
		$config['first_url'] = $config['base_url'].'?'.http_build_query($_GET);
		$config['per_page'] = 20;
		$config['total_rows'] = $this->product_model->record_count();
		
		$this->pagination->initialize($config);
		
		//PAGINATION
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		//Data To Render
		$data['list'] = $this->product_model->fetch_data($config["per_page"],$page,$condition=null);
		$data['total_rows'] = $config['total_rows'];
		$data['links'] = $this->pagination->create_links();

		$this->load->view('order/index',$data);
	}
	public function add(){
		$this->load->model('branch_model');
		//$this->load->model('category_model');
		$this->load->model('members_model');
		$this->load->model('product_model');


		$data['branch'] = $this->branch_model->getAll();
		$data['members'] = $this->members_model->getAll();
		$data['product'] = $this->product_model->getAll();

		$this->load->view('order/add',$data);
	}
	public function save(){
		$this->load->model('order_model');

		$return_id = $this->order_model->save();


		$productArray = array();

		foreach ($this->input->post('product') as $key => $value) {
			//echo $key.' - '.$value;
			if($value>0){
				//echo '!';
				$arr['mod_order_sub_parent_id'] = $return_id;
				$arr['mod_order_sub_product_id'] = $this->input->post('product')[$key];
				$arr['mod_order_sub_product_qty'] = $this->input->post('qty')[$key];
				$arr['mod_order_sub_product_total'] = $this->input->post('total')[$key];

				array_push($productArray,$arr);
			}
			//echo "<br>";
			//if(
		}

		$this->order_model->save_sub($return_id,$productArray);

		redirect('order/payment/'.$return_id);
	}
	function payment($id){
		$this->load->model('order_model');
		$data['order'] = $this->order_model->getByID($id);
		$data['order_sub'] = $this->order_model->getSubByID($id);

		$this->load->view('order/payment',$data);
		//print_r($id);
	}
	function getLastInv($branch_id){
		
	}
}
