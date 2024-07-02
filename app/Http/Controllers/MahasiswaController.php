<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaModel;

class MahasiswaController extends Controller
{
    public function addMahasiswa() {

        return view('InsMahasiswa');
    }

    public function insMahasiswa(request $request){

        $foto = $request->file('Foto');
        if (isset( $foto)){
            $foto = $request->file('Foto');
        $namaFoto = $foto->getClientOriginalName();
        $pathFoto = $foto->move('gambar/Mahasiswa/TRPL', $namaFoto)->getPathname();

        }else{
            $pathFoto = null;
        }

        MahasiswaModel::create([
            'NIM' => $request->NIM,
            'Nama' => $request->Nama,
            'Jenis_Kelamin' => $request->Jenis_Kelamin,
            'Alamat' => $request->Alamat,
            'Nomor_Telepon' => $request->Nomor_Telepon,
            'Email' => $request->Email,
            'Kode_Prodi' => $request->Kode_Prodi,
            'Semester' => $request->Semester,
            'Status' => $request->Status,
            'Foto' => $pathFoto
        ]);
    
        // Mengarahkan kembali ke halaman TRPL
        return redirect('/dash')->with('success', 'Data Mahasiswa berhasil ditambahkan');
    }
    
}
