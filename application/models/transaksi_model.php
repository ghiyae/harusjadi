<?php defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi_model extends CI_Model
{
    private $_table = "trans";

    public $tran_id;
    public $tanggal;
    public $description;
    public $tran_in;
    public $tran_out;


    public function rules()
    {
        return [
            ['field' => 'tanggal',
            'label' => 'Tangal',
            'rules' => 'required'],

            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required'],

            ['field' => 'tran_in',
            'label' => 'Tran_in',
            'rules' => 'required|numeric'],

            ['field' => 'tran_out',
            'label' => 'Tran_out',
            'rules' => 'required|numeric']
        ];
    }

    public function getAll()
    {
        $saldo = 0;
        $this->db->from('trans');
        $this->db->select('*');
        $this->db->order_by('tanggal','ASC');

        $query = $this->db->get();
        return$query->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["tran_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->tran_id = uniqid();
        $this->tanggal = $post["tanggal"];
        $this->description = $post["description"];
        $this->tran_in = $post["tran_in"];
        $this->tran_out = $post["tran_out"];
        return $this->db->insert($this->_table, $this);
    }

    public function update($post)
    {
        $post = $this->input->post();
        $this->tran_id = $post["tran_id"];
        $this->tanggal = $post["tanggal"];
        $this->description = $post["description"];
        $this->tran_in = $post["tran_in"];
        $this->tran_out = $post["tran_out"];
        return $this->db->update($this->_table, $this, array('tran_id' => $post['tran_id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("tran_id" => $id));
    }

    public function sum_tran_in()
    {
        $this->db->select('sum(tran_in) as jml');
        $this->db->from($this->_table);
        $query= $this->db->get();
        $hasil=$query->row();
        return $hasil->jml;
    }

        public function sum_tran_out()
    {
        $this->db->select('sum(tran_out) as jml');
        $this->db->from($this->_table);
        $query= $this->db->get();
        $hasil=$query->row();
        return $hasil->jml;
    }
}