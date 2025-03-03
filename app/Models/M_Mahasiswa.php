<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_Mahasiswa extends Model
{
    use softDeletes;

    protected $table = 'mahasiswa';
    protected $fillable = [
        'id',
        'NIM',
        'nama',
        'alamat',
        'jenis_kelamin'
    ];

    protected $hidden;
}
