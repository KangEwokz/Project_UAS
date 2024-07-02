<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_dosen'; // Nama tabel dalam database
    protected $keyType = 'string'; // Menggunakan 'string' untuk tipe data varchar pada primary key
    public $timestamps = false; // Menonaktifkan timestamps
    protected $primaryKey = 'Kode_Dosen'; // Primary key tabel

    // Daftar kolom yang dapat diisi
    protected $fillable = [
        'Kode_Dosen',
        'Foto',
        'Nama_Dosen',
        'Jenis_Kelamin',
        'Alamat',
        'Nomor_Telepon',
        'Email',
        'Kode_Prodi'
    ];
}
