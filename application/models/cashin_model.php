<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cashin_model extends CI_Model
{
    private $_table = "cashin";

    public $member_id;
    public $cashin_id;
    public $description;
    public $jumlah_ci;
    public $tanggal_ci;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required'],

            ['field' => 'jumlah',
            'label' => 'Jumlah',
            'rules' => 'numeric'],

            ['field' => 'tanggal',
            'label' => 'Tanggal',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('member', 'member.member_id = cashin.member_id', 'left');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["cashin_id" => $id])->row();
    }

        public function getByIdJoin($id)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('member', 'member.member_id = cashin.member_id', 'left');
        $this->db->where('cashin.cashin_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->cashin_id = uniqid();
        $this->member_id = $post["nama"];
        $this->description = $post["description"];
        $this->jumlah_ci = $post["jumlah"];
        $this->tanggal_ci = $post["tanggal"];
        return $this->db->insert($this->_table, $this);
    }

    public function update($post)
    {
        $post = $this->input->post();
        $this->cashin_id = $post["cashin_id"];
        $this->member_id = $post["nama"];
        $this->description = $post["description"];
        $this->jumlah_ci = $post["jumlah"];
        $this->tanggal_ci = $post["tanggal"];
        return $this->db->update($this->_table, $this, array('cashin_id' => $post['cashin_id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("cashin_id" => $id));
    }

    public function sum_cashin()
    {
        $this->db->select('sum(jumlah_ci) as jml');
        $this->db->from($this->_table);
        $query= $this->db->get();
        $hasil=$query->row();
        return $hasil->jml;
    }
}