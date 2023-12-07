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
        <form action="{{ route('kk.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="basic-icon-default-nik">NIK</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-nik2" class="input-group-text"></span>
                <input type="text" name="nik" class="form-control" id="basic-icon-default-nik" 
                aria-describedby="basic-icon-default-nik2" required/>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="basic-icon-default-name">Nama Lengkap</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-name2" class="input-group-text"></span>
                <input type="text" name="nama" id="basic-icon-default-name" class="form-control" aria-describedby="basic-icon-default-name2" required/>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="basic-icon-default-address">TTL</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"></span>
                <input type="text" name="ttl" id="basic-icon-default-address" class="form-control" aria-describedby="basic-icon-default-address2" required/>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label" for="basic-icon-default-religion">Agama</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"></span>
                <select name="agama" class="form-control" id="" required>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Budha">Budha</option>
                  <option value="Hindu">Hindu</option>     
                  <option value="Konghucu">Konghucu</option>                  
                </select>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="basic-icon-default-status">Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" required>
                <option value="Laki-Laki">Laki-laki</option>
                <option value="Prempuan">Perempuan</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Golongan Darah</label>
              <select name="gol_darah" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" required>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="O">O</option>
                <option value="AB">AB</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Pendidikan</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-study" class="input-group-text"></span>
                <input type="text" name="pendidikan" id="basic-icon-default-study" class="form-control" aria-describedby="basic-icon-default-study" required/>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Pekerjaan</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-jobs" class="input-group-text"></span>
                <input type="text" name="pekerjaan" id="basic-icon-default-jobs" class="form-control" aria-describedby="basic-icon-default-jobs" required/>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Status Hubungan Keluarga</label>
              <select class="form-select" name="status_hub_keluarga" id="exampleFormControlSelect1" aria-label="Default select example" required>
                <option value="kepalakeluarga">Kepala Keluarga</option>
                <option value="istri">Istri</option>
                <option value="anak">Anak</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Status Perkawinan</label>
              <select name="status_perkawinan" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" required>
                <option value="kawin">Kawin Tercatat</option>
                <option value="belumKawin">Belum Kawin</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Tgl Perkawinan (Optional)</label>
              <div class="col-md-12">
                <input class="form-control" type="date" name="tgl_perkawinan" id="html5-date-input" />
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Kewarganegaraan</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-kewarganegaraan" class="input-group-text"></span>
                <input type="text" name="kewarganegaraan" id="basic-icon-default-kewarganegaraan" class="form-control" aria-describedby="basic-icon-default-kewarganegaraan" required/>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Nama Ayah</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-namaayah" class="input-group-text"></span>
                <input type="text" name="nama_ayah" id="basic-icon-default-namaayah" class="form-control" aria-describedby="basic-icon-default-namaayah" required/>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Nama Ibu</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-namaibu" class="input-group-text"></span>
                <input type="text" name="nama_ibu" id="basic-icon-default-namaibu" class="form-control" aria-describedby="basic-icon-default-namaibu" required/>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="file_pengantar_rt" class="form-label">File Pengantar RT</label>
              <input name="file_pengantar_rt" class="form-control" type="file" id="file_pengantar_rt" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="file_buku_nikah" class="form-label">File Fotocopy Buku Nikah</label>
              <input name="file_buku_nikah" class="form-control" type="file" id="file_buku_nikah" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="file_kk_lama" class="form-label">File Fotocopy KK Lama</label>
              <input name="file_kk_lama" class="form-control" type="file" id="file_kk_lama" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="file_ktp" class="form-label">File Fotocopy KTP</label>
              <input name="file_ktp" class="form-control" type="file" id="file_ktp" required>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
