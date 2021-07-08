<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriSiswa extends Model
{
    protected $table = 'kategori_siswa';
    protected $primaryKey = 'id_kategori';
    protected $fillable = ['nama_kategori'];
}
