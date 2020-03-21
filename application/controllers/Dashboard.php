<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('member_model');
		$this->load->model('cashin_model');
		$this->load->model('cashout_model');
		$this->load->model('transaksi_model');

	}

	public function index()
	{
		$data ['member']= $this->member_model->sum_member();
		$data ['cashin']= $this->cashin_model->sum_cashin();
		$data ['cashout']= $this->cashout_model->sum_cashout();
		$this->template->load('shared/index', 'dashboard/dashboard',$data);
	}
}