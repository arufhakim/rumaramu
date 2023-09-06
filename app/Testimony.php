<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    protected $table = 'testimonies';
    
    protected $fillable = ['id', 'nama', 'jabatan', 'testimoni', 'foto'];
}