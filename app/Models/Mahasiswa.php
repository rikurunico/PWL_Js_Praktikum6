<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table='mahasiswa';
    protected $primaryKey='nim';

    protected $fillable = [
        'Nim', 
        'Nama', 
        'Kelas', 
        'Jurusan',
    ];
}
