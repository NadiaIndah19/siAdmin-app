@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kependudukan /</span> AKTA </h4>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/birth-list/create-birth-card')}}"><i class="bx bx-user me-1"></i>Tambah Data</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/birth-list/view-birth-card')}}"><i class="bx bx-bell me-1"></i>View Data</a></li>
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-link-alt me-1"></i>Update Data</a></li>
    </ul>
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Update AKTA Kelahiran</h5>
      </div>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="noKK" class="form-label">Nomor KK</label>
              <input class="form-control" type="text" id="noKK" name="noKK"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="namakepalakel" class="form-label">Nama Kepala Keluarga</label>
              <input class="form-control" type="text" id="noKK" name="noKK"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="namaAnak" class="form-label">Nama Lengkap Anak</label>
              <input class="form-control" type="text" id="namaAnak" name="namaAnak" autofocus/>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="tempatdilahirkan">Tempat Dilahirkan</label>
              <select id="tempatdilahirkan" class="select2 form-select">
                <option value="">Pilih Tempat</option>
                <option value="rs">RS/RB</option>
                <option value="puskesmas">Puskesmas</option>
                <option value="polindes">Polindes</option>
                <option value="rumah">Rumah</option>
                <option value="lainnya">Lainnya</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="tptbirth" class="form-label">Tempat Kelahiran</label>
              <input type="text" class="form-control" id="tptbirth" name="tptbirth" maxlength="6"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="basic-icon-default-tglbirth" class="form-label">Hari & Tanggal Kelahiran</label>
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
              <label for="basic-icon-default-time" class="form-label">Pukul Kelahiran</label>
              <div class="input-group input-group-merge">
                <input class="form-control" type="time" value="" id="html5-time" />
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="jenisdilahirkan">Jenis Dilahirkan</label>
              <select id="jenisdilahirkan" class="select2 form-select">
                <option value="">Pilih Jenis</option>
                <option value="tunggal">Tunggal</option>
                <option value="kembar2">Kembar 2</option>
                <option value="kembar3">Kembar 3</option>
                <option value="kembar5">Kembar 5</option>
                <option value="lainnya">Lainnya</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="kelahiranke">Kelahiran Ke</label>
              <select id="kelahiranke" class="select2 form-select">
                <option value="">Pilih Nomor</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="lainnya">Lainnya</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="anakke">Anak Ke</label>
              <select id="anakke" class="select2 form-select">
                <option value="">Pilih Nomor</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="lainnya">Lainnya</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="penolongkelahiran">Penolong Kelahiran</label>
              <select id="penolongkelahiran" class="select2 form-select">
                <option value="">Pilih dengan sesuai</option>
                <option value="Dokter">Dokter</option>
                <option value="Bidan / Perawat">Bidan / Perawat</option>
                <option value="Dukun">Dukun</option>
                <option value="lainnya">Lainnya</option>
              </select>
            </div>
          </div>

          <hr class="my-4">
          <div class="row">
            <h4 class="mb-3 col-md-6">Data Ayah</h4>
            <h4 class="mb-3 col-md-6">Data Ibu</h4>
            <div class="mb-3 col-md-6">
              <label for="nikayah" class="form-label">NIK Ayah</label>
              <input class="form-control" type="text" id="nikayah" name="nikayah"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="nikibu" class="form-label">NIK Ibu</label>
              <input class="form-control" type="text" id="nikibu" name="nikibu"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="namaAyah" class="form-label">Nama Lengkap Ayah</label>
              <input class="form-control" type="text" id="namaAyah" name="namaAyah" autofocus/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="namaibu" class="form-label">Nama Lengkap ibu</label>
              <input class="form-control" type="text" id="namaibu" name="namaibu" autofocus/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="basic-icon-default-tglbirthAyah" class="form-label">Tanggal Kelahiran Ayah</label>
              <div class="input-group input-group-merge">
                <input class="form-control" type="date" value="11-02-2023" id="html5-tglbirthAyah" />
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="basic-icon-default-tglbirthIbu" class="form-label">Tanggal Kelahiran</label>
              <div class="input-group input-group-merge">
                <input class="form-control" type="date" value="11-02-2023" id="html5-tglbirthIbu" />
              </div>
            </div> 
            <div class="mb-3 col-md-6">
              <label for="jobsAyah" class="form-label">Pekerjaan Ayah</label>
              <input type="text" class="form-control" id="jobsAyah" name="jobsAyah"maxlength="6" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="jobsIbu" class="form-label">Pekerjaan Ibu</label>
              <input type="text" class="form-control" id="jobsIbu" name="jobsIbu"maxlength="6" />
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="kewarganegaraanAyah">Kewarganegaraan Ayah</label>
              <select id="kewarganegaraanAyah" class="select2 form-select">
                <option value="">Pilih kewarganegaraan</option>
                <option value="wni">WNI</option>
                <option value="wna">WNA</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="kewarganegaraanIbu">Kewarganegaraan Ibu</label>
              <select id="kewarganegaraanIbu" class="select2 form-select">
                <option value="">Pilih kewarganegaraan</option>
                <option value="wni">WNI</option>
                <option value="wna">WNA</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="address" name="address"/>
            </div>
            <div class="mb-3">
              <label for="basic-icon-default-tglperkawinan" class="form-label">Tanggal Pencatatan Perkawinan</label>
              <div class="input-group input-group-merge">
                <input class="form-control" type="date" value="11-02-2023" id="html5-tglperkawinan" />
              </div>
            </div>

            <hr class="my-4">
            <div class="col-md-6 mb-3">
              <label for="fileKet" class="form-label">File Keterangan Lahir dari RS / Bidan</label>
              <input class="form-control" type="file" id="fileKet">
            </div>
            <div class="col-md-6 mb-3">
              <label for="fileKK" class="form-label">File KK</label>
              <input class="form-control" type="file" id="fileKK">
            </div>
            <div class="col-md-6 mb-3">
              <label for="fileKTP" class="form-label">File KTP</label>
              <input class="form-control" type="file" id="fileKTP">
            </div>
            <div class="col-md-6 mb-3">
              <label for="filebukunikah" class="form-label">File Buku Nikah</label>
              <input class="form-control" type="file" id="filebukunikah">
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-primary me-2">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
