@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Perizinan / Building / </span> IMB 
</h4>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <h5 class="card-header">View Detail Data</h5>
      <div class="card-body">
        <form id="formBuilding" method="POST" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="noAkta" class="form-label">Nomor AKTA</label>
              <input class="form-control" type="text" id="noAkta" name="noAkta" value="31212812690002" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="namaAnak" class="form-label">Nama Anak</label>
              <input class="form-control" type="text" id="namaAnak" name="namaAnak" value="Novendra Rahman" autofocus disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="tptbirth" class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control" id="tptbirth" name="tptbirth" maxlength="6" value="Surabaya" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="tglbirth" class="form-label">Tanggal Lahir</label> 
              <input class="form-control" type="text" id="tglbirth" name="tglbirth" value="20-01-2019" disabled/>
            </div>
              <div class="mb-3 col-md-6">
                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin" value="Beringharjo No 31A" disabled/>
              </div>
              <div class="mb-3 col-md-6">
                <label for="nameAyah" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control" id="nameAyah" name="nameAyah"maxlength="6" value="Susilo" disabled/>
              </div>
              <div class="mb-3 col-md-6">
                <label for="nameIbu" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" id="nameIbu" name="nameIbu"maxlength="6" value="Dewi Nur" disabled/>
              </div>
              <div class="mb-3 col-md-6">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="address" name="address" value="Beringharjo No 31A" disabled/>
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
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
