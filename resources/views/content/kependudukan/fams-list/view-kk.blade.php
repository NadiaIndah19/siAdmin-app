@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Kependudukan / </span> KK 
</h4>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <!-- Notifications -->
      <h5 class="card-header">View Detail Data</h5>
      <div class="card-body">
        <form action="{{ route('kk.update', ['id' => $kk->id]) }}" method="POST" 
          enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="basic-icon-default-nik">NIK</label>
              <div class="input-group input-group-merge">
                <input type="text" name="nik" value="{{ $kk->nik }}" class="form-control" id="basic-icon-default-nik" 
                aria-describedby="basic-icon-default-nik2" disabled/>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="basic-icon-default-name">Nama Lengkap</label>
              <div class="input-group input-group-merge">
                <input type="text" name="nama" value="{{ $kk->nama }}" id="basic-icon-default-name" class="form-control" aria-describedby="basic-icon-default-name2" disabled/>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="basic-icon-default-address">TTL</label>
              <div class="input-group input-group-merge">
                <input type="text" name="ttl" value="{{ $kk->ttl }}" id="basic-icon-default-address" class="form-control" aria-describedby="basic-icon-default-address2" disabled/>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label" for="basic-icon-default-religion">Agama</label>
              <div class="input-group input-group-merge">
                <select name="agama" class="form-control" id="agama" disabled>
                  <option value="{{ $kk->agama }}" selected>{{ $kk->agama }}
                  </option>             
                </select>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="basic-icon-default-status">Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" disabled>
                <option value="{{ $kk->jenis_kelamin }}" selected>{{ $kk->jenis_kelamin }}
                </option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Golongan Darah</label>
              <select name="gol_darah" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" disabled>
                <option value="{{ $kk->gol_darah }}" selected>{{ $kk->gol_darah }}
                </option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Pendidikan</label>
              <div class="input-group input-group-merge">
                <input type="text" name="pendidikan" value="{{ $kk->pendidikan }}" id="basic-icon-default-study" class="form-control" aria-describedby="basic-icon-default-study" disabled/>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Pekerjaan</label>
              <div class="input-group input-group-merge">
                <input type="text" name="pekerjaan" value="{{ $kk->pekerjaan }}" id="basic-icon-default-jobs" class="form-control" aria-describedby="basic-icon-default-jobs" disabled/>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Status Hubungan Keluarga</label>
              <select class="form-select" name="status_hub_keluarga" id="exampleFormControlSelect1" aria-label="Default select example" disabled>
                <option value="{{ $kk->status_hub_keluarga }}" selected>{{ $kk->status_hub_keluarga }}
                </option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Status Perkawinan</label>
              <select name="status_perkawinan" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" disabled>
                <option value="{{ $kk->status_perkawinan }}" selected>{{ $kk->status_perkawinan }}
                </option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Tgl Perkawinan (Optional)</label>
              <div class="col-md-12">
                <input class="form-control" name="tgl_perkawinan" value="{{ $kk->tgl_perkawinan }}"
                  type="date" id="html5-tgl-input" disabled />
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Kewarganegaraan</label>
              <div class="input-group input-group-merge">
                <input type="text" name="kewarganegaraan" id="basic-icon-default-kewarganegaraan" class="form-control" aria-describedby="basic-icon-default-kewarganegaraan" disabled/>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Nama Ayah</label>
              <div class="input-group input-group-merge">
                <input type="text" name="nama_ayah" id="basic-icon-default-namaayah" class="form-control" aria-describedby="basic-icon-default-namaayah" disabled/>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="html5-input" class="col-md-5 col-form-label">Nama Ibu</label>
              <div class="input-group input-group-merge">
                <input type="text" name="nama_ibu" id="basic-icon-default-namaibu" class="form-control" aria-describedby="basic-icon-default-namaibu" disabled/>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="file_pengantar_rt" class="form-label">File Pengantar RT</label> <br>
              <a class="btn btn-outline-primary btn-sm mb-2" data-bs-toggle="modal"
                  data-bs-target="#kk{{ $kk->id }}"> <i class='bx bx-image-alt text-primary'>
                    </i>Cek File</a> <br>
              <input name="file_pengantar_rt" class="form-control" type="file" id="file_pengantar_rt">
            </div>
            <div class="col-md-6 mb-3">
              <label for="file_buku_nikah" class="form-label">File Buku Nikah</label> <br>
              <a class="btn btn-outline-primary btn-sm mb-2" data-bs-toggle="modal"
                  data-bs-target="#kk{{ $kk->id }}"> <i class='bx bx-image-alt text-primary'>
                    </i>Cek File</a> <br>
              <input name="file_buku_nikah" class="form-control" type="file" id="file_buku_nikah">
            </div>
            <div class="col-md-6 mb-3">
              <label for="file_kk_lama" class="form-label">File KK Lama</label> <br>
              <a class="btn btn-outline-primary btn-sm mb-2" data-bs-toggle="modal"
                  data-bs-target="#kk{{ $kk->id }}"> <i class='bx bx-image-alt text-primary'>
                    </i>Cek File</a> <br>
              <input name="file_kk_lama" class="form-control" type="file" id="file_kk_lama">
            </div>
            <div class="col-md-6 mb-3">
              <label for="file_ktp" class="form-label">File KTP</label> <br>
              <a class="btn btn-outline-primary btn-sm mb-2" data-bs-toggle="modal"
                  data-bs-target="#kk{{ $kk->id }}"> <i class='bx bx-image-alt text-primary'>
                    </i>Cek File</a> <br>
              <input name="file_ktp" class="form-control" type="file" id="file_ktp">
            </div>
          </div> 
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>

{{-- file detail  --}}
<div class="modal fade" id="kk{{ $kk->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">File Pengantar RT</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <iframe src="{{ asset('storage/' . $kk->file_pengantar_rt) }}" width="100%"
                  height="400px"></iframe>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>

<div class="modal fade" id="kk{{ $kk->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">File Buku Nikah</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <iframe src="{{ asset('storage/' . $kk->file_buku_nikah) }}" width="100%"
                  height="400px"></iframe>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>

<div class="modal fade" id="kk{{ $kk->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">File KK</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <iframe src="{{ asset('storage/' . $kk->file_kk_lama) }}" width="100%"
                  height="400px"></iframe>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>

<div class="modal fade" id="kk{{ $kk->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">File KTP</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <iframe src="{{ asset('storage/' . $kk->file_ktp) }}" width="100%"
                  height="400px"></iframe>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>
@endsection
