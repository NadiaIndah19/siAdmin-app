@extends('layouts/contentNavbarLayout')

@section('title')

@section('page-script')
    <script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
@endsection

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Kependudukan /</span> AKTA Kematian
    </h4>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>Tambah
                        Data</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('kependudukan/death-list/view-death-card') }}"><i
                            class="bx bx-bell me-1"></i>View Data</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('kependudukan/death-list/update-death-card') }}"><i
                            class="bx bx-link-alt me-1"></i>Update Data</a></li>
            </ul>
            <div class="card mb-4">
                <h5 class="card-header">Create AKTA Kematian</h5>
                <hr class="my-0">
                <div class="card-body">
                    <form action="{{ route('aktakematian.store') }}" id="formAccountSettings" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="namepen" class="form-label">Nama Pendaftar</label>
                                <input class="form-control" type="text" id="namepen" name="nama_pendaftar"
                                    value="" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="relation">Hubungan</label>
                                <select id="relation" name="hubungan" class="select2 form-select">
                                    <option value="" selected disabled>Pilih hubungan</option>
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
                                <input class="form-control" type="text" id="NIKAlm" name="nik_alm" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Nama Lengkap Alm</label>
                                <input class="form-control" type="text" id="name" name="nama" value=""
                                    autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="ttlAlm" class="form-label">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="ttlAlm" name="tempat_lahir"
                                            value="" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="ttlAlm" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="ttlAlm" name="tanggal_lahir"
                                            value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="religion">Agama</label>
                                <div class="input-group input-group-merge">
                                  <span class="input-group-text"></span>
                                  <select name="religion" class="form-control" id="religion" required>
                                    <option selected>Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>     
                                    <option value="Konghucu">Konghucu</option>                  
                                  </select>
                                </div>
                            </div>
                            {{-- <div class="mb-3 col-md-6">
                                <label for="religion" class="form-label">Agama</label>
                                <input type="text" class="form-control" id="religion" name="agama" />
                            </div> --}}
                            <div class="mb-3 col-md-6">
                                <label for="statusAlm" class="form-label">Status Perkawinan</label>
                                <select id="statusAlm" name="status_perkawinan" class="select2 form-select">
                                    <option value="" selected disabled>Pilih status</option>
                                    <option value="Belum Kawin">Belum kawin</option>
                                    <option value="Kawin">Kawin</option>
                                    <option value="Cerai Hidup">Cerai hidup</option>
                                    <option value="Cerai Mati">Cerai mati</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="gender">Jenis Kelamin</label>
                                <select id="gender" name="jenis_kelamin" class="select2 form-select">
                                    <option value="">Pilih Gender</option>
                                    <option value="Laki-Laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="jobs" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" id="jobs" name="pekerjaan"
                                    maxlength="6" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="state" class="form-label">Kewarganegaraan</label>
                                <input type="text" class="form-control" id="state" name="kewarganegaraan" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="tptdeath" class="form-label">Tempat Meninggal</label>
                                <input type="text" class="form-control" id="tptdeath" name="tempat_meninggal"
                                    maxlength="6" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="basic-icon-default-tgldeath" class="form-label">Tanggal Meninggal</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="date" name="tanggal_meninggal"  id="html5-tgldeath" />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="penyebabkematian" class="form-label">Penyebab Kematian</label>
                                <input type="text" class="form-control" id="penyebabkematian"
                                    name="penyebab_kematian" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="address" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="address" name="alamat" />
                            </div>
                            <div class="mb-3">
                                <label for="notes" class="form-label">Catatan</label>
                                <input type="text" class="form-control" id="notes" name="catatan"maxlength="6" />
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="filePernyataan" class="form-label">File Pernyataan Kematian</label>
                                <input class="form-control" type="file" id="filePernyataan" name="file_pernyataan">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="fileKTP" class="form-label">File KTP</label>
                                <input class="form-control" type="file" id="fileKTP" name="file_ktp">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="fileKK" class="form-label">File KK</label>
                                <input class="form-control" type="file" id="fileKK" name="file_kk">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="fileTTD" class="form-label">File TTD</label>
                                <input class="form-control" type="file" id="fileTTD" name="file_ttd">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="fileaktakel" class="form-label">File Akta Kelahiran</label>
                                <input class="form-control" type="file" id="fileaktakel" name="file_akta_kelahiran">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="filebukunikah" class="form-label">File Buku Nikah</label>
                                <input class="form-control" type="file" id="filebukunikah" name="file_buku_nikah">
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
            
        </div>
    </div>
@endsection
