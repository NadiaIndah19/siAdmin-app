@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kependudukan/</span>Tambah KK</h4>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Tambah KK</h5>
        <small class="text-muted float-end">Masukkan data dengan benar</small>
      </div>
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-nomorKK">No KK</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-nomorKK2" class="input-group-text"><i class="bx bx-user"></i></span>
              <input type="text" class="form-control" id="basic-icon-default-nomorKK" aria-describedby="basic-icon-default-fullname2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-name">Nama Kepala Keluarga</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-name2" class="input-group-text"><i class="bx bxs-user-detail"></i></span>
              <input type="text" id="basic-icon-default-name" class="form-control" aria-describedby="basic-icon-default-name2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-address">Alamat</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
              <input type="text" id="basic-icon-default-address" class="form-control" aria-describedby="basic-icon-default-address2" />
            </div>
          </div>
          <div class="mb-3">
            <label for="html5-tgl-input" class="col-md-2 col-form-label">Tanggal Pendaftaran KK</label>
            <div class="col-md-12">
              <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
            </div>
            {{-- <div class="input-group input-group-merge">
              <span id="basic-icon-default-tgl-kk2" class="input-group-text"><i class="bx bx-key"></i></span>
              <input type="text" id="basic-icon-default-tgl-kk" class="form-control tgl-kk-mask" aria-describedby="basic-icon-default-tgl-kk2" />
            </div> --}}
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-status">Status</label>
            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
              <option selected>Pilih Status</option>
              <option value="1">Aktif</option>
              <option value="2">Tidak Aktif</option>
            </select>
            {{-- <div class="input-group input-group-merge">
              <span id="basic-icon-default-status2" class="input-group-text"><i class="bx bx-list-ul"></i></span>
              <input type="text" id="basic-icon-default-status" class="form-control status-mask" aria-describedby="basic-icon-default-status2" />
            </div> --}}
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
