<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cashout extends CI_Controller {

	public function index()
	{
		$this->template->load('shared/index', 'cashout/dataco');
	}

		public function add()
	{
		$this->template->load('shared/index', 'cashout/formco');
	}

		public function edit()
	{
		$this->template->load('shared/index', 'cashout/formco');
	}
}