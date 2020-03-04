<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        check_not_login(); 
        $this->load->model('member_model');
    }

    public function index()
    {
        $data['member'] = $this->member_model->getAll();
        $this->template->load('shared/index', 'member/datamember',$data);
    }

    public function add()
    {

        $this->form_validation->set_message('required','%s Tidak Boleh Kosong!!!');
        $this->form_validation->set_message('numeric','%s Harus Berupa Angka!!!');   
        $member = $this->member_model;
        $validation = $this->form_validation;
        $validation->set_rules($member->rules());     
        if ($this->form_validation->run() == FALSE) {
            $this->template->load('shared/index', 'member/formmember');
        }
        else
        {
            $post = $this->input->post(null, TRUE);
            $this->member_model->save($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Member Berhasil Ditambahkan!');
                redirect('member','refresh');
            }
            
        }  
    }

    public function edit($id=null)
    {
        if (!isset($id)) redirect('member');
        $member = $this->member_model;
        $validation = $this->form_validation;
        $validation->set_rules($member->rules());  

        if ($this->form_validation->run()) 
        {
           $post = $this->input->post(null, TRUE);
           $this->member_model->update($post);
           if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Member Berhasil Diupdate!');
            redirect('member','refresh');
        }else{
            $this->session->set_flashdata('warning', 'Data Member Tidak Diupdate!');
            redirect('member','refresh');
        }
    }
    $data['member'] = $this->member_model->getById($id);
    if (!$data['member']) {
        $this->session->set_flashdata('error', 'Data Member Tidak ditemukan!');
        redirect('member','refresh');
    }
    $this->template->load('shared/index', 'member/editformmember',$data);
}
    public function delete($id)
    {
        $this->member_model->delete($id);
        if ($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success','Data Member Berhsil Dihapus!');
            redirect('member','refresh');
        }
    }
}