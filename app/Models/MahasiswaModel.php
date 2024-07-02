<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_mahasiswa';
    protected $primaryKey = 'NIM';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'NIM',
        'Foto',
        'Nama',
        'Jenis_Kelamin',
        'Alamat',
        'Nomor_Telepon',
        'Email',
        'Kode_Prodi',
        'Nama_Prodi',
        'Semester',
        'Status'
    ];


}
