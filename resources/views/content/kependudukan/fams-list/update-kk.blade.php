@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User/</span>Edit KK</h4>

<!-- edit kk -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edit KK</h5> <small class="text-muted float-end"></small>
      </div>
      <div class="card-body">
        <form> 
          <div class="mb-3">
            <label class="form-label" for="basic-default-id">ID</label>
            <input type="text" class="form-control" id="basic-default-id" placeholder="1" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-noKK">No KK</label>
            <input type="text" class="form-control" id="basic-default-noKK" placeholder="2423131312321232" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Full Name</label>
            <input type="text" class="form-control" id="basic-default-fullname" placeholder="Nadia Indah" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-address">Alamat</label>
            <div class="input-group input-group-merge">
              <input type="text" id="basic-default-address" class="form-control" placeholder="Surabaya No 31 B" aria-describedby="basic-default-email2" />
            </div>
          </div>
          <div class="mb-3">
            <label for="html5-tgl-input" class="col-md-2 col-form-label">Tanggal Pendaftaran KK</label>
            <div class="col-md-12">
              <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-status">Status</label>
            <input type="text" id="basic-default-status" class="form-control" placeholder="aktif"/>
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
