<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peran extends CI_Controller
{
   
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pembelajaran_m');
        $this->load->model('Peran_m');
        $this->load->library('form_validation');
        $this->load->model('Actor_m');
    }
    public function index()
    {

        $data['row'] = Peran_m::all();
        $this->template->load('template', 'peran/index', $data);
    }

    public function benerin(){
        $data = Pembelajaran_m::all();
        foreach ($data as $item) {
            Pembelajaran_m::where('nip', $item->nip)
                            ->where('kd_pembelajaran', $item->kd_pembelajaran)
                            ->update([
                                'id_peran' => Peran_m::where('nama_peran', $item->peran->nama_peran)->get()[0]->id
                            ]);

        }
    }

    public function add()
    {

        $this->form_validation->set_rules('nama_peran', 'Nama Peran', 'required|is_unique[peran.nama_peran]');

        $this->form_validation->set_message('required', '%d masih kosong, silahkan isi');
        $this->form_validation->set_message('is_unique', '%s telah terdaftar');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'peran/add');
        } else {
            Peran_m::create([
                'nama_peran' => $this->input->post('nama_peran'),
            ]);
            echo "<script>window.location='" . site_url('peran') . "';</script>";
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama_peran', 'Nama Peran', 'required|is_unique[peran.nama_peran]');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('is_unique', 'Peran %s telah tersedia');



        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('is_unique', 'Actor dengan NIP %s telah terdaftar sebelumnya');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $ac = Peran_m::find($id);
            if ($ac == null) {
                echo "<script>alert('Data tidak dtemukan');";
                echo "window.location'" . site_url('peran') . "';</script>";                
            } else {
                $data['row'] = $ac;
                $this->template->load('template', 'peran/edit', $data);
            }
        } else {
            Peran_m::where('id', $this->input->post('id'))->update([
                'nama_peran' => $this->input->post('nama_peran')
            ]);
            echo "<script>alert('Data berhasil diubah');";
            echo "<script>window.location='" . site_url('peran') . "';</script>";
        }
    }

    public function del()
    {
        $id = $this->input->post('id');
        if(Pembelajaran_m::where('id_peran', $id)->exists()){
            echo "<script>alert('Gagal menghapus, peran terdaftar pada pembelajaran');</script>";
        } else {
            Peran_m::find($id)->delete();
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='" . site_url('peran') . "';</script>";
    }
}
