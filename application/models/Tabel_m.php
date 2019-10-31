<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tabel_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('tabel');
        if ($id != null) {
            $this->db->where('id_tabel', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['order'] = $post['order'];
        $params['nama_pesanan'] = $post['namapesan'];
        $params['pelaksana'] = $post['pelaksana'];
        $params['finish'] = $post['finish'];
        $params['detail'] = $post['detail'] !== "" ? $post['detail'] : null;
        $params['jenis_order'] = $post['jenis_order'];
        $this->db->insert('tabel', $params);
    }

    public function edit($post)
    {
        if (!empty($post['order'])) {
            $params['order'] = $post['order'];
        }
        if (!empty($post['namapesan'])) {
            $params['nama_pesanan'] = $post['namapesan'];
        }
        if (!empty($post['pelaksana'])) {
            $params['pelaksana'] = $post['pelaksana'];
        }

        $params['finish'] = $post['finish'];
        $params['detail'] = $post['detail'] !== "" ? $post['detail'] : null;
        if (!empty($post['jenis_order'])) {
            $params['jenis_order'] = $post['jenis_order'];
        }
        if (empty($post['proses1'])) {
            $params['q'] = 0;
        }else{
           $params['q'] = $post['proses1']; 
        }
        if (empty($post['proses2'])) {
            $params['rfq'] = 0;
        }else{
           $params['rfq'] = $post['proses2']; 
        }
        if (empty($post['proses3'])) {
            $params['co'] = 0;
        }else{
           $params['co'] = $post['proses3']; 
        }
        if (empty($post['proses4'])) {
            $params['do'] = 0;
        }else{
           $params['do'] = $post['proses4']; 
        }
        
        $this->db->where('id_tabel', $post['id_tabel']);
        $this->db->update('tabel', $params);
    }

    public function del($id)
    {
        $this->db->where('id_tabel', $id);
        $this->db->delete('tabel');
    }
}
