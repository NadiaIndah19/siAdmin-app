@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kependudukan / </span>Tambah KK</h4>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Tambah Data Kartu Keluarga</h5>
        <small class="text-muted float-end">Masukkan data dengan benar</small>
      </div>
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-nomorKK">No KK</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-nomorKK2" class="input-group-text"><i class="bx bx-user"></i></span>
              <input type="text" class="form-control" id="basic-icon-default-nomorKK" aria-describedby="basic-icon-default-fullname2" disabled/>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-name">Nama Lengkap</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-name2" class="input-group-text"><i class="bx bxs-user-detail"></i></span>
              <input type="text" id="basic-icon-default-name" class="form-control" aria-describedby="basic-icon-default-name2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-address">TTL</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
              <input type="text" id="basic-icon-default-address" class="form-control" aria-describedby="basic-icon-default-address2" />
            </div>
          </div>
          <div class="mb-3">
            <label for="html5-tgl-input" class="col-md-2 col-form-label">Agama</label>
            <div class="col-md-12">
              <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-status">Jenis Kelamin</label>
            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
              <option selected>Pilih Status</option>
              <option value="1">Laki-laki</option>
              <option value="2">Perempuan</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="html5-tgl-input" class="col-md-2 col-form-label">Pendidikan</label>
            <div class="col-md-12">
              <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
            </div>
          </div>
          <div class="mb-3">
            <label for="html5-tgl-input" class="col-md-2 col-form-label">Pekerjaan</label>
            <div class="col-md-12">
              <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
            </div>
          </div>
          <div class="mb-3">
            <label for="html5-tgl-input" class="col-md-3 col-form-label">Status Hubungan Keluarga</label>
            <div class="col-md-12">
              <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
            </div>
          </div>
          <div class="mb-3">
            <label for="html5-tgl-input" class="col-md-2 col-form-label">Status Perkawinan</label>
            <div class="col-md-12">
              <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
            </div>
          </div>
          <div class="mb-3">
            <label for="html5-tgl-input" class="col-md-2 col-form-label">Tgl Perkawinan</label>
            <div class="col-md-12">
              <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
            </div>
          </div>
          <div class="mb-3">
            <label for="html5-tgl-input" class="col-md-2 col-form-label">Kewarganegaraan</label>
            <div class="col-md-12">
              <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
            </div>
          </div>
          <div class="mb-3">
            <label for="html5-tgl-input" class="col-md-2 col-form-label">Nama Orang Tua</label>
            <div class="col-md-12">
              <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
