@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User/</span> New Account User</h4>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Create User</h5>
        <small class="text-muted float-end">Masukkan data dengan benar</small>
      </div>
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
              <input type="text" class="form-control" id="basic-icon-default-fullname" aria-describedby="basic-icon-default-fullname2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-nik">NIK</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-nik2" class="input-group-text"><i class="bx bxs-user-detail"></i></span>
              <input type="text" id="basic-icon-default-nik" class="form-control" aria-describedby="basic-icon-default-nik2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-email">Email</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
              <input type="text" id="basic-icon-default-email" class="form-control" aria-describedby="basic-icon-default-email2" />
              <span id="basic-icon-default-email2" class="input-group-text">@gmail.com</span>
            </div>
            {{-- <div class="form-text"> You can use letters, numbers & periods </div> --}}
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-password">Password</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-password2" class="input-group-text"><i class="bx bx-key"></i></span>
              <input type="text" id="basic-icon-default-password" class="form-control password-mask" aria-describedby="basic-icon-default-password2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-role">Role</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-role2" class="input-group-text"><i class="bx bx-list-ul"></i></span>
              <input type="text" id="basic-icon-default-role" class="form-control role-mask" aria-describedby="basic-icon-default-role2" />
            </div>
          </div>
          {{-- <div class="mb-3">
            <label class="form-label" for="basic-icon-default-message">Message</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
              <textarea id="basic-icon-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
            </div>
          </div> --}}
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
