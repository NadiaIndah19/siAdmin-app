@extends('layouts/contentNavbarLayout')

@section('title')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Pelayanan /</span> KKS </h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>Tambah Data</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pelayanan/kks/kks-card')}}"><i class="bx bx-bell me-1"></i>View Data</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pelayanan/kks/update-kks')}}"><i class="bx bx-link-alt me-1"></i>Update Data</a></li>
    </ul>
    <div class="card mb-4">
      <h5 class="card-header">Create KKS</h5>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="namepen" class="form-label">No KKS</label>
              <input class="form-control" type="text" id="namepen" name="namepen" value="" autofocus />
            </div>
            <div class="mb-3 col-md-6">
              <label for="name" class="form-label">Nama Kepala Keluarga</label>
              <input class="form-control" type="text" id="name" name="name" value="" autofocus />
            </div>
            <div class="mb-3 col-md-6">
              <label for="address" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="address" name="address"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="jml_kel" class="form-label">Jumlah Anggota Keluarga</label>
              <input type="text" class="form-control" id="jml_kel" name="jml_kel"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="statusAlm" class="form-label">Status</label>
              <select id="statusAlm" class="select2 form-select">
                <option value="">Pilih status</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
              </select>
            </div>
              <div class="col-md-6 mb-3">
                <label for="fileTTD" class="form-label">File TTD</label>
                <input class="form-control" type="file" id="fileTTD">
              </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-primary me-2">Save changes</button>
              <button type="reset" class="btn btn-outline-secondary">Cancel</button>
            </div>
          </div>
        </form>
      </div>
      <!-- /Account -->
    </div>
    <div class="card">
      <h5 class="card-header">Delete Account</h5>
      <div class="card-body">
        <div class="mb-3 col-12 mb-0">
          <div class="alert alert-warning">
            <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
            <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
          </div>
        </div>
        <form id="formAccountDeactivation" onsubmit="return false">
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" />
            <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
          </div>
          <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
