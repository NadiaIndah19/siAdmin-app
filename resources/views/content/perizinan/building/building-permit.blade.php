@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Perizinan / Building /</span> IMB
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
  <div class="card-header d-flex align-items-center justify-content-between">
    <h5>Izin Mendirikan Bangunan</h5>
    <a href="{{ url('perizinan/building/create-building-permit') }}" type="button" class="btn btn-outline-primary">+&nbsp; Tambah Data</a>
  </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>NIK</th>
          <th>Nama Lengkap</th>
          <th>Alamat Lengkap</th>
          <th>No HP</th>
          <th>Lokasi Bangunan</th>
          <th>Tgl Pengajuan</th>
          <th>Status</th>
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
          <td>Pelajar/Mahasiswa</td>
          <td>
            <a href="" class="btn btn-outline-success btn-sm btn-rounded"><i class='bx bx-show'></i></a>
            <a href="" class="btn btn-outline-info btn-sm btn-rounded"><i class='bx bx-message-square-edit'></i></a>
            <button onclick="destroy({{}})"  class="btn btn-outline-danger btn-sm"><i class='bx bx-trash-alt'></i></button>
          </td>
          {{-- <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('perizinan/building/view-building-permit') }}"><i class="bx bx-show-alt me-1"></i> View</a>
                <a class="dropdown-item" href="{{ url('perizinan/building/update-building-permit') }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td> --}}
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->

@endsection
