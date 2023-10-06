@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User/</span>Edit Account User</h4>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edit User</h5> <small class="text-muted float-end"></small>
      </div>
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Full Name</label>
            <input type="text" class="form-control" id="basic-default-fullname" placeholder="Nadia Indah" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-nik">NIK</label>
            <input type="text" class="form-control" id="basic-default-nik" placeholder="2423131312321232" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-email">Email</label>
            <div class="input-group input-group-merge">
              <input type="text" id="basic-default-email" class="form-control" placeholder="user@gmail.com" aria-describedby="basic-default-email2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-password">Password</label>
            <input type="text" id="basic-default-password" class="form-control password-mask" placeholder="*********" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-role">Role</label>
            <input type="text" id="basic-default-role" class="form-control" placeholder="Warga"/>
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
