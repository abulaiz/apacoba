<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelajaran extends CI_Controller
{
   
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pelajaran_m');
        $this->load->library('form_validation');
    }
    public function index()
    {

        $data['row'] = Pelajaran_m::all();
        $this->template->load('template', 'pelajaran', $data);
    }

    public function add()
    {

        $this->form_validation->set_rules('order', 'Order', 'required');
        $this->form_validation->set_rules('namapesan', 'Nama Pesanan', 'required');
        $this->form_validation->set_rules('pelaksana', 'Pelaksana', 'required');
        $this->form_validation->set_rules('finish', 'Finish', 'required');
        $this->form_validation->set_rules('detail', 'Detail', 'required');
        $this->form_validation->set_rules('jenis_order', 'Jenis Order', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'tabel/tabel_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->tabel_m->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='" . site_url('tabel') . "';</script>";
        }
    }

    public function edit($id)
    {

        if ($this->input->post('order')) {
            $this->form_validation->set_rules('order', 'Order', 'required');
        }

        if ($this->input->post('namapesan')) {
            $this->form_validation->set_rules('namapesan', 'Nama Pesanan', 'required');
        }

        if ($this->input->post('pelaksana')) {
            $this->form_validation->set_rules('pelaksana', 'Pelaksana', 'required');
        }
        $this->form_validation->set_rules('finish', 'Finish', 'required');
        $this->form_validation->set_rules('detail', 'Detail', 'required');

        if ($this->input->post('jenis_order')) {
            $this->form_validation->set_rules('jenis_order', 'Jenis Order', 'required');
        }

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->tabel_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'tabel/tabel_edit', $data);
            } else {
                echo "<script>alert('Data tidak dtemukan');";
                echo "window.location'" . site_url('tabel') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->tabel_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='" . site_url('tabel') . "';</script>";
        }
    }

    public function del()
    {
        $id = $this->input->post('kd_pembelajaran');
        Pelajaran_m::find($id)->delete();
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location='" . site_url('pelajaran') . "';</script>";
    }
}
