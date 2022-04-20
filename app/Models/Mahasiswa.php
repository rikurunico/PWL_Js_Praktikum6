<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Mahasiswa extends Model
{
    protected $table='mahasiswa';
    protected $primaryKey='nim';
    protected $dates = ['tanggal_lahir'];
    protected $fillable = [
        'Nim', 
        'Nama',
        'Foto_mahasiswa',
        'Kelas', 
        'Jurusan',
        'Email',
        'Alamat',
        'Tanggal_Lahir',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }   

    public function matakuliah(){
        return $this->hasMany(Matakuliah::class);
    }
}
