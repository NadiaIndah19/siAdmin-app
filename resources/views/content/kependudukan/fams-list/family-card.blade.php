@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Kependudukan /</span> Kartu Keluarga
</h4>

<!-- card Table -->
<div class="card">
  <div class="card-header d-flex align-items-center justify-content-between">
    <h5>Daftar KK Terlampir</h5>
    <a href="{{ url('kependudukan/fams-list/create-kk') }}" type="button" class="btn btn-outline-primary">+&nbsp; Tambah Data</a>
  </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nomor KK</th>
          <th>Nama Kepala Keluarga</th>
          <th>TTL</th>
          <th>Jenis Kelamin</th>
          <th>Agama</th>
          <th>Pendidikan</th>
          <th>Jenis Pekerjaan</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @php
        $no=1;
        @endphp
        @foreach ($kk as $item)
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$no++}}</strong></td>
          <td>{{$item->nik}}</td>
          <td>{{$item->nama}}</td>
          <td>{{$item->ttl}}</td>
          <td>{{$item->agama}}</td>
          <td>{{$item->jenis_kelamin}}</td>
          <td>{{$item->gol_darah}}</td>
          <td>{{$item->pendidikan}}</td>
          <td>{{$item->pekerjaan}}</td>
          <td>{{$item->status_hub_kel}}</td>
          <td>{{$item->status_perkawinan}}</td>
          <td>{{\Carbon\Carbon::parse($item->tgl_perkawinan)->format('m F Y')}}</td>
          <td>{{$item->kewarganegaraan}}</td>
          <td>{{$item->nama_ayah}}</td>
          <td>{{$item->nama_ibu}}</td>
          <td>
            <a href="{{ route('ktp.edit', ['id'=>$item->id]) }}" class="btn btn-outline-info btn-sm btn-rounded"><i class='bx bx-message-square-edit'></i></a>
            <button onclick="destroy({{$item->id}})"  class="btn btn-outline-danger btn-sm"><i class='bx bx-trash-alt'></i></button>
          </td>
        </tr> 
        @endforeach
   
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->

@endsection
