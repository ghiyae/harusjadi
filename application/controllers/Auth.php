<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function login()
	{
		check_already_login();
		$this->load->view('auth/login');
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$query = $this->user_model->login($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'id' => $row->iduser, 
					'username' => $row->username,
					'level' => $row->level,
					'status' => 'login'
				);
				$this->session->set_userdata($params);
				redirect('dashboard', 'refresh');
			}else{
				$this->session->set_flashdata('error', 'username/password salah');
				redirect('auth/login', 'refresh');
			}
		}
	}

	public function logout()
	{
		$params = array('id', 'username','level' ,'status');
		$this->session->unset_userdata($params);
		redirect('auth/login','refresh');
	}
}