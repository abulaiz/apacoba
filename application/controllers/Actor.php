<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Actor extends CI_Controller
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

        $data['row'] = Actor_m::all();
        $this->template->load('template', 'actor/index', $data);
    }

    public function add()
    {

        $this->form_validation->set_rules('nip', 'NIP', 'required|is_unique[actor.nip]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('unit_kerja', 'Unit Kerja', 'required');

        $this->form_validation->set_rules('pengalaman_dibidang_terkait', 'pengalaman_dibidang_terkait', 'required');
        $this->form_validation->set_rules('pengalaman_menyusun_materi', 'pengalaman_menyusun_materi', 'required');
        $this->form_validation->set_rules('sertifikat_pembelajaran_sesuai_bidang', 'sertifikat_pembelajaran_sesuai_bidang', 'required');
        $this->form_validation->set_rules('pendidikan_formal', 'pendidikan_formal', 'required');
        $this->form_validation->set_rules('sertifikat_TCB', 'sertifikat_TCB', 'required');
        $this->form_validation->set_rules('sertifikat_kompetensi_dibidang_pengembangan', 'sertifikat_kompetensi_dibidang_pengembangan', 'required');



        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('is_unique', 'Actor dengan NIP %s telah terdaftar sebelumnya');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'actor/add');
        } else {
            Actor_m::create([
                'nip' => $this->input->post('nip'),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'no_hp' => $this->input->post('no_hp'),
                'jabatan' => $this->input->post('jabatan'),
                'unit_kerja'=> $this->input->post('unit_kerja'),
                'pengalaman_dibidang_terkait' => $this->input->post('pengalaman_dibidang_terkait'),
                'pengalaman_menyusun_materi' => $this->input->post('pengalaman_menyusun_materi'),
                'sertifikat_pembelajaran_sesuai_bidang' => $this->input->post('sertifikat_pembelajaran_sesuai_bidang'),
                'pendidikan_formal' => $this->input->post('pendidikan_formal'),
                'sertifikat_TCB' => $this->input->post('sertifikat_TCB'),
                'sertifikat_kompetensi_dibidang_pengembangan' => $this->input->post('sertifikat_kompetensi_dibidang_pengembangan'),
            ]);
            echo "<script>window.location='" . site_url('actor') . "';</script>";
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('unit_kerja', 'Unit Kerja', 'required');

        $this->form_validation->set_rules('pengalaman_dibidang_terkait', 'pengalaman_dibidang_terkait', 'required');
        $this->form_validation->set_rules('pengalaman_menyusun_materi', 'pengalaman_menyusun_materi', 'required');
        $this->form_validation->set_rules('sertifikat_pembelajaran_sesuai_bidang', 'sertifikat_pembelajaran_sesuai_bidang', 'required');
        $this->form_validation->set_rules('pendidikan_formal', 'pendidikan_formal', 'required');
        $this->form_validation->set_rules('sertifikat_TCB', 'sertifikat_TCB', 'required');
        $this->form_validation->set_rules('sertifikat_kompetensi_dibidang_pengembangan', 'sertifikat_kompetensi_dibidang_pengembangan', 'required');



        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
        $this->form_validation->set_message('is_unique', 'Actor dengan NIP %s telah terdaftar sebelumnya');

        $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

        if ($this->form_validation->run() == FALSE) {
            $ac = Actor_m::find($id);
            if ($ac == null) {
                echo "<script>alert('Data tidak dtemukan');";
                echo "window.location'" . site_url('tabel') . "';</script>";                
            } else {
                $data['row'] = $ac;
                $this->template->load('template', 'actor/edit', $data);
            }
        } else {
            Actor_m::where('nip', $this->input->post('old_nip'))->update([
                'nip' => $this->input->post('nip'),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'no_hp' => $this->input->post('no_hp'),
                'jabatan' => $this->input->post('jabatan'),
                'unit_kerja'=> $this->input->post('unit_kerja'),
                'pengalaman_dibidang_terkait' => $this->input->post('pengalaman_dibidang_terkait'),
                'pengalaman_menyusun_materi' => $this->input->post('pengalaman_menyusun_materi'),
                'sertifikat_pembelajaran_sesuai_bidang' => $this->input->post('sertifikat_pembelajaran_sesuai_bidang'),
                'pendidikan_formal' => $this->input->post('pendidikan_formal'),
                'sertifikat_TCB' => $this->input->post('sertifikat_TCB'),
                'sertifikat_kompetensi_dibidang_pengembangan' => $this->input->post('sertifikat_kompetensi_dibidang_pengembangan'),
            ]);
            echo "<script>window.location='" . site_url('actor') . "';</script>";
        }
    }

    public function del()
    {
        $id = $this->input->post('nip');
        if(Pembelajaran_m::where('nip', $id)->exists()){
            echo "<script>alert('Gagal menghapus, actor terdaftar pada pembelajaran');</script>";
        } else {
            Actor_m::find($id)->delete();
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='" . site_url('actor') . "';</script>";
    }

    public function pembelajaran($id){
        $d = Actor_m::find($id);
        $data['row'] = $d->pelajaran;
        $data['info'] = $d;
        $this->template->load('template', 'actor/pembelajaran/index', $data);
    }

    public function del_pembelajaran(){
        $nip = $this->input->post('nip');
        $id_peran = $this->input->post('id_peran');
        $kd_pembelajaran = $this->input->post('kd_pembelajaran');    
        // echo $nip." - ".$id_peran." - ".$kd_pembelajaran;
        // die();
        Pembelajaran_m::where('nip', $nip)
                        ->where('kd_pembelajaran', $kd_pembelajaran)
                        ->where('id_peran', $id_peran)
                        ->delete();
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location='" . site_url('actor/pembelajaran/'.$nip) . "';</script>";                                        
    }
}
