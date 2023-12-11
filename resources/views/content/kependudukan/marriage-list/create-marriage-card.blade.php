@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Kependudukan / </span> AKTA Pernikahan
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>Tambah Data</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/marriage-list/view-marriage-card')}}"><i class="bx bx-bell me-1"></i>View Data</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/marriage-list/update-marriage-card')}}"><i class="bx bx-link-alt me-1"></i>Update Data</a></li>
    </ul>
    <div class="col-xl-12">
      <div class="nav-align-top mb-4">
        <ul class="nav nav-tabs nav-fill" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" 
            data-bs-target="#navs-justified-home" aria-controls="navs-justified-home" aria-selected="true">
            <i class="tf-icons bx bx-male"></i> Pihak Mempelai Pria</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" 
            data-bs-target="#navs-justified-profile" aria-controls="navs-justified-profile" 
            aria-selected="false"><i class="tf-icons bx bx-female"></i> Pihak Mempelai Wanita</button>
          </li>
        </ul>
        <form action="{{ route('pernikahan.store') }}" method="POST" enctype="multipart/form-data">
          @csrf  
        <div class="card ">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="namelk" class="form-label">Nama Lengkap</label>
                  <input class="form-control" type="text" id="namelk" name="nama_laki" autofocus/>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="nik" class="form-label">NIK</label>
                  <input class="form-control" type="text" id="nik" name="nik_laki" autofocus/>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="tptbirth" class="form-label">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tptbirth" name="tempat_lahir_laki" />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="basic-icon-default-tglbirth" class="form-label">Tanggal Lahir</label>
                  <div class="input-group input-group-merge">
                    <input class="form-control" type="date" name="tanggal_lahir_laki" value="11-02-2023" id="html5-tglbirth" />
                  </div>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="nameAyah" class="form-label">Nama Ayah</label>
                  <input type="text" class="form-control" id="nameAyah" name="nama_ayah_laki" />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="nameIbu" class="form-label">Nama Ibu</label>
                  <input type="text" class="form-control" id="nameIbu" name="nama_ibu_laki"/>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="address" name="alamat_laki"/>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="filepengantar" class="form-label">Surat Pengantar Desa</label>
                  <input class="form-control" type="file" name="surat_desa_laki" id="filepengantar" accept="application/pdf,application/vnd.ms-excel" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="fileKTP" class="form-label">File KTP</label>
                  <input class="form-control" type="file" name="ktp_laki" id="fileKTP" accept="application/pdf,application/vnd.ms-excel" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="fileAKTAKelahiran" class="form-label">File AKTA Kelahiran</label>
                  <input class="form-control" type="file" name="akta_kelahiran_laki" id="fileAKTAKelahiran" accept="application/pdf,application/vnd.ms-excel" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="fileKK" class="form-label">File KK</label>
                  <input class="form-control" type="file" id="fileKK" name="kk_laki" accept="application/pdf,application/vnd.ms-excel" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="fileKTPortu" class="form-label">File KTP Orang Tua</label>
                  <input class="form-control" type="file" name="ktp_ortu_laki" id="fileKTPortu" accept="application/pdf,application/vnd.ms-excel" /> 
                </div>
                <div class="col-md-6 mb-3">
                  <label for="filesuratNikah" class="form-label">File Surat Nikah Ortu</label>
                  <input class="form-control" type="file" id="filesuratNikah" name="surat_nikah_ortu_lk" accept="application/pdf,application/vnd.ms-excel" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="filefoto" class="form-label">File Foto</label>
                  <input class="form-control" type="file" id="filefoto" name="foto_laki" accept="image/png, image/gif, image/jpeg">
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="namepr" class="form-label">Nama Lengkap</label>
                  <input class="form-control" type="text" id="namepr" name="nama_pr" autofocus/>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="nik" class="form-label">NIK</label>
                  <input class="form-control" type="text" id="nik" name="nik_pr" autofocus/>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="tptbirth" class="form-label">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tptbirth" name="tempat_lahir_pr"/>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="basic-icon-default-tglbirth" class="form-label">Tanggal Lahir</label>
                  <div class="input-group input-group-merge">
                    <input class="form-control" type="date" value="11-02-2023" name="tanggal_lahir_pr" id="html5-tglbirth" />
                  </div>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="nameAyah" class="form-label">Nama Ayah</label>
                  <input type="text" class="form-control" id="nameAyah" name="nama_ayah_pr"/>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="nameIbu" class="form-label">Nama Ibu</label>
                  <input type="text" class="form-control" id="nameIbu" name="nama_ibu_pr"/>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="nameSaksi" class="form-label">Nama Saksi</label>
                  <input type="text" class="form-control" id="nameSaksi" name="nama_saksi"maxlength="6"/>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="address" name="alamat_pr"/>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="filepengantar" class="form-label">Surat Pengantar Desa</label>
                  <input class="form-control" type="file" id="filepengantar" name="surat_desa_pr" accept="application/pdf,application/vnd.ms-excel" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="fileKTP" class="form-label">File KTP</label>
                  <input class="form-control" type="file" id="fileKTP" name="ktp_pr" accept="application/pdf,application/vnd.ms-excel" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="fileAKTAKelahiran" class="form-label">File AKTA Kelahiran</label>
                  <input class="form-control" type="file" id="fileAKTAKelahiran" name="akta_kelahiran_pr" accept="application/pdf,application/vnd.ms-excel" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="fileKK" class="form-label">File KK</label>
                  <input class="form-control" type="file" id="fileKK" name="kk_pr" accept="application/pdf,application/vnd.ms-excel" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="fileKTPortu" class="form-label">File KTP Orang Tua</label>
                  <input class="form-control" type="file" id="fileKTPortu" name="ktp_ortu_pr" accept="application/pdf,application/vnd.ms-excel" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="filesuratNikah" class="form-label">File Surat Nikah Ortu</label>
                  <input class="form-control" type="file" id="filesuratNikah" name="surat_nikah_ortu_pr" accept="application/pdf,application/vnd.ms-excel" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="fileKTPSaksi" class="form-label">File KTP Saksi</label>
                  <input class="form-control" type="file" id="fileKTPSaksi" name="ktp_saksi" accept="application/pdf,application/vnd.ms-excel" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="filefoto" class="form-label">File Foto</label>
                  <input class="form-control" type="file" id="filefoto" name="foto_pr" accept="image/png, image/gif, image/jpeg">
                </div>
                <div class="mt-2">
                  <button type="reset" class="btn btn-outline-secondary">Back</button>
                  <button type="submit" class="btn btn-primary me-2">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      </div>
    </div>    
    {{-- <div class="row mb-4">
      <div class="col-md-6 col-12 mb-md-0 mb-4">
        <div class="card">
          <h5 class="card-header">Connected Accounts</h5>
          <div class="card-body">
            <p>Display content from your connected accounts on your site</p>
            <!-- Connections -->
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/google.png')}}" alt="google" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-9 mb-sm-0 mb-2">
                  <h5 class="mb-0">Google</h5>
                  <small class="text-muted">Calendar and contacts</small>
                </div>
                <div class="col-3 text-end">
                  <div class="form-check form-switch">
                    <input class="form-check-input float-end" type="checkbox" role="switch">
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/slack.png')}}" alt="slack" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-9 mb-sm-0 mb-2">
                  <h6 class="mb-0">Slack</h6>
                  <small class="text-muted">Communication</small>
                </div>
                <div class="col-3 text-end">
                  <div class="form-check form-switch">
                    <input class="form-check-input float-end" type="checkbox" role="switch" checked>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/github.png')}}" alt="github" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-9 mb-sm-0 mb-2">
                  <h6 class="mb-0">Github</h6>
                  <small class="text-muted">Manage your Git repositories</small>
                </div>
                <div class="col-3 text-end">
                  <div class="form-check form-switch">
                    <input class="form-check-input float-end" type="checkbox" role="switch">
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/mailchimp.png')}}" alt="mailchimp" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-9 mb-sm-0 mb-2">
                  <h6 class="mb-0">Mailchimp</h6>
                  <small class="text-muted">Email marketing service</small>
                </div>
                <div class="col-3 text-end">
                  <div class="form-check form-switch">
                    <input class="form-check-input float-end" type="checkbox" role="switch" checked>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/asana.png')}}" alt="asana" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-9 mb-sm-0 mb-2">
                  <h6 class="mb-0">Asana</h6>
                  <small class="text-muted">Communication</small>
                </div>
                <div class="col-3 text-end">
                  <div class="form-check form-switch">
                    <input class="form-check-input float-end" type="checkbox" role="switch" checked>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Connections -->
          </div>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <div class="card">
          <h5 class="card-header">Social Accounts</h5>
          <div class="card-body">
            <p>Display content from social accounts on your site</p>
            <!-- Social Accounts -->
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/facebook.png')}}" alt="facebook" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                  <h6 class="mb-0">Facebook</h6>
                  <small class="text-muted">Not Connected</small>
                </div>
                <div class="col-4 col-sm-5 text-end">
                  <button type="button" class="btn btn-icon btn-outline-secondary">
                    <i class='bx bx-link-alt'></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/twitter.png')}}" alt="twitter" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                  <h6 class="mb-0">Twitter</h6>
                  <a href="{{config('variables.twitterUrl')}}" target="_blank">{{'@'.config('variables.creatorName')}}</a>
                </div>
                <div class="col-4 col-sm-5 text-end">
                  <button type="button" class="btn btn-icon btn-outline-danger">
                    <i class='bx bx-trash-alt'></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/instagram.png')}}" alt="instagram" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                  <h6 class="mb-0">instagram</h6>
                  <a href="{{config('variables.instagramUrl')}}" target="_blank">{{'@'.config('variables.creatorName')}}</a>
                </div>
                <div class="col-4 col-sm-5 text-end">
                  <button type="button" class="btn btn-icon btn-outline-danger">
                    <i class='bx bx-trash-alt'></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/dribbble.png')}}" alt="dribbble" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                  <h6 class="mb-0">Dribbble</h6>
                  <small class="text-muted">Not Connected</small>
                </div>
                <div class="col-4 col-sm-5 text-end">
                  <button type="button" class="btn btn-icon btn-outline-secondary">
                    <i class='bx bx-link-alt'></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="d-flex">
              <div class="flex-shrink-0">
                <img src="{{asset('assets/img/icons/brands/behance.png')}}" alt="behance" class="me-3" height="30">
              </div>
              <div class="flex-grow-1 row">
                <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                  <h6 class="mb-0">Behance</h6>
                  <small class="text-muted">Not Connected</small>
                </div>
                <div class="col-4 col-sm-5 text-end">
                  <button type="button" class="btn btn-icon btn-outline-secondary">
                    <i class='bx bx-link-alt'></i>
                  </button>
                </div>
              </div>
            </div>
            <!-- /Social Accounts -->
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Masukkan data dengan benar</h5>
        <small class="text-muted float-end">Masukkan data dengan benar</small>
      </div>
      <hr class="my-0">
      <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="noAkta" class="form-label">Nomor AKTA</label>
              <input class="form-control" type="text" id="noAkta" name="noAkta"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="namaAnak" class="form-label">Nama Anak</label>
              <input class="form-control" type="text" id="namaAnak" name="namaAnak" autofocus/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="tptbirth" class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control" id="tptbirth" name="tptbirth"/>
            </div>
            <div class="mb-3 col-md-6">
              <label for="tglbirth" class="form-label">Tanggal Lahir</label> 
              <input class="form-control" type="text" id="tglbirth" name="tglbirth"/>
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
              <div class="mb-3 col-md-6">
                <label for="notes" class="form-label">Catatan</label>
                <input type="text" class="form-control" id="notes" name="notes"maxlength="6"/>
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
    </div> --}}
  </div>
</div>
@endsection
