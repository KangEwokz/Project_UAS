<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MahasiswaModel;
use App\Models\DosenModel;
use App\Models\MatkulModel;

class DashboardController extends Controller
{
    public function dashboard() {
        $Mhs = MahasiswaModel::count();
        $Dosen = DosenModel::count();
        $Matkul = MatkulModel::count();
    
        $mahasiswa = DB::table('tbl_mahasiswa')
            ->join('tbl_prodi', 'tbl_mahasiswa.Kode_Prodi', '=', 'tbl_prodi.Kode_Prodi')
            ->select('tbl_mahasiswa.*', 'tbl_prodi.Nama_Prodi')
            ->where('tbl_mahasiswa.Kode_Prodi', 'PEI-1') // Pastikan 'PEI-1' adalah kode prodi yang benar
            ->get();
    
        $dosen = DB::table('tbl_dosen')
            ->join('tbl_prodi', 'tbl_dosen.Kode_Prodi', '=', 'tbl_prodi.Kode_Prodi')
            ->select('tbl_dosen.*', 'tbl_prodi.Nama_Prodi')
            ->where('tbl_dosen.Kode_Prodi', 'PEI-1') // Pastikan 'PEI-1' adalah kode prodi yang benar
            ->get();
    
        return view('Dashboard', compact('Mhs', 'Dosen', 'Matkul', 'mahasiswa', 'dosen'));
    }
    
}
