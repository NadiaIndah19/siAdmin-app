@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Kependudukan/</span> AKTA 
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/death-list/create-death-card')}}"><i class="bx bx-user me-1"></i>Tambah Data</a></li>
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-bell me-1"></i>View Detail Data</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/death-list/update-death-card')}}"><i class="bx bx-link-alt me-1"></i>Update Data</a></li>
    </ul>
    <div class="card">
      <!-- Notifications -->
      <h5 class="card-header">View Detail Data</h5>
      <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="namepen" class="form-label">Nama Pendaftar</label>
              <input class="form-control" type="text" id="namepen" name="namepen" value="Novendra Rahman" autofocus disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="relation">Hubungan</label>
              <input class="form-control" type="text" id="relation" name="relation" value="Keluarga" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="NIKAlm" class="form-label">NIK Alm</label>
              <input class="form-control" type="text" id="NIKAlm" name="NIKAlm" value="31212812690002" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="name" class="form-label">Nama Lengkap Alm</label>
              <input class="form-control" type="text" id="name" name="name" value="Wahyuni" autofocus disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="ttlAlm" class="form-label">TTL Alm</label>
              <input type="text" class="form-control" id="ttlAlm" name="ttlAlm" value="Sidoarjo, 11 Maret 1889" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="gender" class="form-label">Jenis Kelamin</label>
              <input type="text" class="form-control" id="gender" name="gender" value="Islam" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="religion" class="form-label">Agama</label>
              <input type="text" class="form-control" id="religion" name="religion" value="Islam" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="statusAlm" class="form-label">Status Perkawinan</label>
              <input type="text" class="form-control" id="jobs" name="jobs" maxlength="6" value="Kawin" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="jobs" class="form-label">Pekerjaan</label>
              <input type="text" class="form-control" id="jobs" name="jobs" maxlength="6" value="Ibu rumah tangga" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="state" class="form-label">Kewarganegaraan</label>
              <input type="text" class="form-control" id="state" name="state" value="Indonesia" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="tptdeath" class="form-label">Tempat Meninggal</label>
              <input type="text" class="form-control" id="tptdeath" name="tptdeath" maxlength="6" value="Surabaya" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="tgldeath" class="form-label">Tgl Meninggal</label> 
              <input class="form-control" type="text" id="tgldeath" name="tgldeath" value="20-01-2019" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="penyebabkematian" class="form-label">Penyebab Kematian</label>
              <input type="text" class="form-control" id="penyebabkematian" name="penyebabkematian" value="Sakit Jantung" disabled/>
            </div>
              <div class="mb-3 col-md-6">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="address" name="address" value="Beringharjo No 31A" disabled/>
              </div>
              <div class="mb-3">
                <label for="notes" class="form-label">Catatan</label>
                <input type="text" class="form-control" id="notes" name="notes"maxlength="6" value="-" disabled/>
              </div>
              <div class="col-md-6 mb-3">
                <label for="filePernyataan" class="form-label">File Pernyataan Kematian</label>
                <input class="form-control" type="file" id="filePernyataan">
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
                <label for="fileTTD" class="form-label">File TTD</label>
                <input class="form-control" type="file" id="fileTTD">
              </div>
              <div class="col-md-6 mb-3">
                <label for="fileaktakel" class="form-label">File Akta Kelahiran</label>
                <input class="form-control" type="file" id="fileaktakel">
              </div>
              <div class="col-md-6 mb-3">
                <label for="filebukunikah" class="form-label">File Buku Nikah</label>
                <input class="form-control" type="file" id="filebukunikah">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
