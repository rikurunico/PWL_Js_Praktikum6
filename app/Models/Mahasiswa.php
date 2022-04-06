<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table='mahasiswa';
    protected $primaryKey='nim';
    protected $dates = ['tanggal_lahir'];
    protected $fillable = [
        'Nim', 
        'Nama', 
        'Kelas', 
        'Jurusan',
        'Email',
        'Alamat',
        'Tanggal_Lahir',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}
