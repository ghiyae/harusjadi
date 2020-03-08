<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cashout extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        check_not_login(); 
        $this->load->model('cashout_model');
        $this->load->model('category_model');

    }

	public function index()
	{
		$data['cashout'] = $this->cashout_model->getAll();
		$this->template->load('shared/index', 'cashout/dataco',$data);
	}

    public function add()
    {

        $this->form_validation->set_message('required','%s Tidak Boleh Kosong!!!');
        $this->form_validation->set_message('numeric','%s Harus Berupa Angka!!!');   
        $cashout = $this->cashout_model;
        $validation = $this->form_validation;
        $validation->set_rules($cashout->rules()); 
        $data ['category'] = $this->category_model->getAll();
        if ($this->form_validation->run() == FALSE) 
        {

            $this->template->load('shared/index', 'cashout/formco',$data);
        }
        else
        {
            $post = $this->input->post(null, TRUE);
            $this->cashout_model->save($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Cash Out Berhasil Ditambahkan!');
                redirect('cashout','refresh');
            }
            
        }  
    }

    public function edit($id=null)
    {
        if (!isset($id)) redirect('cashout');
        $cashout = $this->cashout_model;
        $validation = $this->form_validation;
        $validation->set_rules($cashout->rules());  

        if ($this->form_validation->run()) 
        {
           $post = $this->input->post(null, TRUE);
           $this->cashout_model->update($post);
           if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Cash Out Berhasil Diupdate!');
            redirect('cashout','refresh');
        }else{
            $this->session->set_flashdata('warning', 'Data Cash Out Tidak Diupdate!');
            redirect('cashout','refresh');
        }
    }
    $data['cashout'] = $this->cashout_model->getById($id);
    if (!$data['cashout']) {
        $this->session->set_flashdata('error', 'Data Cash Out Tidak ditemukan!');
        redirect('cashout','refresh');
    }
    $this->template->load('shared/index', 'cashout/editco',$data);
}
    public function delete($id)
    {
        $this->cashout_model->delete($id);
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success','Data Cash Out Berhsil Dihapus!');
            redirect('cashout','refresh');
        }
    }


    public function getMember()
    {
        $id = $this->input->post('id');
        $data = $this->category_model->getById($id);
        echo json_encode($data);
    }
}