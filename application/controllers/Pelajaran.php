<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelajaran extends CI_Controller
{
   
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pelajaran_m');
        $this->load->model('Pembelajaran_m');
        $this->load->model('Actor_m');
        $this->load->model('Peran_m');
        $this->load->library('form_validation');
    }
    public function index()
    {

        $data['row'] = Pelajaran_m::all();
        $this->template->load('template', 'pelajaran/index', $data);
    }

    public function add()
    {

        $this->form_validation->set_rules('kd_pembelajaran', 'Kode Pembelajaran', 'required|is_unique[pelajaran.kd_pembelajaran]');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('tahun_pembuatan', 'Tahun', 'required');
        $this->form_validation->set_rules('bidang', 'Bidang', 'required');
        $this->form_validation->set_rules('no_sk_tim_pengembang', 'Detail', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'pelajaran/add');
        } else {
            Pelajaran_m::create([
                'kd_pembelajaran' => $this->input->post('kd_pembelajaran'),
                'judul' => $this->input->post('judul'),
                'tahun_pembuatan' => $this->input->post('tahun_pembuatan'),
                'bidang' => $this->input->post('bidang'),
                'no_sk_tim_pengembang' => $this->input->post('no_sk_tim_pengembang')
            ]);
            echo "<script>alert('Data berhasil disimpan');</script>";
            echo "<script>window.location='" . site_url('pelajaran') . "';</script>";
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('tahun_pembuatan', 'Tahun', 'required');
        $this->form_validation->set_rules('bidang', 'Bidang', 'required');
        $this->form_validation->set_rules('no_sk_tim_pengembang', 'Detail', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $dc = Pelajaran_m::find($id);
            if($dc == null){
                echo "<script>alert('Data tidak dtemukan');";
                echo "window.location'" . site_url('pelajaran') . "';</script>";
            } else {
                $data['row'] = $dc;
                $this->template->load('template', 'pelajaran/edit', $data);                
            }
        } else {
            Pelajaran_m::where('kd_pembelajaran', $this->input->post('kd_pembelajaran'))
                        ->update([
                            'judul' => $this->input->post('judul'),
                            'bidang' => $this->input->post('bidang'),
                            'tahun_pembuatan' => $this->input->post('tahun_pembuatan'),
                            'no_sk_tim_pengembang' => $this->input->post('no_sk_tim_pengembang')
                        ]);
            echo "<script>alert('Data berhasil disimpan');</script>";
            echo "<script>window.location='" . site_url('pelajaran') . "';</script>";
        }
    }

    public function del()
    {
        $id = $this->input->post('kd_pembelajaran');
        Pelajaran_m::find($id)->delete();
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location='" . site_url('pelajaran') . "';</script>";
    }

    public function pemateri($id){
        $p = Pelajaran_m::find($id);
        $data['row'] = $p->pelajaran;
        $data['detail'] = $p;
        $this->template->load('template', 'pelajaran/pemateri/index', $data);        
    }

    public function del_pemateri(){
        $nip = $this->input->post('nip');
        $id_peran = $this->input->post('id_peran');
        $kd_pembelajaran = $this->input->post('kd_pembelajaran');
        Pembelajaran_m::where('nip', $nip)
                        ->where('kd_pembelajaran', $kd_pembelajaran)
                        ->where('id_peran', $id_peran)
                        ->delete();
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location='" . site_url('pelajaran/pemateri/'.$kd_pembelajaran) . "';</script>";        
    }

    public function add_pemateri($kd_pembelajaran = null){
        if($kd_pembelajaran == null){
            $this->form_validation->set_rules('nip', 'Actor', 'required');
            $this->form_validation->set_rules('id_peran', 'Peran', 'required');

            $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

            $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

            $nip = $this->input->post('nip');
            $id_peran = $this->input->post('id_peran');
            $kd_pembelajaran = $this->input->post('kd_pembelajaran');  
            $e = Pembelajaran_m::where('nip', $nip)
                                ->where('kd_pembelajaran', $kd_pembelajaran)
                                ->where('id_peran', $id_peran)->exists();                      
            if($e){
                echo "<script>alert('Gagal, data telah tersedia');</script>";
            } else {
                Pembelajaran_m::create([
                    'nip' => $nip, 'id_peran' => $id_peran,
                    'kd_pembelajaran' => $kd_pembelajaran
                ]);
                echo "<script>alert('Data berhasil ditambahkan');</script>";
            }
            echo "<script>window.location='" . site_url('pelajaran/pemateri/'.$kd_pembelajaran) . "';</script>";             
        } else {
            $i = Pelajaran_m::find($kd_pembelajaran);
            $data['actor'] = Actor_m::all();
            $data['peran'] = Peran_m::all();
            $data['info'] = $i;
            $this->template->load('template', 'pelajaran/pemateri/add', $data);           
        }
    }
}