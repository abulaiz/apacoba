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
}
