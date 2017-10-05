<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    protected $table = 'pelamar';
    protected $primaryKey='id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
	    'id',
	    'nrp',
	    'nama_depan',
	    'nama_belakang',
	    'email',
	    'kontak',
	    'link_fb',
	    'created_at',
	    'updated_at'
    ];
}
