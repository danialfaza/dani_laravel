<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
	protected $table = 'biodata';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'email', 'tempat_lahir', 'tanggal_lahir', 'gender', 'alamat', 
        
    ];
}
