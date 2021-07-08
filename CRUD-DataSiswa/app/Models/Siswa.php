<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    protected $fillable = ['nama_siswa', 'jenis_kelamin', 'id_kategori', 'asal', 'agama', 'alamat' ];
    public function kategori(){
        return $this->belongsTo('App\Models\KategoriSiswa', 'id_kategori');
    }
}
