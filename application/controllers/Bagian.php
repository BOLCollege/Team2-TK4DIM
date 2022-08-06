<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bagian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("bagian_model");
        $this->load->library('form_validation');
    }

    public function list()
    {
        $data["bagians"] = $this->bagian_model->getAll();
        $this->load->view("admin/bagian/list", $data);
    }

    public function add()
    {
        $bagian = $this->bagian_model;
        $validation = $this->form_validation;
        $validation->set_rules($bagian->rules());

        if ($validation->run()) {
            $bagian->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/bagian/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/bagians');
       
        $bagian = $this->bagian_model;
        $validation = $this->form_validation;
        $validation->set_rules($bagian->rules());

        if ($validation->run()) {
            $bagian->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["bagian"] = $bagian->getById($id);
        if (!$data["bagian"]) show_404();
        
        $this->load->view("admin/bagian/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->bagian_model->delete($id)) {
            redirect(site_url('bagian/index'));
        }
    }
}
