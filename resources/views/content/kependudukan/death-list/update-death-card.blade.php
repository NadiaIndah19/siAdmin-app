@extends('layouts/contentNavbarLayout')

@section('title')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Kependudukan /</span> AKTA 
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/death-list/create-death-card')}}"><i class="bx bx-user me-1"></i>Tambah Data</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/death-list/view-death-card')}}"><i class="bx bx-bell me-1"></i>View Data</a></li>
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-link-alt me-1"></i>Update Data</a></li>
    </ul>
    <div class="card mb-4">
      <h5 class="card-header">Update AKTA Kematian</h5>
      <!-- Account -->
      {{-- <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-4">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
          <div class="button-wrapper">
            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
              <span class="d-none d-sm-block">Upload new photo</span>
              <i class="bx bx-upload d-block d-sm-none"></i>
              <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
            </label>
            <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
              <i class="bx bx-reset d-block d-sm-none"></i>
              <span class="d-none d-sm-block">Reset</span>
            </button>

            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
          </div>
        </div>
      </div> --}}
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="namepen" class="form-label">Nama Pendaftar</label>
              <input class="form-control" type="text" id="namepen" name="namepen" value="" autofocus />
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="relation">Hubungan</label>
              <select id="relation" class="select2 form-select">
                <option value="">Pilih hubungan</option>
                <option value="ayah">Ayah</option>
                <option value="ibu">Ibu</option>
                <option value="anak">Anak</option>
                <option value="suami">Suami</option>
                <option value="istri">Istri</option>
                <option value="keluargalainnya">Keluarga</option>
                <option value="lainnya">Lainnya</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="NIKAlm" class="form-label">NIK Alm</label>
              <input class="form-control" type="text" id="NIKAlm" name="NIKAlm" value=""/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="name" class="form-label">Nama Lengkap Alm</label>
              <input class="form-control" type="text" id="name" name="name" value="" autofocus />
            </div>
            <div class="mb-3 col-md-6">
              <label for="ttlAlm" class="form-label">TTL Alm</label>
              <input type="text" class="form-control" id="ttlAlm" name="ttlAlm" value="" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="religion" class="form-label">Agama</label>
              <input type="text" class="form-control" id="religion" name="religion"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="statusAlm" class="form-label">Status Perkawinan</label>
              <select id="statusAlm" class="select2 form-select">
                <option value="">Pilih status</option>
                <option value="bk">Belum kawin</option>
                <option value="kw">Kawin</option>
                <option value="ch">Cerai hidup</option>
                <option value="cm">Cerai mati</option>
              </select>
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
              <label for="jobs" class="form-label">Pekerjaan</label>
              <input type="text" class="form-control" id="jobs" name="jobs" maxlength="6" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="state" class="form-label">Kewarganegaraan</label>
              <input type="text" class="form-control" id="state" name="state"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="tptdeath" class="form-label">Tempat Meninggal</label>
              <input type="text" class="form-control" id="tptdeath" name="tptdeath" maxlength="6" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="basic-icon-default-tgldeath" class="form-label">Tanggal Meninggal</label>
              <div class="input-group input-group-merge">
                <input class="form-control" type="date" value="11-02-2023" id="html5-tgldeath" />
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="penyebabkematian" class="form-label">Penyebab Kematian</label>
              <input type="text" class="form-control" id="penyebabkematian" name="penyebabkematian"/>
            </div>
              <div class="mb-3 col-md-6">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="address" name="address"/>
              </div>
              <div class="mb-3">
                <label for="notes" class="form-label">Catatan</label>
                <input type="text" class="form-control" id="notes" name="notes"maxlength="6" />
              </div>
              <div class="col-md-4 mb-3">
                <label for="filePernyataan" class="form-label">File Pernyataan Kematian</label>
                <input class="form-control" type="file" id="filePernyataan">
              </div>
              <div class="col-md-4 mb-3">
                <label for="fileKTP" class="form-label">File KTP</label>
                <input class="form-control" type="file" id="fileKTP">
              </div>
              <div class="col-md-4 mb-3">
                <label for="fileKK" class="form-label">File KK</label>
                <input class="form-control" type="file" id="fileKK">
              </div>
              <div class="col-md-4 mb-3">
                <label for="fileTTD" class="form-label">File TTD</label>
                <input class="form-control" type="file" id="fileTTD">
              </div>
              <div class="col-md-4 mb-3">
                <label for="fileaktakel" class="form-label">File Akta Kelahiran</label>
                <input class="form-control" type="file" id="fileaktakel">
              </div>
              <div class="col-md-4 mb-3">
                <label for="filebukunikah" class="form-label">File Buku Nikah</label>
                <input class="form-control" type="file" id="filebukunikah">
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
    {{-- <div class="card">
      <h5 class="card-header">Delete Account</h5>
      <div class="card-body">
        <div class="mb-3 col-12 mb-0">
          <div class="alert alert-warning">
            <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
            <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
          </div>
        </div>
        <form id="formAccountDeactivation" onsubmit="return false">
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" />
            <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
          </div>
          <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
        </form>
      </div>
    </div> --}}
  </div>
</div>
@endsection
