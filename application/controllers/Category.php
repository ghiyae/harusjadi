<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('category_model');
	}

	public function index()
	{
		$data['category'] = $this->category_model->getAll();
		$this->template->load('shared/index', 'category/datacat',$data);
	}

		public function add()
	{
		$this->form_validation->set_message('required','%s Tidak Boleh Kosong!!!');   
        $category = $this->category_model;
        $validation = $this->form_validation;
        $validation->set_rules($category->rules());     
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('shared/index', 'category/formcat');
        }
        else
        {
            $post = $this->input->post(null, TRUE);
            $this->category_model->save($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Category Berhasil Ditambahkan!');
                redirect('category','refresh');
            }
            
        }
	}

    public function edit($id=null)
    {
        if (!isset($id)) redirect('category');
        $category = $this->category_model;
        $validation = $this->form_validation;
        $validation->set_rules($category->rules());  

        if ($this->form_validation->run()) 
        {
           $post = $this->input->post(null, TRUE);
           $this->category_model->update($post);
           if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Category Berhasil Diupdate!');
            redirect('category','refresh');
        }else{
            $this->session->set_flashdata('warning', 'Data Category Tidak Diupdate!');
            redirect('category','refresh');
        }
    }
    $data['category'] = $this->category_model->getById($id);
    if (!$data['category']) {
        $this->session->set_flashdata('error', 'Data Category Tidak ditemukan!');
        redirect('category','refresh');
    }
    $this->template->load('shared/index', 'category/editcat',$data);
}
    public function delete($id)
    {
        $this->category_model->delete($id);
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success','Data Category Berhsil Dihapus!');
            redirect('category','refresh');
        }
    }
}