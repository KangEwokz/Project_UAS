@extends('master')

@section('card-content')
<div class="row">
    <div class="col-sm-3 stretch-card grid-margin">
      <div class="card bg-gradient-danger card-img-holder text-white">
        <div class="card-body">
          <img src="theme2/dist/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Mahasiswa <i class="mdi mdi-chart-line mdi-24px float-end"></i>
          </h4>
          <h2 class="mb-5">{{$Mhs}}</h2>
        </div>
      </div>
    </div>
    <div class="col-sm-3 stretch-card grid-margin">
      <div class="card bg-gradient-info card-img-holder text-white">
        <div class="card-body">
          <img src="theme2/dist/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Dosen<i class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
          </h4>
          <h2 class="mb-5">{{$Dosen}}</h2>
        </div>
      </div>
    </div>
    <div class="col-sm-3 stretch-card grid-margin">
      <div class="card bg-gradient-success card-img-holder text-white">
        <div class="card-body">
          <img src="theme2/dist/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Matkul<i class="mdi mdi-diamond mdi-24px float-end"></i>
          </h4>
          <h2 class="mb-5">{{$Matkul}}</h2>
          <h6 class="card-text"></h6>
        </div>
      </div>
    </div>
    <div class="col-sm-3 stretch-card grid-margin">
      <div class="card bg-gradient-success card-img-holder text-white">
        <div class="card-body">
          <img src="theme2/dist/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3">Nilai<i class="mdi mdi-diamond mdi-24px float-end"></i>
          </h4>
          {{-- <h2 class="mb-5">{{$Nilai}}</h2> --}}
          <h6 class="card-text"></h6>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('mahasiswa')
<div class="table-responsive p-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="kartu-title kartu-link">Data Mahasiswa</h4>
      {{-- Tambah link tambah data hanya untuk admin --}}
      {{-- @if (auth()->user()->role == 'admin') --}}
      <a class="btn btn-outline-primary" href="/addMhs">
          <i class="fa-sharp fa-solid fa-plus"></i> Tambah Data
      </a>
      {{-- @endif --}}
  </div>
  <table id="example" class="display table table-bordered table-hover text-center" style="width:100%">
      <thead>
          <tr>
              <th>NIM</th>
              <th>Foto</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Nomor Telepon</th>
              <th>Email</th>
              <th>Nama Prodi</th>
              <th>Semester</th>
              <th>Status</th>
              {{-- Tambah kolom action hanya untuk admin --}}
              {{-- @if (auth()->user()->role == 'admin') --}}
              <th>Action</th>
              {{-- @endif --}}
          </tr>
      </thead>
      <tbody>
          {{-- Looping data mahasiswa --}}
          @foreach ($mahasiswa as $mhs)
              <tr>
                  <td>{{ $mhs->NIM }}</td>
                  <td class="text-center">
                      <img src="{{ $mhs->Foto }}" width="50px" alt="Foto">
                  </td>
                  <td>{{ $mhs->Nama }}</td>
                  <td>{{ $mhs->Jenis_Kelamin }}</td>
                  <td>{{ $mhs->Alamat }}</td>
                  <td>{{ $mhs->Nomor_Telepon }}</td>
                  <td>{{ $mhs->Email }}</td>
                  <td>{{ $mhs->Nama_Prodi }}</td>
                  <td class="text-center">{{ $mhs->Semester }}</td>
                  <td class="text-center">
                      {{-- Tampilkan status dengan warna berbeda --}}
                      <span class="status-label"
                          data-nim="{{ $mhs->NIM }}"
                          data-status="{{ $mhs->Status }}"
                          style="cursor: pointer;"
                          data-bs-toggle="modal"
                          data-bs-target="#statusModal">
                          <span class="{{ $mhs->Status == 'Aktif' ? 'text-success fw-bold' : '' }}
                                      {{ $mhs->Status == 'Non Aktif' ? 'text-warning fw-bold' : '' }}
                                      {{ $mhs->Status == 'Cuti' ? 'text-info fw-bold' : '' }}
                                      {{ $mhs->Status == 'Drop Out' ? 'text-danger fw-bold' : '' }}">
                              {{ $mhs->Status }}
                          </span>
                      </span>
                  </td>
                  {{-- Tampilkan tombol edit dan hapus hanya untuk admin --}}
                  {{-- @if (auth()->user()->role == 'admin') --}}
                  <td class="action-buttons">
                      <a href="/EditTRPL/{{ $mhs->NIM }}">
                          <i class="fa-regular fa-pen-to-square fa-xl" style="color: #63E6BE;"></i>
                      </a>
                      <a href="/DelTRPL/{{ $mhs->NIM }}" class="ms-3">
                          <i class="fa-solid fa-trash fa-xl" style="color: #f00018;"></i>
                      </a>
                  </td>
                  {{-- @endif --}}
              </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection


@section('dosen')
<div class="table-responsive p-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="kartu-title kartu-link">Data Mahasiswa</h4>
      {{-- @if (auth()->user()->role=='admin') --}}
      <a class="btn btn-outline-primary" href="">
          <i class="fa-sharp fa-solid fa-plus"> Tambah Data</i>
      </a>
      {{-- @endif --}}
  </div>
  <table id="example" class="display table table-bordered table-hover text-center" style="width:100%">
      <thead>
          <tr>
              <th>NIDN</th>
              <th>Foto</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Nomor Telepon</th>
              <th>Email</th>
              <th>Nama Prodi</th>
              <th>Semester</th>
              {{-- @if (auth()->user()->role=='admin') --}}
              <th>Action</th>
              {{-- @endif --}}
          </tr>
      </thead>
      <tbody>
          @foreach ($dosen as $dsn)
              <tr>
                  <td>{{ $dsn->NIM }}</td>
                  <td class="text-center">
                      <img src="{{ $dsn->Foto }}" width="50px">
                  </td>
                  <td>{{ $dsn->Nama }}</td>
                  <td>{{ $dsn->Jenis_Kelamin }}</td>
                  <td>{{ $dsn->Alamat }}</td>
                  <td>{{ $dsn->Nomor_Telepon }}</td>
                  <td>{{ $dsn->Email }}</td>
                  <td>{{ $dsn->Nama_Prodi }}</td>
                  {{-- @if (auth()->user()->role=='admin') --}}
                  <td class="action-buttons">
                      <a href="/EditTRPL/{{ $mhs->NIM }}">
                          <i class="fa-regular fa-pen-to-square fa-xl" style="color: #63E6BE;"></i>
                      </a>
                      <a href="/DelTRPL/{{ $mhs->NIM }}" class="ms-3">
                          <i class="fa-solid fa-trash fa-xl" style="color: #f00018;"></i>
                      </a>
                  </td>
                  {{-- @endif --}}
              </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection