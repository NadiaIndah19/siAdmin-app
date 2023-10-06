@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Users /</span> User Management
</h4>

<!-- card Table -->
<div class="card">
  <div class="card-header d-flex align-items-center justify-content-between">
    <h5>User Account</h5>
    <a href="{{ url('users/add-user') }}" type="button" class="btn btn-outline-primary">+&nbsp; Tambah Data</a>
  </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>NIK</th>
          <th>Email</th>
          <th>Password</th>
          <th>Role</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
          <td>Nadia Indah</td>
          <td>2423131312321232</td>
          <td>user@gmail.com</td>
          <td>*********</td>
          <td>Warga</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('users/edit-user') }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>2</strong></td>
          <td>Nadia Indah</td>
          <td>2423131312321232</td>
          <td>user@gmail.com</td>
          <td>*********</td>
          <td>Warga</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('users/edit-user') }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>3</strong></td>
          <td>Nadia Indah</td>
          <td>2423131312321232</td>
          <td>user@gmail.com</td>
          <td>*********</td>
          <td>Warga</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('users/edit-user') }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
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
