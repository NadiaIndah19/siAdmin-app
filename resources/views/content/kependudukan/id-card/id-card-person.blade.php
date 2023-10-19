@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Kependudukan /</span> Kartu Tanda Penduduk
</h4>

<!-- ktp form -->
<div class="card">
  <div class="card-header d-flex align-items-center justify-content-between">
    <h5>Pendaftaran KTP</h5>
    <a href="{{ url('kependudukan/id-card/create-id-card') }}" type="button" class="btn btn-outline-primary">+&nbsp; Tambah Data</a>
  </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>NIK</th>
          <th>Nama</th>
          <th>TTL</th>
          <th>Jenis Kelamin</th>
          <th>Gol. Darah</th>
          <th>Alamat</th>
          <th>Agama</th>
          <th>Status Perkawinan</th>
          <th>Pekerjaan</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
          <td>31213423453232</td>
          <td>Albert Cook</td>
          <td>Surabaya, 11 November 1999</td>
          <td>Laki-Laki</td>
          <td>A</td>
          <td>Arjomulyo No 5 RT 01 RW 02</td>
          <td>Islam</td>
          <td>Belum Menikah</td>
          <td>Pelajar/Mahasiswa</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('kependudukan/id-card/update-id-card') }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->

@endsection