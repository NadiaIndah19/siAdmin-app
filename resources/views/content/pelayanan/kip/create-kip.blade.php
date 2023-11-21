@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Pelayanan / </span> Kartu Indonesia Pintar
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>Tambah Data</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pelayanan/kip/view-kip')}}"><i class="bx bx-bell me-1"></i>View Data</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pelayanan/kip/update-kip')}}"><i class="bx bx-link-alt me-1"></i>Update Data</a></li>
    </ul>
    <div class="card mb-4">
      <h5 class="card-header">Create KIP</h5>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input class="form-control" type="text" id="name" name="name" value="" autofocus />
            </div>
            <div class="mb-3 col-md-6">
              <label for="NISN" class="form-label">NISN</label>
              <input class="form-control" type="text" id="NISN" name="NISN" value="" autofocus />
            </div>
            <div class="mb-3 col-md-6">
              <label for="ttl" class="form-label">TTL</label>
              <input type="text" class="form-control" id="ttl" name="ttl"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="address" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="address" name="address"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="school" class="form-label">Asal Sekolah</label>
              <input type="text" class="form-control" id="school" name="school"/>
            </div>
            <div class="col-md-6 mb-3">
              <label for="pengantar" class="form-label">File Surat Pengantar RT/RW</label>
              <input class="form-control" type="file" id="pengantar">
            </div>
            <div class="col-md-6 mb-3">
              <label for="fileKTP" class="form-label">File KTP</label>
              <input class="form-control" type="file" id="fileKTP">
            </div>
            <div class="col-md-6 mb-3">
              <label for="fileKK" class="form-label">File KK</label>
              <input class="form-control" type="file" id="fileKK">
            </div>
            <div class="col-md-6 mb-3">
              <label for="fileAKTA" class="form-label">File AKTA</label>
              <input class="form-control" type="file" id="fileAKTA">
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
  </div>
</div>
@endsection
