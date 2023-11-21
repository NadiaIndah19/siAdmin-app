@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Kependudukan / </span> AKTA
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/death-list/death-card')}}"><i class="bx bx-user me-1"></i> Kematian</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('kependudukan/birth-list/birth-card')}}"><i class="bx bx-bell me-1"></i> Kelahiran</a></li>
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-link-alt me-1"></i> Pernikahan</a></li>
    </ul>
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5>Daftar AKTA Pernikahan</h5>
        <a href="{{ url('kependudukan/marriage-list/create-marriage-card') }}" type="button" class="btn btn-outline-primary">+&nbsp; Tambah Data</a>
      </div>
        <div class="table-responsive text-nowrap">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama Pria</th>
                <th>Nama Wanita</th>
                <th>Nama Wali Nikah</th>
                <th>Tempat Nikah</th>
                <th>Date Upload</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
<<<<<<< HEAD
              <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                <td>Ryan Indrawan</td>
                <td>Falenti Bita</td>
                <td>Susilo</td>
                <td>Tuban</td>
                <td>12-08-2023</td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ url('kependudukan/marriage-list/view-marriage-card') }}"><i class="bx bx-edit-alt me-1"></i> View</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                <td>Ryan Indrawan</td>
                <td>Falenti Bita</td>
                <td>Susilo</td>
                <td>Tuban</td>
                <td>12-08-2023</td>
                <td>
                  <a href="" class="btn btn-outline-success btn-sm btn-rounded"><i class='bx bx-show'></i></a>
                  <a href="" class="btn btn-outline-info btn-sm btn-rounded"><i class='bx bx-message-square-edit'></i></a>
                  <button onclick="destroy({{}})"  class="btn btn-outline-danger btn-sm"><i class='bx bx-trash-alt'></i></button>
                </td>
                {{-- <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ url('kependudukan/marriage-list/view-marriage-card') }}"><i class="bx bx-edit-alt me-1"></i> View</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td> --}}
              </tr>
              <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                <td>Ryan Indrawan</td>
                <td>Falenti Bita</td>
                <td>Susilo</td>
                <td>Tuban</td>
                <td>12-08-2023</td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ url('kependudukan/marriage-list/view-marriage-card') }}"><i class="bx bx-edit-alt me-1"></i> View</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                    </div>
                  </div>
                </td>
              </tr>
=======
              @php
                  $no=1;
              @endphp
              @foreach ($pernikahan as $item)
                <tr>
                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $no++ }}</strong></td>
                  <td>{{$item->nama_laki}}</td>
                  <td>{{$item->nama_pr}}</td>
                  <td>{{$item->nama_ayah_pr}}</td>
                  <td>{{$item->tempat_lahir_pr}}</td>
                  <td>{{\Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}</td>
                  <td>
                    <a href="{{route('pernikahan.edit', ['id'=>$item->id]) }}"  class="btn btn-info btn-sm mr-2"><i class='bx bx-message-square-edit text-white'></i></a>
                    <button onclick="destroy({{$item->id}})"  class="btn btn-danger btn-sm"><i class='bx bx-trash-alt'></i></button>
                  </td>
                </tr>
              @endforeach                          
>>>>>>> 3251cd169a61c9de4047472f00a356e959d3d892
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>
@endsection

@section('js')
    <script>
        function destroy(id) {          
          swal({
            title: "Are you sure?",            
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              $.ajax({
              type: 'POST',
              url: "{{ route('pernikahan.destroy') }}",
              dataType: 'html',
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              data: {
                  "id": id,
                  "_token": "{{ csrf_token() }}"
              },

              success: function(data) {                 
                  swal("Good job!", "Data Berhasil ditambahkan!!", "success");
                  location.reload();    
              },
              error: function(data) {
                  console.log(data);
              }
           });
            } 
          });
        }
    </script>
@endsection


