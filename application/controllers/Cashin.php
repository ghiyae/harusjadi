<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cashin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        check_not_login(); 
        $this->load->model('cashin_model');
        $this->load->model('member_model');

    }

	public function index()
	{
		$data['cashin'] = $this->cashin_model->getAll();
		$this->template->load('shared/index', 'cashin/dataci',$data);
	}

    public function add()
    {

        $this->form_validation->set_message('required','%s Tidak Boleh Kosong!!!');
        $this->form_validation->set_message('numeric','%s Harus Berupa Angka!!!');   
        $cashin = $this->cashin_model;
        $validation = $this->form_validation;
        $validation->set_rules($cashin->rules()); 
        $data ['member'] = $this->member_model->getAll();
        if ($this->form_validation->run() == FALSE) 
        {

            $this->template->load('shared/index', 'cashin/formci',$data);
        }
        else
        {
            $post = $this->input->post(null, TRUE);
            $this->cashin_model->save($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Cash In Berhasil Ditambahkan!');
                redirect('cashin','refresh');
            }
            
        }  
    }

    public function edit($id=null)
    {
        if (!isset($id)) redirect('cashin');
        $cashin = $this->cashin_model;
        $validation = $this->form_validation;
        $validation->set_rules($cashin->rules());  

        if ($this->form_validation->run()) 
        {
           $post = $this->input->post(null, TRUE);
           $this->cashin_model->update($post);
           if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Cash In Berhasil Diupdate!');
            redirect('cashin','refresh');
        }else{
            $this->session->set_flashdata('warning', 'Data Cash In Tidak Diupdate!');
            redirect('cashin','refresh');
        }
    }
    $data['cashin'] = $this->cashin_model->getById($id);
    if (!$data['cashin']) {
        $this->session->set_flashdata('error', 'Data Cash In Tidak ditemukan!');
        redirect('cashin','refresh');
    }
    $this->template->load('shared/index', 'cashin/editci',$data);
}
    public function delete($id)
    {
        $this->cashin_model->delete($id);
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success','Data Cash In Berhsil Dihapus!');
            redirect('cashin','refresh');
        }
    }


    public function getMember()
    {
        $id = $this->input->post('id');
        $data = $this->member_model->getById($id);
        echo json_encode($data);
    }
}