@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Perizinan / Bussiness /</span> SIUP </h4>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Update Surat Izin Usaha Perdagangan</h5>
      </div>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input class="form-control" type="text" id="nama" name="nama" value="Novendra Rahman" autofocus disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="address" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="address" name="address" value="Beringharjo No 31A"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="nohp" class="form-label">No Hp</label>
              <input type="text" class="form-control" id="nohp" name="nohp" maxlength="6" value="083284823723"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="jenisbisnis" class="form-label">Jenis Usaha</label>
              <input type="text" class="form-control" id="jenisusaha" name="jenisusaha" maxlength="6" value="Material"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="locs" class="form-label">Alamat Usaha</label>
              <input type="text" class="form-control" id="locs" name="locs" maxlength="6" value="Kalijogo Latsari 1A"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="status" class="form-label">Status</label>
              <input type="text" class="form-control" id="status" name="status" maxlength="6" value="On Proses"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="basic-icon-default-tglpengajuan" class="form-label">Tgl Pengajuan</label>
              <input class="form-control" type="text" id="tglpengajuan" name="tglpengajuan" value="20-01-2019" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="basic-icon-default-tglpersetujuan" class="form-label">Tgl Persetujuan</label>
              <input class="form-control" type="text" id="tglpersetujuan" name="tglpersetujuan" value="20-01-2019"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="basic-icon-default-tglpenolakkan" class="form-label">Tgl Penolakkan</label>
              <input class="form-control" type="text" id="tglpenolakkan" name="tglpenolakkan" value="20-01-2019"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="basic-icon-default-tglselesai" class="form-label">Tgl Selesai</label>
              <input class="form-control" type="text" id="tglselesai" name="tglselesai" value="20-01-2019"/>
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
