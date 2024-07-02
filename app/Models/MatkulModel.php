<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatkulModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_matkul'; // Nama tabel dalam database
    protected $keyType = 'string'; // Menggunakan 'string' untuk tipe data varchar pada primary key
    public $timestamps = false; // Menonaktifkan timestamps
    protected $primaryKey = 'Kode_Matkul'; // Primary key tabel

    // Daftar kolom yang dapat diisi
    protected $fillable = [
        'Kode_Matkul',
        'Nama_Matkul',
        'Semester',
        'SKS',
        'Kode_Dosen',
        'Nama_Dosen',
        'Kode_Prodi',
        'Nama_Prodi'
        
        
    ];
}
