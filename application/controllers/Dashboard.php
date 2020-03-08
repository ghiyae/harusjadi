<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->model('member_model');
		$data ['member']= $this->member_model->sum_member();
		$this->template->load('shared/index', 'dashboard/dashboard',$data);
	}
}