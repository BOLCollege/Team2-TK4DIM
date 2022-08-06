<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bagian_model extends CI_Model
{
    private $_table = "bagian";

    public $id_bagian;
    public $nama_bagian;

    public function rules()
    {
        return [
            ['field' => 'nama_bagian',
            'label' => 'nama_bagian',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_bagian" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_bagian = $post["nama_bagian"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_bagian = $post["id_bagian"];
        $this->nama_bagian = $post["nama_bagian"];
        $this->db->update($this->_table, $this, array('id_bagian' => $post['id_bagian']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_bagian" => $id));
    }
}
