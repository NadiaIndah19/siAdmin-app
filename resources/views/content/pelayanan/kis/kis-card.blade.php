@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Pelayanan /</span> KIS 
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="{{url('pelayanan/kks/kks-card')}}"><i class="bx bx-user me-1"></i> KKS</a></li>
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-bell me-1"></i> KIS</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pelayanan/kip/kip-card')}}"><i class="bx bx-link-alt me-1"></i> KIP</a></li>
    </ul>
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5>Daftar Kartu  Indonesia Sehat</h5>
        <a href="{{ url('pelayanan/kis/create-kis') }}" type="button" class="btn btn-outline-primary">+&nbsp; Tambah Data</a>
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
                      <a class="dropdown-item" href="{{ url('pelayanan/kis/update-kis') }}"><i class="bx bx-edit-alt me-1"></i> Update</a>
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
                      <a class="dropdown-item" href="{{ url('pelayanan/kis/kis-card') }}"><i class="bx bx-edit-alt me-1"></i> View</a>
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
                      <a class="dropdown-item" href="{{ url('pelayanan/kis/kis-card') }}"><i class="bx bx-edit-alt me-1"></i> View</a>
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
</div>
@endsection
