@extends('layouts/contentNavbarLayout')

@section('title')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Kependudukan /</span> AKTA 
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Kematian</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/birth-list/birth-card')}}"><i class="bx bx-bell me-1"></i> Kelahiran</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/marriage-list/marriage-card')}}"><i class="bx bx-link-alt me-1"></i> Pernikahan</a></li>
    </ul>
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5>Daftar AKTA Kematian</h5>
        <a href="{{ url('kependudukan/death-list/create-death-card') }}" type="button" class="btn btn-outline-primary">+&nbsp; Tambah Data</a>
      </div>
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama Pendaftar</th>
              <th>Hubungan</th>
              <th>NIK Alm</th>
              <th>Nama Alm</th>
              <th>TTL Alm</th>
              <th>Jenis Kelamin</th>
              <th>Actions</th>
              {{-- <th>Agama</th>
              <th>Status Perkawinan</th>
              <th>Pekerjaan</th>
              <th>Kewarganegaraan</th>
              <th>Tgl Meninggal</th>
              <th>Tempat Meninggal</th>
              <th>Penyebab Kematian</th>
              <th>Penentu</th>
              <th>Alamat</th>
              <th>Catatan</th>
              <th>File Pernyataan</th>
              <th>File KTP</th>
              <th>File KK</th>
              <th>File TTD</th>
              <th>Tgl Pembuatan</th>--}}
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
              <td>Albert Cook</td>
              <td>Anak Kandung</td>
              <td>31213423453232</td>
              <td>Albert Naem</td>
              <td>Surabaya, 11 November 1999</td>
              <td>Laki-Laki</td>
              <td>
                <a href="" class="btn btn-outline-success btn-sm btn-rounded"><i class='bx bx-show'></i></a>
                <a href="" class="btn btn-outline-info btn-sm btn-rounded"><i class='bx bx-message-square-edit'></i></a>
                <button onclick=""  class="btn btn-outline-danger btn-sm"><i class='bx bx-trash-alt'></i></button>
              </td>
              {{-- <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('kependudukan/death-list/view-death-card') }}"><i class="bx bx-edit-alt me-1"></i> View</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td> --}}
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
