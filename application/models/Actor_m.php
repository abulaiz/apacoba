<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Actor_m extends Eloquent
{
    protected $table = 'actor';
    public $timestamps = false;
    protected $guarded = [''];
    
    protected $primaryKey = 'nip';
    public $autoincrement = false;
    protected $keyType = 'varchar';     
}
