@extends('layouts/contentNavbarLayout')

@section('title')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User/</span>Edit Account User</h4>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edit User</h5> <small class="text-muted float-end"></small>
      </div>
      <div class="card-body">
        <form action="{{ route('user-management.update', ['id'=>$user->id]) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Full Name</label>
            <input type="text"  name="name" class="form-control" id="basic-default-fullname" value="{{$user->name}}" placeholder="Nadia Indah" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-nik">NIK</label>
            <input type="text" name="nik" class="form-control" id="basic-default-nik" value="{{$user->nik}}" placeholder="2423131312321232" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-email">Email</label>
            <div class="input-group input-group-merge">
              <input type="text" name="email" id="basic-default-email" class="form-control" value="{{$user->nik}}" placeholder="user@gmail.com" aria-describedby="basic-default-email2" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-password">Password</label>
            <input type="text" name="password" id="basic-default-password" class="form-control password-mask" placeholder="*********" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-role">Role</label>
            <select name="roles" class="form-control" id="">
              @foreach ($roles as $item)
                    @if ($item->id == $user->roles[0]->id)
                        <option value="{{$item->id}}" selected>{{$item->name}}</option>
                    @else
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
