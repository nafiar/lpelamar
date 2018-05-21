<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    protected $table = 'pelamars';
    protected $primaryKey='id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
	    'id',
	    'nrp',
	    'full_name',
	    'nick_name',
	    'email',
	    'phone_number',
	    'id_fb',
      'id_line',
      'cv_essay_path',
    ];
}
