@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Kependudukan/</span> AKTA 
</h4>

<div class="row">
  <div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h5>Daftar AKTA Kelahiran</h5>
      <a href="{{ url('kependudukan/birth-list/create-birth-card') }}" type="button" class="btn btn-outline-primary">+&nbsp; Tambah Data</a>
    </div>
      <div class="table-responsive text-nowrap">
        <table class="table table-borderless">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
              <td>Albert Cook</td>
              <td>Surakarta</td>
              <td>12-08-2022</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('kependudukan/birth-list/view-birth-card') }}"><i class="bx bx-edit-alt me-1"></i> View</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
              <td>Albert Cook</td>
              <td>Surakarta</td>
              <td>12-08-2022</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('kependudukan/birth-list/view-birth-card') }}"><i class="bx bx-edit-alt me-1"></i> View</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
              <td>Albert Cook</td>
              <td>Surakarta</td>
              <td>12-08-2022</td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('kependudukan/birth-list/view-birth-card') }}"><i class="bx bx-edit-alt me-1"></i> View</a>
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>
</div>
@endsection
