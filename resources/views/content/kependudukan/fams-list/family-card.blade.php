@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Kependudukan /</span> Kartu Keluarga
</h4>

<!-- card Table -->
<div class="card">
  <div class="card-header d-flex align-items-center justify-content-between">
    <h5>Daftar KK Terlampir</h5>
    <a href="{{ url('kependudukan/fams-list/create-kk') }}" type="button" class="btn btn-outline-primary">+&nbsp; Tambah Data</a>
  </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nomor KK</th>
          <th>Nama Kepala Keluarga</th>
          <th>TTL</th>
          <th>Jenis Kelamin</th>
          <th>Agama</th>
          <th>Pendidikan</th>
          <th>Jenis Pekerjaan</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
          <td>35212134343546463</td>
          <td>Albert Faizal</td>
          <td>Glatik L5 RT 10 RW 02 Baturetno, Kec. Tuban, Kab. Tuban, Jawa Timur</td>
          <td>15-02-2022</td>
          <td><span class="badge bg-label-primary me-1">Active</span></td>
          <td>
            <a href="" class="btn btn-outline-success btn-sm btn-rounded"><i class='bx bx-show'></i></a>
            <a href="" class="btn btn-outline-info btn-sm btn-rounded"><i class='bx bx-message-square-edit'></i></a>
            <button onclick="destroy({{}})"  class="btn btn-outline-danger btn-sm"><i class='bx bx-trash-alt'></i></button>
          </td>
          {{-- <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('kependudukan/fams-list/update-kk') }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
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
