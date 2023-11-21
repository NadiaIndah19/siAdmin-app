@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Pengaduan /</span> Data Pengaduan
</h4>

<div class="card">
  <div class="card-header d-flex align-items-center justify-content-between">
    <h5>Daftar Pengaduan Kelurahan</h5>
    <a href="{{ url('pengaduan/create-complaints') }}" type="button" class="btn btn-outline-primary">+&nbsp; Tambah Data</a>
  </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>NIK</th>
          <th>Nama</th>
          <th>Judul Pengaduan</th>
          <th>Deskripsi Pengaduan</th>
          <th>Jenis Pengaduan</th>
          <th>Lokasi Pengajuan</th>
          <th>File Lampiran</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
          <td>31213423453232</td>
          <td>Albert Cook</td>
          <td>Saluran selekon tersumbat </td>
          <td>Sudah 5 hari ini selokan dekat masjid tersumbat sehingga jika ada hujan bisa mengakibatkan air 
            menggenang hingga halaman masjid</td>
          <td>Lingkungan</td>
          <td>Arjomulyo No 5 RT 01 RW 02</td>
          <td>-</td>
          <td>
            <a href="" class="btn btn-outline-success btn-sm btn-rounded"><i class='bx bx-show'></i></a>
            <a href="" class="btn btn-outline-info btn-sm btn-rounded"><i class='bx bx-message-square-edit'></i></a>
            <button onclick="destroy({{}})"  class="btn btn-outline-danger btn-sm"><i class='bx bx-trash-alt'></i></button>
          </td>
          {{-- <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('pengaduan/update-complaints') }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td> --}}
        </tr>
      </tbody>
    </table>
  </div>
</div>

{{-- <hr class="my-5"> --}}

<!-- Responsive Table -->
{{-- <div class="card">
  <h5 class="card-header">Responsive Table</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr class="text-nowrap">
          <th>#</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
          <th>Table heading</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
          <td>Table cell</td>
        </tr>
      </tbody>
    </table>
  </div>
</div> --}}
<!--/ Responsive Table -->
@endsection
