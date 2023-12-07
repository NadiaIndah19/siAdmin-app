@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Pelayanan / </span> SIUP 
</h4>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <h5 class="card-header">View Detail Data</h5>
      <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input class="form-control" type="text" id="nama" name="nama" value="Novendra Rahman" autofocus disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="address" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="address" name="address" value="Beringharjo No 31A" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="nohp" class="form-label">No Hp</label>
              <input type="text" class="form-control" id="nohp" name="nohp" value="083284823723" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="jenisbisnis" class="form-label">Jenis Usaha</label>
              <input type="text" class="form-control" id="jenisusaha" name="jenisusaha" value="Material" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="locs" class="form-label">Alamat Usaha</label>
              <input type="text" class="form-control" id="locs" name="locs" value="Kalijogo Latsari 1A" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="status" class="form-label">Status</label>
              <input type="text" class="form-control" id="status" name="status" value="On Proses" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="basic-icon-default-tglstatus" class="form-label">Tgl Status</label>
              <input class="form-control" type="text" id="tglstatus" name="tglstatus" value="20-01-2019" disabled/>
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-primary me-2">Save changes</button>
            </div>  
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
