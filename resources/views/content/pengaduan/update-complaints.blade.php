@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pengaduan / </span>Update Complaint</h4>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edit Pengaduan</h5>
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
              <label class="form-label" for="basic-icon-default-tittle">Judul Pengaduan</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-tittle2" class="input-group-text"></span>
                <input type="text" id="basic-icon-default-tittle" class="form-control tittle-mask" aria-describedby="basic-icon-default-tittle2" />
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label" for="basic-icon-default-goldar">Jenis Pengaduan</label>
              <select id="category" class="select2 form-select">
                <option value="">Pilih category</option>
                <option value="pub">Publik</option>
                <option value="kes">Kesehatan</option>
                <option value="ling">Lingkungan</option>
                <option value="keam">Keamanan</option>
                <option value="sos">Sosial</option>
                <option value="pend">Pendidikan</option>
                <option value="others">Lainnya</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label" for="basic-icon-default-lokasi">Lokasi Pengaduan</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"></span>
                <input type="text" id="basic-icon-default-lokasi" class="form-control" aria-describedby="basic-icon-default-lokasi2" />
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="formFile" class="form-label">File Lampiran (optional)</label>
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-desc">Deskripsi Pengaduan</label>
            <textarea id="basic-default-desc" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
