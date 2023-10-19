@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Kependudukan / </span> AKTA Pernikahan
</h4>

<div class="row">
  <ul class="nav nav-pills flex-column flex-md-row mb-3">
    <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/marriage-list/create-marriage-card')}}"><i class="bx bx-user me-1"></i>Tambah Data</a></li>
    <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-bell me-1"></i>View Data</a></li>
    <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/marriage-list/update-marriage-card')}}"><i class="bx bx-link-alt me-1"></i>Update Data</a></li>
  </ul>
  <div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Data Pria</h5>
        </div>
        <div class="card-body">
          <form>
            <div class="row mb-3">
              <label for="basic-icon-default-name" class="col-sm-2 form-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-name" value="John Doe" disabled/>
              </div>
            </div>
            <div class="row mb-3">
              <label for="basic-icon-default-nik" class="col-sm-2 form-label">NIK</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-nik" value="3131342312353" disabled/>
              </div>
            </div>
            <div class="row mb-3">
              <label for="basic-icon-default-tptbirth" class="col-sm-2 form-label">Tempat Lahir</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-tptbirth" value="Tuban" disabled/>
              </div>
            </div>
            <div class="row mb-3">
              <label for="basic-icon-default-tglbirth" class="col-sm-2 form-label">Tanggal Lahir</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-tglbirth" value="11-02-1999" disabled/>
              </div>
            </div>
            <div class="row mb-3">
              <label for="basic-icon-default-nameAyah" class="col-sm-2 form-label">Nama Ayah</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-nameAyah" value="Susilo" disabled/>
              </div>
            </div>
            <div class="row mb-3">
              <label for="basic-icon-default-nameIbu" class="col-sm-2 form-label">Nama Ibu</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-nameIbu" value="Dewi" disabled/>
              </div>
            </div>
            <div class="row mb-3">
              <label for="basic-icon-default-address" class="col-sm-2 form-label">Alamat</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-address" value="Sukolilo Raya No 318 D" disabled/>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="filepengantar" class="form-label">Surat Pengantar Desa</label>
              <input class="form-control" type="file" id="filepengantar" multiple>
            </div>
            <div class="col-md-6 mb-3">
              <label for="fileKTP" class="form-label">File KTP</label>
              <input class="form-control" type="file" id="fileKTP">
            </div>
            <div class="col-md-6 mb-3">
              <label for="fileAKTAKelahiran" class="form-label">File AKTA Kelahiran</label>
              <input class="form-control" type="file" id="fileAKTAKelahiran">
            </div>
            <div class="col-md-6 mb-3">
              <label for="fileKK" class="form-label">File KK</label>
              <input class="form-control" type="file" id="fileKK">
            </div>
            <div class="col-md-6 mb-3">
              <label for="fileKTPortu" class="form-label">File KTP Orang Tua</label>
              <input class="form-control" type="file" id="fileKTPortu" multiple>
            </div>
            <div class="col-md-6 mb-3">
              <label for="filesuratNikah" class="form-label">File Surat Nikah Ortu</label>
              <input class="form-control" type="file" id="filesuratNikah" multiple>
            </div>
            <div class="col-md-6 mb-3">
              <label for="filefoto" class="form-label">File Foto</label>
              <input class="form-control" type="file" id="filefoto" multiple>
            </div>
            {{-- <div class="row justify-content-end">
              <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Send</button>
              </div>
            </div> --}}
          </form>
        </div>
      </div>
    </div>
    <!-- Basic with Icons -->
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Data Wanita</h5>
        </div>
        <div class="card-body">
          <form>
            <div class="row mb-3">
              <label for="basic-icon-default-name" class="col-sm-2 form-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-name" value="John Doe" disabled/>
              </div>
            </div>
            <div class="row mb-3">
              <label for="basic-icon-default-nik" class="col-sm-2 form-label">NIK</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-nik" value="3131342312353" disabled/>
              </div>
            </div>
            <div class="row mb-3">
              <label for="basic-icon-default-tptbirth" class="col-sm-2 form-label">Tempat Lahir</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-tptbirth" value="Tuban" disabled/>
              </div>
            </div>
            <div class="row mb-3">
              <label for="basic-icon-default-tglbirth" class="col-sm-2 form-label">Tanggal Lahir</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-tglbirth" value="11-02-1999" disabled/>
              </div>
            </div>
            <div class="row mb-3">
              <label for="basic-icon-default-nameAyah" class="col-sm-2 form-label">Nama Ayah</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-nameAyah" value="Susilo" disabled/>
              </div>
            </div>
            <div class="row mb-3">
              <label for="basic-icon-default-nameIbu" class="col-sm-2 form-label">Nama Ibu</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-nameIbu" value="Dewi" disabled/>
              </div>
            </div>
            <div class="row mb-3">
              <label for="basic-icon-default-nameSaksi" class="col-sm-2 form-label">Nama Saksi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-nameSaksi" value="Dewi" disabled/>
              </div>
            </div>
            <div class="row mb-3">
              <label for="basic-icon-default-address" class="col-sm-2 form-label">Alamat</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="basic-default-address" value="Sukolilo Raya No 318 D" disabled/>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="filepengantar" class="form-label">Surat Pengantar Desa</label>
              <input class="form-control" type="file" id="filepengantar" multiple>
            </div>
            <div class="col-md-6 mb-3">
              <label for="fileKTP" class="form-label">File KTP</label>
              <input class="form-control" type="file" id="fileKTP">
            </div>
            <div class="col-md-6 mb-3">
              <label for="fileAKTAKelahiran" class="form-label">File AKTA Kelahiran</label>
              <input class="form-control" type="file" id="fileAKTAKelahiran">
            </div>
            <div class="col-md-6 mb-3">
              <label for="fileKK" class="form-label">File KK</label>
              <input class="form-control" type="file" id="fileKK">
            </div>
            <div class="col-md-6 mb-3">
              <label for="fileKTPortu" class="form-label">File KTP Orang Tua</label>
              <input class="form-control" type="file" id="fileKTPortu" multiple>
            </div>
            <div class="col-md-6 mb-3">
              <label for="filesuratNikah" class="form-label">File Surat Nikah Ortu</label>
              <input class="form-control" type="file" id="filesuratNikah" multiple>
            </div>
            <div class="col-md-6 mb-3">
              <label for="fileKTPSaksi" class="form-label">File KTP Saksi</label>
              <input class="form-control" type="file" id="fileKTPSaksi" multiple>
            </div>
            <div class="col-md-6 mb-3">
              <label for="filefoto" class="form-label">File Foto</label>
              <input class="form-control" type="file" id="filefoto" multiple>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
