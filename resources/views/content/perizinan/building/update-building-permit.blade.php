@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Perizinan / Building /</span> IMB </h4>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Create Izin Mendirikan Bangunan</h5>
      </div>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="noAkta" class="form-label">Nomor AKTA</label>
              <input class="form-control" type="text" id="noAkta" name="noAkta" value="3112236540001" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="namaAnak" class="form-label">Nama Anak</label>
              <input class="form-control" type="text" id="namaAnak" name="namaAnak" autofocus value="Nino Ruya" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="tptbirth" class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control" id="tptbirth" name="tptbirth" maxlength="6" value="Tuban" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="tglbirth" class="form-label">Tanggal Lahir</label> 
              <input class="form-control" type="text" id="tglbirth" name="tglbirth" value="11-02-2023" disabled/>
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
                <input type="text" class="form-control" id="nameAyah" name="nameAyah"maxlength="6" value="Slamet" disabled/>
              </div>
              <div class="mb-3 col-md-6">
                <label for="nameIbu" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" id="nameIbu" name="nameIbu" maxlength="6" value="Dewi Nur" disabled/>
              </div>
              <div class="mb-3 col-md-6">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="address" name="address" value="Rongomulyo gg. VI A No. 12" disabled/>
              </div>
              <div class="mb-3 col-md-6">
                <label for="notes" class="form-label">Catatan</label>
                <input type="text" class="form-control" id="notes" name="notes"maxlength="6" value="-" disabled/>
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
