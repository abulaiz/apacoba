<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Pelajaran_m extends Eloquent
{
    protected $table = 'pelajaran';
    public $timestamps = false;
    protected $guarded = [''];

    protected $primaryKey = 'kd_pembelajaran';
    public $autoincrement = false;
    protected $keyType = 'varchar';    
}
