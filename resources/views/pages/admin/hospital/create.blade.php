@extends('layouts.admin.app')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Tambah Data Rumah Sakit Rujukan</h1> 
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach        
        </ul>
    </div>
@endif

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('hospital.store')}}" method="POST" enctype="multipart/form-data">
         @csrf
            <div class="form-group">
                <label for="name" class="form-control-label">Nama</label>
                <input type="text" class="form-control" name="name" placeholder="name" 
                       value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="address" class="form-control-label">Alamat</label>
                <textarea name="address" rows="2" class="d-block w-100 form-control">{{ old('address')}}</textarea>
            </div>
            <div class="form-group">
                <label for="phone" class="form-control-label">Telp.</label>
                <textarea name="phone" rows="2" class="d-block w-100 form-control">{{ old('phone')}}</textarea>
            </div>
            <div class="form-group">
                <label for="email" class="form-control-label">E-mail</label>
                <textarea name="email" rows="2" class="d-block w-100 form-control">{{ old('email')}}</textarea>
            </div>
            <div class="form-group">
                <label for="type" class="form-control-label">Tipe</label>
                <textarea name="type" rows="2" class="d-block w-100 form-control">{{ old('type')}}</textarea>
            </div>
           <button type="submit" class="btn btn-primary btn-block">Save</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection
