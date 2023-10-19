@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Kependudukan / </span> AKTA Pernikahan
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/marriage-list/create-marriage-card')}}"><i class="bx bx-user me-1"></i>Tambah Data</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/marriage-list/marriage-card')}}"><i class="bx bx-bell me-1"></i>View Data</a></li>
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-link-alt me-1"></i>Update Data</a></li>
    </ul>
    <div class="col-xl-12">
      <div class="nav-align-top mb-4">
        <ul class="nav nav-tabs nav-fill" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-home" aria-controls="navs-justified-home" aria-selected="true"><i class="tf-icons bx bx-male"></i> Pihak Mempelai Pria</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-profile" aria-controls="navs-justified-profile" aria-selected="false"><i class="tf-icons bx bx-female"></i> Pihak Mempelai Wanita</button>
          </li>
          {{-- <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-messages" aria-controls="navs-justified-messages" aria-selected="false"><i class="tf-icons bx bx-file"></i> Upload Files</button>
          </li> --}}
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="namelk" class="form-label">Nama Lengkap</label>
                <input class="form-control" type="text" id="namelk" name="namelk" autofocus/>
              </div>
              <div class="mb-3 col-md-6">
                <label for="nik" class="form-label">NIK</label>
                <input class="form-control" type="text" id="nik" name="nik" autofocus/>
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
              <div class="row justify-content-end">
                <button type="submit" class="btn btn-primary col-sm-1">Next</button>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="namepr" class="form-label">Nama Lengkap</label>
                <input class="form-control" type="text" id="namepr" name="namepr" autofocus/>
              </div>
              <div class="mb-3 col-md-6">
                <label for="nik" class="form-label">NIK</label>
                <input class="form-control" type="text" id="nik" name="nik" autofocus/>
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
                <label for="nameAyah" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control" id="nameAyah" name="nameAyah"maxlength="6" />
              </div>
              <div class="mb-3 col-md-6">
                <label for="nameIbu" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" id="nameIbu" name="nameIbu"maxlength="6"/>
              </div>
              <div class="mb-3 col-md-6">
                <label for="nameSaksi" class="form-label">Nama Saksi</label>
                <input type="text" class="form-control" id="nameSaksi" name="nameSaksi"maxlength="6"/>
              </div>
              <div class="mb-3 col-md-6">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="address" name="address"/>
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
              <div class="mt-2">
                <button type="reset" class="btn btn-outline-secondary">Back</button>
                <button type="submit" class="btn btn-primary me-2 ">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
