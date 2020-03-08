<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cashout_model extends CI_Model
{
    private $_table = "cashout";

    public $category_id;
    public $cashout_id;
    public $description;
    public $jumlah_co;
    public $tanggal_co;

    public function rules()
    {
        return [
            ['field' => 'category',
            'label' => 'Category',
            'rules' => 'required'],

            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required'],

            ['field' => 'jumlah',
            'label' => 'Jumlah',
            'rules' => 'numeric|required'],

            ['field' => 'tanggal',
            'label' => 'Tanggal',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('category', 'category.category_id = cashout.category_id', 'left');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["cashout_id" => $id])->row();
    }

        public function getByIdJoin($id)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('category', 'category.cashout_id = cashout.category_id', 'left');
        $this->db->where('cashout.cashout_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->cashout_id = uniqid();
        $this->category_id = $post["category"];
        $this->description = $post["description"];
        $this->jumlah_co = $post["jumlah"];
        $this->tanggal_co = $post["tanggal"];
        return $this->db->insert($this->_table, $this);
    }

    public function update($post)
    {
        $post = $this->input->post();
        $this->category_id = $post["cashout_id"];
        $this->category_id = $post["category_id"];
        $this->category = $post["category"];
        $this->description = $post["description"];
        $this->jumlah_co = $post["jumlah_co"];
        $this->tanggal_co = $post["tanggal_co"];
        return $this->db->update($this->_table, $this, array('cashout_id' => $post['cashout_id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("cashout_id" => $id));
    }

    public function sum_cashout()
    {
        $this->db->select('sum(jumlah_co) as jml');
        $this->db->from($this->_table);
        $query= $this->db->get();
        $hasil=$query->row();
        return $hasil->jml;
    }
}