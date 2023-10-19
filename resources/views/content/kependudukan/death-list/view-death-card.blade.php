@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Kependudukan/</span> AKTA 
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/death-list/create-death-card')}}"><i class="bx bx-user me-1"></i>Tambah Data</a></li>
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-bell me-1"></i>View Detail Data</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/death-list/update-death-card')}}"><i class="bx bx-link-alt me-1"></i>Update Data</a></li>
    </ul>
    <div class="card">
      <!-- Notifications -->
      <h5 class="card-header">View Detail Data</h5>
      <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="namepen" class="form-label">Nama Pendaftar</label>
              <input class="form-control" type="text" id="namepen" name="namepen" value="Novendra Rahman" autofocus disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="relation">Hubungan</label>
              <input class="form-control" type="text" id="relation" name="relation" value="Keluarga" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="NIKAlm" class="form-label">NIK Alm</label>
              <input class="form-control" type="text" id="NIKAlm" name="NIKAlm" value="31212812690002" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="name" class="form-label">Nama</label>
              <input class="form-control" type="text" id="name" name="name" value="Wahyuni" autofocus disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="ttlAlm" class="form-label">TTL Alm</label>
              <input type="text" class="form-control" id="ttlAlm" name="ttlAlm" value="{{config('variables.creatorName')}}" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="religion" class="form-label">Agama</label>
              <input type="text" class="form-control" id="religion" name="religion" value="Islam" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="statusAlm" class="form-label">Status Perkawinan</label>
              <input type="text" class="form-control" id="jobs" name="jobs" maxlength="6" value="Kawin" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="jobs" class="form-label">Pekerjaan</label>
              <input type="text" class="form-control" id="jobs" name="jobs" maxlength="6" value="Ibu rumah tangga" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="state" class="form-label">Kewarganegaraan</label>
              <input type="text" class="form-control" id="state" name="state" value="Indonesia" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="tptdeath" class="form-label">Tempat Meninggal</label>
              <input type="text" class="form-control" id="tptdeath" name="tptdeath" maxlength="6" value="Surabaya" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="tgldeath" class="form-label">Tgl Meninggal</label> 
              <input class="form-control" type="text" id="tgldeath" name="tgldeath" value="20-01-2019" disabled/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="penyebabkematian" class="form-label">Penyebab Kematian</label>
              <input type="text" class="form-control" id="penyebabkematian" name="penyebabkematian" value="Sakit Jantung" disabled/>
            </div>
            {{-- <div class="mb-3 col-md-6">
              <label for="Penentu" class="form-label">Penentu</label>
              <input class="form-control" type="text" id="Penentu" name="Penentu"/>
            </div> --}}
              <div class="mb-3 col-md-6">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="address" name="address" value="Beringharjo No 31A" disabled/>
              </div>
              <div class="mb-3 col-md-6">
                <label for="notes" class="form-label">Catatan</label>
                <input type="text" class="form-control" id="notes" name="notes"maxlength="6" value="-" disabled/>
              </div>
              <div class="col-md-6 mb-3">
                <label for="filePernyataan" class="form-label">File Pernyataan</label>
                <input class="form-control" type="file" id="filePernyataan">
              </div>
              <div class="col-md-6 mb-3">
                <label for="fileKTP" class="form-label">File KTP</label>
                <input class="form-control" type="file" id="fileKTP">
              </div>
              <div class="col-md-6 mb-3">
                <label for="fileKK" class="form-label">File KK</label>
                <input class="form-control" type="file" id="fileKK">
              </div>
              <div class="col-md-6 mb-3">
                <label for="fileTTD" class="form-label">File TTD</label>
                <input class="form-control" type="file" id="fileTTD">
              </div>
            </div>
          </div>
        </form>
      </div>
      {{-- <div class="table-responsive">
        <table class="table table-striped table-borderless border-bottom">
          <thead>
            <tr>
              <th class="text-nowrap">Type</th>
              <th class="text-nowrap text-center">✉️ Email</th>
              <th class="text-nowrap text-center">🖥 Browser</th>
              <th class="text-nowrap text-center">👩🏻‍💻 App</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-nowrap">New for you</td>
              <td>
                <div class="form-check d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck1" checked />
                </div>
              </td>
              <td>
                <div class="form-check d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck2" checked />
                </div>
              </td>
              <td>
                <div class="form-check d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck3" checked />
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-nowrap">Account activity</td>
              <td>
                <div class="form-check d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck4" checked />
                </div>
              </td>
              <td>
                <div class="form-check d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck5" checked />
                </div>
              </td>
              <td>
                <div class="form-check d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck6" checked />
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-nowrap">A new browser used to sign in</td>
              <td>
                <div class="form-check d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck7" checked />
                </div>
              </td>
              <td>
                <div class="form-check d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck8" checked />
                </div>
              </td>
              <td>
                <div class="form-check d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck9" />
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-nowrap">A new device is linked</td>
              <td>
                <div class="form-check d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck10" checked />
                </div>
              </td>
              <td>
                <div class="form-check d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck11" />
                </div>
              </td>
              <td>
                <div class="form-check d-flex justify-content-center">
                  <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-body">
        <h6>When should we send you notifications?</h6>
        <form action="javascript:void(0);">
          <div class="row">
            <div class="col-sm-6">
              <select id="sendNotification" class="form-select" name="sendNotification">
                <option selected>Only when I'm online</option>
                <option>Anytime</option>
              </select>
            </div>
            <div class="mt-4">
              <button type="submit" class="btn btn-primary me-2">Save changes</button>
              <button type="reset" class="btn btn-outline-secondary">Discard</button>
            </div>
          </div>
        </form>
      </div> --}}
      <!-- /Notifications -->
    </div>
  </div>
</div>
@endsection
