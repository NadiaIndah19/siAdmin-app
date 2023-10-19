@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kependudukan/</span>Update KTP</h4>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Kartu Tanda Penduduk</h5>
      </div>
      <div class="card-body">
        <form>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label" for="basic-icon-default-name">Nama Lengkap</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-name2" class="input-group-text"></span>
                <input type="text" id="basic-icon-default-name" class="form-control" aria-describedby="basic-icon-default-name2" />
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label" for="basic-icon-default-nik">NIK</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-nik2" class="input-group-text"></span>
                <input type="text" class="form-control" id="basic-icon-default-nik" aria-describedby="basic-icon-default-nik2" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label" for="basic-icon-default-ttl">Tempat Lahir</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-ttl2" class="input-group-text"></span>
                <input type="text" id="basic-icon-default-ttl" class="form-control ttl-mask" aria-describedby="basic-icon-default-ttl2" />
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label" for="basic-icon-default-tgl">Tanggal Lahir</label>
              <div class="input-group input-group-merge">
                <input class="form-control" type="date" value="2021-06-18" id="html5-tgl-input" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label" for="basic-icon-default-gender">Jenis Kelamin</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-gender2" class="input-group-text"></i></span>
                <input type="text" id="basic-icon-default-gender" class="form-control" aria-describedby="basic-icon-default-gender2" />
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label" for="basic-icon-default-goldar">Golongan Darah</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"></span>
                <input type="text" id="basic-icon-default-goldar" class="form-control" aria-describedby="basic-icon-default-goldar2" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label" for="basic-icon-default-address">Alamat</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"></span>
                <input type="text" id="basic-icon-default-address" class="form-control" aria-describedby="basic-icon-default-address2" />
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label" for="basic-icon-default-religion">Agama</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"></span>
                <input type="text" id="basic-icon-default-religion" class="form-control" aria-describedby="basic-icon-default-religion2" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label" for="basic-icon-default-work">Pekerjaan</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"></span>
                <input type="text" id="basic-icon-default-work" class="form-control" aria-describedby="basic-icon-default-work2" />
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="formFile" class="form-label">File KK</label>
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
