<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index(){

		$data['active_menu_id'] = '31';
		if($this->session->userdata('user_id') > 0){
			$this->load->view('dashboard/index',$data);
		}else{
			redirect('login');
		}

		//print_r($this->session->all_userdata());
	}
}
