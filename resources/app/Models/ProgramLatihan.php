<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramLatihan extends Model
{
    protected $table = 'program_latihan';

    protected $fillable = [
        'id_user',
        'nama',
        'tanggal',
        'jenis_latihan',
        'detail',
        'status'
    ];
}
