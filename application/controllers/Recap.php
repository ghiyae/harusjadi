<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recap extends CI_Controller {

	public function index()
	{
		$this->template->load('shared/index', 'recap/datarecap');
	}
}