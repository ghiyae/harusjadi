<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        check_not_login(); 
        $this->load->model('transaksi_model');
    }

	public function index()
	{
		$data['transaksi'] = $this->transaksi_model->getAll();
		$this->template->load('shared/index', 'transaksi/transaksi',$data);
	}

    public function add()
    {
        $this->form_validation->set_message('required','%s Tidak Boleh Kosong!!!');
        $this->form_validation->set_message('numeric','%s Harus Berupa Angka!!!');   
        $transaksi = $this->transaksi_model;
        $validation = $this->form_validation;
        $validation->set_rules($transaksi->rules()); 
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('shared/index', 'transaksi/tran_in');
        }
        else
        {
            $post = $this->input->post(null, TRUE);
            $this->transaksi_model->save($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Transaksi Cash In Berhasil Ditambahkan!');
                redirect('transaksi','refresh');
            }
        }  
    }

        public function adding()
    {
        $this->form_validation->set_message('required','%s Tidak Boleh Kosong!!!');
        $this->form_validation->set_message('numeric','%s Harus Berupa Angka!!!');   
        $transaksi = $this->transaksi_model;
        $validation = $this->form_validation;
        $validation->set_rules($transaksi->rules()); 
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('shared/index', 'transaksi/tran_out');
        }
        else
        {
            $post = $this->input->post(null, TRUE);
            $this->transaksi_model->save($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Transaksi Cash Out Berhasil Ditambahkan!');
                redirect('transaksi','refresh');
            }
        }  
    }

    public function edit($id=null)
    {
        if (!isset($id)) redirect('transaksi');
        $transaksi = $this->transaksi_model;
        $validation = $this->form_validation;
        $validation->set_rules($transaksi->rules());  

        if ($this->form_validation->run()) 
        {
           $post = $this->input->post(null, TRUE);
           $this->transaksi_model->update($post);
           if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Transaksi Cash In Berhasil Diupdate!');
            redirect('transaksi','refresh');
        }else{
            $this->session->set_flashdata('warning', 'Data Transaksi Cash In Tidak Diupdate!');
            redirect('transaksi','refresh');
        }
    }
    $data['transaksi'] = $this->transaksi_model->getById($id);
    if (!$data['transaksi']) {
        $this->session->set_flashdata('error', 'Data Transaksi Cash In Tidak ditemukan!');
        redirect('transaksi','refresh');
    }
    $this->template->load('shared/index', 'transaksi/edit_ti',$data);
}

public function edit1($id=null)
    {
        if (!isset($id)) redirect('transaksi');
        $transaksi = $this->transaksi_model;
        $validation = $this->form_validation;
        $validation->set_rules($transaksi->rules());  

        if ($this->form_validation->run()) 
        {
           $post = $this->input->post(null, TRUE);
           $this->transaksi_model->update($post);
           if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Transaksi Cash Out Berhasil Diupdate!');
            redirect('transaksi','refresh');
        }else{
            $this->session->set_flashdata('warning', 'Data Transaksi Cash Out Tidak Diupdate!');
            redirect('transaksi','refresh');
        }
    }
    $data['transaksi'] = $this->transaksi_model->getById($id);
    if (!$data['transaksi']) {
        $this->session->set_flashdata('error', 'Data Transaksi Cash Out Tidak ditemukan!');
        redirect('transaksi','refresh');
    }
    $this->template->load('shared/index', 'transaksi/edit_to',$data);
}
    public function delete($id)
    {
        $this->transaksi_model->delete($id);
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success','Data Transaksi Cash In Berhasil Dihapus!');
            redirect('transaksi','refresh');
        }
    }
}