<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Peran_m extends Eloquent
{
    protected $table = 'peran';
    public $timestamps = false;
    protected $guarded = [''];
}
