@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kependudukan /</span> AKTA </h4>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>Tambah Data</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/birth-list/birth-card')}}"><i class="bx bx-bell me-1"></i>View Data</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/birth-list/update-birth-card')}}"><i class="bx bx-link-alt me-1"></i>Update Data</a></li>
    </ul>
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Create AKTA Kelahiran</h5>
        <small class="text-muted float-end">Masukkan data dengan benar</small>
      </div>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="noAkta" class="form-label">Nomor AKTA</label>
              <input class="form-control" type="text" id="noAkta" name="noAkta"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="namaAnak" class="form-label">Nama Anak</label>
              <input class="form-control" type="text" id="namaAnak" name="namaAnak" autofocus/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="tptbirth" class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control" id="tptbirth" name="tptbirth" maxlength="6"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="basic-icon-default-tglbirth" class="form-label">Tanggal Lahir</label>
              <div class="input-group input-group-merge">
                <input class="form-control" type="date" value="11-02-2023" id="html5-tglbirth" />
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="gender">Jenis Kelamin</label>
              <select id="gender" class="select2 form-select">
                <option value="">Pilih Gender</option>
                <option value="lk">Laki-laki</option>
                <option value="pr">Perempuan</option>
              </select>
            </div>
              <div class="mb-3 col-md-6">
                <label for="nameAyah" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control" id="nameAyah" name="nameAyah"maxlength="6" />
              </div>
              <div class="mb-3 col-md-6">
                <label for="nameIbu" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" id="nameIbu" name="nameIbu"maxlength="6"/>
              </div>
              <div class="mb-3 col-md-6">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="address" name="address"/>
              </div>
              <div class="mb-3 col-md-6">
                <label for="notes" class="form-label">Catatan</label>
                <input type="text" class="form-control" id="notes" name="notes"maxlength="6"/>
              </div>
              <div class="col-md-6 mb-3">
                <label for="fileKet" class="form-label">File Keterangan</label>
                <input class="form-control" type="file" id="fileKet">
              </div>
              <div class="col-md-6 mb-3">
                <label for="fileKK" class="form-label">File KK</label>
                <input class="form-control" type="file" id="fileKK">
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
