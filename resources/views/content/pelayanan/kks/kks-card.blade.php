@extends('layouts/contentNavbarLayout')

@section('title')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Pelayanan /</span> Kartu Keluarga Sejahtera 
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> KKS</a></li>
      {{-- <li class="nav-item"><a class="nav-link" href="{{url('pelayanan/kis/kis-card')}}"><i class="bx bx-bell me-1"></i> KIS</a></li> --}}
      <li class="nav-item"><a class="nav-link" href="{{url('pelayanan/kip/kip-card')}}"><i class="bx bx-link-alt me-1"></i> KIP</a></li>
    </ul>
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5>Daftar Kartu Keluarga Sejahtera</h5>
        <a href="{{ url('pelayanan/kks/create-kks') }}" type="button" class="btn btn-outline-primary">+&nbsp; Tambah Data</a>
      </div>
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>NO KKS</th>
              <th>Nama Kepala Keluarga</th>
              <th>Alamat</th>
              <th>Jumlah Anggota Keluarga</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <?php
              $no = 1;
            ?>
            @foreach ($kks as $item)
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $no++ }}</strong></td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->nama }}</td>
              <td>Active</td>
              <td>
                <a href="" class="btn btn-outline-success btn-sm btn-rounded"><i class='bx bx-show'></i></a>
                <a href="" class="btn btn-outline-info btn-sm btn-rounded"><i class='bx bx-message-square-edit'></i></a>
                <button onclick="destroy({{}})" class="btn btn-outline-danger btn-sm"><i class='bx bx-trash-alt'></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
