<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Pembelajaran_m extends Eloquent
{
    protected $table = 'pembelajaran';
    public $timestamps = false;
    protected $guarded = [''];

    public function peran()
    {
        return $this->belongsTo('Peran_m', 'id_peran');
    }    

    public function actor(){
    	return $this->belongsTo('Actor_m', 'nip', 'nip');
    }

    public function pelajaran(){
        return $this->belongsTo('Pelajaran_m', 'kd_pembelajaran', 'kd_pembelajaran');
    }    
}
