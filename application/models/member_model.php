<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model
{
    private $_table = "member";

    public $member_id;
    public $nama;
    public $jabatan;
    public $golongan;
    public $jumlah;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'jabatan',
            'label' => 'Jabatan',
            'rules' => 'required'],

            ['field' => 'golongan',
            'label' => 'Golongan',
            'rules' => 'required'],

            ['field' => 'jumlah',
            'label' => 'Jumlah',
            'rules' => 'required|numeric']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["member_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->member_id = uniqid();
        $this->nama = $post["nama"];
        $this->jabatan = $post["jabatan"];
        $this->golongan = $post["golongan"];
        $this->jumlah = $post["jumlah"];
        return $this->db->insert($this->_table, $this);
    }

    public function update($post)
    {
        $post = $this->input->post();
        $this->member_id = $post["member_id"];
        $this->nama = $post["nama"];
        $this->jabatan = $post["jabatan"];
        $this->golongan = $post["golongan"];
        $this->jumlah = $post["jumlah"];
        return $this->db->update($this->_table, $this, array('member_id' => $post['member_id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("member_id" => $id));
    }
}