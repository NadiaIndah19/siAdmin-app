@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Pelayanan / Building /</span> SIUP 
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
  <div class="card-header d-flex align-items-center justify-content-between">
    <h5>Surat Izin Usaha Perdagangan</h5>
    <a href="{{ url('pelayanan/bussiness/create-bussiness-licence') }}" type="button" class="btn btn-outline-primary">+&nbsp; Tambah Data</a>
  </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama Lengkap</th>
          <th>Alamat Lengkap</th>
          <th>No HP</th>
          <th>Jenis Usaha</th>
          <th>Alamat Usaha</th>
          <th>Tgl Status</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
          <td>Albert Cook</td>
          <td>Baturetno gg. Melati No 2B</td>
          <td>082313483727</td>
          <td>Material</td>
          <td>Jl. Goa Akbar 56 Tuban</td>
          <td>17-09-2022</td>
          <td>On Proses</td>
          <td>
            <a href="" class="btn btn-outline-success btn-sm btn-rounded"><i class='bx bx-show'></i></a>
            <a href="" class="btn btn-outline-info btn-sm btn-rounded"><i class='bx bx-message-square-edit'></i></a>
            <button onclick="destroy({{}})"  class="btn btn-outline-danger btn-sm"><i class='bx bx-trash-alt'></i></button>
          </td>
          {{-- <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('pelayanan/bussiness/view-bussiness-licence') }}"><i class="bx bx-show-alt me-1"></i> View</a>
                <a class="dropdown-item" href="{{ url('pelayanan/bussiness/update-bussiness-licence') }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
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
